<?php
$hostname="127.0.0.1";
$username="root";
$password="Parth0510";
$db_name="NGO";
$conn=mysqli_connect($hostname,$username,$password,$db_name);
if(!$conn)
  {
    echo "❌ Database connection failed: " . mysqli_connect_error();
    exit;
  }
else
  {
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $gender=$_POST['Gender'];
    $address=$_POST['Address'];
    $perspective=$_POST['Perspective'];
    $sql="Insert into vol_application (Name,Email,Password,Gender,Address,Perspective)values('$name','$email','$password','$gender','$address','$perspective');";
    $result=mysqli_query($conn,$sql);
    if(!$result)
      {
        echo "⚠️ Oops! Something went wrong while submitting your application. Please try again later. Error: " . mysqli_error($conn);
        exit;
      }
    else 
     {
        echo "🎉 Thank you, $name! Your volunteer application has been submitted successfully. 🌱 
        We appreciate your willingness to contribute. Together, we can create a brighter future.";
     }
    }
  }
  mysqli_close($conn);
?>
