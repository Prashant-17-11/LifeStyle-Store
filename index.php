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

    <title>Lifestlye Store</title>
    <link rel="stylesheet" href="css/nav-foot-styles.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php include 'includes\header.php' ?>

    <div class="content">
        <div class="banner-image">
            <div class="inner-banner-image">
                <div class="container" id="banner-content">
                    <h1>We sell Lifestlye</h1>
                    <p>Flat 40% OFF on premium brands</p><br>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes\footer.php'; ?>
</body>

</html>