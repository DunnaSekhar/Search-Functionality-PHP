<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>

<body>
<style>
body {
  background:url(img/white.png)no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style>  

    <br>
    <div class="card-body">
            <!-- <img src="./img/blank-avatar.jpg" class="img-fluid rounded" alt="User avatar" width="180"> -->
            <!-- <h4 class="my-4">Welcome, <?= htmlspecialchars($_SESSION["username"]); ?></h4>  -->
            <center>    <a href="./logout.php" class="btn btn-success">Log Out</a>  </center> 
      </div>

    <br><br>
    <div class='card-body'>
      <div class="align-to-right">
        <center>
        <form method = "post">
            <input type="text" placeholder="Search data by id or name" name="search">
            <button class="btn btn-primary btn-sm" name="submit">Search</button>
            <a class="btn btn-primary btn-sm" href="index.php" role="button">Back</a>
        </form>
</center>
      </div>
        <div class="card-body">
            <table class="table table-bordered">
                <?php
                    if(isset($_POST['submit'])){
                        $search=$_POST['search'];

                        $sql="Select * from `employee` where id like '%$search%'
                        or Employee_Name like '%$search%'";
                        $result = mysqli_query($con,$sql);
                        if($result){
                            if(mysqli_num_rows($result)>0){
                                echo '<thead>
                                <tr>
                                <th>ID</th>
                                <th>Employee_Document</th>
                                <th>Employee_Name</th>
                                <th>Actual_Birthday</th>
                                <th>Blood_Group</th>
                                <th>Emergency_Contact_Number</th>
                                <th>Fathers_Name</th>
                                <th>PAN_Number</th>
                                <th>Phone</th>
                                <th>Reporting_To</th>
                                <th>UAN</th>
                                  
                                
                                </tr>
                                </thead>';
                                while($row = mysqli_fetch_assoc($result)){
                                echo '<tbody>
                                <tr>
                                <td><a href="searchData.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                                <td><a href="searchData.php?data='.$row['id'].'">'.$row['Employee_Document'].'</a></td>
                                <td><a href="searchData.php?data='.$row['id'].'">'.$row['Employee_Name'].'</a></td>
                                <td>'.$row['Actual_Birthday'].'</td>
                                <td>'.$row['Blood_Group'].'</td>
                                <td>'.$row['Emergency_Contact_Number'].'</td>
                                <td>'.$row['Fathers_Name'].'</td>
                                <td>'.$row['PAN_Number'].'</td>
                                <td>'.$row['Phone'].'</td>
                                <td>'.$row['Reporting_To'].'</td>
                                <td>'.$row['UAN'].'</td>
                                </tr>
                                </tbody>';
                                }
                            }
                            else{
                                echo '<h2 class=text-danger>Data not found</h2>';
                            }
                        }


                    }
                ?>
            </table>
        </div>
    </div>

    <center><h3 style="color:green;">Displaying Employee Details </h3></center>


    <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="color:black;">id</th>
                      <th >Employee_Document</th>
                      <th style="color:black;">Employee_Name</th>
                      <th style="color:black;">Actual_Birthday</th>
                      <th style="color:black;">Blood_Group</th>
                      <th style="color:black;">Emergency_Contact_Number</th>
                      <th style="color:black;">Fathers_Name</th>
                      <th style="color:black;">PAN_Number</th>
                      <th style="color:black;">Phone</th>
                      <th style="color:black;">Reporting_To</th>
                      <th style="color:black;">UAN</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $con = mysqli_connect("localhost","root","","fanworld");
                $query = "SELECT * from `employee`";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $row)
                    {
                      ?>
                      <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['Employee_Document'];?></td>
                        <td><?= $row['Employee_Name'];?></td>  
                        <td><?= $row['Actual_Birthday'];?></td>
                        <td><?= $row['Blood_Group'];?></td>
                        <td><?= $row['Emergency_Contact_Number'];?></td>
                        <td><?= $row['Fathers_Name'];?></td>
                        <td><?= $row['PAN_Number'];?></td>
                        <td><?= $row['Phone'];?></td>
                        <td><?= $row['Reporting_To'];?></td>
                        <td><?= $row['UAN'];?></td>                
                      </tr>
                      <?php
                    }
                }
                else{
                  ?>
                  <tr>
                    <td colspan = "4"> No Record Found </td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
              </table>
      </div>
  </div>

</body>
</html>