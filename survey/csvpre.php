<?php
require('DB.php');
session_start();
$user=$_SESSION['user'];
$sql="SELECT * FROM Users WHERE UserID=$user";
$query=$connection->query($sql); 
if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "users.csv";
    $f = fopen('php://memory', 'w');
    $fields = array('UserID', 'SchoolName', 'GradeLevel', 'Age', 'Gender');
    fputcsv($f, $fields, $delimiter);
    while($row = $query->fetch_assoc()){
        $lineData = array($row['UserID'], $row['SchoolName'], $row['GradeLevel'], $row['Age'], $row['Gender']);
        fputcsv($f, $lineData, $delimiter);
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
}

$sql="SELECT a.UserID, b.Description, a.Answers from PreTest a, Questions b WHERE a.QuestionID=b.QuestionID AND UserID=$user";
$query=$connection->query($sql); 
if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "PreTest.csv";
    $f = fopen('php://memory', 'w');
    $fields = array('UserID', 'Description', 'Answers');
    fputcsv($f, $fields, $delimiter);
    while($row = $query->fetch_assoc()){
        $lineData = array($row['UserID'], $row['Description'], $row['Answers']);
        fputcsv($f, $lineData, $delimiter);
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);
}
exit;
?>
