<?php
$landing_img = $landing_image['landing_page_image'] == "" ? "No landing image has been chosen" : $landing_image['landing_page_image'];
$_SESSION['folder'] = $folder;
$_SESSION['item_id'] = $folder == "event" ? $row['event_id'] : $row['collection_id'];
?>
<div style="padding-top: 100px;">
    <p class="lead text-center" id="upload_title">My photos</p>
    <div id="page-feedback" class="alert alert-warning fixed-top" style="top: 85px; text-align: center; display: none;"></div>
    <form method="post" action="<?=base_url('admin/dropzone_upload');?>" class="dropzone" id="dropzoneFrom">

    </form>
    <form action="<?=base_url('admin/update_landing_img');?>" method="post" id="landing_image_form">
        <!--Hidden fields-->
        <input class="form-control" type="hidden" id="item_id" value="<?=$_SESSION['item_id']?>" readonly>
        <input class="form-control" type="hidden" name="folder" id="folder" value="<?=$_SESSION['folder']?>" readonly>
        <!--Hidden fields-->
        <span class="p-2">Current landing page image:</span>
        <span id="current_landing_image"><b><?=$landing_img?></b></span>
        <i class="fa fa-info-circle" data-toggle="tooltip" title="This is the image that appears on the card"></i>

        <!-- <label for="image_name">Update landing page image</label> -->
        <select class="form-control" name="image_name" id="image_name" required>

        </select>
        <button class="btn btn-dark" type="submit">Update image</button>

    </form>
</div>

<br>
<br>
<!-- <center>
    <button id="submit-all" class="btn btn-primary">Upload</button>
</center> -->

<div id="preview"></div>
<br>
<br>