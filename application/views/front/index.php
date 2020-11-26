<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1><span class="turquoise">Go Digital</span></h1>
                        <h2><span class="turquoise">Jadikan Jasa atau Produkmu mudah di temukan </span></h2>
                        <p class="p-large">Tingkatkan pendapatanmu raih pasar digital yang luas</p>
                        <h3 class="turquoise"> Cepat . Terpercaya . Aman</h3>
                        <a class="btn-solid-lg page-scroll" href="#services">Layanan Kami</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url('assets/images/header-teamwork.svg') ?>" alt="atas">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Customers -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5>Trusted By</h5>

                <!-- Image Slider -->
                <div class="slider-container">
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($mitra as $m) : { ?>
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img class="img-responsive" src="<?= base_url('assets/img/mitra/') . $m['image']; ?>" alt="alternative">
                                        </div>
                                    </div>
                            <?php }
                            endforeach; ?>

                        </div>
                    </div> <!-- end of swiper-wrapper -->
                </div> <!-- end of swiper container -->
            </div> <!-- end of slider-container -->
            <!-- end of image slider -->

        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of customers -->


<!-- Services -->
<div id="services" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Apa Yang Kamu Butuhkan Ada Disini</h2>
                <p class="p-heading p-large">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ex sint veniam incidunt, eligendi atque dolores. Dignissimos fugit at quibusdam totam, aliquid delectus vitae quas minus enim, asperiores reiciendis repellendus?</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-10">

                <!-- Card -->
                <?php foreach ($services as $serv) :  ?>
                    <div class="card">
                        <img style="width: 250px;height:250px;" src="<?= base_url('assets/img/service/') . $serv['image'] ?>" alt="<?= $serv['name'] ?>">
                        <div class="card-body">
                            <h4 class="card-title"><?= $serv['name']; ?></h4>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg popup-with-move-anim" href="#<?= $serv['name'] ?>">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>


            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of services -->


<div class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Design And Plan Your Business Growth Steps</h2>
                    <p>Use our staff and our expertise to design and plan your business growth strategy. Evolo team is eager to advise you on the best opportunities that you should look into</p>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIGHTBOX</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="<?= base_url('assets/images/details-1-office-worker.svg') ?>" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details 1 -->


<!-- Details 2 -->
<div class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="<?= base_url('assets/images/details-2-office-team-work.svg') ?>" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Search For Optimization Wherever Is Possible</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Basically we'll teach you step by step what you need to do</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">In order to develop your company and reach new heights</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i>
                            <div class="media-body">Everyone will be pleased from stakeholders to employees</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIGHTBOX</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 2 -->


<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="<?= base_url('assets/images/details-lightbox-1.svg') ?>" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Design And Plan</h3>
                <hr>
                <h5>Core feature</h5>
                <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">List building framework</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Easy database browsing</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">User administration</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Automate user signup</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Quick formatting tools</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Fast email checking</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 1 -->

<!-- Details Lightbox 2 -->
<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
    <div class="container">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="<?= base_url('assets/images/details-lightbox-2.svg') ?>" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Search To Optimize</h3>
                <hr>
                <h5>Core feature</h5>
                <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">List building framework</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Easy database browsing</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">User administration</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Automate user signup</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Quick formatting tools</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i>
                        <div class="media-body">Fast email checking</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of lightbox-basic -->
<!-- end of details lightbox 2 -->
<!-- end of details lightboxes -->
<!-- portpolio -->

