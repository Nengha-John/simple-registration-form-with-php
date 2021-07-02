<?php session_start(); 


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Courses </title>
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
          <!--user avatar-->
          <div class="user">
              <div class="colu">
                  <?php $user = $_SESSION['username'];$idd = $_SESSION['id']; echo "<strong>Welcome, " .$user."</strong>"; ?>
                
              </div>
              <div class="colu">
                  <img src="../assets/images/white flower.jpg" style="border-radius: 50%;" width="70px" height="70px" alt="">
              </div>
          </div>

          <h1><center>COURSE REGISTRATION.</center></h1>
          <center><span class="erro"></span></center>
          <form action="../pages/courses1.php" method="POST" name= "register">
          <!--personal info-->
          <div class="info">
            <h4><b>COURSE INFORMATION.</b></h4>
            <div class="grp" style="margin: 1em 2.5em 1em 0em;">
              <label for="firstName">Course Code:</label><br>
              <select name="courseCode" required id="courseCode">
                  <option value="IS 162">IS 162</option>
                  <option value="DS 112">DS 112</option>
                  <option value="MT 100">MT 100</option>
                  <option value="CL 111">CL 111</option>
                  <option value="CS 151">CS 151</option>
                  <option value="CS 174">CS 174</option>
                  <option value="IS 181">IS 181</option>
                  <option value="IS 143">IS 143</option>
                  <option value="IS 158">IS 158</option>
                  <option value="IS 171">IS 171</option>
                  <option value="DS 113">DS 113</option>
                  <option value="CS 173">CS 173</option>
                  <option value="CS 175">CS 175</option>
              </select>
            </div>
            <div class="grp">
              <label for="courseName">Course Name:</label><br>
              <input type="text" id="courseName" name="courseName" required maxlength="30" style="width: 250px;color:white;">
              
            </div>
            <div class="grp">
              <label for="Department">Department:</label><br>
              <select id="department" name="department" required style="width: 200px;">
                 <option value="Department of Computer Science and Computer Engineering.">Department of Computer Science and Computer Engineering.</option>
                 <option value="Department of Mathematics.">Department of Mathematics.</option>
                 <option value="Institution of Development Studies.">Institution of Development Studies.</option>
                 <option value="Department of Humanities.">Department of Humanities.</option>
              <option value=""></option>
              </select>
            </div>
            <div class="grp" style="margin-left: 40px;">
              <label for="instructor">Instructor</label><br>
              <input type="text" id="instructor" name="instructor" required maxlength="30" style="width: 250px;color:white;">
            </div>
            <div class="grp">
                <label for="courseDescrpt">Course Description:</label><br>
                <input type="textarea" name="description" id="courseDescrpt" required maxlength="50" style=" border: solid 1px white;">
            </div>
            <div class="grp">
                <div class="grp">
                   <label for="academicYear">Academic Year:</label><br>
                   <select name="year" id="year" required style="width: 70px;margin: 0em 7em 0em 0em">
                     <option value="1">1</option>
                     <option value="2">2</option>
                 </select>
                </div>
                <div class="grp">
                   <label for="semester">Semester:</label><br>
                 <select name="semester" id="sem" required style="width: 70px;">
                     <option value="I">I</option>
                     <option value="I">II</option>
                 </select>
                </div><br>
                <div class="grp">
                   <label for="grade">Grade:</label><br>
                   <select name="grade" id="grade" required style="width: 70px;">
                       <option value="A">A</option>
                       <option value="B+">B+</option>
                       <option value="B">B</option>
                       <option value="C">C</option>
                       <option value="D">D</option>
                       <option value="E">E</option>
                       <option value="F">F</option>
                   </select>
                </div>
            </div>
            <center><input type="submit" value="Register" name="submit" class="button" ></center>
          </div>
          <?php require_once "../scripts/connect.php";
            $fetch = "SELECT * FROM courses";
            $result = mysqli_query($connection,$fetch) or die(mysqli_error($this));
            echo "<table class='table' border='2' cellspacing='2' cellpadding='2'>
            <tr>
              <td>Course Code</td>
              <td>Course Name</td>
              <td>Department</td>
              <td>Instructor</td>
              <td>Course Description</td>
              <td>Academic Year</td>
              <td>Semester</td>
              <td>Grade</td>
            </tr>
            ";
           if (mysqli_num_rows($result)>0) {
               while($row=$result->fetch_assoc()){
                   $db_cCode = $row['courseCode'];
                   $db_cName = $row['courseName'];
                   $db_department = $row['Department'];
                   $db_instructor = $row['Instructor'];
                   $db_descrpt = $row['courseDescription'];
                   $db_year = $row['academicYear'];
                   $db_sem = $row['semester'];
                   $db_grade = $row['grade'];
                   echo "<tr>
              <td>".ucwords($db_cCode)."</td>
              <td>".ucwords($db_cName)."</td>
              <td>".ucwords($db_department)."</td>
              <td>".ucwords($db_instructor)."</td>
              <td>".ucwords($db_descrpt)."</td>
              <td>".ucwords($db_year)."</td>
              <td>".ucwords($db_sem)."</td>
              <td>".ucwords($db_grade)."</td>
            </tr>
            ";
               }
              echo "</table>";
              }
              else{
                echo 'Error retrieving data';
              }
              
              ?>

               
        </div>
    <script src="../scripts/jquery.js"></script>
    <script src="../scripts/bootstrap.min.js"></script>
    <script src="../scripts/courses.js"></script>
    </body>
</html>