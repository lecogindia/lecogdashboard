<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="transparent" data-width="fullwidth" data-menu-styles="transparent" data-page-style="flat" data-toggled="close"  data-vertical-style="doublemenu" data-toggled="double-menu-open">
<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Vyzor - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin dashboard html,admin html template,admin panel bootstrap template,admin panel html template,admin template html,bootstrap admin panel,bootstrap html template,bootstrap template,bootstrap with html,dashboard html template,dashboards ui,html admin dashboard,html bootstrap,html dashboard template,html template">
    
    <!-- Favicon -->
    <link rel="icon" href="https://sprukomarket.com/products/html/bootstrap/vyzor/dist/assets/images/brand-logos/favicon.ico" type="image/x-icon">
    
    <!-- Choices JS -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="assets/js/main.js"></script>
    
    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="assets/libs/node-waves/waves.min.css" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="assets/libs/%40simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">

    <!-- Auto Complete CSS -->
    <link rel="stylesheet" href="assets/libs/%40tarekraafat/autocomplete.js/css/autoComplete.css">


</head>

<body>
    <div class="progress-top-bar"></div>




    <!-- Loader -->
    <div id="loader" >
        <img src="https://sprukomarket.com/products/html/bootstrap/vyzor/dist/assets/images/media/loader.svg" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
       <!-- app-header -->
       <header class="app-header sticky" id="header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="index.html" class="header-logo">
                            <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                            <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                            <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                            <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element mx-lg-0 mx-2">
                    <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                </div>
                <!-- End::header-element -->

                <div class="header-element  header-search header-search-content d-md-block d-none">
                    <!-- Start::header-link -->
                    <input type="text" class="header-search-bar form-control bg-white" id="header-search" placeholder="Search" spellcheck=false autocomplete="off" autocapitalize="off">
                    <a href="javascript:void(0);" class="header-search-icon border-0">
                        <i class="bi bi-search fs-12 mb-1"></i>
                    </a>
                    <!-- End::header-link -->
                </div>

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <ul class="header-content-right">

                <!-- Start::header-element -->
                <li class="header-element d-md-none d-block">
                    <a href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#header-responsive-search">
                        <!-- Start::header-link-icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="112" cy="112" r="80" opacity="0.2"/><circle cx="112" cy="112" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="168.57" y1="168.57" x2="224" y2="224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <!-- End::header-link-icon -->
                    </a>  
                </li>
                <!-- End::header-element -->

                <!-- Start::header-element -->

                <!-- End::header-element -->

                <!-- Start::header-element -->

                <!-- End::header-element -->

                <!-- Start::header-element -->

                <!-- End::header-element -->

                <!-- Start::header-element -->
                <li class="header-element notifications-dropdown d-xl-block d-none dropdown">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M56,104a72,72,0,0,1,144,0c0,35.82,8.3,64.6,14.9,76A8,8,0,0,1,208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,139.81,56,104Z" opacity="0.2"/><path d="M96,192a32,32,0,0,0,64,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M56,104a72,72,0,0,1,144,0c0,35.82,8.3,64.6,14.9,76A8,8,0,0,1,208,192H48a8,8,0,0,1-6.88-12C47.71,168.6,56,139.81,56,104Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="header-icon-pulse bg-secondary rounded pulse pulse-secondary"></span>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <!-- Start::main-header-dropdown -->
                    <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                        <div class="p-3 bg-primary text-fixed-white">
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 fs-16">Notifications</p>
                                <a href="javascript:void(0);" class="badge bg-light text-default border">Clear All</a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled mb-0" id="header-notification-scroll">
                            <li class="dropdown-item position-relative">
                                <a href="chat.html" class="stretched-link"></a>
                                <div class="d-flex align-items-start gap-3">
                                   <div class="lh-1">
                                       <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                        <img src="../assets/images/faces/1.jpg" alt="">
                                    </span>
                                </div>
                                <div class="flex-fill">
                                    <span class="d-block fw-semibold">New Message</span>
                                    <span class="d-block text-muted fs-12">You have received a new message from John Doe</span>
                                </div>
                                <div class="text-end">
                                    <span class="d-block mb-1 fs-12 text-muted">11:45am</span>
                                    <span class="d-block text-primary d-none"><i class="ri-circle-fill fs-9"></i></span>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-item position-relative">
                            <a href="chat.html" class="stretched-link"></a>
                            <div class="d-flex align-items-start gap-3">
                               <div class="lh-1">
                                   <span class="avatar avatar-sm avatar-rounded bg-primary-transparent">
                                    <i class="ri-notification-line fs-16"></i>
                                </span>
                            </div>
                            <div class="flex-fill">
                                <span class="d-block fw-semibold">Task Reminder</span>
                                <span class="d-block text-muted fs-12">Don't forget to submit your report by 3 PM today</span>
                            </div>
                            <div class="text-end">
                                <span class="d-block mb-1 fs-12 text-muted">02:16pm</span>
                                <span class="d-block text-primary d-none"><i class="ri-circle-fill fs-9"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-item position-relative">
                        <a href="chat.html" class="stretched-link"></a>
                        <div class="d-flex align-items-start gap-3">
                           <div class="lh-1">
                               <span class="avatar avatar-sm avatar-rounded bg-primary-transparent fs-5">
                                <img src="../assets/images/faces/12.jpg" alt="">
                            </span>
                        </div>
                        <div class="flex-fill">
                            <span class="d-block fw-semibold">Friend Request</span>
                            <span class="d-block text-muted fs-12">Jane Smith sent you a friend request</span>
                        </div>
                        <div class="text-end">
                            <span class="d-block mb-1 fs-12 text-muted">10:04am</span>
                            <span class="d-block text-primary"><i class="ri-circle-fill fs-9"></i></span>
                        </div>
                    </div>
                </li>
                <li class="dropdown-item position-relative">
                    <a href="chat.html" class="stretched-link"></a>
                    <div class="d-flex align-items-start gap-3">
                       <div class="lh-1">
                           <span class="avatar avatar-sm avatar-rounded bg-primary-transparent fs-5">
                            <i class="ri-notification-line fs-16"></i>
                        </span>
                    </div>
                    <div class="flex-fill">
                        <span class="d-block fw-semibold">Event Reminder</span>
                        <span class="d-block text-muted fs-12">You have an upcoming event: Team Meeting on October 25 at 10 AM.</span>
                    </div>
                    <div class="text-end">
                        <span class="d-block mb-1 fs-12 text-muted">12:58pm</span>
                        <span class="d-block text-primary"><i class="ri-circle-fill fs-9"></i></span>
                    </div>
                </div>
            </li>
            <li class="dropdown-item position-relative">
                <a href="chat.html" class="stretched-link"></a>
                <div class="d-flex align-items-start gap-3">
                   <div class="lh-1">
                       <span class="avatar avatar-sm avatar-rounded bg-primary-transparent fs-5">
                        <i class="ri-notification-line fs-16"></i>
                    </span>
                </div>
                <div class="flex-fill">
                    <span class="d-block fw-semibold">File Uploaded</span>
                    <span class="d-block text-muted fs-12">The file "Project_Proposal.pdf" has been uploaded successfully</span>
                </div>
                <div class="text-end">
                    <span class="d-block mb-1 fs-12 text-muted">05:13pm</span>
                    <span class="d-block text-primary"><i class="ri-circle-fill fs-9"></i></span>
                </div>
            </div>
        </li>
    </ul>
    <div class="p-5 empty-item1 d-none">
        <div class="text-center">
            <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                <i class="ri-notification-off-line fs-2"></i>
            </span>
            <h6 class="fw-medium mt-3">No New Notifications</h6>
        </div>
    </div>
