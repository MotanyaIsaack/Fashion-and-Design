<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="materialize is a material design based mutipurpose responsive template">
    <meta name="keywords"
        content="material design, card style, material template, portfolio, corporate, business, creative, agency">
    <meta name="author" content="trendytheme.net">

    <title><?=$title;?></title>

    <!--  favicon -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/website/assets/Images/favicon.png">
    <!--  apple-touch-icon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="<?=base_url();?>assets/website/assets/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="<?=base_url();?>assets/website/assets/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="<?=base_url();?>assets/website/assets/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
        href="<?=base_url();?>assets/website/assets/img/ico/apple-touch-icon-57-precomposed.png">


    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Material Icons CSS -->
    <link href="<?=base_url();?>assets/website/assets/fonts/iconfont/material-icons.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="<?=base_url();?>assets/website/assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- magnific-popup -->
    <link href="<?=base_url();?>assets/website/assets/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- owl.carousel -->
    <link href="<?=base_url();?>assets/website/assets/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/website/assets/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <!-- flexslider -->
    <link href="<?=base_url();?>assets/website/assets/flexSlider/flexslider.css" rel="stylesheet">
    <!-- materialize -->
    <link href="<?=base_url();?>assets/website/assets/materialize/css/materialize.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?=base_url();?>assets/website/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- shortcodes -->
    <link href="<?=base_url();?>assets/website/assets/css/shortcodes/shortcodes.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="<?=base_url();?>assets/website/style.css" rel="stylesheet">
    <link href="<?=website_assets_url("css/carousel-edit.css");?>" rel="stylesheet">


    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/website/assets/revolution/css/settings.css">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/website/assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/website/assets/revolution/css/navigation.css">
   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body id="top" class="has-header-search">

    <!-- Top bar -->
    <div class="top-bar light-blue">
        <div class="container">
            <div class="row">
                <!-- Social Icon -->
                <div class="col-md-6">
                    <!-- Social Icon -->
                    <ul class="list-inline social-top tt-animate btt">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <!--                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>-->
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <!--                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <!--                  <li><a href="#"><i class="fa fa-rss"></i></a></li>-->
                    </ul>
                </div>

                <div class="col-md-6 text-right">
                    <ul class="topbar-cta no-margin">
                        <li class="mr-20">
                            <a><i class="material-icons mr-10">&#xE0B9;</i>sales@kikoromeo.com</a>
                        </li>
                        <li>
                            <a><i class="material-icons mr-10">&#xE0CD;</i> (+254) 733 516 317</a>
                        </li>
                    </ul>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.top-bar -->


    <!--header start-->
    <header id="header" class="tt-nav nav-border-bottom">

        <div class="header-sticky light-header ">

            <div class="container">

                <!--
                    <div class="search-wrapper">
                        <div class="search-trigger pull-right">
                            <div class='search-btn'></div>
                            <i class="material-icons">&#xE8B6;</i>
                        </div>
-->

                <!-- Modal Search Form -->
                <!--
                        <i class="search-close material-icons">&#xE5CD;</i>
                        <div class="search-form-wrapper">
                            <form action="#" class="white-form">
                                <div class="input-field">
                                    <input type="text" name="search" id="search">
                                    <label for="search" class="">Search Here...</label>
                                </div>
                                <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>

                            </form>
                        </div>
                    </div> /.search-wrapper
-->

                <div id="materialize-menu" class="menuzord">

                    <!--logo start-->
                    <a href="index.html" class="logo-brand">
                        <img class="retina" src="<?=base_url()?>assets/website/assets/Images/sitelogo.png" alt="" />
                    </a>
                    <!--logo end-->

                    <!--mega menu start-->
                    <ul class="menuzord-menu pull-right">
                        <li <?php
if ($this->uri->uri_string() == 'website/home' || $this->uri->uri_string() == '') {
    echo 'class="active"';
}
?>><a href="<?=base_url()?>website/home">Home</a>
                            <!--
                                <div class="megamenu">
                                    <div class="megamenu-row">
                                        <div class="col3">
                                            <h2>Default Demos</h2>
                                            <ul class="list-unstyled clearfix">
                                                <li><a href="index.html">Home Default</a></li>
                                                <li class="active"><a href="index-2.html">Home Canvas</a></li>
                                                <li><a href="index-3.html">Home Elegent</a></li>
                                                <li><a href="index-4.html">Home Startup</a></li>
                                                <li><a href="index-5-consulting.html">Home Consulting</a></li>
                                                <li><a href="op-index-coffeeshop.html" target="_blank">Home Coffee Shop</a></li>
                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <h2>Complete Demos</h2>
                                            <ul class="list-unstyled clearfix">
                                                <li><a href="creative-index.html" target="_blank">Creative Demo</a></li>
                                                <li><a href="corporate-index.html" target="_blank">Corporate Demo</a></li>
                                                <li><a href="agency-index.html" target="_blank">Agency Demo</a></li>
                                                <li><a href="construction-index.html" target="_blank">Construction Demo</a></li>
                                                <li><a href="seo-index.html" target="_blank">SEO Demo</a></li>
                                                <li><a href="restaurant-index.html" target="_blank">Restaurant Demo</a></li>
                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <h2>Onepage Demo</h2>
                                            <ul class="list-unstyled clearfix">
                                                <li><a href="op-index-1.html" target="_blank">materialize Onepage</a></li>
                                                <li><a href="op-index-portfolio.html" target="_blank">Onepage Portfoilo</a></li>
                                                <li><a href="op-index-event.html" target="_blank">Onepage Event</a></li>
                                                <li><a href="op-index-book.html" target="_blank">Book Landing Page</a></li>
                                                <li><a href="op-index-app.html" target="_blank">App Landing Page 1</a></li>
                                                <li><a href="op-index-app-2.html" target="_blank">App Landing Page 2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <h2>Specialized Home</h2>
                                            <ul class="list-unstyled clearfix">
                                                <li><a href="index-8-portfolio.html">Home Portfolio</a></li>
                                                <li><a href="index-7-blog.html">Home Blog</a></li>
                                                <li><a href="index-6-charity.html">Home Charity</a></li>
                                                <li><a href="coming-soon-1.html" target="_blank">Coming Soon One</a></li>
                                                <li><a href="coming-soon-2.html" target="_blank">Coming Soon Two</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
-->
                        </li>


                        <li <?php
if ($this->uri->uri_string() == 'website/collections') {
    echo 'class="active"';
}
?>><a href="<?=base_url()?>website/collections">Collections</a>
                            <ul class="dropdown">
                                <li><a href="<?=base_url()?>website/collections">MENSWEAR</a>

                                </li>
                                <li><a href="<?=base_url()?>website/collections">VINTAGE</a>

                                </li>
                                <li><a href="<?=base_url()?>website/collections">KIDS</a>

                                </li>

                            </ul>
                        </li>
                        <li <?php
if ($this->uri->uri_string() == 'website/events') {
    echo 'class="active"';
}
?>><a href="<?=base_url();?>website/events">Events</a></li>

                        <li><a href="javascript:void(0)">Contact</a>
                            <!--
                                <ul class="dropdown">
                                    <li><a href="contact-us.html">Contact One</a></li>
                                    <li><a href="contact-us-2.html">Contact Two</a></li>
                                </ul>
-->
                        </li>

                    </ul>
                    <!--mega menu end-->

                </div>
            </div>
        </div>

    </header>
    <!--header end-->