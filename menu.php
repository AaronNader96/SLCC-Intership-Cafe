<!DOCTYPE html>
<html>

<head>
    <title>Miller Campus Cafeteria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md bg-red navbar-dark">
        <div class="container"> <a class="navbar-brand" href="#">Miller Campus Cafeteria</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link text-white" href="index.php">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link text-white" href="menu.php">Menu</a> </li>
                    <li class="nav-item"> <a class="nav-link text-white" href="specials.php">Daily Specials</a> </li>
                    <li class="nav-item"> <a class="nav-link text-white" href="custom.php">Custom Orders</a> </li>
                    <li class="nav-item"> <a class="nav-link text-white" href="contactus.php">Contact us</a> </li>
                </ul>
            </div>
        </div>
    </nav> <!-- Banner -->
    <div class="container-fluid bg-yellow py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Our 4 Menu Items</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-section">
        <h2 class="text-center mb-4">Please select a desire of your choice!</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="menu-item bg-blue text-center">
                        <h3 class="text-yellow">Burgers with French Fries</h3>
                        <p>Our juicy beef burgers are served on a freshly baked bun with lettuce, tomato, and your choice of cheese. Comes with a side of crispy french fries.</p>
                        <p class="price">$8.99</p> <button class="btn btn-warning order-btn" data-item="Burgers with French Fries" onclick="window.location.href='order-menu.php?item=Burgers with French Fries&price=8.99'">Order Now</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="menu-item bg-red text-center">
                        <h3 class="text-yellow">Hot Dog with French Fries</h3>
                        <p>Our all-beef hot dogs are grilled to perfection and served on a soft bun with your choice of toppings. Comes with a side of crispy french fries.</p>
                        <p class="price">$6.99</p> <button class="btn btn-warning order-btn" data-item="Hot Dog with French Fries" onclick="window.location.href='order-menu.php?item=Hot Dog with French Fries&price=6.99'">Order Now</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="menu-item bg-blue text-center">
                        <h3 class="text-yellow">Euro Greek Sandwich with French Fries</h3>
                        <p>This delicious sandwich features gyro meat, feta cheese, cucumber, tomato, red onion, and tzatziki sauce on a warm pita bread. Comes with a side of crispy french fries.</p>
                        <p class="price">$9.99</p> <button class="btn btn-warning order-btn" data-item="Euro Greek Sandwich with French Fries" onclick="window.location.href='order-menu.php?item=Euro Greek Sandwich with French Fries&price=9.99'">Order Now</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="menu-item bg-red text-center">
                        <h3 class="text-yellow">Steak with French Fries</h3>
                        <p>Our tender and juicy steak is seasoned to perfection and served with your choice of sauce. Comes with a side of crispy french fries.</p>
                        <p class="price">$12.99</p> <button class="btn btn-warning order-btn" data-item="Steak with French Fries" onclick="window.location.href='order-menu.php?item=Steak with French Fries&price=12.99'">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body> 

<!-- Footer -->
<footer class="container-fluid bg-dark text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-yellow">Miller Campus Cafeteria</h4>
                <p>4444 S 4444 W<br> Taylorsville, UT 84123<br> Phone: (801) 111-1111</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">&copy; 2023 Miller Campus Cafeteria. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

</html>