<div id="portpolio" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Portpolio</h2>
                <p class="p-heading p-large">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque ex sint veniam incidunt, eligendi atque dolores. Dignissimos fugit at quibusdam totam, aliquid delectus vitae quas minus enim, asperiores reiciendis repellendus?</p>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">


                        <div class="col-12 mb-2">
                            <button type="button" class="btn-solid-reg page-scroll filter-button active" data-filter="all">All</button>
                            <button type="button" class="btn-solid-reg page-scroll filter-button" data-filter="aa">Photogarphy</button>
                            <button type="button" class="btn-solid-reg page-scroll filter-button" data-filter="bb">Landingpage</button>
                        </div>
                        <hr>
                        <!-- <div class=" filter all 2">
                            <img src="<?= base_url() ?>assets/images/2.jpg" class="gambar">
                        </div> -->


                    </div>
                    <div class="row">

                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6  mb-2 filter aa">
                            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 mb-2 filter bb">
                            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 mb-2 filter aa">
                            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                        </div>

                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 mb-2 filter bb">
                            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                        </div>
                        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 mb-2 filter bb">
                            <img src="http://fakeimg.pl/365x365/" class="img-responsive">
                        </div>

                    </div>

                </div>




            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <!-- end of cards-1 -->
    <!-- end of services -->

    <!-- portpolio -->






    <!-- Pricing -->
    <div id="blog" class="cards-2">
        <div class="container">
            <div class="row mb-0">
                <div class="col-lg-12">
                    <h2>Tambah dan share Pengetahuanmu </h2>
                    <p class="p-heading p-large">Sebaik-baik manusisa adalah yang paling bermanfaat bagi yang lainya, yuk tambah pengtahuan dan wawasanmu disini.
                        Kirim artikel bermanfaatmu disini, jadikan ladang amal kebaikan </p>

                </div> <!-- end of col -->

            </div> <!-- end of row -->
            <div class="row mb-4">
                <div class="col-12 mb-2 ">
                    <button type="button" class="btn-solid-reg page-scroll filter-button active" data-filter="all">All</button>
                    <button type="button" class="btn-solid-reg page-scroll filter-button" data-filter="0">Tech News</button>
                    <button type="button" class="btn-solid-reg page-scroll filter-button" data-filter="1">Digital Marketing</button>
                    <button type="button" class="btn-solid-reg page-scroll filter-button" data-filter="2">Tutorial</button>
                    <button type="button" class="btn-solid-reg page-scroll filter-button" data-filter="3">Programming</button>
                    <button type="button" class="btn-solid-reg page-scroll filter-button" data-filter="4">Course</button>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->

                    <?php for ($i = 0; $i < 5; $i++) : {   ?>

                            <div class="card ml-2 mr-2 filter <?= $i; ?>">
                                <div class="card-body">
                                    <img src="<?= base_url('assets/images/details-lightbox-1.svg') ?>" class="card-img-top" alt="...">
                                    <div class="card-title mt-2 mb-2">Tis title you can see <?= $i; ?></div>

                                    <hr class="cell-divide-hr mb-2">

                                    <div class="card-subtitle"></div>
                                    <div class="button-wrapper">
                                        <a class="btn-solid-reg page-scroll" href="<?= base_url() ?>home/blog">Selengkapnya</a>
                                    </div>
                                </div>
                            </div> <!-- end of card -->

                    <?php }
                    endfor ?>



                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Request -->


    <!-- Video -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Check Out The Video</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <img class="img-fluid" src="<?= base_url('assets/images/video-frame.svg') ?>" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <p>This video will show you a case study for one of our <strong>Major Customers</strong> and will help you understand why your startup needs Evolo in this highly competitive market</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of video -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url('assets/images/testimonials-2-men-talking.svg') ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Testimonials</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <?php for ($c = 0; $c < 6; $c++) : {   ?>

                                        <div class="swiper-slide">
                                            <div class="card">
                                                <img class="card-image" src="<?= base_url('assets/images/testimonial-1.svg') ?>" alt="alternative">
                                                <div class="card-body">
                                                    <p class="testimonial-text">I just finished my trial period and was so amazed with the support and results that I purchased Evolo right away at the special price.</p>
                                                    <p class="testimonial-author"><?php echo $c ?></p>
                                                </div>
                                            </div>
                                        </div> <!-- end of swiper-slide -->
                                        <!-- end of slide -->

                                <?php }
                                endfor ?>

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About The Team</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which will help you research new products and launch them in new emerging markets</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Team Member -->
                    <?php for ($c = 0; $c < 4; $c++) : {   ?>

                            <div class="team-member">
                                <div class="image-wrapper">
                                    <img class="img-fluid" src="<?= base_url('assets/images/team-member-1.svg') ?>" alt="alternative">
                                </div> <!-- end of image-wrapper -->
                                <p class="p-large"><strong>Lacy Whitelong</strong></p>
                                <p class="job-title">Business Developer</p>
                                <span class="social-icons">
                                    <span class="fa-stack">
                                        <a href="#your-link">
                                            <i class="fas fa-circle fa-stack-2x facebook"></i>
                                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                                        </a>
                                    </span>
                                    <span class="fa-stack">
                                        <a href="#your-link">
                                            <i class="fas fa-circle fa-stack-2x twitter"></i>
                                            <i class="fab fa-twitter fa-stack-1x"></i>
                                        </a>
                                    </span>
                                </span> <!-- end of social-icons -->
                            </div> <!-- end of team-member -->
                            <!-- end of team member -->
                    <?php }
                    endfor ?>


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Hubungi Kami</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Jangan sungkan untuk menghubungi kami</li>
                        <li><i class="fas fa-map-marker-alt"></i>Jalan Mohammad Hatta No. 23 Kuningan - Jawa barat</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+6282214783760</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:admin@digicode.com">admin@digicode.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63363.80740567848!2d108.4582497135491!3d-6.9812222625173685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1422db86b057%3A0x401e8f1fc28e2a0!2sKuningan%2C%20Kuningan%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1600362929002!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree with Evolo's stated <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Details Lightbox 1 -->
    <?php foreach ($services as $serv) : ?>

        <div id="<?= $serv['name']; ?>" class="lightbox-basic zoom-anim-dialog mfp-hide center">
            <div class="container">
                <div class="row center">
                    <div class="col-4 ">
                        <img src="<?= base_url('assets/img/service/') . $serv['image'] ?>" alt="<?= $serv['name'] ?>" style="width:300px;height:300px;">
                    </div>

                    <div class="col-8">

                        <div class="row text-center m-2">
                            <div class=" h2"> <?= $serv['name']; ?> </div>
                        </div>

                        <div class="row m-2 text-justifiy overflow-auto">
                            <div class="overflow-auto"><?= $serv['detail'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button title="Close (Esc)" type="button" class="mfp-close x-button">X</button>
                </div>
            </div>
        <?php endforeach; ?>