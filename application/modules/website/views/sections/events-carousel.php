<?php
$event_short_name = $title;

$rel_path = "assets/website/assets/Images/events/" . $event_short_name;
$abs_path = events_url($event_short_name);

if (file_exists($rel_path)) {
    $handle = opendir($rel_path);
    $first = true;
    $counter = 0;

    while ($file = readdir($handle)) {
        if ($file !== '.' && $file !== "..") {
            $item_class = ($first) ? "active" : "";
            $first = false;
            echo '
        <div class="item"><img src="' . $abs_path . '/' . $file . '"></div>
    ';
            $counter++;
        }
    }
} else {
    echo $abs_path . " not found";
}