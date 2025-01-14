<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>OneUI - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
  </head>

  <body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or One.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Light themed Header
        'page-header-dark'                          Dark themed Header

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header border-bottom">
          <!-- User Avatar -->
          <a class="img-link me-1" href="javascript:void(0)">
            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
          </a>
          <!-- END User Avatar -->

          <!-- User Info -->
          <div class="ms-2">
            <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
          </div>
          <!-- END User Info -->

          <!-- Close Side Overlay -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
            <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Side Overlay -->
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
          <!-- Side Overlay Tabs -->
          <div class="block block-transparent pull-x pull-t">
            <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
              <li class="nav-item">
                <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab" data-bs-target="#so-overview" role="tab" aria-controls="so-overview" aria-selected="true">
                  <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
                </button>
              </li>
              <li class="nav-item">
                <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab" data-bs-target="#so-sales" role="tab" aria-controls="so-sales" aria-selected="false">
                  <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
                </button>
              </li>
            </ul>
            <div class="block-content tab-content overflow-hidden">
              <!-- Overview Tab -->
              <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel" aria-labelledby="so-overview-tab" tabindex="0">
                <!-- Activity -->
                <div class="block block-transparent">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Recent Activity</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Activity List -->
                    <ul class="nav-items mb-0">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale ($15)</div>
                            <div>Admin Template</div>
                            <small class="text-muted">3 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-pencil-alt text-info"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">You edited the file</div>
                            <div>Documentation.doc</div>
                            <small class="text-muted">15 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-trash text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Project deleted</div>
                            <div>Line Icon Set</div>
                            <small class="text-muted">4 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- END Activity List -->
                  </div>
                </div>
                <!-- END Activity -->

                <!-- Online Friends -->
                <div class="block block-transparent">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Online Friends</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                      </button>
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Users Navigation -->
                    <ul class="nav-items mb-0">
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar5.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Melissa Rice</div>
                            <div class="text-muted">Copywriter</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar10.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Scott Young</div>
                            <div class="text-muted">Web Developer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Melissa Rice</div>
                            <div class="text-muted">Web Designer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Danielle Jones</div>
                            <div class="text-muted">Photographer</div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="d-flex py-2" href="javascript:void(0)">
                          <div class="me-3 ms-2 overlay-container overlay-bottom">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar12.jpg" alt="">
                            <span class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Wayne Garcia</div>
                            <div class="text-muted">Graphic Designer</div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- END Users Navigation -->
                  </div>
                </div>
                <!-- END Online Friends -->

                <!-- Quick Settings -->
                <div class="block block-transparent mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Quick Settings</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                  </div>
                  <div class="block-content">
                    <!-- Quick Settings Form -->
                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-2">
                          Online Status
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check1" name="so-settings-check1" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check1">Show your status to all</label>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-2">
                          Auto Updates
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check2" name="so-settings-check2" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check2">Keep up to date</label>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-1">
                          Application Alerts
                        </p>
                        <div class="space-y-2">
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check3" name="so-settings-check3" checked>
                            <label class="form-check-label fs-sm" for="so-settings-check3">Email Notifications</label>
                          </div>
                          <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="" id="so-settings-check4" name="so-settings-check4" checked>
                            <label class="form-check-label fs-sm" for="so-settings-check4">SMS Notifications</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <p class="fs-sm fw-semibold mb-1">
                          API
                        </p>
                        <div class="form-check form-switch">
                          <input class="form-check-input" type="checkbox" value="" id="so-settings-check5" name="so-settings-check5" checked>
                          <label class="form-check-label fs-sm" for="so-settings-check5">Enable access</label>
                        </div>
                      </div>
                    </form>
                    <!-- END Quick Settings Form -->
                  </div>
                </div>
                <!-- END Quick Settings -->
              </div>
              <!-- END Overview Tab -->

              <!-- Sales Tab -->
              <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel" aria-labelledby="so-sales-tab" tabindex="0">
                <div class="block block-transparent mb-0">
                  <!-- Stats -->
                  <div class="block-content">
                    <div class="row items-push pull-t">
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                        <a class="fs-lg" href="javascript:void(0)">22.030</a>
                      </div>
                      <div class="col-6">
                        <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                        <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                      </div>
                    </div>
                  </div>
                  <!-- END Stats -->

                  <!-- Today -->
                  <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                      <div class="col-6">
                        <span class="fs-sm fw-semibold text-uppercase">Today</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="ext-muted">$996</span>
                      </div>
                    </div>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items push">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $249</div>
                            <small class="text-muted">3 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $129</div>
                            <small class="text-muted">50 min ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">2 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $499</div>
                            <small class="text-muted">3 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <!-- END Today -->

                  <!-- Yesterday -->
                  <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                      <div class="col-6">
                        <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                      </div>
                      <div class="col-6 text-end">
                        <span class="text-muted">$765</span>
                      </div>
                    </div>
                  </div>
                  <div class="block-content">
                    <ul class="nav-items push">
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $249</div>
                            <small class="text-muted">26 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-minus text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Product Purchase - $50</div>
                            <small class="text-muted">28 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">29 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-minus text-danger"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">Paypal Withdrawal - $300</div>
                            <small class="text-muted">37 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $129</div>
                            <small class="text-muted">39 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $119</div>
                            <small class="text-muted">45 hours ago</small>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="text-dark d-flex py-2" href="javascript:void(0)">
                          <div class="flex-shrink-0 me-3 ms-2">
                            <i class="fa fa-fw fa-plus text-success"></i>
                          </div>
                          <div class="flex-grow-1 fs-sm">
                            <div class="fw-semibold">New sale! + $499</div>
                            <small class="text-muted">46 hours ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>

                    <!-- More -->
                    <div class="text-center">
                      <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                      </a>
                    </div>
                    <!-- END More -->
                  </div>
                  <!-- END Yesterday -->
                </div>
              </div>
              <!-- END Sales Tab -->
            </div>
          </div>
          <!-- END Side Overlay Tabs -->
        </div>
        <!-- END Side Content -->
      </aside>
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      <!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">OneUI</span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
              <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Options -->
            <div class="dropdown d-inline-block ms-1">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-brush"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                <!-- Color Themes -->
                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
                  <span>Default</span>
                  <i class="fa fa-circle text-default"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                  <span>Amethyst</span>
                  <i class="fa fa-circle text-amethyst"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                  <span>City</span>
                  <i class="fa fa-circle text-city"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                  <span>Flat</span>
                  <i class="fa fa-circle text-flat"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                  <span>Modern</span>
                  <i class="fa fa-circle text-modern"></i>
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                  <span>Smooth</span>
                  <i class="fa fa-circle text-smooth"></i>
                </a>
                <!-- END Color Themes -->

                <div class="dropdown-divider"></div>

                <!-- Sidebar Styles -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
                  <span>Sidebar Light</span>
                </a>
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
                  <span>Sidebar Dark</span>
                </a>
                <!-- END Sidebar Styles -->

                <div class="dropdown-divider"></div>

                <!-- Header Styles -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
                  <span>Header Light</span>
                </a>
                <a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
                  <span>Header Dark</span>
                </a>
                <!-- END Header Styles -->
              </div>
            </div>
            <!-- END Options -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link" href="be_pages_dashboard.html">
                  <i class="nav-main-link-icon si si-speedometer"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                </a>
              </li>

              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-energy"></i>
                  <span class="nav-main-link-name">Pixels</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_styles.html">
                      <span class="nav-main-link-name">Pixel Performance</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_options.html">
                      <span class="nav-main-link-name">Recent Activities</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_blocks_forms.html">
                      <span class="nav-main-link-name">Charts & Graphs</span>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-trophy"></i>
                  <span class="nav-main-link-name">Audiences</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_tiles.html">
                      <span class="nav-main-link-name">Sample 1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_widgets_users.html">
                      <span class="nav-main-link-name">Sample 2</span>
                    </a>
                  </li>

                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-badge"></i>
                  <span class="nav-main-link-name">Reports</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_grid.html">
                      <span class="nav-main-link-name">Sample 1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_ui_typography.html">
                      <span class="nav-main-link-name">Sample 2</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-grid"></i>
                  <span class="nav-main-link-name">Settings</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_styles.html">
                      <span class="nav-main-link-name">Sample 1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_tables_responsive.html">
                      <span class="nav-main-link-name">Sample 2</span>
                    </a>
                  </li>

                </ul>
              </li>

            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section (visible on smaller screens) -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-fw fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Search Form (visible on larger screens) -->
            <form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                <span class="input-group-text border-0">
                  <i class="fa fa-fw fa-search"></i>
                </span>
              </div>
            </form>
            <!-- END Search Form -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle" src="assets/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
                <span class="d-none d-sm-inline-block ms-2">{{ Auth::user()->name }}</span>
                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                  <p class="mt-2 mb-0 fw-medium">{{ Auth::user()->name }}</p>

                    @if (Auth::user()->role == '1')
                        <p class="mb-0 text-muted fs-sm fw-medium">Client</p>
                    @else
                        <p class="mb-0 text-muted fs-sm fw-medium">Admin</p>
                    @endif

                </div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                    <span class="fs-sm fw-medium">Inbox</span>
                    <span class="badge rounded-pill bg-primary ms-2">3</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_profile.html">
                    <span class="fs-sm fw-medium">Profile</span>
                    <span class="badge rounded-pill bg-primary ms-2">1</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span class="fs-sm fw-medium">Settings</span>
                  </a>
                </div>
                <div role="separator" class="dropdown-divider m-0"></div>
                <div class="p-2">
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_lock.html">
                    <span class="fs-sm fw-medium">Lock Account</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
                    <span class="fs-sm fw-medium">Log Out</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Notifications Dropdown -->
            <div class="dropdown d-inline-block ms-2">
              <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-fw fa-bell"></i>
                <span class="text-primary">•</span>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
                <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                  <h5 class="dropdown-header text-uppercase">Notifications</h5>
                </div>
                <ul class="nav-items mb-0">
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">15 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">1 new sale, keep it up</div>
                        <span class="fw-medium text-muted">22 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">Update failed, restart server</div>
                        <span class="fw-medium text-muted">26 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">2 new sales, keep it up</div>
                        <span class="fw-medium text-muted">33 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-user-plus text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new subscriber</div>
                        <span class="fw-medium text-muted">41 min ago</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="text-dark d-flex py-2" href="javascript:void(0)">
                      <div class="flex-shrink-0 me-2 ms-3">
                        <i class="fa fa-fw fa-check-circle text-success"></i>
                      </div>
                      <div class="flex-grow-1 pe-2">
                        <div class="fw-semibold">You have a new follower</div>
                        <span class="fw-medium text-muted">42 min ago</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="p-2 border-top text-center">
                  <a class="d-inline-block fw-medium" href="javascript:void(0)">
                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                  </a>
                </div>
              </div>
            </div>
            <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary ms-2" data-toggle="layout" data-action="side_overlay_toggle">
              <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
            </button>
            <!-- END Toggle Side Overlay -->
          </div>
          <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <form class="w-100" action="be_pages_generic_search.html" method="POST">
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
              </div>
            </form>
          </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-body-extra-light">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-circle-notch fa-spin"></i>
            </div>
          </div>
        </div>
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->

        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Stats -->
          <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Visitors</div>
                  <div class="fs-2 fw-normal text-dark">120,580</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                  <div class="fs-2 fw-normal text-dark">150</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                  <div class="fs-2 fw-normal text-dark">$3,200</div>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
              <a class="block block-rounded block-link-pop border-start border-primary border-4" href="javascript:void(0)">
                <div class="block-content block-content-full">
                  <div class="fs-sm fw-semibold text-uppercase text-muted">Avg Sale</div>
                  <div class="fs-2 fw-normal text-dark">$21</div>
                </div>
              </a>
            </div>
          </div>
          <!-- END Stats -->

          <!-- Dashboard Charts -->
          <div class="row">
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Earnings in $</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content p-0 text-center overflow-hidden">
                  <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                  <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                  <div class="pt-3 m-n1" style="height: 360px;"><canvas id="js-chartjs-dashboard-earnings"></canvas></div>
                </div>
                <div class="block-content">
                  <div class="row items-push text-center py-3">
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-wallet fa-2x text-muted"></i>
                      <div class="text-muted mt-3">$148,000</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-angle-double-up fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+9% Earnings</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-ticket-alt fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+20% Tickets</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-users fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+46% Clients</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Sales</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content p-0 text-center overflow-hidden">
                  <!-- Chart.js is initialized in js/pages/be_pages_dashboard_v1.min.js which was auto compiled from _js/pages/be_pages_dashboard_v1.js) -->
                  <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                  <div class="pt-3 m-n1" style="height: 360px;"><canvas id="js-chartjs-dashboard-sales"></canvas></div>
                </div>
                <div class="block-content">
                  <div class="row items-push text-center py-3">
                    <div class="col-6 col-xl-3">
                      <i class="fab fa-wordpress fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+20% Themes</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-font fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+25% Fonts</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-archive fa-2x text-muted"></i>
                      <div class="text-muted mt-3">-10% Icons</div>
                    </div>
                    <div class="col-6 col-xl-3">
                      <i class="fa fa-paint-brush fa-2x text-muted"></i>
                      <div class="text-muted mt-3">+8% Graphics</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Dashboard Charts -->

          <!-- Customers and Latest Orders -->
          <div class="row items-push">
            <!-- Latest Customers -->
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Latest Customers</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content block-content-full">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                    <thead>
                      <tr class="text-uppercase">
                        <th class="fw-bold" style="width: 80px;">ID</th>
                        <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 100px;">Photo</th>
                        <th class="fw-bold">Name</th>
                        <th class="d-none d-sm-table-cell fw-bold text-center" style="width: 80px;">Orders</th>
                        <th class="fw-bold text-center" style="width: 60px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar16.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Jose Wagner                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">5</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar6.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Melissa Rice                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">14</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Jose Wagner                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">15</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar5.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Judy Ford                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">36</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar14.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Jesse Fisher                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">3</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar2.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Megan Fuller                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">1</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#01368</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar10.jpg" alt="">
                        </td>
                        <td class="fw-semibold">
                          Brian Cruz                </td>
                        <td class="d-none d-sm-table-cell text-center">
                          <a class="link-fx fw-semibold" href="javascript:void(0)">12</a>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Edit">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END Latest Customers -->

            <!-- Latest Orders -->
            <div class="col-lg-6">
              <div class="block block-rounded block-mode-loading-oneui h-100 mb-0">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Latest Orders</h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                      <i class="si si-settings"></i>
                    </button>
                  </div>
                </div>
                <div class="block-content block-content-full">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm mb-0">
                    <thead>
                      <tr class="text-uppercase">
                        <th class="fw-bold">ID</th>
                        <th class="d-none d-sm-table-cell fw-bold">Date</th>
                        <th class="fw-bold">State</th>
                        <th class="d-none d-sm-table-cell fw-bold text-end" style="width: 120px;">Price</th>
                        <th class="fw-bold text-center" style="width: 60px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07835</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $999,99
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07834</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-warning">Pending..</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $2.299,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07833</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $1200,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07832</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">today</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-danger">Cancelled</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $399,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07831</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $349,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07830</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $999,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07829</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $39,99
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07828</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $499,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fw-semibold">#07827</span>
                        </td>
                        <td class="d-none d-sm-table-cell">
                          <span class="fs-sm text-muted">yesterday</span>
                        </td>
                        <td>
                          <span class="fw-semibold text-success">Completed</span>
                        </td>
                        <td class="d-none d-sm-table-cell text-end">
                          $325,00
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="left" title="Manage">
                            <i class="fa fa-fw fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END Latest Orders -->
          </div>
          <!-- END Customers and Latest Orders -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
          <div class="row fs-sm">
            <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
              Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://pixelcave.com" target="_blank">pixelcave</a>
            </div>
            <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
              <a class="fw-semibold" href="https://pixelcave.com/products/oneui" target="_blank">OneUI 5.9</a> &copy; <span data-toggle="year-copy"></span>
            </div>
          </div>
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/oneui.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/chart.js/chart.umd.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_pages_dashboard_v1.min.js"></script>
  </body>
</html>
