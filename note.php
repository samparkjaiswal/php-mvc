
<?php
//Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for those employee which have assigned project already.
select e.fname,p.projectname from employeedetail as e INNER JOIN projectdetails as p ON e.empid=p.empoyeeid where p.projectname is not null order by e.fname;

//Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for all employee even they have not assigned project.

select e.fname,p.projectname from employeedetail as e INNER JOIN projectdetails as p ON e.empid=p.empoyeeid order by e.fname;


//Get employee name, project name order by firstname from "EmployeeDetail" and "ProjectDetail" for all employee if project is not assigned then display "-No Project Assigned".

SELECT e.fname, IFNULL(p.projectname,'NOT ASSIGNED') FROM employeedetail AS e INNER JOIN projectdetails AS p ON e.empid = p.empoyeeid ORDER BY e.fname;

//Get all project name even they have not matching any employeeid, in left table, order by firstname from "EmployeeDetail" and "ProjectDetail".

select e.fname,p.projectname FROM employeedetail AS e RIGHT OUTER JOIN projectdetails AS p ON e.empid = p.empoyeeid ORDER BY e.fname;

//Get complete record(employeename, project name) from both tables([EmployeeDetail],[ProjectDetail]), if no match found in any table then show NULL.

SELECT e.fname, p.projectname FROM employeedetail AS e RIGHT OUTER JOIN projectdetails AS p ON e.empid = p.empoyeeid  UNION SELECT e.fname, p.projectname FROM employeedetail AS e LEFT OUTER JOIN projectdetails AS p ON e.empid = p.empoyeeid;



//Write a query to find out the employeename who has not assigned any project, and display "-No Project Assigned"( tables :- [EmployeeDetail],[ProjectDetail]).

SELECT e.fname, IFNULL(p.projectname,'NOT ASSIGNED') FROM employeedetail AS e INNER JOIN projectdetails AS p ON e.empid = p.empoyeeid where p.projectname is null;


//Write a query to find out the project name which is not assigned to any employee( tables :- [EmployeeDetail],[ProjectDetail]).

select p.projectname from employeedetail as e RIGHT OUTER JOIN projectdetails as p ON e.empid=p.empoyeeid where p.empoyeeid is null;

// Write down the query to fetch EmployeeName & Project who has assign more than one project.







?>