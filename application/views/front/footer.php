<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col">
                    <h4>Tentang Digitalabs</h4>
                    <p>We're passionate about offering some of the best business growth services for startups</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Important Links</h4>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Our business partners <a class="turquoise" href="#your-link">startupguide.com</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy Policy</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col">
                    <h4 class>Social Media</h4>

                    <?php foreach ($sosmed as $s) : ?>
                        <span class="fa-stack">
                            <a href="<?= $s['url'] ?>">
                                <i class="fas fa-circle fa-stack-2x <?= $s["name"]; ?>"></i>
                                <i class="fab fa-<?= $s['name']; ?> fa-stack-1x"></i>
                            </a>
                        </span>
                    <?php endforeach; ?>



                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © <?php echo  date("M - ,Y"); ?> <a href="https://pesantrencoding.com">pesantrencoding.com</a> - All rights reserved</p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->


<!-- Scripts -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script> <!-- Bootstrap framework -->
<script src="<?= base_url('assets/js/jquery.easing.min.js') ?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="<?= base_url('assets/js/swiper.min.js') ?>"></script> <!-- Swiper for image and text sliders -->
<script src="<?= base_url('assets/js/jquery.magnific-popup.js') ?>"></script> <!-- Magnific Popup for lightboxes -->
<script src="<?= base_url('assets/js/validator.min.js') ?>"></script> <!-- Validator.js') ?> - Bootstrap plugin that validates forms -->
<script src="<?= base_url('assets/js/scripts.js') ?>"></script> <!-- Custom scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>