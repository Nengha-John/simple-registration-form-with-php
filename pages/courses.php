<?php require_once "../scripts/connect.php"; ?>


<?php
session_start();
 // display php error
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cCode =  $_POST["courseCode"];
    $cName =$_POST["courseName"];
    $cDescrpt = $_POST["description"];
    $instructor = $_POST["instructor"];
    $department = $_POST["department"];
    $year = $_POST["year"];
    $semester = $_POST["semester"];
    $grade = $_POST["grade"];
    $user_name = $_SESSION['username'];
  
           
               
     if (!mysqli_query($connection, "INSERT INTO courses(courseCode, courseName, Department ,Instructor,courseDescription,academicYear,semester,grade,user)  VALUES ('$cCode' , '$cName', '$department', '$instructor', '$cDescrpt','$year', '$semester','$grade', '$user_name')")) {
             echo "Inserting data to the Db failed" ;
         } else {
            echo '<script type="text/javascript">alert("Registration Successful!");</script>';
                 }
            
            }
           
       
           
?>
