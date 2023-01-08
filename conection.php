<?php

//$conn=mysqli_connect('localhost','root','','task4');
class dbconnect
{

private $server='localhost';
private $username='root';
private $password='';
private $dbname='task4';
public $conn;

public function __construct()
{
    $this->conn=new mysqli($this->server,$this->username,$this->password,$this->dbname);
    if(!$this->conn)
    {
      echo "Connection Failed";
      die($this->conn->error);
    }
    else
    {
     //   echo "Connection success";
    }
}
}

//$obj=new dbconnect();

?>