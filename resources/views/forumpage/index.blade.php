<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="sarjanamalam" />

    <!-- Stylesheets
	============================================= -->
    <link
        href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{!!asset('homepage/asset/articles/images/icon.ico')!!}" type="image/x-icon">
    <link rel="stylesheet" href="{!!asset('forumpage/css/bootstrap.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('forumpage/style.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('forumpage/css/dark.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('forumpage/css/font-icons.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('forumpage/css/animate.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('forumpage/css/magnific-popup.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('forumpage/css/custom.css')!!}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Blog Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{!!asset('forumpage/asset/blog/css/fonts.css')!!}" type="text/css" />
    <link rel="stylesheet" href="{!!asset('forumpage/asset/blog/blog.css')!!}" type="text/css" />

    <link rel="stylesheet" href="{!!asset('forumpage/css/colors.php?color=1f8bc4')!!}" type="text/css" />
    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>

    <!-- Document Title
	============================================= -->
    <title>Sarjanamalam - Get focus and improve about what are you talking about</title>

</head>

<body class="stretched search-overlay">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=915724525182895&autoLogAppEvents=1">
    </script>

    <!-- Document Wrapper
    ============================================= -->
    <?php $date = Carbon\Carbon::now(); $yearcurrent = Date('Y'); $time=Date('H:i');
        if($time>'05:30' && $time<'10:00'){
            $emoji = '#127759;';
            $salam = 'Morning';
        } elseif($time>='10:00' && $time < '15:00'){
            $emoji = '#127774;';
            $salam='Noon';
        }elseif($time>'18:00'){
            $emoji = '#127763;';
            $salam='Afternoon';
        }else{
            $emoji = '#127771;';
            $salam='Night';
        }
    ?>
    <div id="wrapper">

        <!-- Header
		============================================= -->
        <header id="header" class="header-size-custom" data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-lg-between">

                        <!-- Logo
						============================================= -->
                        <div id="logo" class="mx-lg-auto col-auto flex-column order-lg-2 px-0">
                            <a href="/" class="standard-logo"
                                data-dark-logo="{!!asset('forumpage/asset/blog/images/logo-dark.png')!!}"
                                data-mobile-logo="{!!asset('forumpage/asset/blog/images/mobile-logo.png')!!}"><img
                                    src="{!!asset('forumpage/asset/blog/images/logo.png')!!}"
                                    alt="Sarjanamalam Logo"></a>
                            <a href="/" class="retina-logo"
                                data-dark-logo="{!!asset('forumpage/asset/blog/images/logo-dark@2x.png')!!}"
                                data-mobile-logo="{!!asset('forumpage/asset/blog/images/mobile-logo@2x.png')!!}"><img
                                    src="{!!asset('forumpage/asset/blog/images/logo@2x.png')!!}"
                                    alt="Sarjanamalam Logo"></a>
                            <span class="divider divider-center date-today"><span class="divider-text"></span></span>
                        </div><!-- #logo end -->

                        <div class="col-auto col-lg-3 order-lg-1 d-none d-md-flex px-0">
                            <h3>&{{$emoji}} Good {{$salam}}</h3>
                        </div>

                        <div class="header-misc col-auto col-lg-3 justify-content-lg-end ml-0 ml-sm-3 px-0">

                            <!-- Bookmark
							============================================= -->
                            <div class="dropdown dropdown-langs">

                            </div>

                            <!-- Top Search
                            ============================================= -->

                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                            </div><!-- #top-search end -->
                            <div class="header-misc-icon">
                                <a href="#"><i class="icon-line-bookmark"></i></a>
                            </div>
                            <div class="header-misc-icon">
                                <a href="#"><i class="icon-line-bell"></i></a>
                            </div>
                            <div class="dark-mode header-misc-icon d-none d-md-block">
                                <a href="#"><i class="icon-dark"></i></a>
                            </div>
                            <div id="top-cart" class="header-misc-iconprofile">
                                <a href="#" id="top-cart-trigger">
                                    <img src="https://storage.googleapis.com/fastwork-static/67637430-f6d3-42f0-af67-6fab449ca255.jpg"
                                        alt="">
                                    <div class="top-cart-content text-left">
                                        <div class="top-cart-title">
                                            <h5>Bintang Jeremia Tobing <br>@ bintangjtobing</h5>
                                        </div>
                                        <div class="top-cart-items">
                                            <div class="top-cart-item">
                                                <div class="top-cart-item-desc">
                                                    <div class="top-cart-item-desc-title">
                                                        <a href="/new-post">New Post</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-cart-item">
                                                <div class="top-cart-item-desc">
                                                    <div class="top-cart-item-desc-title">
                                                        <a href="#">Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-cart-item">
                                                <div class="top-cart-item-desc">
                                                    <div class="top-cart-item-desc-title">
                                                        <a href="#">Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-cart-item">
                                                <div class="top-cart-item-desc">
                                                    <div class="top-cart-item-desc-title">
                                                        <a href="#" style="color:#1f8bc4; ">Sign Out</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="header-row justify-content-lg-center header-border">

                        <!-- Primary Navigation
						============================================= -->
                        {{-- <nav class="primary-menu with-arrows">

                            <ul class="menu-container justify-content-between">
                                <li class="menu-item current"><a class="menu-link" href="demo-blog.html">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                        <div>World</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                        <div>Tech</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                        <div>Lifestyle</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                        <div>Business</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                        <div>Finance</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                        <div>Food</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="demo-blog-categories.html">
                                        <div>Sports</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end --> --}}

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>

        </header><!-- #header end -->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap pt-5" style="overflow: visible;">
                <div class="container">
                    <!-- Hero Area
					============================================= -->
                    <div class="row border-between">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <!-- Post Article -->
                            <article class="entry border-bottom-0 mb-0">
                                <div class="entry-image">
                                    <a href="demo-blog-single.html"><img
                                            src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_96211011_2000134813806405780_414357.jpg"
                                            alt="Image 3"></a>
                                </div>
                                <div class="entry-title">
                                    <div class="entry-categories"><a href="">iOS 12 Update
                                            -
                                            World</a></div>
                                    <h3><a href="demo-blog-single.html"
                                            class="stretched-link color-underline"><span>Statement from Tim Cook about
                                                iphone 12</span></a></h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><a href="#">Mar 11, 2016</a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur
                                        quibusdam
                                        veritatis quisquam laboriosam esse beatae hic perferendis. Lorem ipsum dolor sit
                                        amet.
                                        Rapidiously negotiate standardized web services and goal-oriented outsourcing.
                                        Uniquely
                                        repurpose compelling functionalities before parallel mindshare.</p>
                                </div>
                            </article>
                        </div>

                        <div class="col-lg-4">
                            {{-- <h3 class="font-secondary font-weight-medium mb-4 h4">Highlights</h3> --}}
                            <div class="row posts-md col-mb-30">
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="">Andrei Tapalaga <span>in</span>
                                                        History of Yesterday</a></div>
                                                <h3><a href="" class="stretched-link color-underline">What
                                                        Everyone’s Getting Wrong About the Toilet Paper Shortage</a>
                                                </h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11 | 5 min read</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-image col-md-4">
                                            <a href="demo-blog-single.html"><img
                                                    src="{!!asset('forumpage/asset/blog/images/hero/2.jpg')!!}"
                                                    alt="Image"></a>
                                        </div>
                                    </div>
                                </article>
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="">J.C. Scull <span>in</span>
                                                        Math Problems</a></div>
                                                <h3><a href="" class="stretched-link color-underline">25 ways to
                                                        math</a>
                                                </h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 10 | 27 min read</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-image col-md-4">
                                            <a href="demo-blog-single.html"><img
                                                    src="{!!asset('forumpage/asset/blog/images/hero/3.jpg')!!}"
                                                    alt="Image"></a>
                                        </div>
                                    </div>
                                </article>
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="">Chriss Lee <span>in</span>
                                                        UX Collective</a></div>
                                                <h3><a href="" class="stretched-link color-underline">6 Visual Design
                                                        principles that UX designers should be aware of ...</a>
                                                </h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 12 | 14 min read</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-image col-md-4">
                                            <a href="demo-blog-single.html"><img
                                                    src="{!!asset('forumpage/asset/blog/images/hero/4.jpg')!!}"
                                                    alt="Image"></a>
                                        </div>
                                    </div>
                                </article>
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="">Michel Fayard <span>in</span>
                                                        Better Programming</a></div>
                                                <h3><a href="" class="stretched-link color-underline">What is your
                                                        current sallary?</a>
                                                </h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 10 | 9 min read</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="entry-image col-md-4">
                                            <a href="demo-blog-single.html"><img
                                                    src="{!!asset('forumpage/asset/blog/images/hero/5.jpg')!!}"
                                                    alt="Image"></a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <h3 class="font-secondary font-weight-medium mb-4 h4">Creators to follow</h3>
                            <div class="row posts-md col-mb-30">
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="entry-image col-md-3">
                                            <a href=""><img class="creatorsimg"
                                                    src="https://storage.googleapis.com/fastwork-static/67637430-f6d3-42f0-af67-6fab449ca255.jpg"
                                                    alt="Image"></a>
                                        </div>
                                        <div class="col-md-6" style="padding-left: 0px;">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="">Bintang Tobing</a></div>
                                                <p>Has solve many problems especially about love ...</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="" class="btn button-rounded btn-outline-success">Follow</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="entry-image col-md-3">
                                            <a href=""><img class="creatorsimg"
                                                    src="https://pixinvent.com/materialize-material-design-admin-template/app-assets/images/user/12.jpg"
                                                    alt="Image"></a>
                                        </div>
                                        <div class="col-md-6" style="padding-left: 0px;">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="">Yolanda Tif</a></div>
                                                <p>Authors of 7 books, including think straight.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="" class="btn button-rounded btn-outline-success">Follow</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="entry-image col-md-3">
                                            <a href=""><img class="creatorsimg"
                                                    src="https://preview.keenthemes.com/metronic-v4/theme/assets/pages/media/profile/profile_user.jpg"
                                                    alt="Image"></a>
                                        </div>
                                        <div class="col-md-6" style="padding-left: 0px;">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="">Riki Arian</a></div>
                                                <p>General Partner @ Sarjanamalam</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="" class="btn button-rounded btn-outline-success">Follow</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </div>
                    </div> <!-- Hero Area End -->


                    <!-- Video Section
					============================================= -->
                    <div class="d-flex justify-content-between mb-4 mt-5 pt-5">
                        <h3 class="font-secondary font-weight-medium m-0"><span style="color: #000;"><i
                                    class="fas fa-chart-line"></i></span>
                            Trending on Sarjanamalam.
                        </h3>
                        <a href="#" class="btn btn-sm btn-outline-secondary">More Content <i
                                class="icon-line-arrow-right"></i></a>
                    </div>

                    <div class="row posts-md col-mb-30">
                        <div class="col-md-4">
                            <div class="feature-box fbox-plain fbox-sm">
                                <div class="creatorsposttrending">
                                    <img src="https://storage.googleapis.com/fastwork-static/67637430-f6d3-42f0-af67-6fab449ca255.jpg"
                                        alt="">
                                </div>
                                <div class="fbox-content">
                                    <h3>Bintang Tobing</h3>
                                    <p>Quickly impact virtual testing procedures vis-a-vis viral e-commerce.
                                        Completely
                                        myocardinate seamless.</p>
                                    <p class="muted-text">No 2 | 8 min read</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box fbox-plain fbox-sm">
                                <div class="creatorsposttrending">
                                    <img src="https://cdn.vox-cdn.com/thumbor/QuS2QKQys3HhosKiV-2IuKhphbo=/39x0:3111x2048/1400x1050/filters:focal(39x0:3111x2048):format(png)/cdn.vox-cdn.com/uploads/chorus_image/image/49901753/netflixlogo.0.0.png"
                                        alt="">
                                </div>
                                <div class="fbox-content">
                                    <h3>Netflix Technology <span>in</span> Netflix Techblog</h3>
                                    <p>Keeping Netflix reliable using prioritized load hedding</p>
                                    <p class="muted-text">Nov 1 | 4 min read</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box fbox-plain fbox-sm">
                                <div class="creatorsposttrending">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRlWvnEYQCr3OZ5y4fB2dSPC2oJ7plmcdsxbQ&usqp=CAU"
                                        alt="">
                                </div>
                                <div class="fbox-content">
                                    <h3>Elad Cohen <span>in</span> Towards Data Science</h3>
                                    <p>7 Must-Haves in your data sciences CV</p>
                                    <p class="muted-text">No 2 | 7 min read</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box fbox-plain fbox-sm">
                                <div class="creatorsposttrending">
                                    <img src="https://simpleisbetterthancomplex.com/img/picture.jpg" alt="">
                                </div>
                                <div class="fbox-content">
                                    <h3>Max Ufberg <span>in</span> GEN</h3>
                                    <p>That PA Voter Everyone Is Obessed with was my high school spanish</p>
                                    <p class="muted-text">No 2 | 4 min read</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box fbox-plain fbox-sm">
                                <div class="creatorsposttrending">
                                    <img src="https://www.jvmpolytechnic.in/assets/upload/grid_img/12576_1.jpg" alt="">
                                </div>
                                <div class="fbox-content">
                                    <h3>Philip Stutts</h3>
                                    <p>How to make an logo on illustrator</p>
                                    <p class="muted-text">Oct 30 | 12 min read</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box fbox-plain fbox-sm">
                                <div class="creatorsposttrending">
                                    <img src="https://lh3.googleusercontent.com/proxy/yMMuyK9A0Nfe3qnIlcHtD6Ph6gWeQkJiUMi_KF7EdXs0eV3XkEx0WM4Ln5sKRXP2LFSm8W78583tmjKjOCoCYn3Byzo92k-1Qhgm92jkcM9VkQ"
                                        alt="">
                                </div>
                                <div class="fbox-content">
                                    <h3>Avanish Pathak</h3>
                                    <p>Takeover Account?</p>
                                    <p class="muted-text">Nov 2 | 5 min read</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Video Section End -->

                </div>

                <div class="container my-5 py-5">

                    <!-- Based On Your Reading History
					============================================= -->
                    <div class="row border-between">

                        <!-- Left Side of Based On Your Reading History
						============================================= -->
                        <div class="col-lg-8">
                            <h3 class="font-secondary font-weight-medium">Based On Your Reading History</h3>

                            <div class="row col-mb-50">
                                <article class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 entry-image mb-0">
                                            <a href="#">
                                                <img src="{!!asset('forumpage/asset/blog/images/lists/1.jpg')!!}"
                                                    alt="Image">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="entry-title mt-lg-0 mt-3">
                                                <div class="entry-categories"><a
                                                        href="demo-blog-categories.html">Coronavirus Update
                                                        - World</a></div>
                                                <h3><a href="demo-blog-single.html"
                                                        class="color-underline stretched-link">Apple and
                                                        Google Team Up to ‘Contact Trace’ the Coronavirus</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>The technology giants said they would embed a feature in iPhones and
                                                    Android
                                                    devices to enable users to track infected people they’d come close
                                                    to.</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 entry-image mb-0">
                                            <a href="#">
                                                <img src="{!!asset('forumpage/asset/blog/images/lists/2.jpg')!!}"
                                                    alt="Image">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="entry-title mt-lg-0 mt-3">
                                                <div class="entry-categories"><a
                                                        href="demo-blog-categories.html">Food</a></div>
                                                <h3><a href="demo-blog-single.html"
                                                        class="color-underline stretched-link">Quick,
                                                        Easy and So Satisfying</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>Welcome to Five Weeknight Dishes. This newsletter is dedicated to
                                                    recipes that
                                                    are easy, quick and satisfying, words that all have a different
                                                    meaning today
                                                    than they did when we first started. I spent a few hours this week
                                                    cleaning out
                                                    my freezer and — compared with the other things on my to-do list.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 entry-image mb-0">
                                            <a href="#">
                                                <img src="{!!asset('forumpage/asset/blog/images/lists/3.jpg')!!}"
                                                    alt="Image">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="entry-title mt-lg-0 mt-3">
                                                <div class="entry-categories"><a
                                                        href="demo-blog-categories.html">Tech</a></div>
                                                <h3><a href="demo-blog-single.html"
                                                        class="color-underline stretched-link">Optical
                                                        Effects in User Interfaces: An Illustrated Guide</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>Our eyes are weird and often mislead us. But if you know the
                                                    peculiarities of
                                                    human vision, you can construct better designs. Not only do type
                                                    designers
                                                    utilize optical tricks for creating readable and well-balanced
                                                    fonts, but it’s
                                                    also helpful for designers, who craft user-computer interaction.</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                <article class="col-12">
                                    <div class="row">
                                        <div class="col-md-6 entry-image mb-0">
                                            <a href="#">
                                                <img src="{!!asset('forumpage/asset/blog/images/lists/4.jpg')!!}"
                                                    alt="Image">
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="entry-title mt-lg-0 mt-3">
                                                <div class="entry-categories"><a
                                                        href="demo-blog-categories.html">Health</a></div>
                                                <h3><a href="demo-blog-single.html"
                                                        class="color-underline stretched-link">How to
                                                        Stock Your Medicine Cabinet Just in Case</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">Mar 11, 2016</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem
                                                    pariatur
                                                    quibusdam veritatis quisquam laboriosam esse beatae hic perferendis.
                                                    Lorem ipsum
                                                    dolor sit amet, consectetur adipisicing elit. Beatae, repudiandae.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Right Side of Based On Your Reading History - Sticky
						============================================= -->
                        <div class="col-lg-4 mt-5 mt-lg-0 position-sticky h-100" style="top: 234px;">
                            <div class="sec-book">
                                <h4>Bookmark stories for later &nbsp;<span><i class="far fa-bookmark"></i></span></h4>
                                <p>Start saving stories by clicking bookmark icon and you'll find them all here.</p>
                            </div>
                        </div>
                    </div> <!-- Based On Your Reading History End -->
                </div>
            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer">
            <!-- Copyrights
			============================================= -->
            <div id="copyrights">
                <div class="container">

                    <div class="row align-items-center justify-content-between col-mb-30">
                        <div class="col-lg-auto text-center text-lg-left">
                            Copyrights &copy; {{$yearcurrent}} All Rights Reserved by Sarjanamalam Inc.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>

                        <div class="col-lg-auto text-center text-lg-left">
                            <div class="copyrights-menu copyright-links m-0">
                                <a href="#">Help</a>/<a href="#">About</a>/<a href="#">Writers</a>/<a
                                    href="#">Carrers</a>/<a href="#">Privacy</a>/<a href="#">Terms</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up rounded-circle" style="right: 30px; left: auto;"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="{!!asset('forumpage/js/jquery.js')!!}"></script>
    <script src="{!!asset('forumpage/js/plugins.min.js')!!}"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="{!!asset('forumpage/js/functions.js')!!}"></script>

    <!-- ADD-ONS JS FILES -->
    <script>
        // Current Date
        var weekday = ["Sun", "Mon", "Tues", "Wed", "Thurs", "Fri", "Sat"],
            month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                "November", "December"
            ],
            a = new Date();

        jQuery('.divider-text').html(weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate());

        jQuery('.dark-mode').on('click', function () {
            jQuery("body").toggleClass('dark');
            SEMICOLON.header.logo();
            return false;
        });

    </script>

</body>

</html>
