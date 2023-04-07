<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie ie6" lang="en">
   <![endif]-->
<!--[if IE 7]>
   <html class="ie ie7" lang="en">
      <![endif]-->
<!--[if IE 8]>
      <html class="ie ie8" lang="en">
         <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta name="description" content="Name of your web site" />
    <meta name="author" content="Amir Tamamy" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ $settings->title }}</title>
    <!-- STYLES -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/custom.css') }}" />
    <!--[if lt IE 9]>
               <script type="text/javascript" src="{{ asset('home/js/modernizr.custom.js') }}"></script>
               <![endif]-->
    <!-- /STYLES -->
</head>

<body>
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->
    <!-- WRAPPER ALL -->
    <div class="edrea_tm_all_wrap" data-magic-cursor="hide" data-enter="fadeInUp" data-exit="">
        <!-- WAVE DOTS -->
        <div class="waves"></div>
        <!-- WAVE DOTS -->
        <!-- SETTINGS -->
        <div class="edrea_tm_settings">
            <div class="icon">
                <img class="svg" src="/home/img/setting.svg" alt="" />
                <a class="link" href="#"></a>
            </div>
            <div class="wrapper">
                <span class="title">Unlimited Colors</span>
                <ul class="colors">
                    <li><a href="#" data-color="#4169e1"></a></li>
                    <li><a href="#" data-color="#66B95C"></a></li>
                    <li><a href="#" data-color="#ff9800"></a></li>
                    <li><a href="#" data-color="#ff5e94"></a></li>
                    <li><a href="#" data-color="#fa5b0f"></a></li>
                    <li><a href="#" data-color="#f39977"></a></li>
                    <li><a href="#" data-color="#9200ee"></a></li>
                    <li><a href="#" data-color="#00D4BD"></a></li>
                    <li><a href="#" data-color="#5e9e9f"></a></li>
                    <li><a href="#" data-color="#EB4A4C"></a></li>
                    <li><a href="#" data-color="#666d41"></a></li>
                    <li><a href="#" data-color="#fe0000"></a></li>
                </ul>
            </div>
        </div>
        <!-- /SETTINGS -->
        <!-- MOBILE MENU -->
        <div class="edrea_tm_topbar">
            <div class="topbar_inner">
                <div class="logo" style="margin-top: 7px;">
                    <a href="/"><img src="{{ $settings->logo }}" alt="" /></a>
                </div>
                <div class="trigger">
                    <div class="hamburger hamburger--slider">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="edrea_tm_mobile_menu">
            <div class="inner">
                <div class="menu_list">
                    <ul class="transition_link">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#services">Services</a></li>
                        {{--
                              <li><a href="#news">News</a></li>
                              --}}
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /MOBILE MENU -->
        <!-- HEADER -->
        <div class="edrea_tm_header">
            <div class="header_inner">
                <div class="logo" style=" margin-top: 7px;">
                    <a href="/"><img src="{{ $settings->logo }}" style="max-width: 157px!important;"
                            alt="" /></a>
                </div>
                <div class="menu">
                    <ul class="transition_link">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#services">Services</a></li>
                        {{--
                              <li><a href="#news">News</a></li>
                              --}}
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- CONTENT -->
        <div class="edrea_tm_content">
            <!-- HOME -->
            <div class="edrea_tm_section animated" id="home">
                <div class="section_inner">
                    <div class="edrea_tm_about">
                        <div class="left">
                            <div class="image">
                                <img src="{{ $settings->about_img }}" alt="" />
                                <div class="main" data-img-url="{{ $settings->about_img }}"></div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="short">
                                <h3 class="name" style="text-transform: lowercase">
                                    {{ substr($settings->about_ftext, 0, 4) }} <span style="text-transform: capitalize"
                                        class="coloring ds">Tmamy</span>
                                </h3>
                                <style>
                                    .name::first-letter {
                                        text-transform: capitalize
                                    }

                                    .coloring.ds::first-letter {
                                        text-transform: capitalize;
                                    }
                                </style>
                                <h3 class="job">
                                    <span class="cd-headline rotate-1">
                                        <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
                                        <span class="blc">{{ $settings->about_stext }}</span>
                                    </span>
                                </h3>
                            </div>
                            <div class="text">
                                <p>
                                    {!! $settings->about_content !!}
                                </p>
                            </div>
                            <div class="edrea_tm_button">
                                <a href="#">Learn More</a>
                            </div>
                            <!-- About Popup Informations -->
                            <div class="edrea_tm_hidden_content">
                                <div class="about_popup_details">
                                    <div class="left">
                                        <div class="left_inner">
                                            <div class="author">
                                                <div class="avatar_image">
                                                    <img src="{{ $settings->about_img }}" alt="" />
                                                    <div class="main" data-img-url="{{ $settings->about_img }}">
                                                    </div>
                                                </div>
                                                <div class="short">
                                                    <h3 class="name">
                                                        {{ substr($settings->about_ftext, 0, 4) }} <span
                                                            class="coloring">{{ substr($settings->about_ftext, 4, 9) }}</span>
                                                    </h3>
                                                    <h3 class="job">
                                                        <span class="cd-headline rotate-1">
                                                            <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
                                                            <span class="blc">You can book a FREE consultancy
                                                                meeting to figure out your needs and what can fit your
                                                                budget & expectations
                                                            </span>
                                                        </span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="edrea_tm_button full">
                                                <a href="https://api.whatsapp.com/send?phone=201550084782">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="right_inner">
                                            <div class="biography">
                                                <div class="about_title">
                                                    <h3>
                                                        <span>About <span class="coloring">Me</span></span>
                                                    </h3>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        {!! $settings->about_content !!}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="partners">
                                                <div class="about_title">
                                                    <h3>
                                                        <span>My <span class="coloring">Partners</span></span>
                                                    </h3>
                                                </div>
                                                <div class="list">
                                                    <ul>
                                                        @foreach ($partners as $partner)
                                                            <a class="cavani_tm_full_link"
                                                                href="{{ $partner->link }}">
                                                                <li>
                                                                    <div class="list_inner">
                                                                        <img src="{{ $partner->img }}"
                                                                            alt="" />
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="partners">
                                                <div class="about_title">
                                                    <h3>
                                                        <span>My <span class="coloring">Clients</span></span>
                                                    </h3>
                                                </div>
                                                <div class="list">
                                                    <ul>
                                                        @foreach ($clients as $client)
                                                            <a class="cavani_tm_full_link"
                                                                href="{{ $client->link }}">
                                                                <li>
                                                                    <div class="list_inner">
                                                                        <img src="{{ $client->img }}"
                                                                            alt="" />
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /About Popup Informations -->
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <br />
                <br /><br />
            </div>
            <!-- /HOME -->
            <!-- ABOUT -->
            <div class="edrea_tm_section" id="about">
            </div>
            <!-- /ABOUT -->
            <style></style>
            <!-- NEWS -->
            <div class="edrea_tm_section portfolio" id="portfolio">
                {{--  News  --}}
                <div class="section_inner">
                    <div class="edrea_tm_news swiper-section">
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="edrea_tm_main_title" style="text-align: center">
                            <h3>Creative <span class="coloring">Portfolio</span></h3>
                        </div>
                        <div class="news_list">
                            <div class="swiper-container" style="overflow: visible">
                                <div class="swiper-wrapper">
                                    @foreach ($ports as $port)
                                        <div class="swiper-slide @if ($port->exclusive) is_exclusive @endif"
                                            style="margin-left: 5px;">
                                            <div class="list_inner">
                                                <div class="image">
                                                    <img src="{{ $port->cover }}" alt="" />
                                                    <div class="main" data-img-url="{{ $port->cover }}"></div>
                                                    <a class="edrea_tm_full_link " href="{{ $port->link }}"></a>
                                                </div>
                                                <div class="details">
                                                    <h3>
                                                        <a href="{{ $port->link }}">{{ $port->title }}</a>
                                                    </h3>
                                                    <span><a
                                                            href="{{ $port->link }}">{{ $port->sub_title }}</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="edrea_tm_swiper_progress fill">
                                    <div class="my_pagination_in">
                                        <span class="current"></span>
                                        <span class="pagination_progress"><span
                                                class="all"><span></span></span></span>
                                        <span class="total"></span>
                                    </div>
                                    <div class="my_navigation">
                                        <ul>
                                            <li>
                                                <a class="my_prev" href="#"><i
                                                        class="icon-left-open-1"></i></a>
                                            </li>
                                            <li>
                                                <a class="my_next" href="#"><i
                                                        class="icon-right-open-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /NEWS -->
            <!-- /PORTFOLIO -->
            <!-- PORTFOLIO -->
            <div class="edrea_tm_section" id="services0">
                <div class="section_inner">
                    <div class="edrea_tm_portfolio swiper-section">
                        <div class="edrea_tm_main_title" style="text-align: center">
                            <br />
                            <br />
                            <h3><span class="coloring">Services</span></h3>
                        </div>
                        <!-- <div class="container">
                                 <div class="card">
                                   <div class="box">
                                     <div class="content">
                                       <h2>01</h2>
                                       <h3>Card One</h3>
                                       <p>
                                         Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                         Labore, totam velit? Iure nemo labore inventore?
                                       </p>
                                       <a href="#">Read More</a>
                                     </div>
                                   </div>
                                 </div>

                                 <div class="card">
                                   <div class="box">
                                     <div class="content">
                                       <h2>02</h2>
                                       <h3>Card Two</h3>
                                       <p>
                                         Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                         Labore, totam velit? Iure nemo labore inventore?
                                       </p>
                                       <a href="#">Read More</a>
                                     </div>
                                   </div>
                                 </div>

                                 <div class="card">
                                   <div class="box">
                                     <div class="content">
                                       <h2>03</h2>
                                       <h3>Card Three</h3>
                                       <p>
                                         Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                         Labore, totam velit? Iure nemo labore inventore?
                                       </p>
                                       <a href="#">Read More</a>
                                     </div>
                                   </div>
                                 </div>


                                 </div> -->
                        <style>
                            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");

                            * {
                                margin: 0;
                                padding: 0;
                                box-sizing: border-box;
                                font-family: "Poppins", sans-serif;
                            }

                            body .container .card {
                                position: relative;
                                min-width: 320px;
                                height: 440px;
                                box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                                    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                                    5px 5px 15px rgba(0, 0, 0, 0.3),
                                    -5px -5px 15px rgba(255, 255, 255, 0.1);
                                border-radius: 15px;
                                margin: 30px;
                                transition: 0.5s;
                            }

                            body .container .card:nth-child(1) .box .content a {
                                background: #2196f3;
                            }

                            body .container .card:nth-child(2) .box .content a {
                                background: #e91e63;
                            }

                            body .container .card:nth-child(3) .box .content a {
                                background: #23c186;
                            }

                            body .container .card .box {
                                position: absolute;
                                top: 20px;
                                left: 20px;
                                right: 20px;
                                bottom: 20px;
                                background: #2a2b2f;
                                border-radius: 15px;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                overflow: hidden;
                                transition: 0.5s;
                            }

                            body .container .card .box:hover {
                                transform: translateY(-50px);
                            }

                            body .container .card .box:before {
                                content: "";
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 50%;
                                height: 100%;
                                background: rgba(255, 255, 255, 0.03);
                            }

                            body .container .card .box .content {
                                padding: 20px;
                                text-align: center;
                            }

                            body .container .card .box .content h2 {
                                position: absolute;
                                top: -10px;
                                right: 30px;
                                font-size: 8rem;
                                color: rgba(255, 255, 255, 0.1);
                            }

                            body .container .card .box .content h3 {
                                font-size: 1.8rem;
                                color: #fff;
                                z-index: 1;
                                transition: 0.5s;
                                margin-bottom: 15px;
                            }

                            body .container .card .box .content p {
                                font-size: 1rem;
                                font-weight: 300;
                                color: rgba(255, 255, 255, 0.9);
                                z-index: 1;
                                transition: 0.5s;
                            }

                            body .container .card .box .content a {
                                position: relative;
                                display: inline-block;
                                padding: 8px 20px;
                                background: black;
                                border-radius: 5px;
                                text-decoration: none;
                                color: white;
                                margin-top: 20px;
                                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                                transition: 0.5s;
                            }

                            body .container .card .box .content a:hover {
                                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
                                background: #fff;
                                color: #000;
                            }
                        </style>
                        <div class="portfolio_list gallery_zoom">
                            <div class="swiper-container" style=" margin-left: 5px; ">
                                <div class="swiper-wrapper">
                                    @foreach ($services as $service)
                                        <div class="swiper-slide @if ($service->exclusive) is_exclusive @endif"
                                            style="width: 280px;margin-right: 30px;height: 191px;margin-left: 5px;">
                                            <div class="list_inner">
                                                <div class="image">
                                                    <img src="{{ $service->img }}" alt="" />
                                                    <div class="main" data-img-url="{{ $service->img }}"></div>
                                                </div>
                                                <div class="details">
                                                    <h3>{{ $service->title }}</h3>
                                                </div>
                                                <a class="edrea_tm_full_link portfolio_popup" href="#"></a>
                                                <!-- Portfolio Popup Informations -->
                                                <div class="edrea_tm_hidden_content">
                                                    <div class="portfolio_popup_details">
                                                        <div class="text">
                                                            <p>An apple is an edible fruit produced by an apple tree.
                                                                Apple trees are cultivated worldwide and are the most
                                                                widely grown species in the genus Malus. The tree
                                                                originated in Central Asia, where its wild ancestor,
                                                                Malus sieversii, is still found today.
                                                            </p>
                                                            <div class="edrea_tm_button transition_link">
                                                                <a href="#contact">View</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Portfolio Popup Informations -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="edrea_tm_swiper_progress fill" style="">
                                    <div class="my_pagination_in">
                                        <span class="current"></span>
                                        <span class="pagination_progress"><span
                                                class="all"><span></span></span></span>
                                        <span class="total"></span>
                                    </div>
                                    <div class="my_navigation">
                                        <ul>
                                            <li>
                                                <a class="my_prev" href="#"><i
                                                        class="icon-left-open-1"></i></a>
                                            </li>
                                            <li>
                                                <a class="my_next" href="#"><i
                                                        class="icon-right-open-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <link
                                 rel="stylesheet"
                                 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
                                 />
                                 <div id="container">
                                 <div class="product-image">
                                   <img
                                     src="https://images.unsplash.com/photo-1606830733744-0ad778449672?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGNocmlzdG1hcyUyMHRyZWV8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                     alt=""
                                   />

                                   <div class="info">
                                     <h2>Description</h2>
                                     <ul>
                                       <li><strong>Height : </strong>5 Ft</li>
                                       <li><strong>Shade : </strong>Olive green</li>
                                       <li><strong>Decoration: </strong>balls and bells</li>
                                       <li><strong>Material: </strong>Eco-Friendly</li>
                                     </ul>
                                   </div>
                                 </div>
                                 <div class="product-details">
                                   <h1>CHRISTMAS TREE</h1>
                                   <span class="hint-star star">
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star" aria-hidden="true"></i>
                                     <i class="fa fa-star-o" aria-hidden="true"></i>
                                   </span>

                                   <p class="information">
                                     " Let's spread the joy , here is Christmas , the most
                                     awaited day of the year.Christmas Tree is what one need the
                                     most. Here is the correct tree which will enhance your
                                     Christmas.
                                   </p>

                                   <div class="control">
                                     <button class="btn">
                                       <span class="price">$250</span>
                                       <span class="shopping-cart"
                                         ><i class="fa fa-shopping-cart" aria-hidden="true"></i
                                       ></span>
                                       <span class="buy">Get now</span>
                                     </button>
                                   </div>
                                 </div>
                                 </div> -->
                    </div>
                </div>
            </div>
            <!-- /PORTFOLIO -->
            <style>
                @property --rotate {
                    syntax: "
<angle> ";
initial-value: 132deg;
                    inherits: false;
                }

                :root {
                    --card-height: 65vh;
                    --card-width: calc(var(--card-height) / 1.5);
                }

                .is_exclusive::before {
                    content: "";
                    width: 103%;
                    height: 103%;
                    border-radius: 8px;
                    background-image: linear-gradient(var(--rotate),
                            #73ff80,
                            #009239 43%,
                            #3fcd60);
                    position: absolute;
                    z-index: -1;
                    top: -5px;
                    left: -4px;
                    animation: spin 2.5s linear infinite;
                }

                .is_exclusive::after {
                    position: absolute;
                    content: "";
                    top: 17px;
                    left: 0;
                    right: 0;
                    z-index: -1;
                    height: 100%;
                    width: 100%;
                    margin: 0 auto;
                    transform: scale(0.8);
                    filter: blur(calc(var(--card-height) / 6));
                    background-image: linear-gradient(var(--rotate),
                            #73ff80,
                            #009239 43%,
                            #3fcd60);
                    opacity: 1;
                    transition: opacity 0.5s;
                    animation: spin 2.5s linear infinite;
                }

                @keyframes spin {
                    0% {
                        --rotate: 0deg;
                    }

                    100% {
                        --rotate: 360deg;
                    }
                }
            </style>
            <!-- NEWS -->
            <div class="edrea_tm_section services" id="services">
                {{--  News  --}}
                <div class="section_inner">
                    <div class="edrea_tm_news swiper-section">
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="edrea_tm_main_title" style="text-align: center">
                            <h3>Our <span class="coloring">Services</span></h3>
                        </div>
                        <div class="news_list">
                            <div class="swiper-container" style="overflow: visible">
                                <div class="swiper-wrapper">
                                    @foreach ($services as $service)
                                        <div class="swiper-slide @if ($service->exclusive) is_exclusive @endif"
                                            style="margin-left: 5px;">
                                            <div class="list_inner">
                                                <div class="image">
                                                    <img src="{{ $service->img }}" alt="" />
                                                    <div class="main" data-img-url="{{ $service->img }}"></div>
                                                    <a class="edrea_tm_full_link news_popup" href="#"></a>
                                                </div>
                                                <div class="details">
                                                    <h3>
                                                        <a href="#">{{ $service->title }}</a>
                                                    </h3>
                                                    <span><a href="#">{{ $service->sub }}</a></span>
                                                </div>
                                                <!-- News Popup Informations -->
                                                <div class="edrea_tm_hidden_content">
                                                    <div class="news_popup_details">
                                                        <div class="text">
                                                            {!! $service->content !!}
                                                        </div>
                                                        <div style="margin-top: 24px;" class="edrea_tm_button">
                                                            <a href="{{ $service->link }}">Let's Talk About This</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /News Popup Informations -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="edrea_tm_swiper_progress fill">
                                    <div class="my_pagination_in">
                                        <span class="current"></span>
                                        <span class="pagination_progress"><span
                                                class="all"><span></span></span></span>
                                        <span class="total"></span>
                                    </div>
                                    <div class="my_navigation">
                                        <ul>
                                            <li>
                                                <a class="my_prev" href="#"><i
                                                        class="icon-left-open-1"></i></a>
                                            </li>
                                            <li>
                                                <a class="my_next" href="#"><i
                                                        class="icon-right-open-1"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /NEWS -->
            <!-- CONTACT -->
            <div class="contact edrea_tm_section" id="contact"style="margin-bottom: 102px;">
                <div class="section_inner">
                    <div class="edrea_tm_contact">
                        <div class="edrea_tm_main_title">
                            <br>
                            <br>
                            <br>
                            <h3><span class="coloring">Let's talk</span> about <br> your next project.</h3>
                        </div>
                        <div class="wrapper">
                            <div class="left">
                                <ul>
                                    <li>
                                        <div class="list_inner">
                                            <i class="icon-phone"></i>
                                            <span><a
                                                    href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <i class="icon-mail-1"></i>
                                            <span><a
                                                    href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="left">
                                <ul>
                                    <li>
                                        <div class="list_inner">
                                            <i class="bi bi-instagram"></i>
                                            <span><a
                                                    href="https://instagram.com/amir_tmamy?igshid=ZDdkNTZiNTM=">@amir_tmamy</a></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <i class="bi bi-linkedin"></i>
                                            <span><a href="https://www.linkedin.com/in/amirtmamy">@amirtmamy</a></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <!-- /CONTACT -->
            <nav class="nn"
                style="position: sticky;/* text-align: center; */margin: 0px 54px 0px;top: 100%;z-index: 15;margin-top: 320px;">
                <ul>
                    <li>
                        <a class="active home">
                            <i class="bi bi-house-door-fill"
                                style="color: white; font-size: 24px; line-height: 0.8;"></i>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#portfolio" class="openPort">
                            <i class="bi bi-behance" style="color: white; font-size: 24px; line-height: 0.9;"></i>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="openServices">
                            <i class="bi bi-currency-dollar"
                                style="color: white; font-size: 24px; line-height: 0.9;"></i>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="send">
                            <i class="bi bi-send" style="color: white; font-size: 24px; line-height: 0.9;"></i>
                        </a>
                    </li>
                </ul>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                <style>
                    .nn {
                        display: none;
                    }



                    @media only screen and (max-width: 420px) {
                        .edrea_tm_swiper_progress.fill.swiper-pagination-custom {
                            margin-top: -24px;
                        }

                        #services {
                            margin-top: -244px;
                        }

                        #portfolio {
                            margin-top: -214px;
                        }

                        .logo {
                            margin: 0 auto;
                        }

                        /* CSS styles for mobile devices with a maximum width of 375px */
                        .nn {
                            display: grid;
                        }
                    }
                </style>
                <script>
                    $(document).ready(function() {
                        $('.openPort').click(function(event) {
                            event.preventDefault(); // prevent the default behavior of following the link
                            $('.portfolio').removeClass('edrea_tm_section edrea_tm_section hidden').addClass(
                                'edrea_tm_section animated fadeInUp active');
                            $('#home').removeClass('edrea_tm_section animated').addClass(
                                'edrea_tm_section hidden');

                            $('.services').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                            $('.contact').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                        });
                        $('.openServices').click(function(event) {
                            event.preventDefault(); // prevent the default behavior of following the link
                            $('.services').removeClass('edrea_tm_section edrea_tm_section hidden').addClass(
                                'edrea_tm_section animated fadeInUp active');
                            $('.portfolio').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                            $('#home').removeClass('edrea_tm_section animated').addClass(
                                'edrea_tm_section hidden');
                            $('.contact').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                        });

                        $('.send').click(function(event) {
                            event.preventDefault(); // prevent the default behavior of following the link
                            $('.contact').removeClass('edrea_tm_section edrea_tm_section hidden').addClass(
                                'edrea_tm_section animated fadeInUp active');
                            $('.portfolio').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                            $('#home').removeClass('edrea_tm_section animated').addClass(
                                'edrea_tm_section hidden');

                            $('.services').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                        });

                        $('.home').click(function(event) {
                            event.preventDefault(); // prevent the default behavior of following the link
                            $('#home').removeClass('edrea_tm_section edrea_tm_section hidden').addClass(
                                'edrea_tm_section animated fadeInUp active');
                            $('.portfolio').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                            $('.contact').removeClass('edrea_tm_section animated').addClass(
                                'edrea_tm_section hidden');

                            $('.services').removeClass('edrea_tm_section animated fadeInUp active').addClass(
                                'edrea_tm_section hidden');
                        });

                    });
                </script>
                <div class="tubelight">
                    <div class="light-ray"></div>
                </div>
            </nav>
            <div class="support">
                <a href="https://twitter.com/DevLoop01" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="https://dribbble.com/devloop01" target="_blank"><i class="fab fa-dribbble"></i></a>
            </div>
            <style>
                :root {
                    --background: #111111;
                    --scale: 1;
                    --icon-size: 24px;
                }

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                }

                body {
                    width: 100%;
                    height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background: var(--background);
                    overflow: hidden;
                }

                nav {
                    position: relative;
                    width: 350px;
                    height: 80px;
                    display: grid;
                    grid-template-columns: repeat(5, 1fr);
                    border-radius: 10px;
                    padding: 0 15px;
                    {{--  background: black;  --}} box-shadow: 0 6.7px 5.3px rgba(0, 0, 0, 0.12), 0 22.3px 17.9px rgba(0, 0, 0, 0.08), 0 100px 80px rgba(0, 0, 0, 0.04);
                    overflow: hidden;
                }

                nav ul {
                    height: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                nav ul li {
                    list-style: none;
                    width: var(--icon-size);
                    height: var(--icon-size);
                }

                nav ul li a {
                    display: block;
                    width: 100%;
                    height: 100%;
                    cursor: pointer;
                }

                nav ul li a svg {
                    fill: #fff;
                    width: 100%;
                    height: 100%;
                    opacity: 0.4;
                    transition: opacity 100ms ease;
                    pointer-events: none;
                }

                nav ul li a.active svg {
                    opacity: 1;
                }

                nav .tubelight {
                    position: absolute;
                    left: 0px;
                    top: 0px;
                    transform: translateX(-50%);
                    width: 45px;
                    height: 5px;
                    border-radius: 5px;
                    background: #ffffff;
                    transition: left 400ms ease;
                    z-index: 10;
                }

                nav .tubelight .light-ray {
                    position: absolute;
                    left: -30%;
                    top: 5px;
                    width: 160%;
                    height: 80px;
                    clip-path: polygon(5% 100%, 25% 0px, 75% 0px, 95% 100%);
                    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) -50%, rgba(255, 255, 255, 0) 90%);
                    pointer-events: none;
                }

                .support {
                    position: fixed;
                    right: 10px;
                    bottom: 10px;
                    padding: 10px;
                    display: flex;
                }

                .support a {
                    margin: 0 10px;
                    color: #222;
                    font-size: 1.8rem;
                    backface-visibility: hidden;
                    transition: all 150ms ease;
                }

                .support a:hover {
                    transform: scale(1.1);
                }
            </style>
            <script>
                console.clear();

                const uls = document.querySelectorAll("nav ul");
                const links = [...document.querySelectorAll("nav a")];
                const light = document.querySelector("nav .tubelight");

                let activeIndex = 0;
                let currentIndex = 0;
                let increment = 1;
                links.forEach((link, index) => {
                    if (links[index].classList.contains("active")) {
                        light.style.left = `${links[index].offsetLeft + light.offsetWidth / 4}px`;
                    }

                    link.addEventListener("click", e => {
                        activeIndex = index;
                        let t = setInterval(() => {
                            if (activeIndex > currentIndex) increment = 1;
                            else if (activeIndex < currentIndex) increment = -1;
                            currentIndex += increment;

                            links[currentIndex].classList.add("active");
                            if (currentIndex != -1) links[currentIndex - increment].classList.remove(
                                "active");

                            if (currentIndex == activeIndex) {
                                e.target.classList.add("active");
                                increment = 0;
                                clearInterval(t);
                            }
                        }, 50);
                        light.style.left = `${e.target.offsetLeft + light.offsetWidth / 4}px`;
                    });
                });
            </script>
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" ></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </div>
        <script>
            $(".edrea_tm_section").scroll(function() {
                $(".navigation").css("top", $(this).scrollTop());
            });

            const list = document.querySelectorAll(".list");

            function activeLink() {
                list.forEach((item) => item.classList.remove("active"));
                this.classList.add("active");
            }
            list.forEach((item) => item.addEventListener("click", activeLink));
        </script>
        <!-- /CONTENT -->
        <!-- MAGIC CURSOR -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- /MAGIC CURSOR -->
    </div>
    <!-- / WRAPPER ALL -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- SCRIPTS -->
    <script src="{{ asset('home/js/jquery.js') }}"></script>
    <!--[if lt IE 10]>
               <script type="text/javascript" src="{{ asset('home/js/ie8.js') }}"></script>
               <![endif]-->
    <script src="{{ asset('home/js/plugins.js') }}"></script>
    <script src="{{ asset('home/js/init.js') }}"></script>
    <!-- /SCRIPTS -->
</body>

</html>
