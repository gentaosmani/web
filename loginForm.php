<!--<?php/*
 require './controller/AuthController.php';

  $user = new AuthController;

  if(isset($_POST['submit'])){
      $user->login($_POST);
  }

  */?>-->

<?php
    require './controller/AuthController.php';

    $user = new AuthController;

    if(isset($_POST['submit'])) {
        $user->login($_POST);
     header('Location: ./myMedicalData.php');
    }
?>

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

</head>
<body>
  <div class="first-cont">
<header>
<div class="topnav" id="myTopnav">
  <a href="#"><img src="css/gallery/health-clipart-png-8.png" width="185px" style="margin-top: -10px; margin-right: 50px"></a>

  <!--<a href="#" style=" font-weight: bold; padding-bottom: 25px">E-Health system</a>-->
  <a href="#" class="active">Home</a>
  <a href="Publications.php">Publications</a>
  <a href="aboutUs.php">About</a>
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
<div class="container flex-direction">
  <div class="div1">
  <img class="image" src="gallery/userrr.png" width="130px" height="130px" style="">
  </div>
  <div class="div2">
     <script type="text/javascript">
        function validate(){
          if(document.myForm.email.value == ""){
            alert("Please fill the Email field");
            document.myForm.email.focus();
            return false;
          } 
          if(document.myForm.password.value == ""){
            alert("Please fill the Password field");
            document.myForm.password.focus();
            return false;
          } 

         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
          {
            return (true);
          } else{
            alert("You have entered an invalid email address!")
            return (false); }



        }
        </script>
       

   <form action="" method="POST" name="myForm" > 
    <!--<form action="loginValidation.php" onsubmit="return(validate())" method="POST" name="myForm" > -->
            
            <div class="inputt-icons"> 
                <i class="fa fa-envelope icon"> 
              </i> 
                <input class="inputt-field" 
                       type="text" 
                       placeholder="Email"
                       name="email"> 
            </div> 


             <div class="inputt-icons"> 
                <i class="fa fa-lock icon"> 
              </i> 
                <input class="inputt-field" 
                       type="password" 
                       placeholder="Password"
                       name="password"> 
            </div>

           <!-- <div class="remember" >
            <br>
            <label class="containerr">Remember me
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
    </div>-->
    <br>
    <input  class="slide" type="submit" value="submit" name="submit">
  </form>
  <br>
  
 </div>
</div>
</div>

<!--FOOTER-->
<?php include 'includes/footer.php'; ?>
 
</body>
</html>