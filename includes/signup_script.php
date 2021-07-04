<?php
    require 'common.php';

    $name =  mysqli_real_escape_string($con,$_POST['name']);
    $email =  mysqli_real_escape_string($con,$_POST['email']);
    $password = md5 ( mysqli_real_escape_string($con,$_POST['password']));
    $contact =  mysqli_real_escape_string($con,$_POST['contact']);
    $city =  mysqli_real_escape_string($con,$_POST['city']);
    $address =  mysqli_real_escape_string($con,$_POST['address']);

    $select_query = "SELECT id , email FROM users WHERE email='$email'";
    $select_query_result = mysqli_query($con , $select_query)
    or die(mysqli_error($con));

    $total_rows_fetched = mysqli_num_rows($select_query_result);

    if($total_rows_fetched > 0)
    {
        echo "This email id id already registerd!!";
    }
    else
    {
        $user_signup_query = "INSERT INTO users(name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
        $user_signup_submit = mysqli_query($con,$user_signup_query)
        or die(mysqli_error($con));
        $id = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $id;
    
        header('location:..\products.php');
    }
?>