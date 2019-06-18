<div class="block-content" style="margin-top: 70px;">
    <h2>Add Event</h2>
   
 <?php
 if (isset($_SESSION['error'])) {
     echo '
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
         '.$_SESSION['error'].'
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
     </div>
     ';
     $this->session->unset_userdata('error');
     
 }elseif (isset($_SESSION['success'])) {
     echo '
     <div class="alert alert-primary alert-dismissible fade show" role="alert">
         '.$_SESSION['success'].'
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
     </div>
     ';
     $this->session->unset_userdata('success');
     
 }
?>

?>
    <form action="<?=base_url();?>admin/addEvent" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <div class="col-5">
                        <label for="short_name">Event Short name</label>
                        <input type="text" name="short_name" class="form-control form-control-lg" id="short_name"
                            required>
                        <span class="helper-text">e.g. SS2015 or LFW 2018</span>
                    </div>
                    <div class="col-5">
                        <label for="full_name">Event Full name</label>
                        <input type="text" name="full_name" class="form-control form-control-lg" id="full_name"
                            required>
                    </div>
                </div>

                <div class="form-group row">
                <div class="col-5">
                    <label for="example-daterange1">Date</label>
                    <div class="input-daterange input-group" data-date-format="yyyy-mm-dd" data-week-start="1"
                        data-autoclose="true" data-today-highlight="true">
                        <input type="text" class="form-control form-control-lg"
                            id="example-daterange1" name="date" data-week-start="1" data-autoclose="true"
                            data-today-highlight="true" readonly>
                    </div>
                </div>
                    <div class="col-5">
                        <label for="location">Location</label>
                        <input class="form-control form-control-lg" id="location" name="location" required />
                    </div>
                </div>
                <?php overview_table();?>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="item_info">Event Details</label>
                        <textarea id="js-ckeditor" name="item_info" required></textarea>
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
        </div>
    </form>

    <script src="<?=base_url();?>assets/admin/assets/js/pages/be_forms_plugins.min.js"></script>
    <script src="<?=base_url();?>assets/admin/assets/js/plugins/dropzonejs/dropzone.min.js"></script>
    <script>
    jQuery(function() {
        Codebase.helpers(['datepicker']);
    });
    </script>
</div>