</div>
<!-- End::main-header-dropdown -->
</li>
<!-- End::header-element -->

<!-- Start::header-element -->
<li class="header-element header-fullscreen">
    <!-- Start::header-link -->
    <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
        <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-open header-link-icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="160" height="160" opacity="0.2"/><polyline points="168 48 208 48 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="88 208 48 208 48 168" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="208 168 208 208 168 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="48 88 48 48 88 48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="full-screen-close header-link-icon d-none" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="32" y="32" width="192" height="192" rx="16" opacity="0.2"/><polyline points="160 48 208 48 208 96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="112" x2="208" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="96 208 48 208 48 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="112" y1="144" x2="48" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
    </a>
    <!-- End::header-link -->
</li>
<!-- End::header-element -->

<!-- Start::header-element -->
<li class="header-element dropdown">
    <!-- Start::header-link|dropdown-toggle -->
    <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        <div>
            <img src="../assets/images/faces/12.jpg" alt="img" class="header-link-icon">
        </div>
    </a>
    <!-- End::header-link|dropdown-toggle -->
    <div class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
        <div class="p-3 bg-primary text-fixed-white">
            <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 fs-16">Profile</p>
                <a href="javascript:void(0);" class="text-fixed-white"><i class="ti ti-settings-cog"></i></a>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="p-3">
            <div class="d-flex align-items-start gap-2">
                <div class="lh-1">
                    <span class="avatar avatar-sm bg-primary-transparent avatar-rounded">
                        <img src="../assets/images/faces/12.jpg" alt="">
                    </span>
                </div>
                <div>
                    <span class="d-block fw-semibold lh-1">Tom Phillip</span>
                    <span class="text-muted fs-12"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="add9c2c0ddc5c4c1c1c4dd9e9fedcac0ccc4c183cec2c0">[email&#160;protected]</a></span>
                </div>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        <ul class="list-unstyled mb-0">
            <li>
                <ul class="list-unstyled mb-0 sub-list">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="profile.html"><i class="ti ti-user-circle me-2 fs-18"></i>View Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i class="ti ti-settings-cog me-2 fs-18"></i>Account Settings</a>
                    </li>
                </ul>        
            </li>
            <li>
                <ul class="list-unstyled mb-0 sub-list">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"><i class="ti ti-lifebuoy me-2 fs-18"></i>Support</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"><i class="ti ti-bolt me-2 fs-18"></i>Activity Log</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);"><i class="ti ti-calendar me-2 fs-18"></i>Events</a>
                    </li>
                </ul>        
            </li>
            <li><a class="dropdown-item d-flex align-items-center" href="sign-in-cover.html"><i class="ti ti-logout me-2 fs-18"></i>Log Out</a></li>
        </ul>
    </div>
