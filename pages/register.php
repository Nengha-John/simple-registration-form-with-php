
<?php
header('Content-type: application/json');
/*
try { 

    throw new Exception('Something Went Wrong', 512);


} catch(Exception $e) {
    
    echo json_encode(
        array(
            'status' => false,
            'error' => $e -> getMessage(),
            'error_code' => $e -> getCode()
        )
    );

    // do some process if needed. ex: MYSQL Rollbacks

    exit;

}*/
$json = file_get_contents('php://input');
$data = json_decode($json);
echo $data[0];
session_start();
$mysqli = new mysqli('localhost','root','root','mycv_db') or die(mysqli_error($mysqli));

//if(isset($_POST['register'])){
    $fName = $_POST["firstName"];
    $mName = $_POST['middleName'];
    $lName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $file = $_POST['cv'];
    $phone = $_POST['phone'];
    $sPhone = $_POST['phone2'];
    $email = $_POST['email'];
    $fbUname = $_POST['fb-username'];
    $twUname = $_POST['tw-username'];
    $igUname = $_POST['ig-username'];

    $mysqli->query("INSERT INTO users(firstName,middleName,lastName,userName,pass,phone,secondPhone,email,CV,fb_username,tw_username,ig_username) VALUES('$fName','$mName','$lName','$userName','$pass','$phone','$sPhone','$email','$file','$fbUname','$twUname','$igUname')") or die($mysqli->error);
   
    //header("location: ../pages/courses.php");
    $name = $_SESSION['name'] =$fName;

//}
?>