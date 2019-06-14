<?php
$overview_header = explode(",", $row['overview_header']);
$overview_content = explode(",", $row['overview_content']);
?>
<form action="<?=base_url();?>admin/update_item/event" method="post">
    <div class="row">
        <div class="col-12">
            <div class="form-group row">

                <!--Hidden field-->
                <input type="hidden" name="event_id" value="<?=$row['event_id']?>">
                <input type="hidden" name="info_id" value="<?=$row['info_id']?>">
                <input type="hidden" name="previous_name" value="<?=$row['short_name']?>">
                <!--Hidden field-->

                <div class="col-5">
                    <label for="short_name">Event Short name</label>
                    <input value="<?=$row['short_name']?>" type="text" name="short_name"
                        class="form-control form-control-lg" id="short_name" required>
                    <span class="helper-text">e.g. SS2015 or LFW 2018</span>
                </div>
                <div class="col-5">
                    <label for="full_name">Event Full name</label>
                    <input value="<?=$row['full_name']?>" type="text" name="full_name"
                        class="form-control form-control-lg" id="full_name" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-5">
                    <label for="example-daterange1">Date</label>
                    <div class="input-daterange input-group" data-date-format="yyyy-mm-dd" data-week-start="1"
                        data-autoclose="true" data-today-highlight="true">
                        <input value="<?=$row['date']?>" type="text" class="form-control form-control-lg"
                            id="example-daterange1" name="date" data-week-start="1" data-autoclose="true"
                            data-today-highlight="true" readonly>

                    </div>
                </div>
                <div class="col-5">
                    <label for="location">Location</label>
                    <input value="<?=$row['location']?>" class="form-control form-control-lg" id="location"
                        name="location" required />
                </div>
            </div>

            <div class="table-responsive form-group add-item">
                <button type="button" class="btn btn-dark" id="edit-overview-btn">Edit table</button>
                <table class="table-bordered">
                    <thead>
                        <tr style="font-weight:600;">
                            <td>Overview Header</td>
                            <td>Overview Content</td>
                            <td>Add</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody class="add-item-body">
                        <?php showOverviewTable($overview_header, $overview_content);?>
                    </tbody>
                </table>
                <small class="feedback text-danger d-none">At least one row is needed</small>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <label for="item_summary">Event Summary</label>
                    <textarea class="form-control form-control-lg" name="item_summary" required rows="10">
                        <?=$row['item_summary']?>
                    </textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <label for="item_info">Event Details</label>
                    <textarea id="js-ckeditor" name="item_info" required>
                        <?=$row['item_info']?>
                    </textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <button type="submit" class="btn btn-alt-primary">
                        <i class="fa fa-check mr-5"></i> Update Event
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>