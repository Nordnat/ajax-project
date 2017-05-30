<?php
$arr = [];
$arr['uid'] = $_POST['id'];
$arr['fname'] = $_POST['fname'];
$arr['lname'] = $_POST['lname'];
$arr['age'] = $_POST['age'];
$arr['education'] = $_POST['education'];
$arr['gender'] = $_POST['gender'];
$arr['email'] = $_POST['email'];
$arr['city'] = $_POST['city'];
$arr['street'] = $_POST['street'];
$arr['city_population'] = $_POST['cityPopulation'];
$arr['working_years'] = $_POST['workingYears'];

include '../php/connection.php';

$sql = "UPDATE `person` 
        SET `fname`='".$arr['fname']."',
        `lname`='".$arr['lname']."',
        `age`='".$arr['age']."',
        `education`='".$arr['education']."',
        `gender`='".$arr['gender']."',
        `email`='".$arr['email']."',
        `city`='".$arr['city']."',
        `street`='".$arr['street']."',
        `city_population`='".$arr['city_population']."',
        `working_years`='".$arr['working_years']."' 
        WHERE `id`='".$arr['uid']."'";




if($con->ping()) {
    $arr['connected'] = true;
} else {
    $arr['connected'] = false;
}

if($con->query($sql) === TRUE) {
    $arr['xstatus'] = "Updated";
    $arr['id'] = $con->insert_id;
} else {
    $arr['error'] = "Error";
    $arr['message'] = $con->error;
}

// echo json_encode($arr);

?>
