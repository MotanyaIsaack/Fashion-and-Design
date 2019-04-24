<body>
<main id="main-container">
                <!-- Header Section -->
                <div class="bg-image" style="background-image: url('<?=base_url();?>assets/admin/assets/media/photos/kikoRomeo2.jpg');background-position: top;">
                    <div class="bg-primary-dark-op">
                        <div class="content content-full content-top">
                            <h1 class="py-50 text-white text-center">Our Story!</h1>
                        </div>
                    </div>
                </div>
                <!-- END Header Section -->
<form action="be_forms_editors.html" method="post" onsubmit="return false;">
                <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Our Story</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <!-- CKEditor Container -->
                                        <textarea id="js-ckeditor" name="ckeditor"></textarea>
                                    </div>
                                </div>
                        </div>
                </div>
                
                
                 <button type="submit" class="btn btn-alt-primary" style="float: right;">Submit</button>
</form>

</main>
 <script src="<?=base_url();?>assets/admin/assets/js/codebase.core.min.js"></script>

   
        <script src="<?=base_url();?>assets/admin/assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?=base_url();?>assets/admin/assets/js/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="<?=base_url();?>assets/admin/assets/js/plugins/ckeditor/ckeditor.js"></script>
        <script src="<?=base_url();?>assets/admin/assets/js/plugins/simplemde/simplemde.min.js"></script>

        <!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
        <script>jQuery(function () {
                                    Codebase.helpers(['summernote', 'ckeditor', 'simplemde']);
                                });</script>

</body>