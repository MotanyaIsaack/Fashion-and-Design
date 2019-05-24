<?php
$item_name = $row['short_name'];
$overview_header = explode(",", $row['overview_header']);
$overview_content = explode(",", $row['overview_content']);
?>
<form action="<?=base_url();?>admin/add_collection" method="post">
    <div class="row">
    
        <div class="col-12">
            <div class="form-group row">
                <div class="col-4">
                    <input type="hidden" id="category" value="<?=$row['category_id']?>">
                    <label for="collection-category">Category Name</label>
                    <select class="form-control form-control-lg" id="collection-category" name="category_id">
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
                    <input value="<?=$item_name;?>" type="text" name="short_name" class="form-control form-control-lg"
                        id="short_name" required>
                    <span class="helper-text">e.g. SS2015 or LFW 2018</span>
                </div>
                <div class="col-4">
                    <label for="full_name">Collection Full name</label>
                    <input value="<?=$row['full_name'];?>" type="text" name="full_name"
                        class="form-control form-control-lg" id="full_name" required>
                </div>
            </div>

            <div class="table-responsive form-group add-item">
                <button type="button" class="btn btn-dark"  id="edit-overview-btn">Edit table</button>
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
                    <label for="mega-firstname">Collection Details</label>
                    <textarea id="js-ckeditor" name="item_info" required>
                            <?=$row['item_info'];?>
                        </textarea>
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