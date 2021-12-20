<?php
require './includes/common.php';
$mail = filter_input(INPUT_POST,'email');
$mail = mysqli_real_escape_string($con, $mail);

$new_pass = filter_input(INPUT_POST,'newpassword');
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$rep_pass = filter_input(INPUT_POST,'repassword');
$rep_pass = mysqli_real_escape_string($con, $rep_pass);
$rep_pass = MD5($rep_pass);

$query = "SELECT email, password FROM users WHERE email =' ".$mail." '";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

if ($new_pass != $rep_pass) {
    header('location: forgotpass.php?error=The two passwords don\'t match');
} else {
     
    if ($new_pass == $rep_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $mail . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: forgotpass.php?error=Password Updated Successfully');
    }    
    else
    {
        header('location: forgotpass.php?error=Wrong Old Password');
}}
?>


