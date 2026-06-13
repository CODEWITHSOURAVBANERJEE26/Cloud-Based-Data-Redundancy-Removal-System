<?php

include("db.php");

$total=mysqli_num_rows(
mysqli_query(
$conn,
"SELECT * FROM users"
)
);

echo "Total Records : ".$total;

?>
