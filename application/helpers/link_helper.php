<?php

function events_carousel()
{
    $CI = &get_instance();
    $CI->load->view('website/sections/events-carousel');
}

function events_cards()
{
    $CI = &get_instance();
    $CI->load->view('website/sections/events-cards');
}

function website_assets_url($asset)
{
    return base_url() . "assets/website/assets/" . $asset;
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