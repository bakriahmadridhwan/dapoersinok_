<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICON -->
    <link rel="icon" href="<?= base_url(); ?>dapoer/icon/dp.ico" type="image/gif" sizes="16x16">

    <!-- CSS
        ================================================ -->
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url(); ?>dapoer/css/owl.carousel.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?= base_url(); ?>dapoer/css/bootstrap.min.css">
    <!-- Font-awesome.min css -->
    <link rel="stylesheet" href="<?= base_url(); ?>dapoer/css/font-awesome.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>dapoer/css/animate.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>dapoer/css/main.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>dapoer/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

</head>

<body>
    <!--
	header-img start 
	============================== -->
    <section id="hero-area">
        <img style="filter: brightness(.85); background-attachment: fixed;" class="img-responsive" src="<?= base_url(); ?>dapoer/images/header.jpg" alt="">

    </section>
    <!--
    Header start 
	============================== -->
    <nav id="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">
                                        <img src="<?= base_url(); ?>dapoer/images/logo.png" alt="Logo">
                                    </a>

                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right" id="top-nav">
                                        <li><a href="#hero-area">Home</a></li>
                                        <li><a href="#about-us">about us</a></li>
                                        <li><a href="#blog">menu</a></li>
                                        <li><a href="#price">price</a></li>
                                        <li><a href="#subscribe">news</a></li>
                                        <li><a href="#contact-us">contacts</a></li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </nav><!-- header close -->
    <!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Gallery <span>Images</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-4.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-5.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-6.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-7.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-8.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-9.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-10.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-11.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-responsive" src="<?= base_url(); ?>dapoer/images/slider/slider-img-12.jpg" alt="">
                            </div>

                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->
    <!--
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <img style="border-radius: 50%;" width="150" height="150" class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="<?= base_url() ?>dapoer/images/own.jpg" alt="cooker-img">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">Dapoersinok <span>Owner</span> </br> "GOOD TASTE FOR A <span>GOOD DAY"</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Kurus atau gendut adalah sebuah pilihan.<br> Tapi makan dengan nikmat ialah suatu kebutuhan.</p>

                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">HAVE A <span>GOOD MEAL</span></span>
                        </h1>

                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Agar dapat berpikir, beristirahat, dan mencintai dengan baik.</p>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
    <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Latest <span>From</span> the <span>Menu</span></h1>
                        <ul>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="blog-img">
                                    <img src="<?= base_url(); ?>dapoer/images/blog/blog-img-1.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Paket Bento Super Wareg</h3>
                                    <p></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="blog-img">
                                    <img src="<?= base_url(); ?>dapoer/images/blog/blog-img-2.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Paket Paha Lalapan Minimalis</h3>
                                    <p></p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="content-left">
                                    <h3>Paket Mangut Lele Minimalis</h3>
                                    <p></p>
                                </div>
                                <div class="blog-img">
                                    <img src="<?= base_url(); ?>dapoer/images/blog/blog-img-3.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="content-left">
                                    <h3>Paket Bento Ekonomis</h3>
                                    <p></p>
                                </div>
                                <div class="blog-img">
                                    <img src="<?= base_url(); ?>dapoer/images/blog/blog-img-4.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="blog-img">
                                    <img src="<?= base_url(); ?>dapoer/images/blog/blog-img-5.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Paket Kluban Bancaan</h3>
                                    <p></p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="blog-img">
                                    <img src="<?= base_url(); ?>dapoer/images/blog/blog-img-6.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Paket Tasyakuran Khotmil Qur'an</h3>
                                    <p></p>
                                </div>
                            </li>
                        </ul>
                        <a href="https://www.instagram.com/dapoersinok__/" target="_blank" class="btn btn-default btn-more-info wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->
    <!--
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Kami siap melayani berbagai request order Anda. Negosiasikan pesanan sesuai kebutuhan dan kenyamanan Anda. <br>Yuk negosiasikan dan pilih tanggal terbaik Anda untuk request order di @dapoersinok__ 🤗 </p>
                        <div class="pricing-list">
                            <div class="title">
                                <h3>Featured <span>on last menu update</span></h3>
                            </div>
                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paket Bento Super Wareg</h2>
                                            <div class="border-bottom"></div>
                                            <span>MULAI DARI Rp 10.000,-</span>
                                        </div>
                                        <p>Setelah antar langsung santap untuk lunch sampe wareeggg</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paket Paha Lalapan Minimalis</h2>
                                            <div class="border-bottom"></div>
                                            <span>MULAI DARI Rp 10.000,-</span>
                                        </div>
                                        <p>@dapoersinok__ siap melayani Anda dengan sepenuh hati </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paket Mangut Lele Minimalis </h2>
                                            <div class="border-bottom"></div>
                                            <span>MULAI DARI Rp 10.000,-</span>
                                        </div>
                                        <p>yummy dengan budged ramah di kantong</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paket Bento Ekonomis</h2>
                                            <div class="border-bottom"></div>
                                            <span>MULAI DARI Rp 10.000,-</span>
                                        </div>
                                        <p>BEST SELLER!! </p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="700ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paket Kluban Bancaan</h2>
                                            <div class="border-bottom"></div>
                                            <span>MULAI DARI Rp 10.000,-</span>
                                        </div>
                                        <p>Ada berbagai macam paket yang bisa ayah bunda pilih-pilih. Mau paket minimalis, ekonomis, atau ekstra komplit juga bisa banget. Pokoknya tinggal calling aja deh hehehe</p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                    <div class="item">
                                        <div class="item-title">
                                            <h2>Paket Tasyakuran Khotmil Qur'an</h2>
                                            <div class="border-bottom"></div>
                                            <span>MULAI DARI Rp 10.000,-</span>
                                        </div>
                                        <p>@dapoersinok__ senantiasa berusaha menyajikan pesanan Anda dengan sebaik mungkin, baik rasa maupun tampilan dalam berbagai keperluan Anda. Dengan harga yang insyaAllah terjangkau dan ramah di kantong Anda 😁</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="https://www.instagram.com/dapoersinok__/" target="_blank" class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->
    <!--
    subscribe start
    ============================ -->
    <section id="subscribe">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUGGESTION <span>to our</span> NEWSLETTER</h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                            @dapoersinok__ selalu berusaha mengerti keinginan dan kebutuhan customer yaa. Bisa banget dinegosiasikan request order dengan budget yang ada. Sehingga Anda nyaman kami senang 🤗
                        </p>
                        <form action="<?= base_url('landing/index') ?>" method="POST" class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="sugg" name="sugg" required placeholder="Enter menu suggestions to be made...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default tombol-kirim" type="submit" id="tombol">send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #subscribe close -->
    <!--
    CONTACT US  start
    ============================= -->
    <section id="contact-us">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">our <span>CONTACT US</span></h1>
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Fill in for <span>Email Alerts</span> </h3>
                        <form action="<?= base_url('landing/mess'); ?>" method="POST">
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>" placeholder="Write your full name here..." required>
                                <?php echo form_error('name', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="email" class="form-control" placeholder="Write your email address here..." id="email" name="email" value="<?php echo set_value('name'); ?>" required>
                                <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea class="form-control" rows="3" placeholder="Write your message here..." required id="pesan" name="pesan"></textarea>
                                <?php echo form_error('pesan', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <button class="btn btn-light wow bounceIn btn-lg" data-wow-duration="500ms" data-wow-delay="1300ms" type="submit"><b style="text-transform: uppercase;"> send your message</b></button>
                        </form>

                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->

    <!--
    footer  start
    ============================= -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft" data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                                <li>
                                    <h4><i class="fa fa-phone"></i>Telephone</h4>
                                    <p><a href="https://api.whatsapp.com/send?phone=6282137134927">+62 821-3713-4927</a></p>

                                </li>
                                <li>
                                    <h4><i class="fa fa-map-marker"></i>Address</h4>
                                    <p>Daleman, Kledung Karangdalem, RT 4 RW 1, Kecamatan Banyuurip, Kabupaten Purworejo, Jawa Tengah 54171 </p>
                                </li>
                                <li>
                                    <h4><i class="fa fa-envelope"></i>Email</h4>
                                    <p>dapoersinok2@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft" data-wow-delay="700ms">
                        <h3>LAST <span>POSTS</span></h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><a href="https://www.instagram.com/p/CIzzLrHnSav/" target="_blank">Dec 15-2020</a></h4>
                                    <p>Merasakan kenikmatan tidak perlu menunggu yang mahal dan mempesona. Cukup syukuri apa yang kita miliki di depan mata.</p>
                                </li>
                                <li>
                                    <h4><a href="https://www.instagram.com/p/CIpYS5UHrVh/" target="_blank">Dec 11-2020</a></h4>
                                    <p>Jadi ini ceritanya customer pengen nasinya pas dimakan masih anget, alhasil pas ditutup ngembun dan nggak keliatan nasi sama kerupuknya 😂</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft" data-wow-delay="1100ms">
                        <div class="gallary">
                            <h3>PHOTO <span>STREAM</span></h3>
                            <ul>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>dapoer/images/photo/photo-1.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>dapoer/images/photo/photo-2.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>dapoer/images/photo/photo-3.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="<?= base_url(); ?>dapoer/images/photo/photo-4.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="https://twitter.com/CindyyPras" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/dapoer.sinok" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/dapoersinok__/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                            <h3>Admin <span>AREA</span></h3>
                            <ul>
                                <li>
                                    <a href="<?= base_url('auth'); ?>">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
    <!--
    footer-bottom  start
    ============================= -->
    <footer id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="block">
                        <p>Dapoersinok <i class="fa fa-heart"></i> <a href="https://www.instagram.com/dapoersinok__/" target="_blank">All Right Reserved.</a></p>
                        <p>updated january 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Js -->
    <script src="<?= base_url(); ?>dapoer/js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <script>
        window.jQuery || document.write('<script src="<?= base_url(); ?>dapoer/js/vendor/jquery-1.10.2.min.js"><\/script>')
    </script>
    <script src="<?= base_url(); ?>dapoer/js/jquery.nav.js"></script>
    <script src="<?= base_url(); ?>dapoer/js/jquery.sticky.js"></script>
    <script src="<?= base_url(); ?>dapoer/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>dapoer/js/plugins.js"></script>
    <script src="<?= base_url(); ?>dapoer/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>dapoer/js/main.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/myscript.js"></script>

</body>

</html>