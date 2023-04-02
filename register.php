<?php 

require('db.php');
header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$db = new DBcontroller();

if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  $data = file_get_contents("php://input");
  $result = json_decode($data,true);

  $email=$result['Email'];
  $password=$result['Password'];
  $name = $result['Name'];

  $sql = "INSERT INTO user (`Email`, `Password`, `Name`) VALUES( '$email','$password','$name')";
  $register = $db->insertData($sql);
    
  if($register){
    echo json_encode(array("message"=>"register success"));
  }  

   
}
else{
    http_response_code(405);
}

?>


