<?php
$arr = [];
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

$sql = "INSERT INTO `person` (`fname`, `lname`, `age`, `education`, `gender`, `email`, `city`, `street`, `city_population`, `working_years`) 
        VALUES ('".$arr['fname']."', '".$arr['lname']."', '".$arr['age']."', '".$arr['education']."', '".$arr['gender']."', '".$arr['email']."', '".$arr['city']."', '".$arr['street']."', '".$arr['city_population']."', '".$arr['working_years']."')";


if($con->ping()) {
    $arr['connected'] = true;
} else {
    $arr['connected'] = false;
}

if($con->query($sql) === TRUE) {
    $arr['xstatus'] = "Created";
    $arr['id'] = $con->insert_id;
} else {
    $arr['error'] = "Error";
    $arr['message'] = $con->error;
}

echo json_encode($arr);

?>
