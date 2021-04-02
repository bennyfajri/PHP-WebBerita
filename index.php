<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Web Berita Benny</title>
    <meta name="description" content="Sasha - Blogging HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Import Icon Packs -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/elegent-icons.css">

    <!-- Import External Scrpit CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <!-- Import Template CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/themes.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script> -->

    <script src="assets/js/modernizr-2.8.3.min.js"></script>

</head>


<body>

    <div class="overlay-wrapper">

        <header class="masthead">
            <div class="header-top">
                <div class="container">
                    <div class="side-menu-trigger"><span class="trigger-icon"><i class="icon_menu"></i></span></div><!-- /.side-menu-trigger -->
                    <a class="navbar-brand hidden-xs" href="./"><img src="assets/webbenny-01.png" alt="Site Logo"></a>
                    <div class="menu-search">
                        <div class="form-trigger"><i class="icon_search"></i></div>
                        <form action="#">
                            <input type="text" name="search" id="menu-search" placeholder="Search here..">
                        </form>
                    </div>

                    <nav class="sidebar-menu">
                        <a class="navbar-brand" href="index.php"><img src="assets/webbenny.png" width="200" height="100" alt="Site Logo"></a>
                        <span class="menu-close"><i class="icon_close"></i></span>

                        <ul class="nav navbar-nav">
                            <li class="menu-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="menu-item"><a href="admin/login.php">Login</a></li>
                        </ul><!-- /.navbar-nav -->

                        <div class="menu-social">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div><!-- /.menu-social -->
                    </nav><!-- /.sidebar-menu -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->

            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand visible-xs" href="./"><img src="http://demos-jeweltheme.ipunu91y.maxcdn-edge.com/sasha/images/logo3.png" alt="Site Logo"></a>
                        </div>

                        <div id="main-menu" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                               <li class="menu-item menu-item-has-children">
                                    <a href="index.php">Home</a>
                                </li>
                               <li class="menu-item">
                                    <a href="?module=teknologi">Teknologi</a>
                                </li>
                                <li class="menu-item">
                                    <a href="?module=kesehatan">Kesehatan</a>
                                </li>
                                <li class="menu-item"><a href="?module=sport">Sport</a></li>
                                <li class="menu-item"><a href="?module=politik">Politik</a></li>
                                <li class="menu-item"><a href="?module=travel">Travel</a></li>
                            </ul><!-- /.navbar-nav -->
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div><!-- /.container -->
            </div><!-- /.header-bottom -->
        </header><!-- /.masthead -->

        <section class="main-content">
            <div class="padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="default-posts-left">
                              <main class="container-fluid">
                                  <?php
                                    include 'main.php';
                                  ?>
                              </main>
                            
                            </div><!-- /.default-posts -->

                       </div>

                       <div class="col-sm-4">
                        <aside class="sidebar text-justify">
                            <div class="widget">
                                <h3 class="widget-title">Berita Terbaru</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                     <main role="main">
                                     <?php
                                        
                                            $sebelum = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC LIMIT 5");
                                                while($s=mysqli_fetch_array($sebelum)){
                                                echo "<p><a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></p>";
                                                    }
                                               
                                             ?>
                                        </main>
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            <div class="widget">
                                <h3 class="widget-title">Komentar Terbaru</h3><!-- /.widget-title -->
                                <div class="widget-details">
                                     <main role="main">
                                     <?php
                                        
                                            $komentar1 = mysqli_query($koneksi,"SELECT nama,judul,komentar.id_berita FROM komentar join berita where komentar.id_berita = berita.id_berita ORDER BY id_komentar DESC LIMIT 5");
                                             $namaBerita = mysqli_query($koneksi,"SELECT * FROM berita");
                                                while($s=mysqli_fetch_array($komentar1)){
                                                echo "<p><h5>$s[nama] di </h5><a href=?module=detailberita&id=$s[id_berita]>$s[judul]<br></a></p>";
                                                    }
                                            
                                             ?>
                                        </main>
                                </div><!-- /.widget-details -->
                            </div><!-- /.widget -->

                            
                            </div><!-- /.widget -->

                            
                        </aside><!-- /.sidebar -->
                    </div> 
                </div><!-- /.row -->
            </div><!-- /.container
        </div><!-- /.padding -->
    </section><!-- /.main-content -->

 `  <footer class="site-footer colophon">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                </div>

                <div class="col-sm-6">
                    <div class="copyright text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i>
                    </div><!-- /.copyright -->
                </div>

                <div class="col-sm-3">
                    <div class="footer-social pull-right">
                    </div><!-- /.footer-social -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.site-footer -->

</div><!-- /.overlay -->

<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
