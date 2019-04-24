<section class="section-padding" style="margin-top:-50px;">
    <div class="container">

        <div class="text-center mb-50">
            <h2 class="section-title">FIMA 2018</h2>
            <p class="section-sub">Dakhla, Western Sahara</p>
        </div>
        <div class="slider">
            <ul class="slides white">
                <?php
                //Hostel data loaded in the contoller
                $event_name = "FIMA 2018";

                $rel_path = "assets/website/assets/Images/events/" . $event_name;
                $abs_path = events_url($event_name);

                if (file_exists($rel_path)) {
                    $handle = opendir($rel_path);
                    $first = true;
                    $counter = 0;

                    while ($file = readdir($handle)) {
                        if ($file !== '.' && $file !== "..") {
                            echo '
                                <li>
                                <img src="' . $abs_path . "/" . $file . '"> <!-- random image -->
                                <!--<div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here\'s our small slogan.</h5>
                                </div>-->
                            </li>
                                ';
                            $counter++;
                        }
                    }
                } else {
                    echo $abs_path . " not found";
                }
                ?>
            </ul>
        </div>
    </div>
    <section>