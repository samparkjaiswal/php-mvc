<?php 

require 'db.php';

class modeldb extends dbconnected{

     public function insert_data($arr)
    {

    //    foreach($arr AS $a){
    //     echo $a 
    //    }

        // Insertion in basic details
        $sql_insert_query_bd= "INSERT INTO `basic_details`( `firstname`, `lastname`, `email`, `username`, `pswd`, `class`, `section`) VALUES ('$arr[firstname]','$arr[lastname]','$arr[stuemail]','$arr[username]','$arr[passkey]', '$arr[class]', '$arr[section]')";
        $sql_insert_query_runner_bd = mysqli_query($this->conn_var, $sql_insert_query_bd); 

        if(!$sql_insert_query_runner_bd)
        { 
            echo "<br> Data Insertion Failed!";
            die(mysqli_error($sql_insert_query_runner_bd));
        }

        // Fetching student id 
        $fetch_id = mysqli_insert_id($this->conn_var);

        // Insertion in personal details
        $sql_insert_query_pd= "INSERT INTO `personal_details`(`fathername`, `mothername`, `address`, `phonenumber`, `stuid`) VALUES ('$arr[fathername]', '$arr[mothername]', '$arr[address]', '$arr[phnnum]', '$fetch_id')";
        $sql_insert_query_runner_pd = mysqli_query($this->conn_var, $sql_insert_query_pd);
        if(!$sql_insert_query_runner_pd)
        { 
            echo "<br> Data Insertion Failed!";
            die(mysqli_error($sql_insert_query_runner_pd));
        }


        // insertion into subjects
        $sql_insert_query_sd = "INSERT INTO `subjects`(`math`, `hindi`, `science`, `sst`, `french`, `german`, `english`, `stuid`) VALUES ('$arr[math]','$arr[hindi]','$arr[science]','$arr[sst]','$arr[french]','$arr[german]','$arr[english]', '$fetch_id')";
        $sql_insert_query_runner_sd = mysqli_query($this->conn_var, $sql_insert_query_sd);
        if(!$sql_insert_query_runner_sd)
        { 
            echo "<br> Data Insertion Failed! Subjects";
            die(mysqli_error($sql_insert_query_runner_sd));
        }

        else{
            print "not working";
            header('location: ../View/listing.php'); 
        }
    }

    // Selection Query
    public function select_all(){
        $sql_select_all_query = "SELECT b.stu_id, b.firstname, b.lastname, b.email, b.username, b.class, b.section, p.fathername, p.mothername, p.address, p.phonenumber, s.math, s.hindi, s.science, s.sst, s.french, s.german, s.english FROM `basic_details` AS b INNER JOIN `personal_details` AS p ON `b`.`stu_id` = `p`.`stuid` INNER JOIN `subjects` AS s ON `b`.`stu_id` = `s`.`stuid`";

        $sql_select_all_query_runner = mysqli_query($this->conn_var , $sql_select_all_query);

        if(!$sql_select_all_query_runner)
        {
            echo "Selection query doesn't WORK!";
        }

        else {
            return $sql_select_all_query_runner;
        }
    }

    public function update_data ($data){
        $sql_update_data_query = "UPDATE `basic_details` AS b, `personal_details` AS p, `subjects` AS s SET `b`.`firstname`='$data[firstname]',`b`.`lastname`='$data[lastname]',`b`.`email`='$data[stuemail]',`b`.`username`='$data[username]',`b`.`pswd`='$data[passkey]',`b`.`class`='$data[class]',`b`.`section`='$data[section]', `p`. `fathername`= '$data[fathername]', `p`.`mothername`='$data[mothername]', `p`.`address`='$data[address]', `p`.`phonenumber`=$data[phnnum], `s`.`math` = '$data[math]', `s`.`hindi` = '$data[hindi]', `s`.`science` = '$data[science]', `s`.`sst` = '$data[sst]', `s`.`french` = '$data[french]', `s`.`german` = '$data[german]', `s`.`english` = '$data[english]' WHERE `b`.`stu_id` = $data[stuid]";

        $sql_update_data_runner = mysqli_query($this->conn_var, $sql_update_data_query);


        if (!$sql_update_data_runner){
            echo"Not Worked";
            die(mysqli_error($sql_update_data_runner));
        }

        header('location: ../View/listing.php');

    }


    public function delete_data ($key)
    {
            $sql_delete_data_query = "DELETE FROM `basic_details` WHERE `stu_id` = $key";
            $sql_delete_data_runner = mysqli_query($this->conn_var, $sql_delete_data_query);
            if (!$sql_delete_data_runner){
                echo"Not Worked";
                die(mysqli_error($sql_delete_data_runner));
            }

            header('location: ../View/listing.php');
    }

}
$objmodel = new modeldb();
?>