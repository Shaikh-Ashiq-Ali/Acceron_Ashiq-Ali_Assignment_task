<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

require_once './conn.php';

if(isset($_GET['Empid'])){

  $id = $_GET['Empid'];
  $sql = "SELECT `Empid`, `full_name`, `job_titile`, `deparment`, `business_unit`, `gender`, `ethnicity`, `Age`, `hire_date`, `Annual_salary`, `bonus`, `country`, `city`, `exit_date` FROM `file` WHERE `Empid`='$id'";
  $result = mysqli_query($db, $sql);
  if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($data);
  } else {
    echo json_encode(['msg' => 'No Data!', 'status' => false]);
  }

}else{
  echo json_encode(['msg' => 'No Data!', 'status' => false]);
}




