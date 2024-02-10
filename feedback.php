<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
</head>

<body>
<?php
$active ='feedback';
 include('head.php') ?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">Feedback </h1>
      </div>
</div>
<form name="donor" action="feedback.php" method="POST">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Full Name<span style="color:red">*</span></div>
<div><input type="text" name="fullname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile Number<span style="color:red">*</span></div>
<div><input type="number" name="ph" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Email Id</div>
<div><input type="email" name="emailid" class="form-control"></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Age<span style="color:red">*</span></div>
<div><input type="text" name="age" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">last date of bleeding<span style="color:red">*</span></div>
<div><input type="date" name="date" id="">

</div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span></div>
<div><select name="blood" class="form-control" required>
  <option value="">Select</option>
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="AB+">AB+</option>
  <option value="O-">O-</option>
  <option value="O+">O+</option>
  <option value="AB-">AB-</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Address<span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
<div class="col-lg-4 mb-4">
<div class="font-italic">suggestion<span style="color:red">*</span></div>
<div><textarea class="form-control" name="suggest" required></textarea></div>
</div>

</div>
<div class="row">
  <div class="col-lg-4 mb-4">
  <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
  </div>
</div>
</div>
</div>
<?php include('footer.php') ?>
</div>
</body>
</html>

<?php
include 'conn.php';
if(isset($_POST['submit'])){
    $name = ""; $email = ""; $age = ""; $mobile = ""; $date =""; $add = ""; $sugg = ""; $group = "";
$name = $_POST['fullname'];
$email = $_POST['emailid'];
$age = $_POST['age'];
$mobile = $_POST['ph'];
$date = $_POST['date'];
$add = $_POST['address'];
$sugg = $_POST['suggest'];
$group = $_POST['blood'];




$result = " INSERT INTO Feedback (num, EMAIL, AGE, BLEED_DATE, BLOOD_GROUP, ADDRESS, SUGGEST, NAME	
)values('$mobile','$email','$age','$date','$group','$add','$sugg','$name')";

if(mysqli_query($conn,$result)){

    echo "<script>alert('data is entered');</script>";
}else{
    mysqli_error($conn);
}
}?>