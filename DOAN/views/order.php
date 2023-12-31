<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="/CONCASAU/DOAN/Style/style.css"/>
    <link rel="icon" href="https://www.dior.com/static/beauty/favicon/favicon.ico">
    <title>DIOR</title>
</head>
<body>
    <!-- navitigation bar -->
    <div class="wrapper">
      <header>
        <div style="height: 100px;"></div>
            <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
                
                    <!-- Logo -->
                    <a class="navbar-brand" href="/CONCASAU/DOAN/views/index.php" ><img src="https://logos-world.net/wp-content/uploads/2021/08/Christian-Dior-Symbol.png" width="100"  /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-label="Toggle navitigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <!-- actual navitigation menu -->
                    <div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
                        <ul class="navbar-nav">
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/index.php">HOME</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/makeup_category.php">MAKE-UP</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/men_fg_category.php">MEN'S FRAGRANCE</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/women_fg_category.php">WOMEN'S FRAGRANCE</a>
                        </li>
                        <li class="nav-item ml-3">
                        <a class="nav-link" href="/CONCASAU/DOAN/views/cart_invoke.php">GIỎ HÀNG</a>
                        </li>
                        <li class="nav-item ml-3">
                        <a class="nav-link" href="/CONCASAU/DOAN/views/user_invoke.php">TÀI KHOẢN</a>
                        </li>
                        </ul>
                </div>   
            </nav>
        </header>

            <main class="content dynamic-container">

                <h3 class ="text-center" style="margin-bottom: 2rem; margin-top: 2rem;">Lịch sử mua hàng</h3>

                    <?php
                        require_once($_SERVER['DOCUMENT_ROOT']."/CONCASAU/DOAN/controllers/order_controller.php");
                        require_once($_SERVER['DOCUMENT_ROOT']."/CONCASAU/DOAN/controllers/user_controller.php");
                        $userController = new UserController(); 
                        $controller = new OrderController();
                        $controller->getOrderItemsDetails($_SESSION["user_id"]);
                    ?>

            </main>
            <div style="height:200px"></div>
            <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-12">
                        <hr class="light" />
                        <h5>Contact Us</h5>
                        <hr class="light" />
                        <p>0948 999 999</p>
                        <p>269 Nguyễn Tri Phương</p>
                        <p>Quận 10, Thành phố Hồ Chí Minh</p>
                    </div>
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Office Hours</h5>
                        <hr class="light" />
                        <p>Mon - Sar: 8:00 - 17:00</p>
                        <p>Sun: Closed</p>
                    </div>  
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Regional Offices</h5>
                        <hr class="light" />
                        <p>Quận 10, Hồ Chí Minh</p>
                        <p>Quận 3, Hồ Chí Minh</p>
                        <p>Huyện Bình Chánh, Hồ Chí Minh</p>
                        <p>Vĩnh Long</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100" />
                        <h5>&copy; H&A Corp, 2022</h5>
                    </div>
                </div>
            </div>
        </footer>

        </div>
    </body>
</html>