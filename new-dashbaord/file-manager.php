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
                <h1 class="page-title fw-medium fs-18 mb-0">File Manager</h1>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                </ol>
            </div>
        </div>
        <!-- End::page-header -->

        <!-- Start:: row-1 -->
        <div class="row">
           
                <div class="col-xxl-12 col-xl-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body p-0">
                            <div class="file-manager-folders">
                                <div class="d-flex p-3 flex-wrap gap-2 align-items-center justify-content-between border-bottom">
                                    <div class="w-sm-50">
                                        <input class="form-control" type="text" placeholder="Search Files Here" aria-label="files-search">
                                    </div>
                                    <div class="d-flex gap-2 flex-wrap justify-content-sm-end">
                                        <button class="btn btn-primary btn-w-md d-flex align-items-center justify-content-center btn-wave waves-light"
                                        data-bs-toggle="modal" data-bs-target="#create-folder">
                                        <i class="ri-add-circle-line align-middle me-1"></i>Upload File
                                    </button>
                                    <div class="modal fade" id="create-folder" tabindex="-1"
                                    aria-labelledby="create-folder" data-bs-keyboard="false"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h6 class="modal-title" id="staticBackdropLabel">Create Folder
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <label for="create-folder1" class="form-label">Folder Name</label>
                                                <input type="text" class="form-control" id="create-folder1" placeholder="Folder Name">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                <button type="button" class="btn btn-sm btn-success">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 file-folders-container">

                           
                            <div class="d-flex mb-6 align-items-center justify-content-between">
                                <p class="mb-0 fw-medium fs-14">Recent Files</p>
                                <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="table-responsive border border-bottom-0">
                                        <table class="table text-nowrap table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">File Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Date Modified</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="files-list">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-0">
                                                                <span class="avatar avatar-sm svg-primary text-primary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M112,175.67V168a8,8,0,0,0-8-8H48a8,8,0,0,0-8,8v40a8,8,0,0,0,8,8h56a8,8,0,0,0,8-8v-8.82L144,216V160Z" opacity="0.2"/><polyline points="112 175.67 144 160 144 216 112 199.18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="40" y="160" width="72" height="56" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,224h24a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Project_Proposal.docx</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Document</td>
                                                    <td>1.2 MB</td>
                                                    <td>2025-03-02,10:15 AM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-0">
                                                                <span class="avatar avatar-sm svg-secondary text-secondary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 224 104 152 76.36 193.46 60 168 24 224 152 224" opacity="0.2"/><polygon points="152 224 104 152 76.36 193.46 60 168 24 224 152 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M192,224h8a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profile_Picture.jpg</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Images</td>
                                                    <td>900 KB</td>
                                                    <td>2025-02-28,08:30 AM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-0">
                                                                <span class="avatar avatar-sm svg-success text-success">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M168,192h16a20,20,0,0,0,0-40H168v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="152" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="56 152 88 152 56 208 88 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">App_Backup.zip</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Others</td>
                                                    <td>15.3 MB</td>
                                                    <td>2025-03-02,07:50 PM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-0">
                                                                <span class="avatar avatar-sm svg-orange text-orange">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="48 200 48 160 72 160 96 136 96 224 72 200 48 200" opacity="0.2"/><polygon points="48 200 48 160 72 160 96 136 96 224 72 200 48 200" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,152a32.5,32.5,0,0,1,0,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,224h32a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">07:50 PM</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Document</td>
                                                    <td>85 KB</td>
                                                    <td>2025-03-03,	06:00 AM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-0">
                                                                <span class="avatar avatar-sm svg-info text-info">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M48,112V40a8,8,0,0,1,8-8h96l56,56v24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="216 152 184 152 184 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="208" y1="184" x2="184" y2="184" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M48,192H64a20,20,0,0,0,0-40H48v56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M112,152v56h16a28,28,0,0,0,0-56Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Marketing_Report.mp4</a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td>Videos</td>
                                                    <td>22.8 MB</td>
                                                    <td>2025-03-01,03:45 PM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-eye-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End:: row-1 -->

</div>
</div>
<!-- End::app-content -->

