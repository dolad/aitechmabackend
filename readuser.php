<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once __DIR__ . "\user.php";

$user= new User;
$stmt=$user->read();
$num=$stmt->num_rows;

    if($num>0){
        $users_arr=array();
        $users_arr["usersdetails"]=array();
        while($row=$stmt->fetch_assoc()){
            extract($row);
            $user_details=array(
                "firstname"=>$firstname,
                "lastname"=>$lastname,
                "email"=>$email,
                "phonenumber"=>$phone

            );
            array_push($users_arr["usersdetails"], $user_details);
        }
        http_response_code(200);
        echo json_encode($users_arr);
    }else{
        http_response_code(404);

        echo json_encode(array("message"=>"No user found"));
    }








?>