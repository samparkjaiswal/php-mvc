<?php

require 'model.php';

$data = array (
    'stuid'=>$_POST['stuid'],
    'firstname'=> $_POST['first_name'], 
    'lastname'=> $_POST['last_name'],
    'stuemail'=> $_POST['stu_email'],
    'username'=> $_POST['username'],
    'passkey'=> $_POST['passkey'],
    'class'=> $_POST['class'],
    'section'=> $_POST['section'],
    'fathername'=> $_POST['father_name'],
    'mothername'=> $_POST['mother_name'],
    'address'=> $_POST['address'],
    'phnnum'=> $_POST['phone_number'],
    'math'=> $_POST['checkbx_subject1'],
    'hindi'=> $_POST['checkbx_subject2'],
    'science'=> $_POST['checkbx_subject3'],
    'sst'=> $_POST['checkbx_subject4'],
    'french'=> $_POST['checkbx_subject5'],
    'german'=> $_POST['checkbx_subject6'],
    'english'=> $_POST['checkbx_subject7']
);

// echo $data['subjects']['math'];
$objmodel->update_data($data);
?>