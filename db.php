<?php

class dbconnection {
    private $server = 'localhost';
    private $username = 'root';
    private $root = '';
    private $dbname = 'empdetails';

    public $conn_var;
    public function __construct()
    {
       $this->conn_var = new mysqli($this->server, $this->username, $this->root, $this->dbname);
       if(!$this->conn_var)
         {
            print "DataBase Connection Failed!";
            die(mysqli_error($conn_var));
         }
    }


    public function insert_data(){
        
        $sql = "INSERT INTO `empdtls` (`firstname`, `lastname`, `salary`, `joindt`, `dept`, `gender`) VALUES ('aaa', 'vvv', '10000', '2010-11-05', 'Tester', 'Female')";
        $sql_runner =  $this->conn_var->query($sql); 

        // $fetch_id = $this->conn_var->insert_id;

        if (!$sql_runner){
            print "Query Failed!";
            die(mysqli_error($sql_runner));
        }


        $sql = "INSERT INTO `prjtdtls`(`projectname`) VALUES ('CDN')";
        $sql_runner =  $this->conn_var->query($sql);

        if (!$sql_runner){
            print "Query Failed!";
            die(mysqli_error($sql_runner));
        }

    }
}
$objdb = new dbconnection();
$objdb->insert_data();
?>


<!-- Queries -->

<!-- 1.-> SELECT `e`.`firstname`, `p`.`projectname` FROM `empdtls` AS e INNER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid` WHERE `p`.`projectname` IS NOT NULL ORDER BY `e`.`firstname`; -->


<!-- 2. SELECT `e`.`firstname`, `p`.`projectname` FROM `empdtls` AS e INNER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid` ORDER BY `e`.`firstname`; -->

<!-- 3. SELECT `e`.`firstname`, IFNULL(`p`.`projectname`,'NOT ASSIGNED') FROM `empdtls` AS e INNER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid` ORDER BY `e`.`firstname`; -->


<!-- 4.  SELECT `e`.`firstname`, `p`.`projectname` FROM `empdtls` AS e RIGHT OUTER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid`  ORDER BY `e`.`firstname`;-->

<!-- 5. SELECT `e`.`firstname`, `p`.`projectname` FROM `empdtls` AS e RIGHT OUTER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid`  UNION SELECT `e`.`firstname`, `p`.`projectname` FROM `empdtls` AS e LEFT OUTER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid`;-->

<!-- 6. SELECT `e`.`firstname`, IFNULL(`p`.`projectname`,'NOT ASSIGNED') FROM `empdtls` AS e INNER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid` WHERE `p`.`projectname` IS NULL; -->

<!-- 7. SELECT `p`.`projectname` FROM `empdtls` AS e RIGHT OUTER JOIN `prjtdtls` AS p ON `e`.`empid` = `p`.`empid` WHERE `p`.`empid` IS NULL; -->