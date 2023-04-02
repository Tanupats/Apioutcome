<?php 

require_once('db.php');

header("Access-Control-Allow-Origin: *"); 
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$db = new DBcontroller();

//get all user 
if($_SERVER['REQUEST_METHOD'] == "GET"){

 
       $data = $db->runquery("SELECT * FROM user"); 
       echo json_encode($data);   
       
    
}
else{
    http_response_code(405);
}

?>


