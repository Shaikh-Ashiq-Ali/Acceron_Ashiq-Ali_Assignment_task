<?php

require_once 'conn.php';

if($_POST['file']){

            if(is_uploaded_file($_FILES['file']['tmp_name'])){ 
                $reader = new Xlsx(); 
                $spreadsheet = $reader->load($_FILES['file']['tmp_name']); 
                $worksheet = $spreadsheet->getActiveSheet();  
                $worksheet_arr = $worksheet->toArray(); 
     
                unset($worksheet_arr[0]); 
     
                foreach($worksheet_arr as $row){ 
                    $EmployeeID = $row[0]; 
                    $fullname = $row[1]; 
                    $job_titile = $row[2]; 
                    $deparment = $row[3]; 
                    $business_unit = $row[4]; 
                    $gender = $row[5]; 
                    $ethicity = $row[6]; 
                    $age = $row[7]; 
                    $hiredate = $row[8]; 
                    $annual_Salary = $row[9]; 
                    $bonus = $row[10]; 
                    $country = $row[11]; 
                    $city = $row[12]; 
                    $country = $row[13]; 
                    $exitDate = $row[14]; 

                    
                    $db->query('INSERT INTO `file`(`Empid`, `full_name`, `job_titile`, `deparment`, `business_unit`, `gender`, `ethnicity`, `Age`, `hire_date`, `Annual_salary`, `bonus`, `country`, `city`, `exit_date`) VALUES ('$EmployeeID','$fullname','$job_titile','$deparment','$business_unit','$gender','$ethicity','$age','$hiredate','$annual_Salary','$bonus','$city','$country','$exitDate')'); 
                    

                    header(`location: /index.php?info='File Uploaded Successfully'`);

                }
            } 

}else{
    header('location: /index.php');
}



?>
