<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="pesantrencoding.com | Dede Husen">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title> <?= $title ?></title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">

    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/fontawesome-all.css ') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/swiper.css ') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/magnific-popup.css ') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css ') ?>" rel="stylesheet">

    <!-- magnify pop up -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <!-- magnify pop up -->

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url('assets/images/favicon.png') ?>')?>">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?= base_url() ?>"> <img src="<?= base_url('assets/images/house.png') ?>" alt="pesantrencoding.com"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#blog" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><span class="item-text">Artikel Islam</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Programming</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Digital Marketing</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Tech News</span></a>
                    </div>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url() ?>#portpolio">Portpolio</a>
                </li>

                <!-- Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url() ?>home/terms"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?= base_url() ?>home/privacy"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?= base_url() ?>#contact">Contact</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <?php foreach ($sosmed as $s) : ?>
                    <span class="fa-stack">
                        <a href="<?= site_url($s['url']) ?>">
                            <i class="fas fa-circle fa-stack-2x <?= $s["name"]; ?>"></i>
                            <i class="fab fa-<?= $s['name']; ?> fa-stack-1x"></i>

                            <!-- <i class="fas fa-circle fa-stack-2x < ?= $s['name'] ?>"></i> -->
                            <!-- <i class="fab fa-< ?= $s['name']; ?> fa-stack-1x"></i> -->
                        </a>
                    </span>
                <?php endforeach; ?>
                <!-- <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span> -->
                <!-- <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x instagram"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x youtube"></i>
                        <i class="fab fa-youtube fa-stack-1x"></i>
                    </a>
                </span> -->
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->