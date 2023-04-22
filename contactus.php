<!DOCTYPE html>
<html>

<head>
    <title>Miller Campus Cafeteria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    </nav>

    <div class="container-fluid bg-yellow py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Custom Us!</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="container py-5">
        <form method="post" action="contact.php">
            <div class="form-group"> <label for="name">Name:</label> <input type="text" class="form-control" id="name" name="name" required> </div>
            <div class="form-group"> <label for="email">Email:</label> <input type="email" class="form-control" id="email" name="email" required> </div>
            <div class="form-group"> <label for="message">Message:</label> <textarea class="form-control" id="message" name="message" rows="5" required></textarea> </div> <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 

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