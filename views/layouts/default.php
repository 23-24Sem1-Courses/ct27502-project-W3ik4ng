<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $this->e($title) ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/css/style.css" rel="stylesheet">

    <?= $this->section("page_specific_css") ?>
</head>

<body>
    <nav class="nav-primary navbar navbar-expand-md sticky-top navbar-light bg-light">
            <a href="/">
                <img class="img-fluid" width="100" height="100" src="https://i.imgur.com/KfPUqlK.jpeg" alt="logo">
            </a>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <div class="navbar-nav">
                &nbsp;
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="query" placeholder="Search...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            OK
                        </button>
                    </div>
                </div>  
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-gray" display: inline-block; href="/product">
                        <i class="fas fa-book"></i> Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-gray" display: inline-block; href="/cart">
                        <i class="fas fa-shopping-cart"></i> Your cart
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <?php if (!\App\SessionGuard::isUserLoggedIn()) : ?>
                        <a class="nav-link btn btn-gray dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> Account
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-scrollable" aria-labelledby="navbarDropdown">
                            <a class="nav-link btn btn-gray" display: inline-block; href="/login">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                            <a class="nav-link btn btn-gray" display: inline-block; href="/register">
                                <i class="fas fa-user-plus"></i> Register
                            </a>
                        
                        </div>
                    <?php else : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                <i class="fas fa-user"></i> 
                                <?= $this->e(\App\SessionGuard::user()->name) ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" class="d-none" action="/logout" method="POST">
                                </form>
                            </div>
                        </li>
                    <?php endif ?>
                </li>
            </ul>
        </div>
    </nav>
</body>
<hr/>
<?= $this->section("page") ?>

    <footer > 
    <hr/>
    <div class="row text-center  ml-5 mr-5   ">
        <div class="col mt-2 mx-3 ">
            <h5 class="border rounded border-success shadow mb-4">Customer support:</h5>
            <div class="card bg-light">
                <div class="card-body  ">
                    <ul class="list-unstyled   " >
                        <li><a class=" btn btn-gray"  href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a class=" btn btn-gray" href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a class=" btn btn-gray" href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>

                    

                    <p>Address: XYZ</p>
                    <p>Contact us: 039xxxx22</p>
                </div>
            </div>
        </div>
        <div class="col px-0 mt-2 mx-3">
            <h5 class="border rounded border-success shadow mb-4">Need help?</h5>
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled ">
                        <li><a class="btn btn-gray" href="#">Shopping manual</a></li>
                        <li><a class="btn btn-gray" href="#">Product delivery</a></li>
                        <li><a class="btn btn-gray" href="#">Our warranty policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="container text-center">
        <p class="text-muted">Copyright &copy; 2023 Web Development Course</p>
    </div>
</footer>


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <?= $this->section("page_specific_js") ?>


</html>