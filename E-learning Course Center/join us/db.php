<?php

$name=$_POST["name"];
$age=$_POST["age"];
$course=$_POST["course"];

$conn = mysqli_connect("localhost:3308", "root", "", "dbjoin");
// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO regi(name,age,course) VALUES('$name','$age','$course')";


if (mysqli_query($conn, $sql)) 

{
  echo "New record created successfully";

} else 

{


  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>