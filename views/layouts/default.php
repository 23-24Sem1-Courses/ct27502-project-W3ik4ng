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
    <a href="#">
        <img class="img-fluid" width="100" height="100" src="https://i.imgur.com/KfPUqlK.jpeg" alt="logo">
    </a>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <div class="navbar-nav">
            &nbsp;
        </div>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="query" placeholder="Tìm kiếm...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        OK
                    </button>
                </div>
            </div>  
            </li>

            <li class="nav-item">
                <a class="nav-link btn btn-gray" display: inline-block; href="#">
                    <i class="fas fa-book"></i> Sản phẩm
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link btn btn-gray" display: inline-block; href="#">
                    <i class="fas fa-money-bill-alt"></i> Thanh toán
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link btn btn-gray" display: inline-block; href="#">
                    <i class="fas fa-shopping-cart"></i> Giỏ hàng
                </a>
            </li>

            <li class="nav-item dropdown">
                <?php if (!\App\SessionGuard::isUserLoggedIn()) : ?>
                    <a class="nav-link btn btn-gray dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Tài khoản
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-scrollable" aria-labelledby="navbarDropdown">
                        <a class="nav-link btn btn-gray" display: inline-block; href="/login">
                            <i class="fas fa-user-plus"></i> Đăng ký
                        </a>
                        <a class="nav-link btn btn-gray" display: inline-block; href="/register">
                            <i class="fas fa-sign-in-alt"></i> Đăng nhập
                        </a>
                    </div>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
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

    <hr/>

    <?= $this->section("page") ?>

    <footer class="footer">
        <hr/>
        <div class="row text-center">
            <div class="col px-0 mt-2 mx-3">
                <p class="border rounded border-success shadow mb-4">Hỗ trợ khách hàng  </p>
                <div class="card">

                    <div class="card-body">
                        <p>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="nav-item d-flex justify-content-center">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>

                            </li>
                        </p>
                        <p><a href="">địa chỉ: xyz</a></p>
                        <p><a href="">039xxxx22</a></p>
                    </div>

                </div>
            </div>
            <div class="col px-0 mt-2 mx-3">
                <p class="border rounded border-success shadow mb-4">Trợ giúp </p>
                <div class="card">

                    <div class="card-body">
                        <p><a href="">Hướng dẫn mua hàng</a></p>
                        <p><a href="">Phương thực vận chuyển</a></p>
                        <p><a href="">Chính sách bảo hành</a></p>
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
</body>

</html>