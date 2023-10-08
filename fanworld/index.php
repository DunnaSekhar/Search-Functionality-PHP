<?php
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
</head>

<body>
<br> 
<style>
body {
  /* background-image: url('bg.jpeg'); */
  background:url(img/40.png)no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style> 

  <div class="container">
    <!-- User profile -->
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center">
        <img src="./img/blank-avatar.jpg" class="img-fluid rounded" alt="User avatar" width="180">
        <h4 class="my-4">Welcome, <?= htmlspecialchars($_SESSION["username"]); ?></h4>
        <a href="./logout.php" class="btn btn-success">Log Out</a>
      </div>
    </div>
  </div>

  <br> <br>

  <!-- import the excel file -->
  <?php
    if(isset($_SESSION['message']))
    {
        echo "<h4>".$_SESSION['message']."</h4>";
        unset($_SESSION['message']);
    }
  ?>
  <div class="card">
      <div class="card-header">
          <h4>Import Excel Data</h4>
      </div>
      <div class="card-body">
          <form action="code.php" method="POST" enctype="multipart/form-data">
              <input type="file" name="import_file" class="form-control" />
              <button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Import</button>
          </form>
      </div>
    </div>
    <br> <br>
   <!-- Search Functionality -->
    <div class="card">
        <div class="card-header">
            <h4>To Search Employee</h4>
      </div>
            <div class="card-body">
                <a href="search.php"> <button>SEARCH</button> </a>                       
            </div>
    </div>
    <br>

      <!-- Gemini Map -->
    <section class="ftco-section contact-section bg-light">
		<div class="container">
			<div class="row block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="#" class="bg-white p-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control"
								placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" onclick="myFunction()" value="Send Message"
								class="btn btn-primary py-3 px-5">
						</div>
					</form>
					<script>
						function myFunction() {
							alert("Thanks For Reaching Us!!");
						}
					</script>
				</div>
				<div class="col-md-6 d-flex">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.6742585352413!2d78.32949321418809!3d17.427413306238165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb912ceb96f37b%3A0x6bf9ecb6d6364f52!2sGemini%20Consulting%20%26%20Services%20India%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1636085692710!5m2!1sen!2sin"
						width="600" height="450" style="border: 0;" allowfullscreen=""
						loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>


</body>

</html>