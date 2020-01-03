<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 


include_once __DIR__ . "\user.php";


$user= new User();
 
if(isset($_POST['save'])){

    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber =$_POST['phonenumber'];

        if(!empty($firstname)&&
            !empty($lastname)&&
            !empty($email)&&
            !empty($password)&&
            !empty($phonenumber)
        ){
        if($user->register($firstname,$lastname,$phonenumber,$email,$password)){
                http_response_code(201);
                echo json_encode(array("message" => "user was created."));
        }
        else{
                http_response_code(503);
                echo json_encode(array("message" => "Unable to create users."));
        }
    
    }
    else{
        http_response_code(503);
        echo json_encode(array("message" => "Unable to connect fields cannot be empty."));
    }
}
 
 ?>