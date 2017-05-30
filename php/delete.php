<?php 

$uid = $_POST['uid'];

include '../php/connection.php';

$sql = "DELETE FROM `person` WHERE id = '".$uid ."'";

if($con->query($sql)===TRUE){
    echo 'DELETED';
}else{
    echo "FAILED";
}
?>