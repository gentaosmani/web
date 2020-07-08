<?php
  require './controller/UserController.php';

  $user = new UserController;

  if(isset($_POST['submit'])){
      $user->store($_POST);
  }

  ?>



  <!--<?php //foreach($pacienti as $user): ?>
    <p><?php// echo $user['name']; ?></p>
    <p><?php //echo $user['email']; ?></p>
    <?php// endforeach; ?>-->
<!--Genta Osmani-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/dizajni.css">
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
<link rel="shortcut icon" href="gallery/health-clipart-png-8.png">
</head>
<body>
  <div class="first-cont">
<header>
<div class="topnav" id="myTopnav">
  <a href="#"><img src="css/gallery/health-clipart-png-8.png" width="185px" style="margin-top: -10px; margin-right: 50px"></a>
  <!--<a href="#" style=" font-weight: bold; padding-bottom: 25px">E-Health system</a>-->
  <a href="#" class="active">Home</a>
  <a href="Publications.html">Publications</a>
  <a href="aboutUs.html">About</a>
  <a href="contactUs.html">Contact</a>
  <a href="loginForm.php" class="login-dissapear">Log in</a>

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
<h1 style="font-size:3.8vw; color: white; margin-top: 10vw; margin-left:70px">Living the easy way</h1>
<p style=" color: white; margin-left:70px">eHealth is the use of information and communication technologies (ICT) for health. The eHealth unit works with partners at the global, regional and country level to promote and strengthen the use of ICT in health development, from applications in the field to global governance.</p>
  <a href="#permb" class="slide">SIGN UP</a>
  <script>history.scrollRestoration = "manual"</script>
</div>
<div style="width: 50%">
  <img src="https://s3-eu-west-1.amazonaws.com/cdn.nottinghamdriving.com/live/desktop/images/framework/heart-rate.gif" style="font-size:3.8vw; color: white; margin-top: 17vw; margin-left:70px; width: 170px; height: auto;">
</div>
</div>

</div>

<br><br>

 <div class="container flex-direction" id="permb">
      <div class="div1">
      <script type="text/javascript">
        function validate(){
          if(document.myForm.name.value == ""){
            alert("Please fill the Name and Surname field");
            document.myForm.name.focus();
            return false;
          }
          if(document.myForm.priority.value == ""){
            alert("Please fill the Priority field");
            document.myForm.priority.focus();
            return false;
          }
          if(document.myForm.priority.value != "A" && document.myForm.priority.value != "B" && document.myForm.priority.value != "C"){
            alert("Your priority should be filled with A or B or C");
            document.myForm.priority.focus();
            return false;
          }
          if(document.myForm.age.value == ""){
            alert("Please fill the age field");
            document.myForm.age.focus();
            return false;
          }
          if(document.myForm.diseases.value == ""){
            alert("Please fill the diseases field");
            document.myForm.diseases.focus();
            return false;
          }
          if(isNaN (document.myForm.age.value)){
            alert("Please fill the age field with only numbers");
            document.myForm.age.focus();
            return false;
          }
          if((document.myForm.age.value.length) > 3){
            alert("The age field should contain maximum 3 numbers");
            document.myForm.age.focus();
            return false;
          }
          if(document.myForm.email.value == ""){
            alert("Please fill the Email field");
            document.myForm.email.focus();
            return false;
          }
          if(document.myForm.password.value == "" ){
            alert("Please fill the password field");
            document.myForm.password.focus();
            return false;
          }
          if(document.myForm.password.value.length < 8 ){
            alert("Your password should contain at least 8 characters");
            document.myForm.password.focus();
            return false;
          }
          if(document.myForm.bloodgroup.value == "" ){
            alert("Please fill the bloodgroup field");
            document.myForm.bloodgroup.focus();
            return false;
          }
          
          if(document.myForm.allergies.value == "" ){
            alert("Please fill the allergies field");
            document.myForm.allergies.focus();
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
         <form name="myForm" method="POST" style="max-width:450px; margin-left: 84px; margin-top: 50px;"> 
          
            <div class="inputt-icons"> 
                <i class="fa fa-user icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text" 
                       placeholder="Name and Surname"
                       name="name"
                       id = ""> 
            </div> 

             <div class="inputt-icons"> 
                <i class="fa fa-key icon"> 
              </i> 
                <input style="border-radius: 35px"  class="inputt-field" 
                       placeholder="Priority:A,B,C"
                       type="text"
                       name="priority"> 
            </div> 
  
  
            <div class="inputt-icons"> 
                <i class="fa fa-flag icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       placeholder="Age"
                       name="age"> 
            </div> 

                       <div class="inputt-icons"> 
                <i class="fa fa-phone icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       placeholder="Diseases"
                       name="diseases"> 
            
            </div> 

             <div class="inputt-icons"> 
                <i class="fa fa-envelope icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       placeholder="Email"
                       name="email"> 
            </div> 


             <div class="inputt-icons"> 
                <i class="fa fa-lock icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="password"
                       placeholder="Password"
                       name="password"> 
            </div>

           <div class="inputt-icons"> 
                <i class="fa fa-lock icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       placeholder="Blood group"
                       name="bloodgroup"> 
            </div>

          <div class="inputt-icons"> 
                <i class="fa fa-lock icon"> 
              </i> 
                <input style="border-radius: 35px" class="inputt-field" 
                       type="text"
                       placeholder="Allergies"
                       name="allergies"> 
            </div>
            <br>
            <div> 
               <p style="display: inline; color: white; font-weight: bold;"> Admin: </p>
                <input type="checkbox" name="is_admin">
            </div> 
            <!--<div class="inputt-icons"> 
                Role:
                <input type="checkbox" name="is_admin">Is Admin?
            </div> -->

          <br>
          
        <div id="bodyy">
    <div class="buttons">

      <button type="submit" name="submit" class="slidee">Register</button>

      </div>
    </div>
        </form>   
      </div>
      <div class="div2">
        <p style="text-align: center; margin-top: 40px; color:lightblue; font-weight:bolder; font-size: 45px; ">Welcome!</p>
      <p style="text-align: center; margin-top: -38px; color:lightblue; font-size: 20px; ">Register to use E-Health services</p>

      <img src="gallery/reg.jpg" class= "imgage-div2" width="500px" height="500px" style="margin-left: 60px">
      <div style="color:lightblue; text-align: center; margin-top: -39.5px">...or if you already have an account</div>  <br>
      <div id="bodyyy">
    <div class="buttons">
      <a href="loginForm.php" class="slidee">Login</a>
      </div>
    </div>
    </div>
  </div>

<!--FOOTER-->
<?php include 'includes/footer.php'; ?>
 
</body>



</html>