<?php require 'includes\common.php' ?>
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
    <link rel="stylesheet" href="css/nav-adjust-style.css">
    <link rel="stylesheet" href="css/products.css">
</head>

<body>
    <?php include 'includes\header.php' ?>

    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/5.jpg" class="card-img-top" alt="Cannon EOS">
                    <div class="card-body">
                        <h5 class="card-title">Cannon EOS</h5>
                        <p class="card-text">Price: Rs.36000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/2.jpg" class="card-img-top" alt="Sony DSLR">
                    <div class="card-body">
                        <h5 class="card-title">Sony DSLR</h5>
                        <p class="card-text">Price: Rs.40000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/3.jpg" class="card-img-top" alt="Sony DSLR">
                    <div class="card-body">
                        <h5 class="card-title">Sony DSLR</h5>
                        <p class="card-text">Price: Rs.50000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/4.jpg" class="card-img-top" alt="Olympus DSLR">
                    <div class="card-body">
                        <h5 class="card-title">Olympus DSLR</h5>
                        <p class="card-text">Price: Rs.80000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="watches">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/9.jpg" class="card-img-top" alt="Titan Model #301">
                    <div class="card-body">
                        <h5 class="card-title">Titan Model #301</h5>
                        <p class="card-text">Price: Rs.13000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/10.jpg" class="card-img-top" alt="Titan Model #201">
                    <div class="card-body">
                        <h5 class="card-title">Titan Model #201</h5>
                        <p class="card-text">Price: Rs.3000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/11.jpg" class="card-img-top" alt="HMT Milan">
                    <div class="card-body">
                        <h5 class="card-title">HMT Milan</h5>
                        <p class="card-text">Price: Rs.8000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/12.jpg" class="card-img-top" alt="Faber Luba #111">
                    <div class="card-body">
                        <h5 class="card-title">Faber Luba #111</h5>
                        <p class="card-text">Price: Rs.18000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img//8.jpg" class="card-img-top" alt="H&W">
                    <div class="card-body">
                        <h5 class="card-title">H&W</h5>
                        <p class="card-text">Price: Rs.800.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/6.jpg" class="card-img-top" alt="Luis Phil">
                    <div class="card-body">
                        <h5 class="card-title">Luis Phil</h5>
                        <p class="card-text">Price: Rs.1000.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/13.jpg" class="card-img-top" alt="John Zok">
                    <div class="card-body">
                        <h5 class="card-title">John Zok</h5>
                        <p class="card-text">Price: Rs.1500.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <img src="img/14.jpg" class="card-img-top" alt="Jhalsani">
                    <div class="card-body">
                        <h5 class="card-title">Jhalsani</h5>
                        <p class="card-text">Price: Rs.1300.00</p>
                        <button type="submit" class="btn btn-primary btn-block">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes\footer.php'; ?>
</body>

</html>