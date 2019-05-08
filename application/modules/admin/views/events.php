
  <div class="block-content" style="margin-top: 70px;">
  <h2>Add Event</h2>
                            <form action="" method="post" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label for="mega-firstname">Event Name</label>
                                                <input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
                                            </div>
                                            <div class="col-md-6">
                                             <div class="form-group row">
                                            <label class="col-6" for="example-daterange1">Date Range</label>
                                            <div class="col-lg-10">
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <input type="text" class="form-control form-control-lg" id="example-daterange1" name="example-daterange1" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <div class="input-group-prepend input-group-append">
                                                        <span class="input-group-text font-w600 form-control-lg">to</span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-lg" id="example-daterange2" name="example-daterange2" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                            
                                            <!-- <div class="col-6">
                                                <label for="mega-lastname">Lastname</label>
                                                <input type="text" class="form-control form-control-lg" id="mega-lastname" name="mega-lastname" placeholder="Enter your lastname..">
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group row">
                                            <div class="col-10">
                                                <label for="mega-city">Location?</label>
                                                <input type="text" class="form-control form-control-lg" id="mega-city" name="mega-city" placeholder="Enter the location of the event">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="mega-bio">Event Description</label>
                                                <textarea class="form-control form-control-lg" id="mega-bio" name="mega-bio" rows="22" placeholder="Enter a few details about the event"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-check mr-5"></i> Add Event
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <script src="<?=base_url();?>assets/admin/assets/js/pages/be_forms_plugins.min.js"></script>
                         <script src="<?=base_url();?>assets/admin/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
                          <script>
                          jQuery(function()
                          {
                               Codebase.helpers(['datepicker']);
                            });
                                </script>
