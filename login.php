<?php
require 'includes\common.php';
if(isset($_SESSION['email']))
{
    header('location:products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <title>Lifestyle Store</title>
    <link rel="stylesheet" href="css/nav-foot-styles.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php include 'includes\header.php' ?>

    <div class="card">
        <div class="card-header text-white bg-primary mb-3">
            LOGIN
        </div>
        <div class="card-body">
            <p class="text-warning">Login to make a purchase</p>
            <form method="post" action="includes\login_submit.php">
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="card-footer">
            Don't have an account? <span class="text-primary">Register</span>
        </div>
    </div>

    <?php include 'includes\footer.php'; ?>
</body>

</html>