</li>  
<!-- End::header-element -->

<!-- Start::header-element -->

<!-- End::header-element -->

</ul>
<!-- End::header-content-right -->

</div>
<!-- End::main-header-container -->

</header>
<!-- /app-header -->
<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
            <img src="assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M133.66,34.34a8,8,0,0,0-11.32,0L40,116.69V216h64V152h48v64h64V116.69Z" opacity="0.2"/><line x1="16" y1="216" x2="240" y2="216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 216 152 152 104 152 104 216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="116.69" x2="40" y2="216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="216" x2="216" y2="116.69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,132.69l98.34-98.35a8,8,0,0,1,11.32,0L232,132.69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">Dashboards</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">Dashboards</a>
                        </li>
                        <li class="slide">
                            <a href="index.html" class="side-menu__item"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M54.46,201.54c-9.2-9.2-3.1-28.53-7.78-39.85C41.82,150,24,140.5,24,128s17.82-22,22.68-33.69C51.36,83,45.26,63.66,54.46,54.46S83,51.36,94.31,46.68C106.05,41.82,115.5,24,128,24S150,41.82,161.69,46.68c11.32,4.68,30.65-1.42,39.85,7.78s3.1,28.53,7.78,39.85C214.18,106.05,232,115.5,232,128S214.18,150,209.32,161.69c-4.68,11.32,1.42,30.65-7.78,39.85s-28.53,3.1-39.85,7.78C150,214.18,140.5,232,128,232s-22-17.82-33.69-22.68C83,204.64,63.66,210.74,54.46,201.54Z" opacity="0.2"/><path d="M54.46,201.54c-9.2-9.2-3.1-28.53-7.78-39.85C41.82,150,24,140.5,24,128s17.82-22,22.68-33.69C51.36,83,45.26,63.66,54.46,54.46S83,51.36,94.31,46.68C106.05,41.82,115.5,24,128,24S150,41.82,161.69,46.68c11.32,4.68,30.65-1.42,39.85,7.78s3.1,28.53,7.78,39.85C214.18,106.05,232,115.5,232,128S214.18,150,209.32,161.69c-4.68,11.32,1.42,30.65-7.78,39.85s-28.53,3.1-39.85,7.78C150,214.18,140.5,232,128,232s-22-17.82-33.69-22.68C83,204.64,63.66,210.74,54.46,201.54Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="96" cy="96" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="160" cy="160" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="168" x2="168" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                            Home</a>
                        </li>
                        <li class="slide">
                            <a href="profile-settings.html" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                            profile-settings</a>
                        </li>
                        <li class="slide has-sub">
                           <a href="profile.html" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        profile</a>

                    </li>
                    <li class="slide has-sub">
                       <a href="reset-password.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                    reset-password</a>

                </li>
                <li class="slide has-sub">
                   <a href="sign-in.html" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                sign-in</a>

            </li>
            <li class="slide has-sub">
               <a href="sign-up.html" class="side-menu__item">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
            sign-up</a>

        </li>
        <li class="slide has-sub">
           <a href="file-manager.html" class="side-menu__item">
            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
        Documents</a>

    </li>
