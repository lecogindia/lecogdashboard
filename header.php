<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="transparent" data-width="fullwidth" data-menu-styles="transparent" data-page-style="flat" data-toggled="close"  data-vertical-style="doublemenu" data-toggled="double-menu-open">
<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lecog </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/newimages/favicon.ico" type="image/x-icon">
    
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

    <style type="text/css">
     .pdf-btn {
      border: none;
      background: none;
      cursor: pointer;
      color: #3B82F6;
      font-size: 20px;
      transition: 0.2s;
  }

  .pdf-btn:hover {
      color: #1D4ED8;
      transform: scale(1.1);
  }
</style>

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
                            <img src="assets/newimages/logolecog.png" alt="logo" class="desktop-logo">
                            <img src="assets/newimages/logolecog.png" alt="logo" class="toggle-logo">
                            <img src="assets/newimages/logolecog.png" alt="logo" class="desktop-dark">
                            <img src="assets/newimages/logolecog.png" alt="logo" class="toggle-dark">
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
            <img src="assets/newimages/836.jpg" alt="img" class="header-link-icon">
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
                        <img src="assets/newimages/836.jpg" alt="">
                    </span>
                </div>
                <div>
                    <span class="d-block fw-semibold lh-1">XYZ</span>
                    <span class="text-muted fs-12"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="add9c2c0ddc5c4c1c1c4dd9e9fedcac0ccc4c183cec2c0"></a></span>
                </div>
            </div>
        </div>
        <div class="dropdown-divider"></div>
        <ul class="list-unstyled mb-0">
            <!-- <li>
                <ul class="list-unstyled mb-0 sub-list">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="profile.html"><i class="ti ti-user-circle me-2 fs-18"></i>View Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="mail-settings.html"><i class="ti ti-settings-cog me-2 fs-18"></i>Account Settings</a>
                    </li>
                </ul>        
            </li> -->
            
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
            <img src="assets/newimages/logolecog.png" alt="logo" class="desktop-logo">
            <img src="assets/newimages/logolecog.png" alt="logo" class="toggle-dark">
            <img src="assets/newimages/logolecog.png" alt="logo" class="desktop-dark">
            <img src="assets/newimages/logolecog.png" alt="logo" class="toggle-logo">
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
                <li class="slide has-sub open ">
                    <a href="javascript:void(0);" id="side-menu-home" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M133.66,34.34a8,8,0,0,0-11.32,0L40,116.69V216h64V152h48v64h64V116.69Z" opacity="0.2"/><line x1="16" y1="216" x2="240" y2="216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 216 152 152 104 152 104 216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="40" y1="116.69" x2="40" y2="216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="216" x2="216" y2="116.69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,132.69l98.34-98.35a8,8,0,0,1,11.32,0L232,132.69" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <span class="side-menu__label">LECOG</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0)">LECOG</a>
                        </li>
                        <li class="slide">
                            <a href="dashboard.php" class="side-menu__item"> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M54.46,201.54c-9.2-9.2-3.1-28.53-7.78-39.85C41.82,150,24,140.5,24,128s17.82-22,22.68-33.69C51.36,83,45.26,63.66,54.46,54.46S83,51.36,94.31,46.68C106.05,41.82,115.5,24,128,24S150,41.82,161.69,46.68c11.32,4.68,30.65-1.42,39.85,7.78s3.1,28.53,7.78,39.85C214.18,106.05,232,115.5,232,128S214.18,150,209.32,161.69c-4.68,11.32,1.42,30.65-7.78,39.85s-28.53,3.1-39.85,7.78C150,214.18,140.5,232,128,232s-22-17.82-33.69-22.68C83,204.64,63.66,210.74,54.46,201.54Z" opacity="0.2"/><path d="M54.46,201.54c-9.2-9.2-3.1-28.53-7.78-39.85C41.82,150,24,140.5,24,128s17.82-22,22.68-33.69C51.36,83,45.26,63.66,54.46,54.46S83,51.36,94.31,46.68C106.05,41.82,115.5,24,128,24S150,41.82,161.69,46.68c11.32,4.68,30.65-1.42,39.85,7.78s3.1,28.53,7.78,39.85C214.18,106.05,232,115.5,232,128S214.18,150,209.32,161.69c-4.68,11.32,1.42,30.65-7.78,39.85s-28.53,3.1-39.85,7.78C150,214.18,140.5,232,128,232s-22-17.82-33.69-22.68C83,204.64,63.66,210.74,54.46,201.54Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="96" cy="96" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="160" cy="160" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="168" x2="168" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                            Home</a>
                        </li>
                        <li class="slide">
                            <a href="profile-settings.php" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                            profile-settings</a>
                        </li>
                      <!--   <li class="slide has-sub">
                           <a href="profile.html" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        profile</a>

                    </li> -->
                   <!--  <li class="slide has-sub">
                       <a href="reset-password.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                    reset-password</a>

                </li> -->
                <!-- <li class="slide has-sub">
                   <a href="sign-in.html" class="side-menu__item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                sign-in</a>

            </li> -->
            <!-- <li class="slide has-sub">
               <a href="sign-up.html" class="side-menu__item">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu-doublemenu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
            sign-up</a>

        </li> -->
        <li class="slide has-sub">
           <a href="file-manager.php" class="side-menu__item">
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