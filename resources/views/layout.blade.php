<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    {{-- Metatitle : For SEO --}}
    <title>{{ $metaTitle ?? config('app.name', 'laravel') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }} ">

    {{-- Bootstrap Min CSS --}}
    <link rel="preload" href="{{ asset('/css/bootstrap.min.css') }} " as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"></noscript>

    {{-- Style CSS --}}
    <link rel="preload" href="{{ asset('/css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('/css/style.css') }}"></noscript>

    <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/flaticon.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/slick.css') }} ">
    <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }} ">

    {{-- Critical Styles --}}
    <style>
        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace
        }

        *,::after,::before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: transparent
        }

        article,aside,figcaption,figure,footer,header,hgroup,main,nav,section {
            display: block
        }

        body {
            margin: 0;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }

        h1,h2,h3,h4,h5,h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        dl,ol,ul {
            margin-top: 0;
            margin-bottom: 1rem
        }

        ol ol,ol ul,ul ol,ul ul {
            margin-bottom: 0
        }

        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }

        img {
            vertical-align: middle;
            border-style: none
        }

        table {
            border-collapse: collapse
        }

        button {
            border-radius: 0
        }

        button,input,optgroup,select,textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,input {
            overflow: visible
        }

        button,select {
            text-transform: none
        }

        [type=reset],[type=submit],button,html [type=button] {
            -webkit-appearance: button
        }

        .h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        .h1,h1 {
            font-size: 2.5rem
        }

        .h2,h2 {
            font-size: 2rem
        }

        .h3,h3 {
            font-size: 1.75rem
        }

        .h5,h5 {
            font-size: 1.25rem
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .rounded {
            border-radius: .25rem!important
        }

        .d-none {
            display: none!important
        }

        .d-block {
            display: block!important
        }

        .d-flex {
            display: -ms-flexbox!important;
            display: flex!important
        }

        .justify-content-end {
            -ms-flex-pack: end!important;
            justify-content: flex-end!important
        }

        .justify-content-center {
            -ms-flex-pack: center!important;
            justify-content: center!important
        }

        .align-items-center {
            -ms-flex-align: center!important;
            align-items: center!important
        }

        .position-relative {
            position: relative!important
        }

        .mt-3,.my-3 {
            margin-top: 1rem!important
        }

        .text-justify {
            text-align: justify!important
        }

        .text-left {
            text-align: left!important
        }

        .text-center {
            text-align: center!important
        }

        /* Main.css Critical */
        body {
            font-family: "Barlow",sans-serif;
            font-weight: normal;
            font-style: normal
        }

        h1,h2,h3,h4,h5,h6 {
            font-family: "Teko",sans-serif;
            color: #2c234d;
            margin-top: 0px;
            font-style: normal;
            font-weight: 500;
            text-transform: normal
        }

        p {
            font-family: "Barlow",sans-serif;
            color: #10285d;
            font-size: 16px;
            line-height: 30px;
            margin-bottom: 15px;
            font-weight: normal
        }

        .fix {
            overflow: hidden
        }

        a,.button {
            -webkit-transition: all .3s ease-out 0s;
            -moz-transition: all .3s ease-out 0s;
            -ms-transition: all .3s ease-out 0s;
            -o-transition: all .3s ease-out 0s;
            transition: all .3s ease-out 0s
        }

        a {
            color: #635c5c
        }

        a,button {
            color: #fff;
            outline: medium none
        }

        h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
            color: inherit
        }

        ul {
            margin: 0px;
            padding: 0px
        }

        li {
            list-style: none
        }

        #scrollUp,#back-top {
            background: #f15f22;
            height: 50px;
            width: 50px;
            right: 31px;
            bottom: 18px;
            position: fixed;
            z-index: 10;
            color: #fff;
            font-size: 20px;
            text-align: center;
            border-radius: 50%;
            line-height: 48px;
            border: 2px solid transparent;
            box-shadow: 0 0 10px 3px rgba(108,98,98,0.2)
        }

        @media (max-width: 575px) {
            #scrollUp,#back-top {
                right:16px
            }
        }


        #scrollUp a i,#back-top a i {
            display: block;
            line-height: 50px
        }

        .sticky-bar {
            left: 0;
            margin: auto;
            position: fixed;
            top: 0;
            width: 100%;
            -webkit-box-shadow: 0 10px 15px rgba(25,25,25,0.1);
            box-shadow: 0 10px 15px rgba(25,25,25,0.1);
            z-index: 9999;
            -webkit-animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
            animation: 300ms ease-in-out 0s normal none 1 running fadeInDown;
            -webkit-box-shadow: 0 10px 15px rgba(25,25,25,0.1);
            background: #fff
        }

        .mb-35 {
            margin-bottom: 35px
        }

        .mb-50 {
            margin-bottom: 50px
        }

        .mb-80 {
            margin-bottom: 80px
        }

        .ml-20 {
            margin-left: 20px
        }

        .pt-115 {
            padding-top: 115px
        }

        .pb-120 {
            padding-bottom: 120px
        }

        .preloader {
            background-color: #f7f7f7;
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999999;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s;
            margin: 0 auto
        }

        .preloader .preloader-circle {
            width: 100px;
            height: 100px;
            position: relative;
            border-style: solid;
            border-width: 1px;
            border-top-color: #f15f22;
            border-bottom-color: transparent;
            border-left-color: transparent;
            border-right-color: transparent;
            z-index: 10;
            border-radius: 50%;
            -webkit-box-shadow: 0 1px 5px 0 rgba(35,181,185,0.15);
            box-shadow: 0 1px 5px 0 rgba(35,181,185,0.15);
            background-color: #fff;
            -webkit-animation: zoom 2000ms infinite ease;
            animation: zoom 2000ms infinite ease;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s
        }

        .preloader .preloader-img {
            position: absolute;
            top: 50%;
            z-index: 200;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center;
            display: inline-block;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            padding-top: 6px;
            -webkit-transition: .6s;
            -o-transition: .6s;
            transition: .6s
        }

        .preloader .preloader-img img {
            max-width: 55px
        }

        .section-padding30 {
            padding-top: 195px;
            padding-bottom: 170px
        }

        @media (max-width: 575px) {
            .section-padding30 {
                padding-top:65px;
                padding-bottom: 30px
            }
        }

        .padding-bottom {
            padding-bottom: 190px
        }   

        @media (max-width: 575px) {
            .padding-bottom {
                padding-bottom:70px
            }
        }

        @media (max-width: 575px) {
            .section-tittle {
                margin-bottom:50px
            }
        }

        .section-tittle span {
            font-size: 18px;
            display: block;
            color: #f15f22;
            font-weight: 600;
            text-transform: capitalize;
            margin-bottom: 17px
        }

        .section-tittle h2 {
            font-size: 50px;
            display: block;
            font-weight: 600;
            text-transform: capitalize;
            line-height: 1.3
        }

        @media (max-width: 575px) {
            .section-tittle h2 {
                font-size:30px;
                line-height: 1.6
            }
        }

        .section-bg {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center
        }

        @media (max-width: 575px) {
            .header-area .header-bottom {
                padding:15px 0px
            }
        }

        .header-area {
            background: #000c20
        }

        @media (max-width: 575px) {
            .header-area {
                box-shadow:0 10px 15px rgba(25,25,25,0.1)
            }
        }

        .main-header {
            position: relative;
            z-index: 3
        }

        .header-sticky.sticky-bar {
            background: #000
        }


        .mobile_menu {
            position: absolute;
            right: 0px;
            width: 100%;
            z-index: 99
        }

        .mobile_menu .slicknav_menu {
            background: transparent;
            margin-top: 0px !important
        }

        .mobile_menu .slicknav_menu .slicknav_btn {
            top: -34px
        }

        .mobile_menu .slicknav_menu .slicknav_btn .slicknav_icon-bar {
            background-color: #f15f22 !important
        }

        .mobile_menu .slicknav_menu .slicknav_nav {
            margin-top: 9px !important;
            box-shadow: 0 0 10px 3px rgba(141,140,140,0.5)
        }

        .mobile_menu .slicknav_menu .slicknav_nav a {
            font-size: 15px;
            padding: 7px 10px
        }

        .mobile_menu .slicknav_menu .slicknav_nav .slicknav_item a {
            padding: 0 !important
        }

        .slider-height {
            background-image: url(../img/hero/h1_hero.webp);
            min-height: 600px;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover
        }

        @media (max-width: 575px) {
            .slider-height {
                min-height:500px
            }
        }

        @media (max-width: 575px) {
            .slider-area .hero__caption {
                padding-top:50px
            }
        }

        .slider-area .hero__caption h1 {
            font-size: 95px;
            font-weight: 600;
            margin-bottom: 14px;
            color: #fff;
            line-height: 95px;
            text-transform: capitalize;
            margin-bottom: 40px
        }

        @media (max-width: 575px) {
            .slider-area .hero__caption h1 {
                font-size:32px;
                line-height: 1.2
            }
        }

        .slider-area .hero__caption h1 span {
            color: #f15f22
        }


        .about-low-area .about-img {
            position: relative
        }

        .about-low-area .about-img .about-font-img {
            position: absolute;
            z-index: 1;
            right: 47px;
            top: 0px
        }

        @media (max-width: 575px) {
            .about-low-area .about-img .about-font-img {
                position:unset
            }
        }

        @media (max-width: 575px) {
            .about-low-area .about-img .about-font-img img {
                width:100%
            }
        }

        @media (max-width: 575px) {
            .about-caption {
                margin-bottom:35px
            }
        }

        .categories-area .single-cat {
            border: 1px solid #e1ebf7;
            border-radius: 6px;
            padding: 85px 22px;
            -webkit-transition: all .4s ease-out 0s;
            -moz-transition: all .4s ease-out 0s;
            -ms-transition: all .4s ease-out 0s;
            -o-transition: all .4s ease-out 0s;
            transition: all .4s ease-out 0s;
            position: relative;
            z-index: 1
        }

        @media (max-width: 575px) {
            .categories-area .single-cat {
                padding:50px 22px
            }
        }

        .categories-area .single-cat::before {
            position: absolute;
            content: "";
            width: 100%;
            height: 0;
            background: #ff5f13;
            transition: .6s;
            bottom: 0;
            left: 0;
            z-index: -1;
            border-radius: 6px
        }

        .categories-area .single-cat .cat-cap h5>a {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 21px;
            display: block;
            -webkit-transition: all .2s ease-out 0s;
            -moz-transition: all .2s ease-out 0s;
            -ms-transition: all .2s ease-out 0s;
            -o-transition: all .2s ease-out 0s;
            transition: all .2s ease-out 0s;
            font-family: "Barlow",sans-serif
        }

        @media (max-width: 575px) {
            .categories-area .single-cat .cat-cap h5>a {
                font-size:26px
            }
        }

        .categories-area .single-cat .cat-cap p {
            margin-bottom: 36px;
            color: #57667e;
            font-size: 16px;
            -webkit-transition: all .2s ease-out 0s;
            -moz-transition: all .2s ease-out 0s;
            -ms-transition: all .2s ease-out 0s;
            -o-transition: all .2s ease-out 0s;
            transition: all .2s ease-out 0s
        }

        .categories-area .single-cat .cat-cap a {
            color: #1c165c;
            font-size: 16px;
            font-weight: 600;
            -webkit-transition: all .2s ease-out 0s;
            -moz-transition: all .2s ease-out 0s;
            -ms-transition: all .2s ease-out 0s;
            -o-transition: all .2s ease-out 0s;
            transition: all .2s ease-out 0s
        }

        .contact-form-area .contact-form-wrapper {
            background: #f5f5f5;
            padding: 80px;
            border-radius: 8px
        }

        @media (max-width: 575px) {
            .contact-form-area .contact-form-wrapper {
                padding:20px
            }
        }

        .contact-form-area .contact-form-wrapper form.contact-form input {
            height: 60px;
            width: 100%;
            color: #777777;
            font-size: 18px;
            font-weight: 400;
            padding: 9px 33px 9px 32px;
            border-radius: 5px;
            border: 1px solid #efebeb;
            background: #fff;
            margin-bottom: 20px
        }

        @media (max-width: 575px) {
            .contact-form-area .contact-form-wrapper form.contact-form input {
                margin-bottom:20px
            }
        }


        .contact-form-area .contact-form-wrapper form.contact-form input::placeholder {
            color: #616875
        }

        @media (max-width: 575px) {
            .contact-form-area .contact-form-wrapper form.contact-form input::placeholder {
                font-size:14px
            }
        }

        .contact-form-area .contact-form-wrapper form.contact-form .nice-select {
            width: 100%;
            height: 60px;
            background: #fff;
            padding: 11px 19px 11px 31px;
            line-height: 42px;
            border-radius: 5px;
            border: 1px solid #efebeb;
            background: #fff;
            color: #a6abb0;
            font-size: 17px;
            margin-bottom: 20px
        }

        @media (max-width: 575px) {
            .contact-form-area .contact-form-wrapper form.contact-form .nice-select {
                margin-bottom:20px;
                padding-left: 25px
            }
        }

        .contact-form-area .contact-form-wrapper form.contact-form .nice-select .list {
            width: 100%
        }

        .contact-form-area .contact-form-wrapper form.contact-form .nice-select::after {
            border-bottom: 1px solid #a9b6cd;
            border-right: 1px solid #a9b6cd;
            height: 12px;
            width: 12px;
            margin-top: -7px;
            right: 29px
        }

        .slick-initialized .slick-slide {
            outline: 0
        }

        .footer-area {
            background: #121212
        }

        .footer-area .footer-bottom {
            padding-bottom: 50px;
            padding-top: 20px
        }

        .footer-area .footer-bottom .footer-copy-right p {
            color: #bbbcbc;
            font-weight: 300;
            font-size: 16px;
            line-height: 2;
            margin-bottom: 12px
        }

        .genric-btn {
            display: inline-block;
            outline: none;
            line-height: 40px;
            padding: 0 30px;
            font-size: .8em;
            text-align: center;
            text-decoration: none;
            font-weight: 500;
            cursor: pointer;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s
        }

        .genric-btn.circle {
            border-radius: 20px
        }

        .genric-btn.primary {
            color: #fff;
            background: #1f2b7b;
            border: 1px solid transparent
        }

        .genric-btn.danger {
            color: #fff;
            background: #f44a40;
            border: 1px solid transparent
        }

        .unordered-list li {
            position: relative;
            padding-left: 30px;
            line-height: 1.82em !important
        }

        .unordered-list li:before {
            content: "";
            position: absolute;
            width: 14px;
            height: 14px;
            border: 3px solid #1f2b7b;
            background: #fff;
            top: 4px;
            left: 0;
            border-radius: 50%
        }

        .ordered-list {
            margin-left: 30px
        }

        .ordered-list li {
            list-style-type: decimal-leading-zero;
            color: #1f2b7b;
            font-weight: 500;
            line-height: 1.82em !important
        }
        /* End Main.css Critical */

        /* Fontawesome css critical */
        .fa,.fab,.fal,.far,.fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-level-up-alt:before {
            content: "\f3bf"
        }

        .fa,.far,.fas {
            font-family: Font Awesome\ 5 Free
        }

        .fa,.fas {
            font-weight: 900
        }

        /* End fontawesome css critical */

    </style>
    {{-- End Critical Styles --}}
    

    @livewireStyles
