<?php require_once "./halaman-admin/dbkoneksi.php"; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOTOZONE | DEPOK</title>

    <link rel="icon" href="img/logo/2.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/3.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language2.png" alt="">
                <div>Indonesian</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Indonesian</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="./login.html"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="#produk">Produk</a></li>
                <li><a href="#artikel">Artikel</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> moto.zone@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> moto.zone@gmailcom</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language2.png" alt="">
                                <div>Indonesian</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Indonesian</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header_logo">
                            <a href="./home.php"><img src="img/logo/3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="./home.php">Beranda</a></li>
                                <li><a href="./home.php">Produk</a></li>
                                <li><a href="./home.php">Artikel</a></li>
                                <li class="active"><a href="form-pesanan.php">Pesanan</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart">
                            <ul>
                            <li><a href="./halaman-admin/login.html" style="color: black;"><i class="fa fa-user"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner3.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>PESANAN MOTOR</h2>
                        <div class="breadcrumb__option">
                            <a href="./home.php">Home</a>
                            <span>Pesanan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <form action="proses-pesanan.php" method="POST">
                    <div class="form-group row">
                        <label for="nama_pelanggan" class="col-4 col-form-label">Nama Pelanggan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control" placeholder="Masukkan Nama Lengkap*">
                        </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="alamat_pelanggan" class="col-4 col-form-label">Alamat Pelanggan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="alamat_pelanggan" name="alamat_pelanggan" type="text" class="form-control" placeholder="Masukkan Alamat Lengkap*">
                        </div>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="motor_id" class="col-4 col-form-label">Jenis Motor</label> 
                        <div class="col-8">
                            <div class="input-group">
                                <?php 
                                $sqljenis = "SELECT * FROM motor";
                                $rsjenis = $dbh->query($sqljenis);
                                ?>
                                <select id="motor_id" name="motor_id" class="col-12">
                                <?php 
                                    if (isset($_GET["idedit"])) {
                                    $id_jenis = $row["motor_id"];
                                    $query2 = "SELECT * FROM motor WHERE id = '$id_jenis'";
                                    $sql2 = $dbh->query($query2);
                                    $row2 = $sql2->fetch();
                                    echo '<option value="'.$row2['id'].'">'.$row2['nama_motor'].'</option>';
                                    }
                                        foreach($rsjenis as $rowjenis){
                                ?>
                                    <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama_motor']?></option>
                                <?php
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="quantity" class="col-4 col-form-label">Jumlah Motor</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <input id="quantity" name="quantity" type="number" class="form-control" placeholder="Masukkan Jumlah Motor*">
                        </div>
                        </div>
                    </div>
                    <br>
                
                    <button type="submit" name="proses" value="Simpan" class="site-btn">Simpan</button>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./home.php"><img src="img/3.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Alamat: Jl.Durian Runtuh, Cileni, Depok</li>
                            <li>Phone: 0857 7428 8294/li>
                            <li>Email: moto.zone@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | AzkaZharari</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>