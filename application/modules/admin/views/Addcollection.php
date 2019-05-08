
  <div class="block-content" style="margin-top: 70px;">
  <h2>Add Collection</h2>
                            <form action="" method="post" onsubmit="return false;">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label for="mega-firstname">Category Name</label>
                                                <input type="text" class="form-control form-control-lg" id="mega-firstname" name="mega-firstname" placeholder="Enter the Category Name">
                                            </div>
                                            
                                    </div>
                                </div>
                                
                                    
                                    </div>
                                </div>
                                <h2 class="content-heading">Add Image</h2>
                    <div class="block">
                        <div class="block-content block-content-full">
                            <!-- DropzoneJS Container -->
                            <form class="dropzone" action="be_forms_plugins.html">
                            <input type="file">
                            </form>
                        </div>
                    </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-alt-primary">
                                            <i class="fa fa-check mr-5"></i> Add Collection
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <script src="<?=base_url();?>assets/admin/assets/js/pages/be_forms_plugins.min.js"></script>
                          <script src="<?=base_url();?>assets/admin/assets/js/plugins/dropzonejs/dropzone.min.js"></script>
                          <script>
                          jQuery(function()
                          {
                               Codebase.helpers(['datepicker']);
                            });
                                </script>
