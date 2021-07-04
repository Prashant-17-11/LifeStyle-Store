<?php
require 'common.php';

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5 (mysqli_real_escape_string($con,$_POST['password']));

$select_query = "SELECT id , email FROM users WHERE email='$email' AND password='$password'";
$select_query_result = mysqli_query($con , $select_query)
or die(mysqli_error($con));

$total_rows_fetched = mysqli_num_rows($select_query_result);

if($total_rows_fetched == 0)
{
    echo "No User Found in the database!! Please Sign Up first.";
}
else
{
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];

    header('location:..\products.php');
}

?>
