<body>
<div class="block-content" style="margin-top: 70px;">
     <!-- Block Tabs Default Style -->
     <div class="block">
        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#add-event">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#add-event-details">Event Details</a>
            </li>
        </ul>
        <div class="block-content tab-content">
            <div class="tab-pane active" id="add-event" role="tabpanel">
                <h4 class="font-w400">Add Event</h4>
                <?php
                    if($this->session->flashdata('message'))
                    {
                        echo '
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>'.$this->session->flashdata("message").'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        ';
                    }
                ?>
                <form action="<?=base_url();?>admin/addEvent" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row">
                                <!-- <div class="col-6">
                                    <label for="mega-firstname">Event Name</label>
                                    <input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" placeholder="Enter your firstname..">
                                </div> -->
                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <div class="col-10">
                                            <label for="mega-city">Location</label>
                                            <input type="text" class="form-control form-control-lg" id="mega-city" name="location" placeholder="Event Location">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                <label class="col-6" for="example-daterange1">Date Range</label>
                                <div class="col-lg-10">
                                    <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                        <input type="text" class="form-control form-control-lg" id="example-daterange1" name="from" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                        <div class="input-group-prepend input-group-append">
                                            <span class="input-group-text font-w600 form-control-lg">to</span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" id="example-daterange2" name="to" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-check mr-5"></i> Add Event
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="tab-pane" id="add-event-details" role="tabpanel">
                <h4 class="font-w400">Add Event Details</h4>
                <form action="<?=base_url();?>admin/addEventDetails" method="POST">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="mega-city">Event ID</label>
                                    <select class="form-control" id="material-select" name="event_id">
                                        <option>Based on Location</option>
                                        <?php
                                            foreach ($event_id as $id) {
                                                echo '<option value="'.$id["event_id"].'">'.$id["location"].'</option>';
                                            }
                                        
                                        ?>
                                       
                                        <!-- <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option> -->
                                    </select>                                
                                </div>
                                <div class="col-6">
                                    <label for="mega-firstname">Event Name</label>
                                    <input type="text" class="form-control form-control-lg" id="mega-firstname" name="event_name" placeholder="Event the name of the event">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <div class="col-10">
                                    <label for="mega-city">Event Details</label>
                                    <textarea id="js-ckeditor" name="event_details"></textarea>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Block Tabs Default Style -->
  <!-- <h2>Add Event</h2> -->
                            
</div>
