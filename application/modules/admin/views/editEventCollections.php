<?php
$item = $folder;
?>
<div class="block-content" style="padding-top: 100px">
    <!-- Block Tabs Default Style -->
    <div class="block">
        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active text-capitalize" href="#edit-details"><?=$item?> details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#file-upload">Photos</a>
            </li>
        </ul>
        <div class="block-content tab-content">
            <div class="tab-pane active" id="edit-details" role="tabpanel">
                <h4 class="font-w400">Add <?=$item?></h4>
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
               

            //Select which page to display
            switch ($item) {
                case "event":
                    editEvent();
                    break;
                case "collection":
                    editCollection();
                    break;
            }

?>


            </div>
            <div class="tab-pane" id="file-upload" role="tabpanel">
                <?php file_upload();?>
            </div>
        </div>
    </div>
    <!-- END Block Tabs Default Style -->
    <!-- <h2>Add Event</h2> -->

</div>
