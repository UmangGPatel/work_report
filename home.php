<?php 
session_start();
if(!isset($_SESSION['user_id'])){
 header('location:index.php');
}

?>



<!doctype html>

<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Home- Weekly Progress Report</title>

  <!-- 120 word description for SEO purposes goes here. Note: Usage of lang tag. -->
  <meta name="description" lang="en" content="">

  <!-- Keywords to help with SEO go here. Note: Usage of lang tag.  -->
  <meta name="keywords" lang="en" content="">

  <!-- View-port Basics: http://mzl.la/VYREaP -->
  <!-- This meta tag is used for mobile device to display the page without any zooming,
       so how much the device is able to fit on the screen is what's shown initially.
       Remove comments from this tag, when you want to apply media queries to the website. -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

  <!-- To adhear no-cache for Chrome -->
  <!--  <meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate" />
  <meta http-equiv="Pragma" content="no-store, no-cache" />
  <meta http-equiv="Expires" content="0" />
 -->

  <!-- Default style-sheet is for 'media' type screen (color computer display).  -->

  <link rel="stylesheet" media="screen" href="assets/css/reset_style.css">
  <link rel="stylesheet" media="screen" href="assets/css/home.css">
  <!-- html5shiv aka html5 shim. Supporting HTML5 and CSS for IE browsers less than IE9. -->
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <script src="assets/vendor/jquery.min.js"></script>
  <script src="assets/js/home.js"></script>
</head>
<body>
  <div class="container">
    <!-- header starts -->
    <header class="wrapper">
         <h1>weekly progress report</h1>
    </header>
    <!-- header ends -->
    <!-- main starts -->
    <main>
      <div class="wrapper">
	      <div class="content">
			        <button onclick="document.getElementById('submit_report').style.display='block'">Submit Report</button>
			        <button  onclick="document.getElementById('generate_report').style.display='block'">Generate Report</button>
			         <a href="logout.php"><button>logout</button></a>
	       </div>

			<div id="submit_report" class="popup">
                   <div class="popup-content">
	       					<span onclick="document.getElementById('submit_report').style.display='none'">×</span>
	        				<h2 >submit report</h2>
	    
		      				<div class="popup-input">
                      <label> Name</label>
                        <input type="text" name="name" id="sr_name">
		       						<label> Starting Date</label>
		      			    		<input type="date" name="starting_date" id="sr_start_date">
		        					<label>Ending Date</label>
		      					    <input class="" type="date" name="ending_date" id="sr_end_date">
		        					<label>Report</label>
		      					    <textarea name="message" rows="10" cols="70" id="sr_report"></textarea>
		       						<button id="save">save</button>
		      				</div>
    				</div>
 			 </div>
 			 <div id="generate_report" class="popup">
                   <div class="popup-content">
	       					<span onclick="document.getElementById('generate_report').style.display='none'">×</span>
	        				<h2>generate report</h2>
		      				<div class="popup-input">
                      <form action="generate_excle.php" method="post">
		       						<label> Starting Date</label>
		      			    		<input type="date" name="start_date" id="gr_start_date">
		        					<label>Ending Date</label>
		      					    <input class="" type="date" name="end_date" id="gr_end_date">	
                        <button type="submit" onclick="generate()">Generate</button>
                      </form>
		      				</div>
    				</div>
 			 </div>
       </div>  
    </main>
    <!-- main ends -->

    <!-- footer starts -->
    <footer>
    </footer>
    <!-- footer ends -->
  </div>
</body>

</html>