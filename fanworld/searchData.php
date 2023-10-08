<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispaly Search Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body>
<style>
body {
  background:url(img/bg.jpeg)no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>  
    <?php
        $data = $_GET['data'];
        // echo $data;
        $sql = "Select * from `employee` where id = $data";
        $result = mysqli_query($con,$sql);
        if($result){
            $row = mysqli_fetch_assoc($result);
            echo '<div class="container">
            <div class="jumbotron">
      <h1 class="display-4 text-center text-success">'.$row['Employee_Name'].'</h1>
      <p class="lead text-center text-info">Email is: '.$row['Email'].' </p>
      <p class="lead text-center text-info">Birthday is: '.$row['Actual_Birthday'].' </p>
      <p class="lead text-center text-info">Blood Group is: '.$row['Blood_Group'].' </p>
      <p class="lead text-center text-info">Emergency Contact Number is: '.$row['Emergency_Contact_Number'].' </p>
      <p class="lead text-center text-info">Fathers Name is: '.$row['Fathers_Name'].' </p>
      <p class="lead text-center text-info">PAN Number is: '.$row['PAN_Number'].' </p>
      <p class="lead text-center text-info">PF Number is: '.$row['PF_Number'].' </p>
      <p class="lead text-center text-info">Phone Number is: '.$row['Phone'].' </p>
      <p class="lead text-center text-info">Reporting_To is: '.$row['Reporting_To'].' </p>
      <p class="lead text-center text-info">UAN is: '.$row['UAN'].' </p>
      <p class="lead text-center text-info">Age_Range is: '.$row['Age_Range'].' </p>
      <p class="lead text-center text-info">Email is: '.$row['Email'].' </p>
      <p class="lead text-center text-info">Reporting_To is: '.$row['Reporting_To'].' </p>
      <p class="lead text-center text-info">Emergency_Contact_Name is: '.$row['Emergency_Contact_Name'].' </p>
      <p class="lead text-center text-info">Employee_Age is: '.$row['Employee_Age'].' </p>
      <p class="lead text-center text-info">Employee_Number is: '.$row['Employee_Number'].' </p>
      <p class="lead text-center text-info">Employee_Personal_Email is: '.$row['Employee_Personal_Email'].' </p>
      <p class="lead text-center text-info">Has_Left_The_Organization is: '.$row['Has_Left_The_Organization'].' </p>
      <p class="lead text-center text-info">Has_ESS_Login is: '.$row['Has_ESS_Login'].' </p>
      <p class="lead text-center text-info">Is_ESI_Eligible is: '.$row['Is_ESI_Eligible'].' </p>
      <p class="lead text-center text-info">Is_PF_Eligible is: '.$row['Is_PF_Eligible'].' </p>
      <p class="lead text-center text-info">Is_LWF_Eligible is: '.$row['Is_LWF_Eligible'].' </p>
      <p class="lead text-center text-info">Is_Physically_Challenged is: '.$row['Is_Physically_Challenged'].' </p>
      <p class="lead text-center text-info">Joined_On is: '.$row['Joined_On'].' </p>
      <p class="lead text-center text-info">Manager_Email_Id is: '.$row['Manager_Email_Id'].' </p>
      <p class="lead text-center text-info">Nationality is: '.$row['Nationality'].' </p>
      <p class="lead text-center text-info">Manager_Employee_Name is: '.$row['Manager_Employee_Name'].' </p>
      <p class="lead text-center text-info">Manager_Employee_No is: '.$row['Manager_Employee_No'].' </p>
      <p class="lead text-center text-info">Managers_Manager_Name is: '.$row['Managers_Manager_Name'].' </p>
      <p class="lead text-center text-info">Marital_Status is: '.$row['Marital_Status'].' </p>  
      
      <hr class="my-4">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="search.php" role="button">Back</a>
      </p>
    </div>
            </div>';
        }
    ?>      

</body>
</html>