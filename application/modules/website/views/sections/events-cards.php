<?php

if ($query->num_rows() > 0) {
    showCards($query);
} else {
    echo "<p>No events to show<p>";
}

function showCards($query)
{
    foreach ($query->result_array() as $row) {
        //Get the event details
        $id = $row['event_id'];
        $img = $row['img_name'];
        $whole_name = explode(",", $row['item_name']);
        $name = $whole_name[0];
        $full_name = $whole_name[1];
        $location = $row['location'];
        $event_summary = $row['item_summary'];

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
                            <i class="material-icons right">more_vert</i>
                            <p class="blue text-white activator">Event summary</p>
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
