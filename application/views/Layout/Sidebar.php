<style>
    .left-side-bar {

        background-color: #36007eff;
        /* background-color: #1b00ff; */
    }

    .brand-logo {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 2px solid rgba(0, 0, 0, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .brand-logo img {
        max-width: 180px;
        height: auto;
        display: block;
        margin: 0 auto;
        border-radius: 6px;
    }

    /* Section Titles (HOD / Admin) */
    .submenu-title {
        padding: 10px 18px 6px;
        font-size: 11px;
        font-weight: 700;
        color: #e74c3c;
        /* Clean red */
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: default;
        pointer-events: none;
    }

    /* Better spacing for submenu items */
    .submenu li a {
        padding-left: 22px;
    }

    /* Optional: subtle divider under title */
    .submenu-title::after {
        content: '';
        display: block;
        margin-top: 4px;
        border-bottom: 1px solid rgba(231, 76, 60, 0.2);
    }
</style>


<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="weight-600 font-18 pb-10">Header Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
            <div class="sidebar-btn-group pb-30 mb-10">
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
            <div class="sidebar-radio-group pb-10 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
                    <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
                    <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
                    <label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
            <div class="sidebar-radio-group pb-30 mb-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
                    <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
                    <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
                    <label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
                    <label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
                    <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="reset-options pt-30 text-center">
                <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="<?php echo base_url('vendors/images/deskapp-logo.svg') ?>" alt="" class="dark-logo">
            <img src="<?php echo base_url('vendors/images/deskapp-logo-white.svg') ?>" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('index.html') ?>">Dashboard style 1</a></li>
                        <li><a href="<?php echo base_url('index2.html') ?>">Dashboard style 2</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('form-basic.html') ?>">Form Basic</a></li>
                        <li><a href="<?php echo base_url('advanced-components.html') ?>">Advanced Components</a></li>
                        <li><a href="<?php echo base_url('form-wizard.html') ?>">Form Wizard</a></li>
                        <li><a href="<?php echo base_url('html5-editor.html') ?>">HTML5 Editor</a></li>
                        <li><a href="<?php echo base_url('form-pickers.html') ?>">Form Pickers</a></li>
                        <li><a href="<?php echo base_url('image-cropper.html') ?>">Image Cropper</a></li>
                        <li><a href="<?php echo base_url('image-dropzone.html') ?>">Image Dropzone</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('basic-table.html') ?>">Basic Tables</a></li>
                        <li><a href="<?php echo base_url('datatable.html') ?>">DataTables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('calendar.html') ?>" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('ui-buttons.html') ?>">Buttons</a></li>
                        <li><a href="<?php echo base_url('ui-cards.html') ?>">Cards</a></li>
                        <li><a href="<?php echo base_url('ui-cards-hover.html') ?>">Cards Hover</a></li>
                        <li><a href="<?php echo base_url('ui-modals.html') ?>">Modals</a></li>
                        <li><a href="<?php echo base_url('ui-tabs.html') ?>">Tabs</a></li>
                        <li><a href="<?php echo base_url('ui-tooltip-popover.html') ?>">Tooltip &amp; Popover</a></li>
                        <li><a href="<?php echo base_url('ui-sweet-alert.html') ?>">Sweet Alert</a></li>
                        <li><a href="<?php echo base_url('ui-notification.html') ?>">Notification</a></li>
                        <li><a href="<?php echo base_url('ui-timeline.html') ?>">Timeline</a></li>
                        <li><a href="<?php echo base_url('ui-progressbar.html') ?>">Progressbar</a></li>
                        <li><a href="<?php echo base_url('ui-typography.html') ?>">Typography</a></li>
                        <li><a href="<?php echo base_url('ui-list-group.html') ?>">List group</a></li>
                        <li><a href="<?php echo base_url('ui-range-slider.html') ?>">Range slider</a></li>
                        <li><a href="<?php echo base_url('ui-carousel.html') ?>">Carousel</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('font-awesome.html') ?>">FontAwesome Icons</a></li>
                        <li><a href="<?php echo base_url('foundation.html') ?>">Foundation Icons</a></li>
                        <li><a href="<?php echo base_url('ionicons.html') ?>">Ionicons Icons</a></li>
                        <li><a href="<?php echo base_url('themify.html') ?>">Themify Icons</a></li>
                        <li><a href="<?php echo base_url('custom-icon.html') ?>">Custom Icons</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('highchart.html') ?>">Highchart</a></li>
                        <li><a href="<?php echo base_url('knob-chart.html') ?>">jQuery Knob</a></li>
                        <li><a href="<?php echo base_url('jvectormap.html') ?>">jvectormap</a></li>
                        <li><a href="<?php echo base_url('apexcharts.html') ?>">Apexcharts</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('video-player.html') ?>">Video Player</a></li>
                        <li><a href="<?php echo base_url('login.html') ?>">Login</a></li>
                        <li><a href="<?php echo base_url('forgot-password.html') ?>">Forgot Password</a></li>
                        <li><a href="<?php echo base_url('reset-password.html') ?>">Reset Password</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('400.html') ?>">400</a></li>
                        <li><a href="<?php echo base_url('403.html') ?>">403</a></li>
                        <li><a href="<?php echo base_url('404.html') ?>">404</a></li>
                        <li><a href="<?php echo base_url('500.html') ?>">500</a></li>
                        <li><a href="<?php echo base_url('503.html') ?>">503</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?php echo base_url('blank.html') ?>">Blank</a></li>
                        <li><a href="<?php echo base_url('contact-directory.html') ?>">Contact Directory</a></li>
                        <li><a href="<?php echo base_url('blog.html') ?>">Blog</a></li>
                        <li><a href="<?php echo base_url('blog-detail.html') ?>">Blog Detail</a></li>
                        <li><a href="<?php echo base_url('product.html') ?>">Product</a></li>
                        <li><a href="<?php echo base_url('product-detail.html') ?>">Product Detail</a></li>
                        <li><a href="<?php echo base_url('faq.html') ?>">FAQ</a></li>
                        <li><a href="<?php echo base_url('profile.html') ?>">Profile</a></li>
                        <li><a href="<?php echo base_url('gallery.html') ?>">Gallery</a></li>
                        <li><a href="<?php echo base_url('pricing-table.html') ?>">Pricing Tables</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="javascript:;">Level 2</a></li>
                                <li><a href="javascript:;">Level 2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="invoice.html" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li><a href="third-party-plugins.html">Third Party Plugins</a></li>
                    </ul>
                </li>
                <li>
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-paper-plane1"></span>
                        <span class="mtext">Landing Page <img src="<?php echo base_url('vendors/images/coming-soon.png') ?>" alt="" width="25"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="<?php echo base_url('vendors/images/banner-img.png') ?>" alt="">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back <div class="weight-600 font-30 text-blue">Johnny Brown!</div>
                    </h4>
                    <p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">2020</div>
                            <div class="weight-600 font-14">Contact</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart2"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">400</div>
                            <div class="weight-600 font-14">Deals</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart3"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">350</div>
                            <div class="weight-600 font-14">Campaign</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1">
                    <div class="d-flex flex-wrap align-items-center">
                        <div class="progress-data">
                            <div id="chart4"></div>
                        </div>
                        <div class="widget-data">
                            <div class="h4 mb-0">$6060</div>
                            <div class="weight-600 font-14">Worth</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Activity</h2>
                    <div id="chart5"></div>
                </div>
            </div>
            <div class="col-xl-4 mb-30">
                <div class="card-box height-100-p pd-20">
                    <h2 class="h4 mb-20">Lead Target</h2>
                    <div id="chart6"></div>
                </div>
            </div>
        </div>
        <div class="card-box mb-30">
            <h2 class="h4 pd-20">Best Selling Products</h2>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">Product</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th>Oty</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-plus">
                            <img src="<?php echo base_url('vendors/images/product-1.jpg') ?>" width="70" height="70" alt="">
                        </td>
                        <td>
                            <h5 class="font-16">Shirt</h5>
                            by John Doe
                        </td>
                        <td>Black</td>
                        <td>M</td>
                        <td>$1000</td>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <img src="<?php echo base_url('vendors/images/product-2.jpg') ?>" width="70" height="70" alt="">
                        </td>
                        <td>
                            <h5 class="font-16">Boots</h5>
                            by Lea R. Frith
                        </td>
                        <td>brown</td>
                        <td>9UK</td>
                        <td>$900</td>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <img src="<?php echo base_url('vendors/images/product-3.jpg') ?>" width="70" height="70" alt="">
                        </td>
                        <td>
                            <h5 class="font-16">Hat</h5>
                            by Erik L. Richards
                        </td>
                        <td>Orange</td>
                        <td>M</td>
                        <td>$100</td>
                        <td>4</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <img src="<?php echo base_url('vendors/images/product-4.jpg') ?>" width="70" height="70" alt="">
                        </td>
                        <td>
                            <h5 class="font-16">Long Dress</h5>
                            by Renee I. Hansen
                        </td>
                        <td>Gray</td>
                        <td>L</td>
                        <td>$1000</td>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-plus">
                            <img src="<?php echo base_url('vendors/images/product-5.jpg') ?>" width="70" height="70" alt="">
                        </td>
                        <td>
                            <h5 class="font-16">Blazer</h5>
                            by Vicki M. Coleman
                        </td>
                        <td>Blue</td>
                        <td>M</td>
                        <td>$1000</td>
                        <td>1</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- js -->
        <script src="<?php echo base_url('vendors/scripts/core.js') ?>"></script>
        <script src="<?php echo base_url('vendors/scripts/script.min.js') ?>"></script>
        <script src="<?php echo base_url('vendors/scripts/process.js') ?>"></script>
        <script src="<?php echo base_url('vendors/scripts/layout-settings.js') ?>"></script>
        <script src="<?php echo base_url('assets/src/plugins/apexcharts/apexcharts.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/src/plugins/datatables/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/src/plugins/datatables/js/dataTables.responsive.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js') ?>"></script>
        <script src="<?php echo base_url('vendors/scripts/dashboard.js') ?>"></script>