</head>
<body>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img data-src="{{ asset('/img/logo/loder.jpg') }}" class="lazyload" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->


    <main>
        <header>
            <!-- Header Start -->
            <div class="header-area">
                <div class="main-header ">
                    {{-- <div class="header-top d-none d-lg-block">
                        <div class="container">
                            <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left">
                                        <ul>     
                                            <li>Phone: +99 (0) 101 0000 888</li>
                                            <li>Email: noreply@yourdomain.com</li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right">
                                        <ul class="header-social">    
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="header-bottom  header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        {{-- <a href="index.html"><img src="{{ asset('/img/logo/logo.png') }}" alt=""></a> --}}
                                        <h2>
                                            <span style="color: white"><a href="{{ url('/') }}">Edukasi Pajak</a></span> 
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10">
                                    <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                        <!-- Main-menu -->
                                        <div class="main-menu d-none d-lg-block">
                                            <nav> 
                                                <ul id="navigation">                                                                                          
                                                    <li><a href="{{ url('/') }}">Beranda</a></li>
                                                    <li><a href="{{ url('/'.'#pengertian-npwp') }}">NPWP</a>
                                                        <ul class="submenu">
                                                            <li><a href="{{ url('/'.'#pengertian-npwp') }}">Pengertian NPWP</a></li>
                                                            <li><a href="{{ url('/'.'#fungsi-manfaat') }}">Fungsi & Manfaat</a></li>
                                                            <li><a href="{{ url('/'.'#cara-membuat-npwp') }}">Cara Membuat NPWP</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ url('/'.'#cara-menggunakan-kalkulator-pajak') }}">Cara Menggunakan Kalkulator Pajak</a></li>
                                                    {{-- <li><a href="{{ route('page', 'artikel') }}">Artikel</a>
                                                        <ul class="submenu">
                                                            <li><a href="blog.html">Artikel</a></li>
                                                            <li><a href="blog_details.html">Blog Details</a></li>
                                                            <li><a href="elements.html">Element</a></li>
                                                        </ul>
                                                    </li> --}}
                                                    {{-- <li><a href="{{ route('page','kontak') }}">Kontak</a> --}}
                                                    {{-- @auth
                                                        <li><a href="{{ route('home') }}">Dasbor</a></li>
                                                    @else 
                                                        <li><a href="{{ route('login') }}">Login</a></li>
                                                    @endauth --}}
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- Header-btn -->
                                        <div class="header-right-btn d-none d-lg-block ml-20">
                                            <a href="#kalkulator-pajak" class="btn header-btn">Kalkulator Pajak</a>
                                        </div>
                                    </div>
                                </div> 
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>
        
        @if (request()->segment(1) == 'beranda' || request()->segment(1) == '')
            @yield('beranda')
        @endif
        
        @if (request()->segment(1) == 'kontak')
            @yield('kontak')
        @endif
        
    </main>
    
    <footer>
        <!--? Footer Start-->
        <div class="footer-area footer-bg">
            <div class="container">
                {{-- <div class="footer-top footer-padding">
                    <!-- footer Heading -->
                    <div class="footer-heading">
                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="wantToWork-caption wantToWork-caption2">
                                    <h2>We Understand The Importance Approaching Each Work!</h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <span class="contact-number f-right">+ 1 212-683-9756</span>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>COMPANY</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#"> Press & Blog</a></li>
                                        <li><a href="#"> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Open hour</h4>
                                    <ul>
                                        <li><a href="#">Monday 11am-7pm</a></li>
                                        <li><a href="#"> Tuesday-Friday 11am-8pm</a></li>
                                        <li><a href="#"> Saturday 10am-6pm</a></li>
                                        <li><a href="#"> Sunday 11am-6pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>RESOURCES</h4>
                                    <ul>
                                        <li><a href="#">Home Insurance</a></li>
                                        <li><a href="#">Travel Insurance</a></li>
                                        <li><a href="#"> Car Insurance</a></li>
                                        <li><a href="#"> Business Insurance</a></li>
                                        <li><a href="#"> Heal Insurance</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">GThe trade war currently ensuing between te US anfd several natxions around thdhe globe, most fiercely with.</p>
                                    </div>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social ">
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                                    {{-- | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <!-- Lazy Sizes -->    
    <script src="{{ asset('/js/lazysizes.min.js') }}" async></script>
      
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> --}}

    <script src="{{ asset('/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <script src="{{ asset('/js/animated.headline.js') }}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.js') }}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.sticky.js') }}"></script>
    
    <!-- contact js -->
    {{-- <script src="{{ asset('/js/contact.js') }}"></script> --}}
    {{-- <script src="{{ asset('/js/jquery.form.js') }}"></script> --}}
    {{-- <script src="{{ asset('/js/jquery.validate.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('/js/mail-script.js') }}"></script> --}}
    {{-- <script src="{{ asset('/js/jquery.ajaxchimp.min.js') }}"></script> --}}
    
    <!-- Jquery Plugins, main Jquery -->	
    {{-- <script src="{{ asset('/js/plugins.js') }}"></script> --}}
    <script src="{{ asset('/js/main.js') }}"></script>

    <!-- MaskMoney Jquery Plugin -->
    <script defer src="{{ asset('/jquery-maskmoney/src/jquery.maskMoney.js') }}"></script>


    {{-- Kalkulator Pajak --}}
    {{-- <script src="{{ asset('/js/kalkulator-pajak.js') }}"></script> --}}

    @yield('script')

    @livewireScripts
</body>
</html>