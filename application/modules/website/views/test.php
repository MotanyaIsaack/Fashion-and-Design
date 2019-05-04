<section class="section-padding" style="margin-top:-50px;">
    <div class="container">

        <div class="text-center mb-50">
            <h2 class="section-title">Our Collections</h2>
            <p class="section-sub">As Kikoromeo we offer inter-season or pre-season line of ready-to-wear clothing.
            </p>
        </div>

        <div class="portfolio-container">
            <ul class="portfolio-filter brand-filter text-center">
                <li class="active waves-effect waves-light" data-group="all">All</li>
                <li class="waves-effect waves-light" data-group="menswear">MENSWEAR</li>
                <li class="waves-effect waves-light" data-group="womenswear">WOMENSWEAR</li>
                <li class="waves-effect waves-light" data-group="vintage">VINTAGE</li>
                <li class="waves-effect waves-light" data-group="kids">KIDS</li>
            </ul>


            <div class="portfolio portfolio-with-title col-3 gutter mtb-50">
                <?php card_test();?>
            </div><!-- /.portfolio -->
        </div><!-- portfolio-container -->
    </div><!-- /.container -->
</section>

<?php
function card_test()
{
    $collection_category = "menswear";
    $collection_name = "The SS 2015 Collection";
    $landing_img = "SS-2015.jpg";
    $id = 1;

    echo '
        <div class="portfolio-item" data-groups=\'["all", "' . $collection_category . '"]\'>
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img style="height:380px" class="activator"
                        src="' . collections_url($collection_name . "/" . $landing_img) . '"
                        alt="image">
                </div>
                <div class="card-content">
                    <span class="card-title activator">' . $collection_name . '</span>
                    <p><a href="' . base_url() . 'website/subcollections/' . $id . '">View Collection</a></p>
                </div>
            </div><!-- /.card -->
        </div><!-- /.portfolio-item -->
';
}
?>