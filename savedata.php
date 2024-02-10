<?php
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
$city = $_POST['city'];
$date = $_POST['bleeding_date'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address,city,bleed_date) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}','{$city}','{$date}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
if($result){
    echo "<script>alert('data is entered');</script>";
    echo "<script>window.open('home.php');</script>";
    
}


mysqli_close($conn);
 ?>
