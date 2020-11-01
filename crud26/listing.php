<?php
include_once 'connection.php';
//include_once 'modified.php';


if(isset($_POST['save']))
{    $id = $_POST['id'];
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $sql = "INSERT INTO regis (id,fname,mname,lname,email)
     VALUES ('$id','$fname','$mname','$lname','$email')";
     if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully !";
       // header("location:localhost:PHP/modified.php");
         // ob_start();
         // header("Location:localhost:PHP/modified.php/");
         // exit();
        echo "<script> location.href='modified.php'; </script>";
        exit;
    }
    else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>