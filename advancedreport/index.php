<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIM</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Fancy Sliding Form with jQuery" />
        <meta name="keywords" content="jquery, form, sliding, usability, css3, validation, javascript"/>
        <!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/> -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="sliding.form.js"></script>
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	

<!-- ....................................................................................... -->
<!-- slider Head -->


    <!-- SITE TITLE -->
    
    <!-- =========================
       Meta Information
   

    <!-- =========================
       favicon and app touch icon
    ============================== -->
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="css1/bootstrap.css">
    <link rel="stylesheet" href="css1/animate.min.css">

    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css1/font-awesome.css">
    <link rel="stylesheet" href="css1/typography.css">

    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/nivo-lightbox.css">
    <link rel="stylesheet" href="css1/nivo-lightbox-default.css">
    <link rel="stylesheet" href="css1/jquery.circliful.css">

    <!-- ***** Custom Stylesheet ***** -->
    <link rel="stylesheet" href="css1/main.css">

    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="css1/responsive.css">

    <!-- Header scripts -->
    <script src="js1/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js1/queryloader2.min.js"></script>

    <!-- =========================
       Preloader
    ============================== -->
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#e74c3c",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
    </script>


<!-- .................................................................................................. -->
</head>
<body>
    
<!-- ............................................................................................................ -->
<!-- Slider body -->
	
 <!-- *****  hamburger icon ***** -->
  


 <!-- =========================
	Header
 ============================== -->
 <header id="header">
     
     
      <?php 
   
if (isset($_POST['submit']))
{
    
   
    $es=$_POST['es'];
    $ws=$_POST['ws'];
    $fs=$_POST['fs'];
    $tc=$_POST['tc'];
    $hc=$_POST['hc'];
    $am=$_POST['am'];
    $lc=$_POST['lc'];
    $ex=$_POST['ex'];
    $cf=$_POST['cf'];
    $av=$_POST['av'];
    
    $esp=  array_sum($es)/count($es);
    $wsp=  array_sum($ws)/count($ws);
    $fsp=  array_sum($fs)/count($fs);
    $tcp=  array_sum($tc)/count($tc);
    $hcp=  array_sum($hc)/count($hc);
    $amp=  array_sum($am)/count($am);
    $lcp=  array_sum($lc)/count($lc);
    $exp=  array_sum($ex)/count($ex);
    $cfp=  array_sum($cf)/count($cf);
    $avp=  array_sum($av)/count($av);
    $total=($esp+$wsp+$fsp+$tcp+$hcp+$amp+$lcp+$exp+$cfp+$avp)/10;
    
    
    

?>

<!-- ..............................................................................................................	 -->
	
	<div class="" >
		
		<div class="">
                    <p style="text-align: center;color: cadetblue;font-size:30px;"><b>SIM Report</b></p>
                    
                   
			<div class="col-xs-6 col-md-3" >
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">Energy Sources</p>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo round($esp);?>" ><span class="percent"><?php echo round($esp);?>%</span></div>
					</div>
				</div>
			</div>
                   
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px;text-align: center ">Water Sources</p>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo round($wsp);?>" ><span class="percent"><?php echo round($wsp);?>%</span></div>
					</div>
				</div>
			</div>
                   
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">Food Sources</p>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo round($fsp);?>" ><span class="percent"><?php echo round($fsp);?>%</span></div>
					</div>
				</div>
			</div>
                    
                   
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">Temperature Control</p>
						<div class="easypiechart" id="easypiechart-yellow" data-percent="<?php echo round($tcp);?>" ><span class="percent"><?php echo round($tcp);?>%</span></div>
					</div>
				</div>
			</div>
                    <br>
                   

			<div class="col-xs-6 col-md-3">
				
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">House Construction</p>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?php echo round($hcp);?>" ><span class="percent"><?php echo round($hcp);?>%</span></div>
					</div>
				</div>
			</div>
                   

			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">Amenities Provided</p>
						<div class="easypiechart" id="easypiechart-pink" data-percent="<?php echo round($amp);?>" ><span class="percent"><?php echo round($amp);?>%</span></div>
					</div>
				</div>
			</div>
                   

			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">Local Community Engagement Programme </p>
						<div class="easypiechart" id="easypiechart-green" data-percent="<?php echo round($lcp);?>" ><span class="percent"><?php echo round($lcp);?>%</span></div>
					</div>
				</div>
			</div> 
                        
                          <div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
                                   
					<div class="panel-body easypiechart-panel">
                                             <p style="font-size:12px; text-align: center">Expense Per User</p>
						<div class="easypiechart" id="easypiechart-violet" data-percent="<?php echo round($total);?>" ><span class="percent"><?php echo round($total);?>%</span></div>
					</div>
				</div>
			</div>
                        
                         
                         <div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">Cash Flow to Community</p>
						<div class="easypiechart" id="easypiechart-navy" data-percent="<?php echo round($total);?>" ><span class="percent"><?php echo round($total);?>%</span></div>
					</div>
				</div>
			</div>
                    
                        <div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
                                    
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:12px; text-align: center">Average Income Per User</p>
						<div class="easypiechart" id="easypiechart-cyan" data-percent="<?php echo round($avp);?>" ><span class="percent"><?php echo round($avp);?>%</span></div>
					</div>
				</div>
			</div>
                       
                        <div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
                                   
					<div class="panel-body easypiechart-panel">
                                            <p style="font-size:15px; text-align: center;color: "><b>Total Average Percentage</b></p>
						<div class="easypiechart" id="easypiechart-magenta" data-percent="<?php echo round($total);?>""><span class="percent"><?php echo round($total);?>%</span></div>
					</div>
				</div>
			</div>
                    
                    
                   

			
                    

			
                    

			
                    
            
                   
                   
			
		</div><!--/.row-->
		
	</div>	<!--/.main-->
	  <?php
}
?>
     
     
<form method="POST" name="form" >
	 <div id="myCarousel" class="carousel slide">
		 <!-- Indicators -->
		 <ol class="carousel-indicators">
			 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			 <li data-target="#myCarousel" data-slide-to="1"></li>
			 <li data-target="#myCarousel" data-slide-to="2"></li>
			 <li data-target="#myCarousel" data-slide-to="3"></li>
			 <li data-target="#myCarousel" data-slide-to="4"></li>
                         <li data-target="#myCarousel" data-slide-to="5"></li>
			 <li data-target="#myCarousel" data-slide-to="6"></li>
			 <li data-target="#myCarousel" data-slide-to="7"></li>
                         <li data-target="#myCarousel" data-slide-to="8"></li>
			 <li data-target="#myCarousel" data-slide-to="9"></li>
			
		 </ol>

		 <!-- Wrapper for Slides -->
		 <div class="carousel-inner" style="height: 500px;">


			 <!-- =========================
				Header item 1
			 ============================== -->
			 
			 
