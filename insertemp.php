<?php

require "conection.php";

class model extends dbconnect 
{
    public function insert()
    {
        $sql_ins_emp="insert into employeedetail(fname,lname,sallary,joiningdate,department,gender) values('Ananya','Singh','165000','2021-08-19','Design','Female')";

        $result_emp=$this->conn->query($sql_ins_emp);
        if(!$result_emp)
        {
            echo "Data Insertion Failed in employee!<br>";
            die($this->conn->error);
        }
        
        $fetch_id=mysqli_insert_id($this->conn);

        $sql_ins_pro="insert into projectdetails(project,empoyeeid) values('','$fetch_id')";

        $result_pro=$this->conn->query($sql_ins_pro);
        if(!$result_pro)
        {
            echo "Data Insertion Failed in project!";
            die($this->conn->error);
        }
        else
        {
            echo "Data Inserted";
        }

    }


    //Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for those employee which have assigned project already.
  /*  public function select1()
    {
        $sql_sel1="select e.fname,p.projectname from employeedetail as e INNER JOIN projectdetails as p ON e.empid=p.empoyeeid where p.projectname is not null order by e.fname";
        $res_sel1=$this->conn->query($sql_sel1);
        if($res_sel1->num_rows>0)
        {
            //echo "Data Display failed in select1<br>";
           // die($this->conn->error);
           while($row=$res_sel1->fetch_assoc())
           {
             echo "
             <tr>
             <td>Firstname: ".$row['fname']."
             Projectname: ".$row['projectname']."<br></td>

             </tr>
             ";
           }
          } 
     }
   */
   //Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for all employee even they have not assigned project.
     /*   
       public function select2()
        {
            $sql_sel2="select e.fname,p.projectname from employeedetail as e INNER JOIN projectdetails as p ON e.empid=p.empoyeeid order by e.fname";
            $res_sel2=$this->conn->query($sql_sel2);
            if($res_sel2->num_rows>0)
            {
                //echo "Data Display failed in select1<br>";
               // die($this->conn->error);
               while($row2=$res_sel2->fetch_assoc())
               {
                 echo "
                 <tr>
                 <td>Firstname: ".$row2['fname']."
                 Projectname: ".$row2['projectname']."<br></td>
    
                 </tr>
                 ";
               }
            }
    

        }*/

//Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for all employee if project is not assigned then display "-No Project Assigned".
        /*public function select3()
        {
            $sql_sel3="select e.fname, IFNULL(p.projectname,'NOT ASSIGNED') from employeedetail as e INNER JOIN projectdetails as p ON e.empid = p.empoyeeid order by e.fname";
            $res_sel3=$this->conn->query($sql_sel3);
            if($res_sel3->num_rows>0)
            {
                //echo "Data Display failed in select1<br>";
               // die($this->conn->error);
               while($row3=$res_sel3->fetch_assoc())
               {
                 echo "
                 <tr>
                 <td>Firstname: ".$row3['fname']."
                 Projectname: ".$row3['projectname']."<br></td>
    
                 </tr>
                 ";
               }
            }
        }*/


       //Get all project name even they have not matching any employeeid, in left table, order by firstname from "EmployeeDetail" and "ProjectDetail".
     /*   public function select4()
        {
            $sql_sel4="select e.fname,p.projectname FROM employeedetail AS e RIGHT OUTER JOIN projectdetails AS p ON e.empid = p.empoyeeid ORDER BY e.fname";
            $res_sel4=$this->conn->query($sql_sel4);
            if($res_sel4->num_rows>0)
            {
                //echo "Data Display failed in select1<br>";
               // die($this->conn->error);
               while($row4=$res_sel4->fetch_assoc())
               {
                 echo "
                 <tr>
                 <td>Firstname: ".$row4['fname']."
                 Projectname: ".$row4['projectname']."<br></td>
    
                 </tr>
                 ";
               }
            }
        }*/
}

$obj=new model();

//insert the data
//$obj->insert();

//Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for those employee which have assigned project already.
//$obj->select1();


//Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for all employee even they have not assigned project.
//$obj->select2();

//Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for all employee if project is not assigned then display "-No Project Assigned".
//$obj->select3();

//Get all project name even they have not matching any employeeid, in left table, order by firstname from "EmployeeDetail" and "ProjectDetail".

//$obj->select4();

?>