<!-- Start::mail information offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-body p-0">
        <div class="selected-file-details">
            <div class="d-flex p-3 align-items-center justify-content-between border-bottom">
                <div>
                    <h6 class="fw-medium mb-0">File Details</h6>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown me-1">
                        <button class="btn btn-sm btn-icon btn-primary-light btn-wave waves-light waves-effect waves-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ri-more-2-fill"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">Share</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Copy</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Move</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Delete</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Raname</a></li>
                        </ul>
                    </div>
                    <button type="button" class="btn btn-sm btn-icon btn-outline-light border" data-bs-dismiss="offcanvas"
                    aria-label="Close"><i class="ri-close-line"></i></button>
                </div>
            </div>
            <div class="filemanager-file-details" id="filemanager-file-details">
                <div class="p-3 text-center border-bottom border-block-end-dashed">
                    <div class="file-details mb-3">
                        <img src="../assets/images/media/blog/9.jpg" alt="">
                    </div>
                    <div>
                        <p class="mb-0 fw-medium fs-16">IMG-09123878-SPK734.jpeg</p>
                        <p class="mb-0 text-muted fs-10">422KB | 23,Nov 2025</p>
                    </div>
                </div>
                <div class="p-3 border-bottom border-block-end-dashed">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div>
                                <span class="fw-medium">File Format : </span><span class="fs-12 text-muted">jpeg</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div>
                                <p class="fw-medium mb-0">File Description : </p>
                                <span class="fs-12 text-muted">This file contains 3 folder VYZOR.main & VYZOR.premium & VYZOR.featured and 42 images and layout styles are added in this update.</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <p class="fw-medium mb-0">File Location : </p>
                            <span class="fs-12 text-muted">Device/Storage/Archives/IMG-09123878-SPK734.jpeg</span>
                        </li>
                    </ul>
                </div>
                <div class="p-3 border-bottom border-block-end-dashed">
                    <p class="mb-1 fw-medium fs-14">Downloaded from :</p>
                    <a class="text-primary fw-medium text-break" href="https://1.envato.market/MGEaN" target="_blank">
                        <u>https://1.envato.market/MGEaN</u>
                    </a>
                </div>
                <div class="p-3">
                    <p class="mb-2 fw-medium fs-14">Shared With :</p>
                    <a href="javascript:void(0);">
                        <div class="d-flex align-items-center p-2 mb-1">
                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                <img src="../assets/images/faces/1.jpg" alt="">
                            </span>
                            <span class="fw-medium flex-fill">Akira Susan</span>
                            <span class="badge bg-success-transparent fw-normal">28,Nov 2025</span>
                        </div>
                    </a>
                    <a href="javascript:void(0);">
                        <div class="d-flex align-items-center p-2 mb-1">
                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                <img src="../assets/images/faces/15.jpg" alt="">
                            </span>
                            <span class="fw-medium flex-fill">Khalid Ahmad</span>
                            <span class="badge bg-success-transparent fw-normal">16,Oct 2025</span>
                        </div>
                    </a>
                    <a href="javascript:void(0);">
                        <div class="d-flex align-items-center p-2 mb-1">
                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                <img src="../assets/images/faces/8.jpg" alt="">
                            </span>
                            <span class="fw-medium flex-fill">Jeremiah Jackson</span>
                            <span class="badge bg-success-transparent fw-normal">05,Dec 2025</span>
                        </div>
                    </a>    
                    <a href="javascript:void(0);">
                        <div class="d-flex align-items-center p-2">
                            <span class="avatar avatar-sm me-2 avatar-rounded">
                                <img src="../assets/images/faces/13.jpg" alt="">
                            </span>
                            <span class="fw-medium flex-fill">Brigo Jhonson</span>
                            <span class="badge bg-success-transparent fw-normal">13,Nov 2025</span>
                        </div>
                    </a>    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::mail information offcanvas -->


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

<!-- Apex Charts JS -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Internal File Manager JS -->
<script src="assets/js/file-manager.js"></script>

<!-- Custom JS -->
<script src="assets/js/custom.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"c0172a2c3fc743d6bf65683eed55a966","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'981a9a19e981a2ad',t:'MTc1ODMwMDgzNA=='};var a=document.createElement('script');a.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5783333ceb22/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>


<!-- Mirrored from sprukomarket.com/products/html/bootstrap/vyzor/dist/html/file-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2025 16:55:48 GMT -->
</html>