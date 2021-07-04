<nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
    <div class="navleft">
        <a class="navbar-brand" href="index.php">Lifestyle Store</a>
    </div>
    <div class="navright">
        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav">

                <?php
                    if(isset($_SESSION['email'])) {
                ?>

                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512' widht="24" height="24"><title>Cart</title><circle cx='176' cy='416' r='16' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><circle cx='400' cy='416' r='16' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32' d='M48 80h64l48 272h256'/><path d='M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/></svg> Cart</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="settings.php"><svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512' widht="24" height="24"><title>Person</title><path d='M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path d='M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z' fill='none' stroke='currentColor' stroke-miterlimit='10' stroke-width='32'/></svg> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512' widht="24" height="24"><title>Log Out</title><path d='M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40M368 336l80-80-80-80M176 256h256' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/></svg> Log Out</a>
                </li>
                
                <?php 
                }
                else {
                ?>
                
                <li class="nav-item ">
                    <a class="nav-link" href="signup.php"><svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512' widht="24" height="24"><title>Person</title><path d='M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path d='M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z' fill='none' stroke='currentColor' stroke-miterlimit='10' stroke-width='32'/></svg> Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512' widht="24" height="24"><title>Log In</title><path d='M192 176v-40a40 40 0 0140-40h160a40 40 0 0140 40v240a40 40 0 01-40 40H240c-22.09 0-48-17.91-48-40v-40' fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='32' d='M288 336l80-80-80-80M80 256h272'/></svg> Log In</a>
                </li>
                
                <?php } ?>
            </ul>
        </div>
        <button class="navbar-toggler navright" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>