<!-- .................................................................................... -->

<div class="item active">

 <!-- Set the first background image using inline CSS below. -->
 <div class="fill" style="background-image:url('img/slider/1.jpg');">
 </div>
 <div class="carousel-caption">
	 <h1 class="light mab-none">Energy Sources<strong class="bold-text"></strong></h1>
         <br>
	 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
	 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
	 <div class="call-button">
		 <div class="row">
			 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
                             <a  class="" style="color: crimson;font-style: italic;"><b><select name="es[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required>
					 <option value="70">Solar Panel</option>
					 <option value="63">Firewood</option>
					 <option value="57">Solar Geyser</option>
					 <option value="45">Electric connection</option>
					 <option value="35">Biogas</option>
                                         
					 <option value="22">Generator</option>
				   </select></b></a>
			 </div>
			 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
				 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
			 </div> -->
			 <div class="clearfix"></div>
		 </div>
	 </div>
 </div>
 <div class="overlay"></div>
</div>





			 <!-- =========================
				Header item 2
			 ============================== -->
			 <div class="item">

				 <!-- Set the second background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/2.jpeg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Water Sources<strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><b><select name="ws[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required>
									 <option value="70">Well-Pond- Stream</option>
									 <option value="59">Rain Water Harvesting</option>
									 <option value="48">Borewell</option>
									 <option value="37">Recycling</option>
									 <option value="26">Tanker</option>
									 
								   </select></b></a>
							 </div>
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>

			 <!-- =========================
				Header item 3
			 ============================== -->
			 <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/3.jpg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Food Sources <strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><b><select name="fs[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required>
									 <option value="67">Locally Sourced</option>
									 <option value="58">Food Forest</option>
									 <option value="53">Kitchen Garden</option>
 
									 <option value="45">Packed Food</option>
									 <option value="29">Marsh Area Cultivation</option>
									
								   </select></b></a>
							 </div>

							 
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>

			 <!-- =========================
				Header item 4
			 ============================== -->
			 <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/4.jpeg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Temparature Control <strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class=""  style="color: crimson;font-style: italic;"><b><select name="tc[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required>
									 <option value="72">Firewood</option>
									 <option value="64">Natural Gas</option>
									 <option value="47">Propane</option>
									 <option value="37">Electric</option>
									 <option value="35">cooling tubes with whirlybirds</option>
									 <option value="21">Fan</option>
									 <option value="9">AC</option>
								   </select></b></a>
							 </div>
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>

			 <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/5.jpg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">House Construction<strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class=""  style="color: crimson;font-style: italic;"><b><select name="hc[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required>
									 <option value="70">Cement</option>
									 <option value="60">Inclined Roof for Solar</option>
									 <option value="55">Paint</option>
									 <option value="38">Vegetation in Compound</option>
									 <option value="34">Timber</option>
								   
								   </select></b></a>
							 </div>
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>

			 


			 <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/6.jpeg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Amenities Provided <strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><b><select name="am[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required="required">
									 <option value="68">Errand Boy</option>
									 <option value="63">Locally Sourced Food</option>
									 <option value="48">Guide Service</option>
									 <option value="35">Trekking</option>
									 <option value="19">Nature Pool</option>
									
								   </select></b></a>
							 </div>
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>
			 

			 <!-- =========================
				Header item 5
			 ============================== -->
			 <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/7.jpg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Local Community Engagement Programmes<strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><b><select name="lc[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required >
									 <option value="65">Locally Sourced Food</option>
									 <option value="56">Errand Boy</option>
									 <option value="49">Maid Service</option>
									 <option value="36">Cultural event Hosting</option>
									
								   </select></b></a>
							 </div>
							 
                                                         
                                                            
                                                        



							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>
                         
                         
                         <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/money.jpg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Expense Per User<strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><b><select name="ex[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required="required">
									<option value="70">3000-4000</option>
                                                                         <option value="55">2000-3000</option>
									 <option value="45">1000-2000</option>
									 <option value="33">0-1000</option>
									 
									
								   </select></b></a>
							 </div>
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>
                         
                         <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/cashflow.png');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Cash Flow To Local Community<strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><b><select name="cf[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required="required">
									 <option value="70">3000-4000</option>
                                                                         <option value="55">2000-3000</option>
									 <option value="45">1000-2000</option>
									 <option value="33">0-1000</option>
									
								   </select></b></a>
							 </div>
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>
                         
                         <div class="item">

				 <!-- Set the third background image using inline CSS below. -->
				 <div class="fill" style="background-image:url('img/slider/money.jpg');"></div>
				 <div class="carousel-caption">
					 <h1 class="light mab-none">Average Income per User<strong class="bold-text"></strong></h1>
                                         <br>
					 <!-- <h1 class="light margin-bottom-medium mat-none">And We Are <strong class="bold-text">Awesome</strong></h1>
					 <p class="light margin-bottom-medium">Stop blending in & start leaving your mark on the web.</p> -->
					 <div class="call-button">
						 <div class="row">
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><b><select name="av[]" id="cars" style="text-align: center;width: 500px;height:100px;align-self: center;background: transparent;" multiple  required="required">
									 <option value="70">3000-4000</option>
                                                                         <option value="55">2000-3000</option>
									 <option value="45">1000-2000</option>
									 <option value="33">0-1000</option>
									
								   </select></b></a>
							 </div>
                                                     <br>
							
							 <div class="" style="text-align: center;margin-left: 50px;margin-right: 100px;;">
								 <a  class="" style="color: crimson;font-style: italic;"><input type="submit" name="submit" value="Submit" style="width: 400px;height: 50px;"></a>
							 </div>
                                                         <br>
                                                     
							 <!-- <div class="col-md-4 col-sm-4 col-xs-12">
								 <a href="#about-us" class="button pull-left internal-link bold-text main-bg hvr-grow" data-rel="#about-us">About Us</a>
							 </div> -->
							 <div class="clearfix"></div>
						 </div>
					 </div>
				 </div>
				 <div class="overlay"></div>
			 </div>



		 </div> <!-- *** end wrapper *** -->

		 <!-- Carousel Controls -->
<!--		 <a class="left carousel-control hidden-xs" href="#myCarousel" data-slide="prev">
			 <span class="icon-prev icon-arrow-left"></span>
		 </a>
		 <a class="right carousel-control hidden-xs" href="#myCarousel" data-slide="next">
			 <span class="icon-next icon-arrow-right"></span>
		 </a>-->
	
	
    
    
        </div>
</form>
         
		 </header>
 


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>	
</body>
</html>
