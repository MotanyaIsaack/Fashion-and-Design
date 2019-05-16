<?php

if (count($cards) > 0) {
    showCards($folder, $cards);
} else {
    echo "<p>No " . $folder . " to show<p>";
}

function showCards($folder, $cards)
{
    foreach ($cards as $card_item) {
        //Get the event details
        $id = ($folder == "events") ? $card_item['event_id'] : $card_item['collection_id'];
        $filter = ($folder == "collections") ? $card_item['category_name'] : "past";
        $display = ($folder == "collections") ? "hide" : "";

        $img = $card_item['landing_page_image'];
        $whole_name = explode(",", $card_item['item_name']);
        $name = $whole_name[0];
        $full_name = $whole_name[1];
        $location = isset($card_item['location']) ? $card_item['location'] : null;
        $item_summary = $card_item['item_summary'];
        $url = ($folder == "events") ? 'website/event/' : 'website/subcollections/';

        echo '
            <div class="portfolio-item" data-groups=\'["all", "' . $filter . '"]\'>
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"
                            src="' . images_url($folder . '/' . $name . "/" . $img) . '" alt="image" height="470px">
                    </div>
                    <div class="card-content activator">
                        <span class="card-title">
                            <a href="' . base_url($url . $id) . '" class="grey-text text-darken-2">
                                ' . $name . '<br>
                                <span class="text-capitalize grey-text">' . $location . '</span>
                            </a>
                            <i class="material-icons right ' . $display . '">info_outline</i>
                        </span>
                    </div>
                    <div class="card-reveal ' . $display . '">
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