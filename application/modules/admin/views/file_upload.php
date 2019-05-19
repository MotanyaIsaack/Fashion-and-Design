<?php
$landing_img = $landing_image['landing_page_image'] == "" ? "No landing image has been chosen" : $landing_image['landing_page_image'];
$_SESSION['folder'] = $_GET['folder'];
$_SESSION['item_id'] = $_GET['id'];
$_SESSION['short_name'] = str_replace('%20', " ", $_GET['name']);
?>
<div style="margin-top: 100px;">
    <p class="lead text-center">My photos</p>
    <div id="page-feedback" class="alert fixed-top" style="top: 85px; text-align: center; display: none;"></div>
    <form method="post" action="<?=base_url('admin/dropzone_upload');?>" class="dropzone" id="dropzoneFrom">

    </form>
    <form action="<?=base_url('admin/update_landing_img');?>" method="post">
        <!--Hidden fields-->
        <label for="folder" class="d-none">Folder</label>
        <input class="form-control" type="hidden" name="folder" id="folder" value="<?=$_SESSION['folder']?>"
            readonly>
        <label for="short_name" class="d-none">Name</label>
        <input class="form-control" type="hidden" name="short_name" id="short_name"
            value="<?=$_SESSION['short_name']?>" readonly>
        <!--Hidden fields-->
        <span class="p-2">Current landing page image:</span>
        <span id="current_landing_image"><b><?=$landing_img?></b></span>
        <!-- <label for="image_name">Update landing page image</label> -->
        <select class="form-control" name="image_name" id="image_name">

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