</ul>
</li>


</ul>
<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
</nav>
<!-- End::nav -->

</div>
<!-- End::main-sidebar -->

</aside>

        <!-- Start::app-content -->
       <div class="main-content app-content">
            <div class="container-fluid page-container main-body-container">

                <!-- Start::page-header -->
                <div class="page-header-breadcrumb mb-3">
                    <div class="d-flex align-center justify-content-between flex-wrap">
                        <h1 class="page-title fw-medium fs-18 mb-0">Profile Settings</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                        </ol>
                    </div>
                </div>
                <!-- End::page-header -->

                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Account
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="d-flex align-items-start flex-wrap gap-3">
                                            <div>
                                                <span class="avatar avatar-xxl">
                                                    <img src="assets/images/faces/9.jpg" alt="">
                                                </span>
                                            </div>
                                            <div>
                                                <span class="fw-medium d-block mb-2">Profile Picture</span>
                                                <div class="btn-list mb-1">
                                                    <button class="btn btn-sm btn-primary btn-wave"><i class="ri-upload-2-line me-1"></i>Change Image</button>
                                                    <button class="btn btn-sm btn-light btn-wave"><i class="ri-delete-bin-line me-1"></i>Remove</button>
                                                </div>
                                                <span class="d-block fs-12 text-muted">Use JPEG, PNG, or GIF. Best size: 200x200 pixels. Keep it under 5MB</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="profile-user-name" class="form-label">User Name :</label>
                                        <input type="text" class="form-control" id="profile-user-name" value="" placeholder="Enter Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="profile-email" class="form-label">Email :</label>
                                        <input type="email" class="form-control" id="profile-email" value="" placeholder="Enter Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="profile-phn-no" class="form-label">Phone No :</label>
                                        <input type="text" class="form-control" id="profile-phn-no" value="" placeholder="Enter Number">
                                    </div>
                                    <div class="col-xl-3">
                                        <label for="profile-age" class="form-label">Age :</label>
                                        <input type="number" class="form-control" id="profile-age" value="" placeholder="Enter Age">
                                    </div>
                                    <div class="col-xl-3">
                                        <label for="profile-designation" class="form-label">Designation :</label>
                                        <input type="text" class="form-control" id="profile-designation" value="" placeholder="Enter Designation">
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="profile-address" class="form-label">Address :</label>
                                        <textarea class="form-control" id="profile-address" rows="3"></textarea>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="profile-language" class="form-label">Language :</label>
                                        <select class="form-control" data-trigger id="profile-language">
                                            <option>Us English</option>
                                            <option>Arabic</option> 
                                            <option>Korean</option> 
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="profile-timezone" class="form-label">Timezone :</label>
                                        <select class="form-control" data-trigger id="profile-timezone">
                                            <option value="Pacific/Midway" data-select2-id="6"> (GMT-11:00) Midway Island, Samoa</option> 
                                            <option value="America/Adak" data-select2-id="16"> (GMT-10:00) Hawaii-Aleutian</option> 
                                            <option value="Etc/GMT+10" data-select2-id="17"> (GMT-10:00) Hawaii</option> 
                                            <option value="Pacific/Marquesas" data-select2-id="18"> (GMT-09:30) Marquesas Islands</option> 
                                            <option value="Pacific/Gambier" data-select2-id="19"> (GMT-09:00) Gambier Islands</option> 
                                            <option value="America/Anchorage" data-select2-id="20"> (GMT-09:00) Alaska</option> 
                                            <option value="America/Ensenada" data-select2-id="21"> (GMT-08:00) Tijuana, Baja California</option> 
                                            <option value="Etc/GMT+8" data-select2-id="22"> (GMT-08:00) Pitcairn Islands</option> 
                                            <option value="America/Los_Angeles" data-select2-id="23">(GMT-08:00) Pacific Time (US &amp; Canada)</option> 
                                            <option value="America/Denver" data-select2-id="24"> (GMT-07:00) Mountain Time (US &amp; Canada)</option> 
                                            <option value="America/Chihuahua" data-select2-id="25"> (GMT-07:00) Chihuahua, La Paz, Mazatlan</option> 
                                            <option value="America/Dawson_Creek" data-select2-id="26">(GMT-07:00) Arizona</option> 
                                            <option value="America/Belize" data-select2-id="27"> (GMT-06:00) Saskatchewan, Central America</option> 
                                            <option value="America/Cancun" data-select2-id="28"> (GMT-06:00) Guadalajara, Mexico City, Monterrey </option> 
                                            <option value="Chile/EasterIsland" data-select2-id="29"> (GMT-06:00) Easter Island</option> 
                                            <option value="America/Chicago" data-select2-id="30"> (GMT-06:00) Central Time (US &amp; Canada)</option> 
                                            <option value="America/New_York" data-select2-id="31"> (GMT-05:00) Eastern Time (US &amp; Canada)</option> 
                                            <option value="America/Havana" data-select2-id="32"> (GMT-05:00) Cuba</option> 
                                            <option value="America/Bogota" data-select2-id="33"> (GMT-05:00) Bogota, Lima, Quito, Rio Branco</option> 
                                            <option value="America/Caracas" data-select2-id="34"> (GMT-04:30) Caracas</option> 
                                            <option value="America/Santiago" data-select2-id="35"> (GMT-04:00) Santiago</option> 
                                            <option value="America/La_Paz" data-select2-id="36"> (GMT-04:00) La Paz</option> 
                                            <option value="Atlantic/Stanley" data-select2-id="37"> (GMT-04:00) Faukland Islands</option> 
                                            <option value="America/Campo_Grande" data-select2-id="38">(GMT-04:00) Brazil</option> 
                                            <option value="America/Goose_Bay" data-select2-id="39"> (GMT-04:00) Atlantic Time (Goose Bay)</option> 
                                            <option value="America/Glace_Bay" data-select2-id="40"> (GMT-04:00) Atlantic Time (Canada)</option> 
                                            <option value="America/St_Johns" data-select2-id="41"> (GMT-03:30) Newfoundland</option> 
                                            <option value="America/Araguaina" data-select2-id="42"> (GMT-03:00) UTC-3</option> 
                                            <option value="America/Montevideo" data-select2-id="43"> (GMT-03:00) Montevideo</option> 
                                            <option value="America/Miquelon" data-select2-id="44"> (GMT-03:00) Miquelon, St. Pierre</option> 
                                            <option value="America/Godthab" data-select2-id="45"> (GMT-03:00) Greenland</option> 
                                            <option value="America/Argentina/Buenos_Aires" data-select2-id="46">(GMT-03:00) Buenos Aires </option> 
                                            <option value="America/Sao_Paulo" data-select2-id="47"> (GMT-03:00) Brasilia</option> 
                                            <option value="America/Noronha" data-select2-id="48"> (GMT-02:00) Mid-Atlantic</option> 
                                            <option value="Atlantic/Cape_Verde" data-select2-id="49">(GMT-01:00) Cape Verde Is. </option> 
                                            <option value="Atlantic/Azores" data-select2-id="50"> (GMT-01:00) Azores</option> 
                                            <option value="Europe/Belfast" data-select2-id="51"> (GMT) Greenwich Mean Time : Belfast</option> 
                                            <option value="Europe/Dublin" data-select2-id="52">(GMT) Greenwich Mean Time : Dublin</option> 
                                            <option value="Europe/Lisbon" data-select2-id="53">(GMT) Greenwich Mean Time : Lisbon</option> 
                                            <option value="Europe/London" data-select2-id="54">(GMT) Greenwich Mean Time : London</option> 
                                            <option value="Africa/Abidjan" data-select2-id="55"> (GMT) Monrovia, Reykjavik</option> 
                                            <option value="Europe/Amsterdam" data-select2-id="56"> (GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option> 
                                            <option value="Europe/Belgrade" data-select2-id="57"> (GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option> 
                                            <option value="Europe/Brussels" data-select2-id="58"> (GMT+01:00) Brussels, Copenhagen, Madrid, Paris </option> 
                                            <option value="Africa/Algiers" data-select2-id="59"> (GMT+01:00) West Central Africa</option> 
                                            <option value="Africa/Windhoek" data-select2-id="60"> (GMT+01:00) Windhoek</option> 
                                            <option value="Asia/Beirut" data-select2-id="61"> (GMT+02:00) Beirut</option> 
                                            <option value="Africa/Cairo" data-select2-id="62"> (GMT+02:00) Cairo</option> 
                                            <option value="Asia/Gaza" data-select2-id="63"> (GMT+02:00) Gaza</option> 
                                            <option value="Africa/Blantyre" data-select2-id="64"> (GMT+02:00) Harare, Pretoria</option> 
                                            <option value="Asia/Jerusalem" data-select2-id="65"> (GMT+02:00) Jerusalem</option> 
                                            <option value="Europe/Minsk" data-select2-id="66"> (GMT+02:00) Minsk</option> 
                                            <option value="Asia/Damascus" data-select2-id="67"> (GMT+02:00) Syria</option> 
                                            <option value="Europe/Moscow" data-select2-id="68"> (GMT+03:00) Moscow, St. Petersburg, Volgograd </option> 
                                            <option value="Africa/Addis_Ababa" data-select2-id="69"> (GMT+03:00) Nairobi</option> 
                                            <option value="Asia/Tehran" data-select2-id="70"> (GMT+03:30) Tehran</option> 
                                            <option value="Asia/Dubai" data-select2-id="71"> (GMT+04:00) Abu Dhabi, Muscat</option> 
                                            <option value="Asia/Yerevan" data-select2-id="72"> (GMT+04:00) Yerevan</option> 
                                            <option value="Asia/Kabul" data-select2-id="73"> (GMT+04:30) Kabul</option> 
                                            <option value="Asia/Yekaterinburg" data-select2-id="74"> (GMT+05:00) Ekaterinburg</option> 
                                            <option value="Asia/Tashkent" data-select2-id="75"> (GMT+05:00) Tashkent</option> 
                                            <option value="Asia/Kolkata" data-select2-id="76"> (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi </option> 
                                            <option value="Asia/Katmandu" data-select2-id="77"> (GMT+05:45) Kathmandu</option> 
                                            <option value="Asia/Dhaka" data-select2-id="78"> (GMT+06:00) Astana, Dhaka</option> 
                                            <option value="Asia/Novosibirsk" data-select2-id="79"> (GMT+06:00) Novosibirsk</option> 
                                            <option value="Asia/Rangoon" data-select2-id="80"> (GMT+06:30) Yangon (Rangoon)</option> 
                                            <option value="Asia/Bangkok" data-select2-id="81"> (GMT+07:00) Bangkok, Hanoi, Jakarta</option> 
                                            <option value="Asia/Krasnoyarsk" data-select2-id="82"> (GMT+07:00) Krasnoyarsk</option> 
                                            <option value="Asia/Hong_Kong" data-select2-id="83"> (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi </option> 
                                            <option value="Asia/Irkutsk" data-select2-id="84"> (GMT+08:00) Irkutsk, Ulaan Bataar</option> 
                                            <option value="Australia/Perth" data-select2-id="85"> (GMT+08:00) Perth</option> 
                                            <option value="Australia/Eucla" data-select2-id="86"> (GMT+08:45) Eucla</option> 
                                            <option value="Asia/Tokyo" data-select2-id="87"> (GMT+09:00) Osaka, Sapporo, Tokyo</option> 
                                            <option value="Asia/Seoul" data-select2-id="88"> (GMT+09:00) Seoul</option> 
                                            <option value="Asia/Yakutsk" data-select2-id="89"> (GMT+09:00) Yakutsk</option> 
                                            <option value="Australia/Adelaide" data-select2-id="90"> (GMT+09:30) Adelaide</option> 
                                            <option value="Australia/Darwin" data-select2-id="91"> (GMT+09:30) Darwin</option> 
                                            <option value="Australia/Brisbane" data-select2-id="92"> (GMT+10:00) Brisbane</option> 
                                            <option value="Australia/Hobart" data-select2-id="93"> (GMT+10:00) Hobart</option> 
                                            <option value="Asia/Vladivostok" data-select2-id="94"> (GMT+10:00) Vladivostok</option> 
                                            <option value="Australia/Lord_Howe" data-select2-id="95">(GMT+10:30) Lord Howe Island </option> 
                                            <option value="Etc/GMT-11" data-select2-id="96"> (GMT+11:00) Solomon Is., New Caledonia</option> 
                                            <option value="Asia/Magadan" data-select2-id="97"> (GMT+11:00) Magadan</option> 
                                            <option value="Pacific/Norfolk" data-select2-id="98"> (GMT+11:30) Norfolk Island</option> 
                                            <option value="Asia/Anadyr" data-select2-id="99"> (GMT+12:00) Anadyr, Kamchatka</option> 
                                            <option value="Pacific/Auckland" data-select2-id="100"> (GMT+12:00) Auckland, Wellington</option> 
                                            <option value="Etc/GMT-12" data-select2-id="101"> (GMT+12:00) Fiji, Kamchatka, Marshall Is.</option> 
                                            <option value="Pacific/Chatham" data-select2-id="102"> (GMT+12:45) Chatham Islands</option> 
                                            <option value="Pacific/Tongatapu" data-select2-id="103"> (GMT+13:00) Nuku'alofa</option> 
                                            <option value="Pacific/Kiritimati" data-select2-id="104">(GMT+14:00) Kiritimati </option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Change Password
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-6">
                                        <label for="Password" class="form-label">New Password</label>
                                        <input type="text" class="form-control" id="Password" value="" placeholder="Enter Password">
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="confirm-password" class="form-label">Confirm Password</label>
                                        <input type="text" class="form-control" id="confirm-password" value="" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary float-end">Save Changes</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Security Settings
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-sm-flex d-block align-items-top justify-content-between">
                                    <div class="w-50">
                                        <p class="fs-14 mb-1 fw-medium">Login Verification</p>
                                        <p class="fs-12 mb-0 text-muted">This helps protect accounts from unauthorized access, even if a password is compromised.</p>
                                    </div>
                                    <a href="javascript:void(0);" class="link-primary text-decoration-underline">Set Up Verification</a>
                                </div>
                                <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                                    <div class="w-50">
                                        <p class="fs-14 mb-1 fw-medium">Password Verification</p>
                                        <p class="fs-12 mb-0 text-muted">This additional step helps ensure that the person attempting to modify account details is the legitimate account owner.</p>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="personal-details">
                                        <label class="form-check-label" for="personal-details">
                                            Require Personal Details
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-list float-end">
                                    <button class="btn btn-danger btn-wave">Deactivate Account</button>
                                    <button class="btn btn-light btn-wave">Restore Defaults</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Notifications
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gx-5 gy-3">
                                    <div class="col-xl-12">
                                        <p class="fs-14 mb-1 fw-medium">Configure Notifications</p>
                                        <p class="fs-12 mb-0 text-muted">By configuring notifications, users can tailor their experience to receive alerts for the types of events that matter to them.</p>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="d-flex align-items-top justify-content-between mt-sm-0 mt-3">
                                            <div class="mail-notification-settings">
                                                <p class="fs-14 mb-1 fw-medium">In-App Notifications</p>
                                                <p class="fs-12 mb-0 text-muted">Alerts that appear within the application interface.</p>
                                            </div>
                                            <div class="toggle toggle-success on mb-0 float-sm-end" id="in-app-notifications">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                            <div class="mail-notification-settings">
                                                <p class="fs-14 mb-1 fw-medium">Email Notifications</p>
                                                <p class="fs-12 mb-0 text-muted">Messages sent to the user's email address.</p>
                                            </div>
                                            <div class="toggle toggle-success on mb-0 float-sm-end" id="email-notifications">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                            <div class="mail-notification-settings">
                                                <p class="fs-14 mb-1 fw-medium">Push Notifications</p>
                                                <p class="fs-12 mb-0 text-muted">Alerts sent to the user's mobile device or desktop.</p>
                                            </div>
                                            <div class="toggle toggle-success mb-0 float-sm-end" id="push-notifications">
                                                <span></span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-top justify-content-between mt-3">
                                            <div class="mail-notification-settings">
                                                <p class="fs-14 mb-1 fw-medium">SMS Notifications</p>
                                                <p class="fs-12 mb-0 text-muted">Text messages sent to the user's mobile phone.</p>
                                            </div>
                                            <div class="toggle toggle-success on mb-0 float-sm-end" id="sms-notifications">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        
       <!-- Footer Start -->
<footer class="footer mt-auto py-3 text-center">
    <div class="container">
        <span class="text-muted"> Copyright © <span id="year"></span> <a
                href="javascript:void(0);" class="text-dark fw-medium">Vyzor</a>.
            Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="https://spruko.com/" target="_blank">
                <span class="fw-medium text-primary">Spruko</span>
            </a> All
            rights
            reserved
        </span>
    </div>
</footer>
<!-- Footer End -->
        <div class="modal fade" id="header-responsive-search" tabindex="-1" aria-labelledby="header-responsive-search" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group">
                    <input type="text" class="form-control border-end-0" placeholder="Search Anything ..."
                        aria-label="Search Anything ..." aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button"
                        id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

   
<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow lh-1"><i class="ti ti-arrow-big-up fs-18"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

<!-- Popper JS -->
<script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/libs/%40popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="assets/js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="assets/js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/js/simplebar.js"></script>

<!-- Auto Complete JS -->
<script src="assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js"></script>

<!-- Color Picker JS -->
<script src="assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

<!-- Date & Time Picker JS -->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>


    
<!-- Custom-Switcher JS -->
<script src="assets/js/custom-switcher.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"c0172a2c3fc743d6bf65683eed55a966","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'981a9a5e2fb50027',t:'MTc1ODMwMDg0NQ=='};var a=document.createElement('script');a.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5783333ceb22/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>


<!-- Mirrored from sprukomarket.com/products/html/bootstrap/vyzor/dist/html/profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2025 16:56:25 GMT -->
</html>