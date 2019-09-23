<?php
include_once 'include/functions.php';
include_once 'include/page.php';
$id=$_GET['id'];
$result=detail_page($id);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>
        <?php echo $result['title']; ?>
    </title>
    <meta name="keywords" content="<?php echo $result['keywords']; ?> " />
    <meta name="description" content="<?php echo $result['description']; ?>" />

    <!---css--->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!---css--->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $settings['description'];?>" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---js--->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!---js--->
    <!--JS for animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

    <!---webfont--->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!---webfont--->
    <link rel="stylesheet" type="text/css" href="css/style_common.css" />
    <link rel="stylesheet" type="text/css" href="css/style9.css" />
</head>
<body>
<!---header--->
<div class="header-section">
    <div class="container">
        <div class="head-bottom">
            <div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
                <h1><a href="index.html">Agrox<span>Farming company</span></a></h1>
            </div>
        </div>
    </div>
</div>
<!---header--->
<!---banner--->
<div class="row_color">
    <div class="container row_color ">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html" class="wow fadeInDownBig" data-wow-delay=".1s">صفحه اصلی<span class="sr-only">(current)</span></a></li>
                        <li><a href="about.html" class="wow fadeInDownBig" data-wow-delay=".2s">درباره ما</a></li>
                        <li><a href="services.html" class="wow fadeInDownBig" data-wow-delay=".4s">خدمات</a></li>
                        <li><a href="gallery.html" class="wow fadeInDownBig" data-wow-delay=".6s">گالری</a></li>
                        <li><a href="codes.html" class="wow fadeInDownBig" data-wow-delay=".7s">نمونه ها</a></li>
                        <li><a href="contact.html" class="wow fadeInDownBig" data-wow-delay=".9s">تماس با ما</a></li>
                    </ul>
                </div>

            </div>
            <div class="banner-center">
                <marquee><h3>
                        بهترین مزرعه کشاورزی</h3></marquee>
            </div>

    </div>
</div>
        </nav>
    </div>
</div>






<div class="container m_top">
    <?php echo $result['body']; ?>
</div>








<!---footer--->
<div class="footer-section">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>درباره ما</h4>
                <ul>
                    <li>
                        تمرکز بر مشتری</li>
                    <li>

                        لورم ایپسوم یا طرح‌نما </li>
                    <li>

                        لورم ایپسوم یا طرح‌نما </li>
                    <li>عملکردها</li>
                    <li>نوآوری</li>
                    <li>
                        مسئوليت ها</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
                <h4>راه حل ها</h4>
                <ul>
                    <li>
                        مرکز تماس</li>
                    <li>پشتیبانی مشتریان</li>
                    <li>

                        لورم ایپسوم یا طرح‌نما </li>
                    <li>طرح‌نما </li>
                    <li>
                        وب سلف سرویس</li>
                    <li>معیارهای عملکرد</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
                <h4>کارها</h4>
                <ul>
                    <li>
                        پشتیبانی مشتریان</li>
                    <li>
                        پشتیبانی پلاتین</li>
                    <li>پشتیبانی طلا</li>
                    <li>آموزش</li>
                    <li>کارگاه های آموزشی</li>
                    <li>
                        آموزش آنلاین</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>تماس با ما</h4>
                <p>تهران-شریعتی</p>
                <p>خ ملک کوچه ایرانیاد</p>
                <p>تلفن رایگان:<?php echo $settings['tel'];?></p>
                <p>
                    تلفن: +1 459 503 7035</p>
                <p>فکس: <?php echo $settings['fax'];?>7898</p>
                <a href="mailto:<?php echo $settings['email'];?>"><?php echo $settings['email'];?></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---footer--->
<!--copy-->
<div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"">
<div class="container">
    <div class="social-icons">
        <a href="#"><i class="icon"></i></a>
        <a href="#"><i class="icon1"></i></a>
        <a href="#"><i class="icon2"></i></a>
        <a href="#"><i class="icon3"></i></a>
    </div>
    <p><?php echo $settings['copyright'];?></p>
</div>
</div>
<!--copy-->
</body>
</html>