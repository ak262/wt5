<?php
include_once 'connection.php';
include_once 'listing.php';
$result = mysqli_query($conn,"SELECT * FROM regis");
?>

<!DOCTYPE html>
<html>
 <head>
 <title>Admissions</title>
 <style>
     table, th, td {
  border: 1px solid black;
}
 </style>
 </head>
<body>
<?php
echo "New Record Created!";

if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <tr>
    <td>Id</td>
    <td>First Name</td>
    <td>Middle Name</td>
    <td>Last Name</td>
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["mname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>