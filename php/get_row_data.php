<?php 

$uid = $_POST['uid'];
$arr = [];
include '../php/connection.php';
$sql = "SELECT * FROM `person` WHERE id = '".$uid."'";

if($result = $con->query($sql) ) {
    while($row = $result->fetch_assoc()) {
        $arr[] = $row;
    }
    echo json_encode($arr);
}
