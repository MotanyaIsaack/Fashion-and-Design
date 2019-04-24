<footer class="footer footer-four">
    <div class="primary-footer brand-bg text-center">
        <div class="container">

            <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light"
                data-section="#top">
                <i class="material-icons">&#xE316;</i>
            </a>

            <ul class="social-link tt-animate ltr mt-20">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <!--                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>-->
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <!--                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <!--                    <li><a href="#"><i class="fa fa-rss"></i></a></li>-->
            </ul>

            <hr class="mt-15">

            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logo">
                        <img src="<?=base_url()?>assets/website/assets/Images/sitelogo.png" alt="">
                    </div>

                    <span class="copy-text">Copyright &copy; 2019 <a href="#">Kikoromeo</a> &nbsp; | &nbsp; All Rights
                        Reserved &nbsp; | &nbsp; Designed By <a href="#">PowerTeam</a>
                    </span>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->
</footer>



<!-- Preloader -->
<div id="preloader">
    <div class="preloader-position">
        <img src="<?=base_url()?>assets/website/assets/Images/sitelogo.png" alt="logo">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>
<!-- End Preloader -->


<!-- jQuery -->
<script src="<?=base_url()?>assets/website/assets/js/jquery-2.1.3.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/materialize/js/materialize.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/menuzord.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/bootstrap-tabcollapse.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/jquery.easing.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/jquery.sticky.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/smoothscroll.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/imagesloaded.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/jquery.stellar.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/jquery.inview.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/jquery.shuffle.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/owl.carousel/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/flexSlider/jquery.flexslider-min.js"></script>
<script src="<?=base_url()?>assets/website/assets/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/js/scripts.js"></script>

<!-- RS5.0 Core JS Files -->
<script src="<?=base_url()?>assets/website/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=base_url()?>assets/website/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- RS5.0 Init  -->
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery(".materialize-slider").revolution({
        sliderType: "standard",
        sliderLayout: "fullwidth",
        delay: 9000,
        navigation: {
            keyboardNavigation: "on",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            onHoverStop: "off",
            touch: {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
            },
            arrows: {
                style: "gyges",
                enable: true,
                hide_onmobile: false,
                hide_onleave: true,
                tmp: '',
                left: {
                    h_align: "left",
                    v_align: "center",
                    h_offset: 10,
                    v_offset: 0
                },
                right: {
                    h_align: "right",
                    v_align: "center",
                    h_offset: 10,
                    v_offset: 0
                }
            }
        },
        responsiveLevels: [1240, 1024, 778, 480],
        gridwidth: [1240, 1024, 778, 480],
        gridheight: [700, 600, 500, 500],
        disableProgressBar: "on",
        parallax: {
            type: "mouse",
            origo: "slidercenter",
            speed: 2000,
            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
        }
    });
    $('.slider').slider();
});
</script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js">
</script>
<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
    src="<?=base_url()?>assets/website/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

</body>

</html>