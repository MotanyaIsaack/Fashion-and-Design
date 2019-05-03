<?php
$location = $row['location'];
$overview_header = explode(",", $row['overview_header']);
$overview_content = explode(",", $row['overview_content']);

function showOverview($overview_header, $overview_content)
{
    foreach ($overview_header as $i => $value) {
        echo '
            <li class="font-15"><span>' . $overview_header[$i] . '</span>' . $overview_content[$i] . '</li>
    ';
    }
}

?>
<div class="container">
    <div class="text-center mb-50">
        <h2 class="section-title"><?=$title?></h2>
        <p class="section-sub"><?=$location?></p>
    </div>

    <!-- Indicators -->
    <div class="owl-carousel owl-theme events-carousel">
        <?php events_carousel();?>
    </div>

    <div class="project-overview padding-top-70 padding-bottom-100">
        <div class="row mb-80">
            <div class="col-md-8">
                <h2 class="mb-30 font-35 text-uppercase"><?=$full_name?></h2>
                <p class="font-17"><?=$row['event_info']?></p>
            </div>
            <div class="col-md-4 quick-overview">
                <ul class="portfolio-meta">
                    <?php if (count($overview_header) > 0) {showOverview($overview_header, $overview_content);}?>
                </ul>
            </div>
        </div><!-- /.row -->
    </div>
    <!--Project overview-->
</div>