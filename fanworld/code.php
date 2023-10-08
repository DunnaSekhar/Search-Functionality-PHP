<?php
session_start();
include('config.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['save_excel_data']))
{
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
        foreach($data as $row)
        {
            if($count > 0)
            {
                // for storing the values in db
                $Employee_Document =  $row['0']; 
                $Employee_Name = $row['1'];
                $Actual_Birthday = $row['2'];
                $Age_Range = $row['3'];
                $Blood_Group = $row['4'];
                $Date_Of_Birth = $row['5'];
                $Email = $row['6'];
                $Emergency_Contact_Name = $row['7'];
                $Emergency_Contact_Number = $row['8'];
                $Employee_Age = $row['9'];
                $Employee_Number = $row['10'];
                $Employee_Personal_Email = $row['11'];
                $Employee_Relation = $row['12'];
                $Has_Left_The_Organization = $row['13'];
                $Fathers_Name = $row['14'];
                $Gender = $row['15'];
                $Has_ESS_Login = $row['16'];
                $Is_ESI_Eligible = $row['17'];
                $Is_PF_Eligible = $row['18'];
                $Is_LWF_Eligible = $row['19'];
                $Is_Physically_Challenged = $row['20'];
                $Joined_On = $row['21'];
                $Manager_Email_Id = $row['22'];
                $Manager_Employee_Name = $row['23'];
                $Manager_Employee_No = $row['24'];
                $Managers_Manager_Name = $row['25'];
                $Marital_Status = $row['26'];
                $Nationality = $row['27'];
                $PAN_Number = $row['28'];
                $PF_Number = $row['29'];
                $Phone = $row['30'];
                $Reporting_To = $row['31'];
                $UAN = $row['32'];
                $Years_In_Service = $row['33'];
                $Years_In_Service_Range = $row['34'];


                $studentQuery = "INSERT INTO employee (Employee_Document, Employee_Name, Actual_Birthday, Age_Range, Blood_Group, Date_Of_Birth, Email, Emergency_Contact_Name, Emergency_Contact_Number, Employee_Age, Employee_Number, Employee_Personal_Email, Employee_Relation, Has_Left_The_Organization, Fathers_Name, Gender, Has_ESS_Login, Is_ESI_Eligible, Is_PF_Eligible, Is_LWF_Eligible, Is_Physically_Challenged, Joined_On, Manager_Email_Id, Manager_Employee_Name, Manager_Employee_No, Managers_Manager_Name, Marital_Status, Nationality, PAN_Number, PF_Number, Phone, Reporting_To, UAN, Years_In_Service, Years_In_Service_Range) VALUES ('$Employee_Document', '$Employee_Name', '$Actual_Birthday', '$Age_Range', '$Blood_Group', '$Date_Of_Birth', '$Email', '$Emergency_Contact_Name', '$Emergency_Contact_Number', '$Employee_Age', '$Employee_Number', '$Employee_Personal_Email', '$Employee_Relation', '$Has_Left_The_Organization', '$Fathers_Name', '$Gender', '$Has_ESS_Login', '$Is_ESI_Eligible', '$Is_PF_Eligible', '$Is_LWF_Eligible', '$Is_Physically_Challenged', '$Joined_On', '$Manager_Email_Id', '$Manager_Employee_Name', '$Manager_Employee_No', '$Managers_Manager_Name', '$Marital_Status', '$Nationality', '$PAN_Number', '$PF_Number', '$Phone', '$Reporting_To', '$UAN', '$Years_In_Service', '$Years_In_Service_Range')";
                // print_r($studentQuery);
                $result = mysqli_query($con, $studentQuery);
                $msg = true;
            }
            else
            {
                $count = "1";
            }
        }

        if(isset($msg))
        {
            $_SESSION['message'] = "Successfully Imported";
            header('Location: index.php');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Imported";
            header('Location: index.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid File";
        header('Location: index.php');
        exit(0);
    }
}
?>