<?php

function events_carousel()
{
    $CI = &get_instance();
    $CI->load->view('website/sections/events-carousel');
}

function website_assets_url($asset)
{
    return base_url() . "assets/website/assets/" . $asset;
}

function events_url($event)
{
    return base_url() . "assets/website/assets/Images/events/" . $event;
}
