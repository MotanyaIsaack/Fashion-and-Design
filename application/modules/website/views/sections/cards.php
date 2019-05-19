<?php
if (count($cards) > 0) {
    switch ($folder) {
        case "events":
            showEventCards($folder, $cards);
            break;
        case "collections":
            showCollectionCards($folder, $cards);
            break;
    }
} else {
    displayNone($folder);
}

function displayNone($folder)
{
    echo '
        <center class="display-4">No ' . $folder . ' to show. Our homepage isn\'t empty though :)
            <p><a href="' . base_url('website/home') . '" class="blue-text">Go to homepage?</a></p>
        <center>
    ';
}

function showEventCards($folder, $cards)
{
    foreach ($cards as $event) {
        //Get the event details
        $id = $event['event_id'];
        $url = 'website/event/';
        $filter = (true == false) ? "upcoming" : "past";

        $img = $event['landing_page_image'];
        $name = $event['short_name'];
        $full_name = $event['full_name'];
        $location = $event['location'];
        $item_summary = $event['item_summary'];
        $event_link = base_url($url . $id);

        echo '
            <div class="portfolio-item" data-groups=\'["all", "' . $filter . '"]\'>
                <div class="card event">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"
                            src="' . images_url($folder . '/' . $name . "/" . $img) . '" alt="image" height="450px">
                    </div>
                    <div class="card-content activator">
                        <span class="card-title">
                            <a href="' . $event_link . '" class="grey-text text-darken-2">
                                ' . $name . '<br>
                                <span class="text-capitalize grey-text">' . $location . '</span>
                            </a>
                            <i class="material-icons right">info_outline</i>
                        </span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title">' . $full_name . '
                            <i class="material-icons right">&#xE5CD;</i>
                        </span>
                        <p>' . $item_summary . '</p>
                        <a href="' . $event_link . '" class="readmore">Learn more</a>
                    </div>
                    <!--<div class="card-action">
                        <a href="' . $event_link . '" class="blue-text">View event</a>
                    </div>-->
                </div><!-- /.card -->
            </div><!-- /.portfolio-item -->
            ';
    }
}

function showCollectionCards($folder, $cards)
{
    foreach ($cards as $collection) {
        //Get the event details
        $id = $collection['collection_id'];
        $url = 'website/subcollections/';
        $filter = $collection['category_name'];

        $img = $collection['landing_page_image'];
        $name = $collection['short_name'];
        $full_name = $collection['full_name'];
        $location = null;
        $item_summary = $collection['item_summary'];
        $collection_url = base_url($url . $id);

        echo '
            <div class="portfolio-item" data-groups=\'["all", "' . $filter . '"]\'>
                <div class="card collection">
                    <div class="card-image waves-effect waves-block waves-light">
                        <a href="' . $collection_url . '">
                        <img class="activator" src="' . images_url($folder . '/' . $name . "/" . $img) . '" alt="image" height="470px">
                        </a>
                    </div>
                    <a href="' . $collection_url . '" class="grey-text text-darken-2">
                        <div class="card-content activator">
                            <span class="card-title">
                                ' . $name . '
                            <i class="material-icons right hide">info_outline</i>
                            </span>
                        </div>
                    </a>
                    <div class="card-action">
                        <a href="' . $collection_url . '" class="blue-text">View collection</a>
                    </div>
                    <div class="card-reveal hide">
                        <span class="card-title">' . $full_name . '
                            <i class="material-icons right">&#xE5CD;</i>
                        </span>
                        <p>' . $item_summary . '</p>
                        <a href="' . base_url($url . $id) . '" class="readmore">Learn more</a>
                    </div>
                </div><!-- /.card -->
            </div><!-- /.portfolio-item -->
            ';
    }
}
