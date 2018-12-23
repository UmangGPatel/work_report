<?php
session_start();
if(isset($_SESSION['user_id'])){
 header('location:home.php');
}

?>
<!doctype html>

<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">

<head>

  <meta charset="utf-8">

  <title>Weekly Progress Report - Home</title>

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
  <link rel="stylesheet" media="screen" href="assets/css/style.css">
  <!-- html5shiv aka html5 shim. Supporting HTML5 and CSS for IE browsers less than IE9. -->
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="icon" href="https://picsum.photos/350/100/?random" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
</head>
<body>
  <?php
  // define variables and set to empty values
  //$name = $pass="";
  $con=mysqli_connect('localhost','root','','report_db');
  if($con)
  {
    
  }
  else{
    die("not conneted");
  }
  
  if (isset($_POST['submit'] )) {
    
   $uname = $_POST['username'];
    $pass = $_POST['password'];
    $qry= " SELECT *FROM login_table where Username='$uname' and Password='$pass'  ";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row < 1){
     ?>
      <script>
       alert('username or password is not matched');
     </script>
    <?php
   }
   else {
     $data=mysqli_fetch_assoc($run);
     $id=$data['ID'];
     session_start();
     $_SESSION['user_id']=$id;
     header('location:home.php');
    }
    
  }
  ?>
  <div class="container">
    <!-- header starts -->
    <header class="wrapper">
         <h1>weekly progress report</h1>
    </header>
    <!-- header ends -->
    <!-- main starts -->
    <main>
          <div class="wrapper">
                  
                <div class="login-page">
                      <div class="form">
                          <form class="login-form" action="index.php" method="post">
                                <input type="text" placeholder="username" name="username" />
                                <input type="password" placeholder="password" name="password" />
                                <button type="submit" name="submit">login</button>
                          </form>
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