<div class="table-responsive form-group add-item">
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
            <tr>
                <td>
                    <input type="text" name="overview_header[]" class="form-control form-control-lg" required>
                </td>
                <td>
                    <input type="text" name="overview_content[]" class="form-control form-control-lg" required>
                </td>
                <td>
                    <button type="button" class="btn btn-success add">
                        <i class="fa fa-plus"></i>
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger delete">
                        <i class="fa fa-minus"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    <small class="feedback text-danger d-none">At least one row is needed</small>
</div>

                