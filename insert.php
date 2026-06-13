<?php

include("db.php");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$check=mysqli_query(
$conn,
"SELECT * FROM users
WHERE email='$email'
OR phone='$phone'"
);

if(mysqli_num_rows($check)>0)
{
echo "Duplicate Record Found";
}
else
{
mysqli_query(
$conn,
"INSERT INTO users(name,email,phone)
VALUES('$name','$email','$phone')"
);

echo "Record Added Successfully";
}

?>
