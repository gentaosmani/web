
  <?php
    require './controller/UserController.php';

    $user = new UserController;
    $pacienti = $user->all();

?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/MyMedicalDataDesign.css">
</head>
<body>
	<div style="display: flex; justify-content: center;">
	<a href="AfterLogin.html" class="slidee">Back</a>
	</div>
	<br>
	<br>
 <div class="container flex-direction">
  <?php if(isset($_SESSION['name'])): ?>
        <h2>Welcome, <a href="#"><?php echo $_SESSION['name']; ?></a></h2>
        <li><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
    <?php endif; ?>
      <div class="div1 div1-content" style="width: 100%; display: inline-flex; background-color: rgb(36, 218, 172,0.6);">
      <img src="https://cdn3.iconfinder.com/data/icons/avatars-flat/33/woman_9-512.png" width="138" height="128" >
     
     	<div  style="display: block; margin-top: -40px">
       <div class="d1v-con-content" style="text-align: center; font-size: 50px; color: white; font-weight: bolder">
        	<p><?php echo $user['name'];?></p>
        </div>
        <div style="font-size:17px; color: white; font-weight: bolder ; margin-top: -50px">
        	<p>My medical data</p>
        </div>
        </div>
      <!--<div style="margin-top: 22px;margin-left: 370px;">
		&nbsp;&nbsp;&nbsp;&nbsp;Greta Thunberg
		<br>

		<div style="font-size: 17px; margin-left: 80px;">
		ID: 1165165454632
		  </div>-->
		</div>
      </div>

      

  </div>
  <div class="container flex-direction">
      <div class="div1">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Priority:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $user['priority'];?></p>
        </div>
      </div>
      <div class="div2">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Age:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $user['age'];?></p>
        </div>
      </div>

  </div>
  <div class="container flex-direction">
      <div class="div1">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Diseases:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p>Pneunomia</p>
        </div>
      </div>
      <div class="div2">
        <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Blood Group:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $user['bloodgroup'];?></p>
        </div>
      </div>

  </div>
  <div class="container flex-direction">
      <div class="div1" style="width: 100%">
          <div style="color: white;">
        	&nbsp;&nbsp;&nbsp;&nbsp;Allergies/Additional info:
        </div>
        <div style="text-align: center; font-size: 40px; color: white; font-weight: bolder">
        	<p><?php echo $user['allergies'];?></p>
        </div>
      </div>
     

  </div>


</body>
</html>