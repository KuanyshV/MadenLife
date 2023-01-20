<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Cosso </title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!--push menu cart -->
   
        <!-- /header -->
<div class="main-content space-padding-tb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="customer-page">
                            <div class="title-page">
                                <h3>Вход</h3>
                            </div>
                            <form method="POST" action="authorization.php" class="form-customer form-login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Имя пользователя/Электронный адрес *</label>
                                    <input type="email" name="email" class="form-control form-account" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Пароль*</label>
                                    <input type="password" name="password" class="form-control form-account" id="exampleInputPassword1">
                                </div>
                                <div class="form-check">
                                    <button type="submit" class="btn-login hover-white">Вход</button>
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                        <span>Запомнить меня</span>
                                    </label>
                                    <a href="" class="lost-password">Забыл пороль?</a>
                                </div>
                            </form>
                            <span class="divider"></span>
                            <a href="../register.html" class="btn link-button create-account hover-black">Новый аккаунт?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end wrapper product-->
        <!-- footer -->
      
        <!--end footer-->
    </div>
    <a href="#" class="scroll_top">SCROLL TO TOP<span></span></a>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>