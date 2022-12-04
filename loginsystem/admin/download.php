<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','mainproject');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

$filename = 'employee_'.time().'.csv';

// POST values
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

// Select query
$query = "SELECT * FROM phms ORDER BY id asc";

if(isset($_POST['from_date']) && isset($_POST['to_date'])){
	$query = "SELECT * FROM phms where reading_time between '".$from_date."' and '".$to_date."' ORDER BY id asc";
}

$result = mysqli_query($con,$query);
$employee_arr = array();

// file creation
$file = fopen($filename,"w");

// Header row - Remove this code if you don't want a header row in the export file.
$employee_arr = array("id","value1","value2","value3","value4","value5","reading_time"); 
fputcsv($file,$employee_arr);   
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $emp_name = $row['value1'];
    $salary = $row['value2'];
    $gender = $row['value3'];
    $city = $row['value4'];
    $email = $row['value5'];
    $date_of_joining = $row['reading_time'];

    // Write to file 
    $employee_arr = array($id,$emp_name,$salary,$gender,$city,$email,$date_of_joining);
    fputcsv($file,$employee_arr);   
}

fclose($file); 

// download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Type: application/csv; "); 

readfile($filename);

// deleting file
unlink($filename);
exit();
