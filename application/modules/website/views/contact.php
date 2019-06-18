    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <form id="contactForm" class="" style="padding:2em; padding-bottom:5em" action="<?=base_url()?>website/send_mail" method="POST">
                    <h2 class="section-title text-center">Contact us</h2>
                    <div class="alert hide" id="email-feedback"></div>
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
            
                    <div class="p-2 pull-right">
                        <button type="submit" name="submit"
                            class="waves-effect waves-light btn submit-button pink mt-25 left submit-btn">Send
                            Message</button>
                            
                    </div>
            </form>
        </div>
    </div>