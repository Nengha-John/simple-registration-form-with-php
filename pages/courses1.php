<?php

session_start();



if($mysqli = new mysqli('localhost','root','root','mycv_db') or die(mysqli_error($mysqli))){
    echo 'Connection successful';
}else{
    echo 'damn it!';
}
if(isset($_POST['submit'])){
    $cCode =  $_POST["courseCode"];
    $cName =$_POST["courseName"];
    $cDescrpt = $_POST["description"];
    $instructor = $_POST["instructor"];
    $department = $_POST["department"];
    $year = $_POST["year"];
    $semester = $_POST["semester"];
    $grade = $_POST["grade"];
    $user_name = $_SESSION['username'];
    
    $mysqli->query("INSERT INTO courses(courseCode, courseName, Department ,Instructor,courseDescription,academicYear,semester,grade,user) VALUES('$cCode' , '$cName', '$department', '$instructor', '$cDescrpt','$year', '$semester','$grade', '$user_name')") or die($mysqli->error);
    $_SESSION['message'] = 'Record has been saved';
    $_SESSION['msg_type'] = "success";
    header("location: ../pages/coursespages.php");
}