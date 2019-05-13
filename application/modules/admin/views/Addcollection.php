
  <div class="block-content" style="margin-top: 70px;">
  <h2>Add Collection</h2>
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
        <form action="<?=base_url();?>admin/add_collection" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="mega-firstname">Category Name</label>
                            <select class="form-control" id="material-select" name="category_id">
                                <!-- <option>Based on Location</option> -->
                                <?php
                                    foreach ($categoryid as $category) {
                                        echo '<option value="'.$category["category_id"].'">'.$category["category_name"].'</option>';
                                    }
                                
                                ?>
                                
                                <!-- <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option> -->
                            </select>                           
                        </div>
                        <div class="col-6">
                            <label for="mega-firstname">Collection Name</label>
                            <input type="text" class="form-control form-control-lg" id="mega-firstname" name="collection_name" placeholder="Enter the Collection Name">
                        </div>
                    </div>  
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="mega-firstname">Collection Details</label>
                            <textarea id="js-ckeditor" name="collection_details"></textarea>
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
        jQuery(function()
        {
        Codebase.helpers(['datepicker']);
        });
    </script>
