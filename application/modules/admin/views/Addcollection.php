<div class="block-content" style="margin-top: 70px;">
    <h2>Add Collection</h2>
    
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


    <form action="<?=base_url();?>admin/add_collection" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <div class="col-4">
                        <label for="material-select">Category Name</label>
                        <select class="form-control form-control-lg" id="material-select" name="category_id" required>
                            <option value="">Choose a category</option>
                            <?php
                            foreach ($categoryid as $category) {
                                echo '<option value="' . $category["category_id"] . '">' . $category["category_name"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="short_name">Collection Short name</label>
                        <input type="text" name="short_name" class="form-control form-control-lg" id="short_name" required>
                        <span class="helper-text">e.g. SS2015 or LFW 2018</span>
                    </div>
                    <div class="col-4">
                        <label for="full_name">Collection Full name</label>
                        <input type="text" name="full_name" class="form-control form-control-lg" id="full_name" required>
                    </div>
                </div>
                <?php overview_table();?>
                <div class="form-group row">
                    <div class="col-12">
                        <label for="mega-firstname">Collection Details</label>
                        <textarea id="js-ckeditor" name="item_info" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-alt-primary">
                            <i class="fa fa-check mr-5"></i> Add Collection
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