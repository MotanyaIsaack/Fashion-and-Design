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
        $whole_name = explode(",", $row['event_name']);
        $name = $whole_name[0];
        $location = $row['location'];
        $event_summary = $row['event_summary'];

        echo '
            <div class="portfolio-item" data-groups=\'["all", "past"]\'>
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img style="height:450px;" class="activator"
                            src="' . events_url($name . "/" . $img) . '" alt="image">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator">
                            <a href="' . base_url('website/event/' . $id) . '" class="grey-text text-darken-2">
                                ' . $name . '<br>
                                <span class="text-capitalize grey-text">' . $location . '</span>
                            </a>
                            <i class="material-icons right">more_vert</i>
                        </span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title">' . $name . '
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
