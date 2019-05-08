

<footer class="footer footer-four">
    <div class="primary-footer brand-bg text-center">
        <div class="container">
        <section >

          <div class="container">
          <!-- <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    
    
  </ul>
</div> -->
<!-- Modal Trigger -->


          

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
  <div class="text-center">
                 
                  <i class="material-icons" style="float:right;" onClick="dismissModal()">close</i>
                   <h2 class="section-title text-uppercase" style="font-weight:100px;">Drop us a line</h2>
              </div>

            <div class="row" >
                <div class="col-md-12">
                    <form id="contact-form" class="white" style="padding:2em; padding-bottom:5em" id="contactForm" action="<?=base_url()?>website/sendmail" method="POST">
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
                            <input id="email" type="email" name="email" class="validate" required>
                            <span class="helper-text" data-error="wrong" data-success="right"></span>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="phone" type="tel" name="phone" class="validate" >
                            <label for="phone">Phone Number</label>
                            <small class="helper-text left" data-error="wrong" data-success="right">Optional</small>
                          </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="website" type="text" name="website" class="validate" >
                            <label for="website">Your Website</label>
                            <small class="helper-text left" data-error="wrong" data-success="right">Optional</small>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Message</label>
                      </div>

                    <div class="p-2">
                        <button type="submit"  name="submit" class="waves-effect waves-light btn submit-button pink mt-25 left">Send Message</button>
                    </div>
                    </form>
                </div><!-- /.col-md-8 -->


            </div><!-- /.row -->
          </div>
        </section>
        <!-- contact-form-section End -->
                    <!-- Modal Trigger -->




                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                        <div class="modal-content">
                            <div class="text-center">

                                <i class="material-icons" style="float:right;" onClick="dismissModal()">close</i>
                                <h2 class="section-title text-uppercase">Drop us a line</h2>
                            </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <form id="contact-form" class="white"
                                                    style="padding:2em; padding-bottom:5em" id="contactForm"
                                                    action="<?=base_url()?>website/send_mail" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-field">
                                                                <input type="text" name="sender_name" class="validate"
                                                                    id="name">
                                                                <label for="name">Name</label>
                                                            </div>

                                                        </div><!-- /.col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="input-field">
                                                                <label for="email">Email</label>
                                                                <input id="email" type="email" name="email"
                                                                    class="validate" required>
                                                                <span class="helper-text" data-error="wrong"
                                                                    data-success="right"></span>
                                                            </div>
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-field">
                                                                <input id="phone" type="tel" name="phone"
                                                                    class="validate">
                                                                <label for="phone">Phone Number</label>
                                                                <small class="helper-text left" data-error="wrong"
                                                                    data-success="right">Optional</small>
                                                            </div>
                                                        </div><!-- /.col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="input-field">
                                                                <input id="website" type="text" name="website"
                                                                    class="validate">
                                                                <label for="website">Your Website</label>
                                                                <small class="helper-text left" data-error="wrong"
                                                                    data-success="right">Optional</small>
                                                            </div>
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->

                                                    <div class="input-field">
                                                        <input type="text" name="subject" id="subject" required>
                                                        <label for="subject">Subject</label>
                                                    </div>

                                                    <div class="input-field">
                                                        <textarea name="message" id="message"
                                                            class="materialize-textarea"></textarea>
                                                        <label for="message">Message</label>
                                                    </div>

                                                    <div class="p-2">
                                                        <button type="submit" name="submit"
                                                            class="waves-effect waves-light btn submit-button pink mt-25 left">Send
                                                            Message</button>
                                                    </div>
                                                </form>
                                            </div><!-- /.col-md-8 -->


                                        </div><!-- /.row -->

            </section>
            <!-- contact-form-section End -->

            <!--footer 1 start -->
        <footer class="footer footer-one">
            <div class="primary-footer brand-bg">
                <div class="container">
                    <a  onclick="callmodal()" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light tt-animate btt" data-section="#top">
                      <i class="material-icons">call</i>
                    </a>
                    

                    <div class="row">
                        <div class="col-md-3 widget clearfix">
                            <<ul class="social-link tt-animate ltr">
                           
                            <h2 class="white-text">About Kikoromeo</h2>
                            <p>EKikoRomeo, meaning “Adam’s Apple” in Kiswahili, 
                      is now co-designed by mother-daughter duo 
                      Ann and Iona McCreath from Nairobi, Kenya. 
                      The heritage lifestyle brand was founded in 1996 .</p>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                             
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           
                              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            
                            </ul>
                        </div><!-- /.col-md-3 -->

                        <div class="col-md-3 widget">
                            <h2 class="white-text" style="margin-top:15px;">Imporant links</h2>

                            <ul class="footer-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Collections</a></li>
                               
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Terms &amp; Condition</a></li>
                            </ul>
                        </div><!-- /.col-md-3 -->

                       
                           

                        <div class="col-md-3 widget">
                            <h2 class="white-text" style="margin-top:15px;">Location</h2>
                           
                           
                            <p>Old Mutual Building<br>Momabasa,Kenya<br>Address:2393-00348<br>Telephone:0763372892</p>
                            
                            
                           
                           
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 widget">
                            <h2 class="white-text" style="margin-top:15px;">News Letter Widget</h2>
                           
                            <form>
                              <div class="form-group clearfix">
                                <label class="sr-only" for="subscribe">Email address</label>
                                <input type="email" class="form-control" id="subscribe" placeholder="Email address">
                                <button type="submit" class="tt-animate ltr"><i class="fa fa-long-arrow-right"></i></button>
                              </div>
                            </form>
                            
                            
                           
                           
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->

            <div class="secondary-footer brand-bg darken-2">
                <div class="container">
                    <span class="copy-text">Copyright &copy; 2019 <a href="#">Kikoromeo</a> &nbsp;  | &nbsp;  All Rights Reserved &nbsp;  | &nbsp;  Designed By <a href="#">PowerTeam</a></span>
                </div><!-- /.container -->
            </div><!-- /.secondary-footer -->
        </footer>
        <!--footer 1 end-->

            
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

});
</script>

 <script src="<?=base_url()?>assets/website/assets/js/modal.js"></script>
<!-- Custom JS -->
<script src="<?=website_assets_url('js/carousel-edit.js');?>"></script>
<script src="<?=website_assets_url('js/website.js');?>"></script>

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