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

  $Toppic=$result['Toppic'];
  $Amount=$result['Amount'];
  $outcomeType = $result['outcomeType'];

  $sql = "INSERT INTO account (`Toppic`, `Amount`, `outcomeType`) VALUES( '$Toppic','$Amount','$outcomeType')";
  $register = $db->insertData($sql);
    
  if($register){
    echo json_encode(array("message"=>"insert data success"));
  }  

   
}
 else   if($_SERVER['REQUEST_METHOD'] == "GET"){
  

  $sql = "SELECT * FROM account";
  $data = $db->runquery($sql);
    
  echo json_encode($data);
  

   
}
else{
    http_response_code(405);
}

?>


