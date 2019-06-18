
    <body>
            <!-- Main Container -->
            <main id="main-container">

                <!-- Header Section -->
                <div class="bg-image" style="background-image: url('<?=base_url();?>assets/admin/assets/media/photos/kikoRomeo2.jpg');background-position: top;">
                    <div class="bg-primary-dark-op">
                        <div class="content content-full content-top">
                            <h1 class="py-50 text-white text-center">Welcome Admin!</h1>
                        </div>
                    </div>
                </div>
                <!-- END Header Section -->

                    <?php
                        if (isset($_SESSION['error'])) {
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                '.$_SESSION['error'].'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            ';
                            $this->session->unset_userdata('error');
                            
                        }elseif (isset($_SESSION['success'])) {
                            echo '
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                '.$_SESSION['success'].'
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            ';
                            $this->session->unset_userdata('success');
                            
                        }
                    ?>
               
               
                     <div class="row invisible" data-toggle="appear" style="margin-top:16px;">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="fas fa-calendar-week fa-3x text-body-bg-dark"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="<?=$events?>"><?=$events?></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Events</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="fas fa-tshirt fa-3x text-body-bg-dark"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600"><span data-toggle="countTo" data-speed="1000" data-to="<?=$collections?>"><?=$collections?></span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Collections</div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-users fa-3x text-body-bg-dark"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="<?=$admin?>"><?=$admin?></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Admins</div>
                                </div>
                            </a>
                        </div>
</div>


            </main>
            <!-- END Main Container -->
</body>
            <!-- Footer -->
           