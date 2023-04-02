<?php 

date_default_timezone_set("Asia/Bangkok");

class DBcontroller {

    private $host="localhost";
    private $user ="root";
    private $pass="";
    private $dbname="outcomapp";
    private $conn;

  function __construct(){
      $this->conn = $this->connectDB();
  }

  function connectDB(){

        $conn = mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);   
     
        return $conn;
      

  }

  function runquery($sql){
      
      $result = mysqli_query($this->conn,$sql);

      while($row = mysqli_fetch_assoc($result)){

           $data[]=$row;
           
      }
      if(!empty($data)){
           return $data;
        }

      
  }

  function update_data($sqlup,$url){
        $update = mysqli_query($this->conn,$sqlup);
        if($update){
              mysqli_close($this->conn);
              header("location:".$url);
        }
  }

  function numRows($sql){
    $result = mysqli_query($this->conn,$sql);
    $rowcout = mysqli_num_rows($result);
    return $rowcout;
  }

  function insertData($sql){
     $insertsql =  mysqli_query($this->conn,$sql);
     if($insertsql){

          return true;
        
    }
  }


  function Remove($sql){
        $remove = mysqli_query($this->conn,$sql);     
        mysqli_close($this->conn);
  }
}
