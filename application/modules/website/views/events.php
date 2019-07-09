<section class="section-padding" style="margin-top:-50px;">
    <div class="container">

        <div class="text-center mb-50">
            <h2 class="section-title">Our Events</h2>
            <p class="section-sub">As Kikoromeo we loe to celebrate fashion.
            </p>
        </div>

        <div class="portfolio-container">
            <ul class="portfolio-filter brand-filter text-center">
                <li class="active waves-effect waves-light" data-group="all">ALL</li>
                <li class="waves-effect waves-light" data-group="past">PAST</li>
                <li class="waves-effect waves-light" data-group="upcoming">UPCOMING</li>
            </ul>

            <form action="#" class="col-s12" id="event_search">
                <div class="row">
                    <div class="input-field col-s4">
                        <input type="text" name="event" id="event" class="validate">
                        <label for="event">Search for event</label>
                        <span class="helper-text">Enter the name, year, location e.t.c</span>
                    </div>
                </div>
            </form>

            <div class="portfolio portfolio-with-title col-3 gutter mtb-50">
                <?php cards();?>
            </div><!-- /.portfolio -->
        </div><!-- portfolio-container -->

    </div><!-- /.container -->
</section>