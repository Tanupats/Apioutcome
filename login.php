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

  $username=$result['Email'];
  $password=$result['Password'];

  $sql_check = "SELECT * FROM user WHERE Email='$username' AND `Password`='$password'";
  $member_c = $db->numRows($sql_check);
  $Memberarr = $db->runquery($sql_check);

  if($member_c==1){
    if(!empty($Memberarr)){

        foreach($Memberarr as $key => $value){

        $name=$Memberarr[$key]["Name"];      

        echo json_encode(array("message"=>"login success","name"=>$name));

        }
   }      
     

  }else{
      http_response_code(200);
      echo json_encode(array("message"=>"login false plese check username and password"));
  }
   
}

else{
    http_response_code(405);
}

?>


