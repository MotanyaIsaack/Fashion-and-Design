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

function overview_table(){
    $CI = &get_instance();
    $CI->load->view('admin/sections/overview-table');
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
