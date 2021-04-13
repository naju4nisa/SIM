#All Libraries
import gspread as gs
import pandas as pd
import streamlit as st
import numpy as np
from google.oauth2.service_account import Credentials
from pprint import pprint
import random
import plotly.express as px

#Google API Connection and Authorization
scopes = [
    'https://www.googleapis.com/auth/spreadsheets',
    'https://www.googleapis.com/auth/drive'
]

credentials = Credentials.from_service_account_file(
    'service1.json',
    scopes=scopes
)

gc = gs.authorize(credentials)

#Fetching Google Sheet and data
sh = gc.open("simcopy")
ws = sh.get_worksheet(2)
data=ws.get_all_records()

#Sheet Data to Pandas Dataframe
df=pd.DataFrame(data,columns=['Sources','Types','Positive Percentage','Negative Percentage','Description For Ranking'])

#Row Index of empty fields
val = df.loc[df['Types']==""].index

#Splitting of Dataframes to dictionary
idx=np.cumsum(np.in1d(np.arange(len(df.index)),val))
d=dict(tuple(df.groupby(idx)))

#SIM Computation
g=[]
c=[]
dft = pd.DataFrame([],columns=['Sources','Types','Positive Percentage'])
#Dictionary data to Dataframe,list and dictionary
for i in d:
    y=d[i]
    ydf=pd.DataFrame(y,columns=['Sources','Types','Positive Percentage'])
    sources = ydf['Sources'].tolist()
    s =[p for p in sources if p]
    slabel = ' '.join([str(e) for e in s]) #List comprehension for streamlit Label
    values  = ydf['Types'].tolist()
    v=[q for q in values if q]
    options = ydf['Positive Percentage'].tolist()
    o=[r for r in options if r]
    dic = dict(zip(o,v))
    
    sim = st.sidebar.multiselect(slabel, o, format_func=lambda x : dic[x])  #Streamlit Multiselect
    
    #Streamlit Table Data
    aa=ydf['Positive Percentage'].isin(sim).values
    aaa=ydf[aa]
    dft = dft.append(aaa)
    
    #Data for Graph and Subtotal
    b= sum(sim)
    c.append(b)
    g.append(sim)
    vals=g

#Streamlit Table
tt=dft['Types'].tolist()
pt=dft['Positive Percentage'].tolist()
dftable=pd.DataFrame(list(zip(tt,pt)),columns=['Selected Sources','Positive Percentage'])
st.table(dftable)



#Streamlit Graph
l=[item for z in vals for item in z]
m = df['Positive Percentage'].tolist()
n=[k for k in m if k]

gdf = pd.DataFrame(dict(
    Selection=np.concatenate((["Our Ranking"]*len(n), ["Your Selection"]*len(l))), 
    Resources  =np.concatenate((n,l))))

fig=px.histogram(gdf,x="Resources",color="Selection",barmode="overlay",title='Resource Distribution',hover_data=gdf.columns,marginal="box")
st.plotly_chart(fig)


#Subtotal    
result = sum(c)
st.write("Sub Total:",result)  