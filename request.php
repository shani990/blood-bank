<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

</head>
<body>
    <?php
    $active = 'request';
include 'head.php';
include 'conn.php';


if(isset($_POST['submit'])){
  $name=""; $email=""; $num=""; $date=""; $txt="";

  $name = $_POST['name'];
  $email = $_POST['blood'];
  $num = $_POST['num'];
  $date = $_POST['date'];
  $txt = $_POST['txt'];
 

$result = "INSERT INTO contact_query(query_name	,blood_group	,query_number	,query_message	,query_date	)values('{$name}','{$email}','{$num}','{$txt}','{$date}')";

if(mysqli_query($conn,$result)){

  echo "<script>alert('data is entered shortly we will contact you');</script>";
}else{
  mysqli_error($conn);
}

}





?>

<div class="container">
  <p class="h1">
    request for blood 
  </p>
<form action="" method="POST">
<div class="row row-cols-1">
  <div class="col">
  <div>Patient Name: <span style="color:red">*</span></div>
  <div><input type="text" class="form-control"  name="name" required></div></div>
  <div class="col">
  <div class="font-italic">Blood Group<span style="color:red">*</span></div>
  <div><select name="blood" class="form-control" required>
    <option value=""selected disabled>Select</option>
    <?php
      include 'conn.php';
      $sql= "select * from blood";
      $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
    while($row=mysqli_fetch_assoc($result)){
     ?>
     <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
    <?php } ?>
</select>
</div>
    </div>
  <div class="col">
  <div>number: <span style="color:red">*</span></div>
  <div><input type="number" class="form-control" required name="num"></div></div>
  
  <div class="col">
  <div>date till blood required: <span style="color:red">*</span></div>
  <div><input type="datetime-local" class="form-control" required name="date"></div></div>
  <div class="col">
  <div>send us blood details and  <span style="color:red">*</span></div>
  <div><textarea name="txt" id="" cols="30" rows="10" class="form-control" required ></textarea></div></div>
  <div class="col">
 <br>
  <div><input type="submit" class="btn btn-outline-primary" name="submit"></div></div>


  </div>
</form>
</div>
</body>
</html>