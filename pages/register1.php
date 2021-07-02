<?php require_once "../scripts/connect.php"; ?>


<?php
session_start();
 // display php error
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname =  $_POST["FirstName"];
    $mname =$_POST["MiddleName"];
    $lname = $_POST["LastName"];
    $uname = $_POST["Username"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    $phone = $_POST["Phone"];
    $phone1 = $_POST["SecondPhone"];
    $fb = $_POST["FacebookUsername"];
    $tw = $_POST["TwitterUsername"];
    $ig = $_POST["InstagramUsername"];
    
    

    // $file = $_FILES['file'];
    // $file_name = $_FILES['name'];
    // $file_loc = $_FILES['file']['tmp_name'];
    // $folder = "../cv/";
    //if(isset($_POST['submit'])){
        echo $fname;
        $name       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name']; 
 
        if(isset($name) and !empty($name)){
            $location = '../uploads/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
                $final_file = $location.$name;
                echo $final_file;
                $query = "INSERT INTO users (firstName, middleName, lastName ,userName,pass,CV,phone,secondPhone,email, fb_username,tw_username,ig_username)  VALUES ('$fname' , '$mname' , '$lname' , '$uname', '$password', '$final_file','$phone', '$phone1','$email', '$fb', '$tw','$ig')";
                $insertingData = mysqli_query($connection, $query) or die();
                echo $insertingData;
                if (!$insertingData) {
                    echo "Inserting data to the Db failed" ;
                } else {
                    echo '<script type="text/javascript">alert("Registration Successful!");</script>';
                    $_SESSION['username'] = $uname;
                    $query_id = "SELECT id FROM users WHERE username = '".$_SESSION['username']."'";
                    $id_user = mysqli_query($connection,$query_id);
                    if(isset($id_user)){
                        $row = mysqli_fetch_array($id_user);
                        $id = $row['id'];
                        $_SESSION['id'] = $id;
                    }else{
                        echo "Failed to fetch user id";
                    }
                    
                    header("Location:../pages/coursespages.php");
                }
            }
            }
        // } else {
        //     echo 'You should select a file to upload !!';
        //     echo $_FILES['file']['error'];
        //     $query = "INSERT INTO users (fname, mname, lname ,username,password,phone,phone1,email, fb,tw,ig)  VALUES ('$fname' , '$mname' , '$lname' , '$uname', '$password','$phone', '$phone1','$email', '$fb', '$tw','$ig')";
        //     $insertingData = mysqli_query($connection, $query) or die();
        // }
    }
 
  

    // if (move_uploaded_file($temp_name, $location.$name)) {
     
       
    // }



   
/*
function test_input($data)
{
   $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

    $data = mysqli_real_escape_string($connection, $data);

    return $data;
}*/

?>
