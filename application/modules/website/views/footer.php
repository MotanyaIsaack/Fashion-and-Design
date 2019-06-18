<footer class="footer footer-four">
    <div class="primary-footer brand-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <div class="text-center">
                                <i class="material-icons" style="float:right;" onClick="dismissModal()">close</i>
                                <h2 class="section-title text-uppercase">Drop us a line</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="contactForm" class="white" style="padding:2em; padding-bottom:5em"
                                        id="contactForm" action="<?=base_url()?>website/send_mail" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input type="text" name="name" class="validate" id="name">
                                                    <label for="name">Name</label>
                                                </div>
                                            </div><!-- /.col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <label for="email">Email</label>
                                                    <input id="email" type="email" name="email" class="validate"
                                                        required>
                                                    <span class="helper-text" data-error="wrong"
                                                        data-success="right"></span>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input id="phone" type="tel" name="phone" class="validate">
                                                    <label for="phone">Phone Number</label>
                                                    <small class="helper-text left" data-error="wrong"
                                                        data-success="right">Optional</small>
                                                </div>
                                            </div><!-- /.col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <input id="website" type="text" name="website" class="validate">
                                                    <label for="website">Your Website</label>
                                                    <small class="helper-text left" data-error="wrong"
                                                        data-success="right">Optional</small>
                                                </div>
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.row -->


                                        <div class="input-field">
                                            <input id="subject" type="text" name="subject" class="validate" required>
                                            <label for="subject">Subject</label>
                                        </div>

                                        <div class="input-field">
                                            <textarea name="message" id="message"
                                                class="materialize-textarea"></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                        <div class="p-2">
                                            <button type="submit" name="submit"
                                                class="waves-effect waves-light btn submit-button pink mt-25 left submit-btn">Send
                                                Message</button>
                                                <div class="alert hide" id="email-feedback"></div>
                                        </div>
                                    </form>
                                </div><!-- /.col-md-8 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--col-md-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!--primary footer -->
</footer>
<!--footer 1 start -->
<footer class="footer footer-one">
    <div class="primary-footer brand-bg">
        <div class="container">
            <a onclick="callmodal()"
                class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt"
                data-section="#top" id="contact_us_model">
                <i class="material-icons">call</i>
            </a>

            <div class="row">
                <div class="col-md-4 widget clearfix">
                    <h2 class="white-text">About Kikoromeo</h2>
                    <ul class="social-link tt-animate ltr">
                        <p>Kikoromeo, meaning “Adam’s Apple” in Kiswahili,
                            is now co-designed by mother-daughter duo
                            Ann and Iona McCreath from Nairobi, Kenya.
                            The heritage lifestyle brand was founded in 1996 .</p>
                        <li><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
                        <li><a href="https://mobile.twitter.com/KikoRomeoAfrica" target="_blank"><i class="fa fa-2x fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/kikoromeo/" target="_blank"><i class="fa fa-2x fa-instagram"></i></a></li>
                    </ul>
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 widget">
                    <h2 class="white-text" style="margin-top:15px;">Imporant links</h2>

                    <ul class="footer-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Terms &amp; Condition</a></li>
                    </ul>
                </div><!-- /.col-md-3 -->

                <div class="col-md-4 widget">
                    <h2 class="white-text" style="margin-top:15px;">Location</h2>
                    <p>Old Mutual Building<br>Momabasa,Kenya<br>Address:2393-00348<br>Telephone:0763372892</p>
                </div><!-- /.col-md-3 -->


            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.primary-footer -->

    <div class="secondary-footer brand-bg darken-2">
        <div class="container">
            <span class="copy-text">Copyright &copy; 2019 <a href="#">Kikoromeo</a> &nbsp; | &nbsp; All Rights Reserved
                &nbsp; | &nbsp; Designed By <a href="#">PowerTeam</a></span>
        </div><!-- /.container -->
    </div><!-- /.secondary-footer -->
</footer>
<!--footer 1 end-->


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
<script src="<?=website_assets_url('js/materialize-slider.js');?>"></script>

<!-- Custom JS -->
<script src="<?=website_assets_url('js/carousel-edit.js');?>"></script>
<script src="<?=website_assets_url('js/website.js');?>"></script>
<!--Should be added last-->
<script src="<?=website_assets_url('js/modal.js');?>"></script>

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