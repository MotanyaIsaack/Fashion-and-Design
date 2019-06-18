<div id="page-container"
    class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout"
                    data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link mr-5" >
                        <img class="img-avatar img-avatar32"
                            src="<?=base_url();?>assets/admin/assets/media/avatars/avatar15.jpg" alt="">
                    </a>
                    <a class="align-middle link-effect text-primary-dark font-w600"
                        ><?= @$_SESSION['username'] ?></a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Search -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_pages_generic_search.html" method="post">
                       
                    </form>
                </div>
            </div>
            <!-- END Search -->
            <!-- Profile -->
            <div class="block pull-r-l">
                
                <div class="block-content">
                    <form action="<?=base_url();?>admin/changePassword" method="post" >
            
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="side-overlay-profile-email"
                                    name="email" placeholder="Your email" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password"
                                    name="newpassword" placeholder="New Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password-confirm"
                                    name="confirmpassword" placeholder="Confirm New Password" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-alt-primary" name="changepass">
                                    <i class="fa fa-refresh mr-5"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Profile -->








            <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                        <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                    </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r"
                        data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">

                        <a href="<?=base_url()?>/admin/profile">

                            <img src="<?=base_url();?>assets/admin/assets/media/photos/logokikoromeo1.png" width="50">

                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32"
                        src="<?=base_url();?>assets/admin/assets/media/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="<?=base_url();?>assets/admin/assets/media/avatars/avatar15.jpg"
                            alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase"
                                href="<?=base_url();?>admin/profile"><?= @$_SESSION['username'] ?></a>
                        </li>
                       
                        </li>
                    </ul> 
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="open">

                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span
                                class="sidebar-mini-hide">Our Awards</span></a>
                        <ul>
                            <li class="open">
                                <a href="<?=base_url();?>admin/addStory"><span class="sidebar-mini-hide">Edit
                                        Awards</span></a>

                            <li>
                                <a href="<?=base_url();?>admin/addStory"><span class="sidebar-mini-hide">Edit Our
                                        Story</span></a> </li>
                    </li>
                </ul>

                </li>
                <li class="open">
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span
                            class="sidebar-mini-hide">Collections</span></a>
                    <ul>
                        <li class="open">
                            <a href="<?=base_url();?>admin/Addcollection"><span class="sidebar-mini-hide">Add
                                    Collection</span></a>

                        <li>
                            <a class="active" href="<?=base_url();?>admin/viewcollection"><span
                                    class="sidebar-mini-hide">View collection</span></a>
                        </li>



                </li>
                </ul>
                <li class="open">
                    <a class="nav-submenu" data-toggle="nav-submenu" href=""><span
                            class="sidebar-mini-hide">Events</span></a>
                    <ul>
                        <li class="open">
                            <a href="<?=base_url();?>admin/events"><span class="sidebar-mini-hide">Add Events</span></a>

                        <li>
                            <a class="active" href="<?=base_url();?>admin/viewEvents"><span
                                    class="sidebar-mini-hide">View Events</span></a>
                        </li>



                </li>
                </ul>
                </li>

                </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->