




<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/bootstrap.min.css">
    </head>
    <body>
        <div class="fluid-container wrap">
        <nav class="navbar navbar-expand-lg ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
              <div class="navbar-nav ">
                <a class="nav-item nav-link " href="../index.html">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="registerpage.php">COURSES</a>
                <a class="nav-item nav-link" href="registerpage.php">REGISTER</a>
                <a class="nav-item nav-link " href="https://nengha-john.github.io/nenghajm/">CV</a>
                <a class="nav-item nav-link " href="../index.html#contact">CONTACT</a>
              </div>
            </div>
          </nav>

          <h1><center>REGISTER</center></h1>
          <form id= "form" action="register1.php" onsubmit="validate()" method="POST" enctype="multipart/form-data">
          <!--personal info-->
          <div class="info">
            <h4><b>PERSONAL INFORMATION.</b></h4>
            <div class="grp">
              <label for="firstName">First Name:</label><br>
              <input type="text" id="firstName" name="FirstName" required style="width: 300px;color:white;"><br>
            </div>
            <div class="grp">
              <label for="middleName">Middle Name:</label><br>
              <input type="text" id="middleName" name="MiddleName" required style="width: 300px;color:white;">
            </div>
            <div class="grp">
              <label for="lastName">Last Name:</label><br>
              <input type="text" id="lastName" name="LastName" required style="width: 300px;color:white;">
            </div>
            <div class="grp">
              <label for="username">Username:</label><br>
              <input type="text" id="username" name="Username" required style="width: 300px;color:white;">
            </div>
            <div class="grp">
              <label for="Password">Password:</label><br>
              <input type="password" id="password" minlength="10" name="Password" required style="width: 300px;color:white;">
            </div>
            <div class="grp">
              <label for="cv">Upload CV:</label><br>
              <input type="file" accept="pdf" name="file" id="cv" required style="width: 300px;border: none;color:white;">
            </div>
          </div>
          
          <!--Contact-->
          <div class="info">
            <h4><b>CONTACT.</b></h4>
            <div class="grp">
              <label for="phone">Phone:</label><br>
              <input type="text" id="phone" name="Phone" required style="width: 300px;color:white;">
            </div>
            <div class="grp">
              <label for="phone2">Second Phone:</label><br>
              <input type="text" id="phone2" name="SecondPhone" required style="width: 300px;color:white;">
            </div>
            <div class="grp">
              <label for="cv">Email:</label><br>
              <input type="email" id="email" name="Email" required style="width: 300px;color:white;">
            </div>
          </div>

          <!--Social media-->
          <div class="info">
            <h4><b>SOCIAL MEDIA.</b></h4>
            <div class="grp">
              <label for="fb-username"><img src="../assets/icons/Icon awesome-facebook.png" class="icon">Username:</label><br>
              <input type="text" id="fb-username" name="FacebookUsername" required style="width: 300px;">
            </div>
            <div class="grp">
              <label for="tw-username"><img src="../assets/icons/Icon simple-twitter.png" class="icon">Username:</label><br>
              <input type="text" id="tw-username" name="TwitterUsername" required style="width: 300px;">
            </div>
            <div class="grp">
              <label for="ig-username"><img src="../assets/icons/Icon feather-instagram.png" class="icon">Username:</label><br>
              <input type="text" id="ig-username" name="InstagramUsername" required style="width: 300px;"> 
            </div>
          </div>

          <center><input type="submit" name="submit" value="Register" id="register"  class="button"></center>
        </div>
        </form>
        <script src="../scripts/jquery.js"></script>
        <script src="../scripts/bootstrap.min.js"></script>
        <script src="../scripts/main.js">
      var submit = document.getElementById('register');
      submit.addEventListener("click",validate());
      </script>
        <script >
       
      
        
        
        </script>
    </body>
</html>