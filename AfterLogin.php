<?php 
session_start();
?>

<?php
if(isset($_SESSION['name'])):?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/loginFormDesign.css">
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title style="margin-left: 100px"> 
  E-Health
</title>
<link rel="shortcut icon" href="css/gallery/health-clipart-png-8.png">
</head>
<body>
  <div class="first-cont">
<header>
<div class="topnav" id="myTopnav">
  <a href="#"><img class="responsive" src="gallery/health-clipart-png-8.png" width="185px" style="margin-top: -10px; margin-right: 50px"></a>

  <!--<a href="#" style=" font-weight: bold; padding-bottom: 25px">E-Health system</a>-->
  <a href="#" class="active">Home</a>
  <a href="MyMedicalData.php">My medical data</a>
  <a href="logout.php">Log out</a>
  <a href="contactUs.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</header>

<div style="display: inline-flex;">
  
<div style="width: 50%">
<h1 style="font-size:3.8vw; color: white; margin-top: 10vw; margin-left:70px">WELCOME, <a href="#"><?php echo $_SESSION['name'] ?></a></h1>
<p style=" color: white; margin-left:70px">eHealth is the use of information and communication technologies (ICT) for health. The eHealth unit works with partners at the global, regional and country level to promote and strengthen the use of ICT in health development, from applications in the field to global governance.</p>
  <a href="#video" class="slide2">LEARN MORE</a>
  <script>history.scrollRestoration = "manual"</script>
</div>
<div style="width: 50%">
  <img src="https://s3-eu-west-1.amazonaws.com/cdn.nottinghamdriving.com/live/desktop/images/framework/heart-rate.gif" style="font-size:3.8vw; color: white; margin-top: 17vw; margin-left:70px; width: 180px; height: auto;">
</div>
</div>


</div>
<div id= "video" style="display: block; width: 100%;border:1px solid transparent; margin-top: 120px; height: 620px">
  <p style="text-align: center; color: white; font-weight: bold;margin-top: 50px"> To see how E-Health system works, please watch the video below. For any further questions you can contact us by <a href="ContactUs.php">clicking here</a></p><br>

<div style="display: flex; justify-content:center;">
          <video  class="responsive" width="800" height="450" controls style="border:2px solid #24daac;border-radius: 20px"> 
          <source src="gallery/video.mp4" type="video/mp4" >
          </video>
      </div>
</div>

</div>




<!--FOOTER-->

<?php include 'includes/footer.php'; ?>

 
</body>



</html>