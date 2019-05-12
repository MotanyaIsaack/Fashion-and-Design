<?php

if (count($events) > 0) {
    showCards($events);
} else {
    echo "<p>No events to show<p>";
}

function showCards($events)
{
    foreach ($events as $event) {
        //Get the event details
        $id = $event['event_id'];
        $img = $event['landing_page_image'];
        $whole_name = explode(",", $event['item_name']);
        $name = $whole_name[0];
        $full_name = $whole_name[1];
        $location = $event['location'];
        $event_summary = $event['item_summary'];

        echo '
            <div class="portfolio-item" data-groups=\'["all", "past"]\'>
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"
                            src="' . events_url($name . "/" . $img) . '" alt="image" height="470px">
                    </div>
                    <div class="card-content activator">
                        <span class="card-title">
                            <a href="' . base_url('website/event/' . $id) . '" class="grey-text text-darken-2">
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
                        <p>' . $event_summary . '</p>
                        <a href="' . base_url('website/event/' . $id) . '" class="readmore">Learn more</a>
                    </div>
                </div><!-- /.card -->
            </div><!-- /.portfolio-item -->
            ';
    }
}
