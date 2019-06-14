<?php

function carousel()
{
    $CI = &get_instance();
    $CI->load->view('website/sections/carousel');
}

function cards()
{
    $CI = &get_instance();
    $CI->load->view('website/sections/cards');
}

function overview_table()
{
    $CI = &get_instance();
    $CI->load->view('admin/sections/overview-table');
}

function file_upload()
{
    $CI = &get_instance();
    $CI->load->view('admin/sections/file_upload');
}

function editEvent()
{
    $CI = &get_instance();
    $CI->load->view('admin/sections/editEvent');
}

function editCollection()
{
    $CI = &get_instance();
    $CI->load->view('admin/sections/editCollection');
}

function showOverviewTable($overview_header, $overview_content)
{
    foreach ($overview_header as $i => $value) {
        echo '
        <tr>
            <td>
                <input value="' . $overview_header[$i] . '" type="text" name="overview_header[]" class="form-control form-control-lg"
                    required readonly>
            </td>
            <td>
                <input value="' . $overview_content[$i] . '" type="text" name="overview_content[]" class="form-control form-control-lg"
                    required readonly>
            </td>
            <td>
                <button type="button" class="btn btn-success add" disabled>
                    <i class="fa fa-plus"></i>
                </button>
            </td>
            <td>
                <button type="button" class="btn btn-danger delete" disabled>
                    <i class="fa fa-minus"></i>
                </button>
            </td>
        </tr>
        ';
    }
}

function website_assets_url($asset)
{
    return base_url() . "assets/website/assets/" . $asset;
}

function images_url($image)
{
    return base_url() . "assets/website/assets/Images/" . $image;
}

function events_url($event)
{
    return base_url() . "assets/website/assets/Images/events/" . $event;
}

function collections_url($collection)
{
    return base_url() . "assets/website/assets/Images/collections/" . $collection;
}

function eLog($data)
{
    $file = "errors/errors.txt";
    $handle = fopen($file, 'w') or die('cannot oppen file');
    fwrite($handle, $data);
}