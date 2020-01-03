<?php

include_once __DIR__ . "\db_class.php";

class User extends Db_class{
     public $error;
     public $uuid;
     public $firstname;
     public $lastname;
     public $phonenumber;
     public $email;
     public $password;
     public $userid;
     public $verified;
    


    public function __construct(){
        parent::__construct();
    }

    public function register($firstname, $lastname, $phonenumber, $email, $password){
        $this->firstname=htmlspecialchars(strip_tags($firstname));
        $this->lastname=htmlspecialchars(strip_tags($lastname));
        $this->email=htmlspecialchars(strip_tags($email));
        $this->phonenumber=htmlspecialchars(strip_tags($phonenumber));
        $this->password=hash("md5", htmlspecialchars(strip_tags($password)));
        $this->uuid=hash("md5", uniqid($this->email));
        $uuid=substr(preg_replace('/[^0-9]/', '', $this->uuid), 0, 10);
        $subject="user uuid for testing";
        $headers="From: Aitechmatesting.com \r\n";
        $message="Dear ".$this->firstname."; \r\n  Your user unique id is ".$uuid." please never discard this email ";
    


        $stmt=$this->conn->query("SELECT * FROM user_table WHERE email='$this->email'");
        if($stmt->fetch_assoc()){
            echo "User already exist";
        }else{

            
        $insert = $this->conn->prepare("INSERT INTO user_table (userid,firstname,lastname,email,password, phone) VALUES (?,?,?,?,?,?)");
        $insert->bind_param("ssssss",$uuid,$this->firstname, $this->lastname, $this->email, $this->password,$this->phonenumber);
        if($insert->execute()){
            if(mail($this->email,$subject,$message,$headers)){
                  
            }else{
                
            }

            return true;
        }
        return false;
    
        }



    }
   

    public function read(){
        if($result=$this->conn->query("SELECT * FROM user_table")){
            return $result;
        }
    }
    public function readOne($userid){
        $this->userid=$userid;
        $stmt= $this->conn->query("SELECT * FROM user_table WHERE userid='$this->userid'");
        if($row=$stmt->fetch_assoc()){
            $this->firstname=$row["firstname"];
            $this->lastname=$row["lastname"];
            $this->email=$row["email"];
            $this->phonenumber=$row["phone"];

    }
    
 }  
    public function delete($id){
        $this->id=htmlspecialchars(strip_tags($id));
        if ($stmt= $this->conn->query("DELETE FROM user_table WHERE userid='$this->id'")){
            return true;
        }else{
            return false;
        }

    
}
 

}




?>