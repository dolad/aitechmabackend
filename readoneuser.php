<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once __DIR__ ."\user.php";

$user = new User;

    $user->userid=isset($_GET['uniqueid']) ? $_GET['uniqueid']: die();
    $user->readOne($user->userid);
        
    if($user->firstname!= null){
        $user_arr=array(
                    "firstname"=>$user->firstname,
                    "lastname"=>$user->lastname,
                    "email"=>$user->email,
                    "phonenumber"=>$user->phonenumber
        );
        http_response_code(200);
        echo json_encode($user_arr);
    }else{
        http_response_code(404);
        echo json_encode(array("message"=>"User does not exists"));
    }

// $user->userid=isset($_GET['userid']) ? $_GET['userid'] : die(
// "Error: Not getting value."
// );


?>