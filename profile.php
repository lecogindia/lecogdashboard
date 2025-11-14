<?= include 'header.php'; ?>

        <!-- Start::app-content -->
       <div class="main-content app-content">
            <div class="container-fluid page-container main-body-container">

                <!-- Start::page-header -->
                <div class="page-header-breadcrumb mb-3">
                    <div class="d-flex align-center justify-content-between flex-wrap">
                        <h1 class="page-title fw-medium fs-18 mb-0">Profile</h1>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- End::page-header -->

                <!-- Start:: row-1 -->
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card profile-card">
                                    <div class="profile-banner-image">
                                        <img src="assets/images/media/media-3.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body p-4 pb-0 position-relative">
                                        <div class="d-flex align-items-end justify-content-between flex-wrap">
                                            <div>
                                                <span class="avatar avatar-xxl avatar-rounded bg-info online">
                                                    <img src="assets/images/faces/12.jpg" alt="">
                                                </span>
                                                <div class="mt-4 mb-3 d-flex align-items-center flex-wrap gap-3 justify-content-between">
                                                    <div>
                                                        <h5 class="fw-semibold mb-1">Tom Phillip</h5>
                                                        <span class="d-block fw-medium text-muted mb-1">Senior Product Manager</span>
                                                        <p class="fs-12 mb-0 fw-medium text-muted"> <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>New York, USA</span> <span><i class="ri-phone-line me-1 align-middle"></i>+1 (123) 456-7890</span> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <ul class="nav nav-tabs mb-0 tab-style-8 scaleX" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="profile-about-tab" data-bs-toggle="tab"
                                                            data-bs-target="#profile-about-tab-pane" type="button" role="tab"
                                                            aria-controls="profile-about-tab-pane" aria-selected="true">About</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                            data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                            aria-controls="gallery-tab-pane" aria-selected="false">Gallery</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                                            data-bs-target="#followers-tab-pane" type="button" role="tab"
                                                            aria-controls="followers-tab-pane" aria-selected="false">Followers</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="friends-tab" data-bs-toggle="tab"
                                                            data-bs-target="#friends-tab-pane" type="button" role="tab"
                                                            aria-controls="friends-tab-pane" aria-selected="false">Friends</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="tab-content" id="profile-tabs">
                                    <div class="tab-pane show active p-0 border-0" id="profile-about-tab-pane" role="tabpanel" aria-labelledby="profile-about-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xxl-4">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="card custom-card">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-center gap-4">
                                                                    <div class="text-center">
                                                                        <h3 class="fw-semibold mb-1">
                                                                            13,264
                                                                        </h3>
                                                                        <span class="d-block text-muted">Followers</span>
                                                                    </div>
                                                                    <div class="vr"></div>
                                                                    <div class="text-center">
                                                                        <h3 class="fw-semibold mb-1">
                                                                            7,238
                                                                        </h3>
                                                                        <span class="d-block text-muted">Following</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="card custom-card">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    About 
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="text-muted">Experienced pereson passionate about delivering user-centered solutions, leading cross-functional teams, and driving product success.</p>
                                                                <div class="text-muted">
                                                                    <div class="mb-2 d-flex align-items-center gap-1 flex-wrap">
                                                                        <span class="avatar avatar-sm avatar-rounded text-default">
                                                                            <i class="ri-mail-line align-middle fs-15"></i>
                                                                        </span>
                                                                        <span class="fw-medium text-default">Email : </span> <a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c9b0a6bcbbe7aca4a8a0a589acb1a8a4b9a5ace7aaa6a4">[email&#160;protected]</a>
                                                                    </div>
                                                                    <div class="mb-2 d-flex align-items-center gap-1 flex-wrap">
                                                                        <span class="avatar avatar-sm avatar-rounded text-default">
                                                                            <i class="ri-phone-line align-middle fs-15"></i>
                                                                        </span>
                                                                        <span class="fw-medium text-default">Phone : </span> +1 (555) 123-4567
                                                                    </div>
                                                                    <div class="mb-2 d-flex align-items-center gap-1 flex-wrap">
                                                                        <span class="avatar avatar-sm avatar-rounded text-default">
                                                                            <i class="ri-map-pin-line align-middle fs-15"></i>
                                                                        </span>
                                                                        <span class="fw-medium text-default">Website : </span> www.yourwebsite.com
                                                                    </div>
                                                                    <div class="mb-0 d-flex align-items-center gap-1">
                                                                        <span class="avatar avatar-sm avatar-rounded text-default">
                                                                            <i class="ri-building-line align-middle fs-15"></i>
                                                                        </span>
                                                                        <span class="fw-medium text-default">Location : </span> City, Country
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="card custom-card overflow-hidden">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    Social Media
                                                                </div>
                                                            </div>
                                                            <div class="card-body p-0">
                                                                <ul class="list-group list-group-flush social-media-list">
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-primary-transparent"><i class="ri-facebook-circle-fill fs-4"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium">Facebook</span>
                                                                                <a href="javascript:void(0);" class="text-muted">https://www.facebook.com/johndoe</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-secondary-transparent"><i class="ri-twitter-x-fill fs-4"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium">Twitter</span>
                                                                                <a href="javascript:void(0);" class="text-muted">https://twitter.com/johndoe</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-success-transparent"><i class="ri-linkedin-box-fill fs-4"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium">Linkedin</span>
                                                                                <a href="javascript:void(0);" class="text-muted">https://www.linkedin.com/in/johndoe</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                                                            <div>
                                                                                <span class="avatar avatar-md bg-orange-transparent"><i class="ri-instagram-fill fs-4"></i></span>
                                                                            </div>
                                                                            <div>
                                                                                <span class="d-block fw-medium">Instagram</span>
                                                                                <a href="javascript:void(0);" class="text-muted">https://www.instagram.com/johndoe</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-8">
                                                <div class="card custom-card">
                                                    <div class="card-header p-0">
                                                        <ul class="nav nav-tabs tab-style-8 scaleX justify-content-end" id="myTab4" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link active" id="status-tab" data-bs-toggle="tab" data-bs-target="#status-tab-pane" type="button" role="tab" aria-controls="status-tab-pane" aria-selected="true"><i class="ri-radio-button-line lh-1 me-1"></i>Status</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media-tab-pane" type="button" role="tab" aria-controls="media-tab-pane" aria-selected="false" tabindex="-1"><i class="ri-video-line lh-1 me-1"></i>Image/Video</button>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <button class="nav-link" id="live-stream-tab" data-bs-toggle="tab" data-bs-target="#live-stream-tab-pane" type="button" role="tab" aria-controls="live-stream-tab-pane" aria-selected="false" tabindex="-1"><i class="ri-tv-line lh-1 me-1"></i>Live Stream</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content" id="myTabContent3">
                                                            <div class="tab-pane show active overflow-hidden p-0 border-0" id="status-tab-pane" role="tabpanel" aria-labelledby="status-tab" tabindex="0">
                                                                <textarea class="form-control" id="text-area" rows="4" placeholder="What's on your mind?"></textarea>
                                                                <div class="mt-2">
                                                                    <button class="btn btn-primary float-end">Post <i class="ri-send-plane-2-line ms-1"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane overflow-hidden border-0 p-0" id="media-tab-pane" role="tabpanel" aria-labelledby="media-tab" tabindex="0">
                                                                <textarea class="form-control" id="text-area" rows="2" placeholder="What's on your mind?"></textarea>
                                                                <form data-single="true" method="post" action="https://httpbin.org/post" class="dropzone company-logo-upload mt-2"></form>
                                                                <div class="mt-2">
                                                                    <button class="btn btn-success float-end">Upload <i class="ri-upload-2-line ms-1"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane overflow-hidden border-0 p-0" id="live-stream-tab-pane" role="tabpanel" aria-labelledby="live-stream-tab" tabindex="0">
                                                                <textarea class="form-control" id="text-area" rows="4" placeholder="What's on your mind?"></textarea>
                                                                <div class="mt-2">
                                                                    <button class="btn btn-warning float-end">Start Streaming <i class="ri-tv-2-line ms-1"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="../assets/images/faces/12.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="d-block fw-semibold">Tom Phillip</span>
                                                                <span class="text-muted fs-13">14 hrs ago</span>
                                                            </div>
                                                            <div class="dropdown"> 
                                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i> 
                                                                </a> 
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                                </ul> 
                                                            </div>
                                                        </div>
                                                        <div class="my-3">Captured the serene beauty of the blue sky as the sun sets.</div>
                                                        <div>
                                                            <img src="../assets/images/media/media-23.jpg" class="card-img" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="avatar-list-stacked">
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/10.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                and 8 others <i class="ri-heart-3-fill text-danger"></i> this post
                                                            </div>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <a href="javascript:void(0);" class="p-1 px-2 bg-primary-transparent rounded"><i class="ri-message-3-line me-1"></i>Comment</a>
                                                                <a href="javascript:void(0);" class="p-1 px-2 bg-info-transparent rounded"><i class="ri-share-forward-line me-1"></i>Share</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <ul class="list-unstyled post-comments-list">
                                                            <li>
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="../assets/images/faces/4.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill p-3 rounded bg-light">
                                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                            <div class="fw-semibold">Emily_Smith</div>
                                                                            <div class="text-muted fs-13">2 hours ago</div>
                                                                        </div>
                                                                        <div class="text-muted">
                                                                            Wow, what a peaceful view! Nature at its best &#x1F60D;.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="../assets/images/faces/14.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill p-3 rounded bg-light">
                                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                            <div class="fw-semibold">JohnDoe</div>
                                                                            <div class="text-muted fs-13">1 hours ago</div>
                                                                        </div>
                                                                        <div class="text-muted">
                                                                            Absolutely stunning! The colors are just perfect &#x1F305;&#x1F499;.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center lh-1 flex-wrap"> 
                                                                    <div class="me-3"> 
                                                                        <span class="avatar avatar-md avatar-rounded"> 
                                                                            <img src="../assets/images/faces/12.jpg" alt=""> 
                                                                        </span> 
                                                                    </div> 
                                                                    <div class="flex-fill"> 
                                                                        <div class="input-group"> 
                                                                            <input type="text" class="form-control" placeholder="Write a comment" aria-label="comment"> 
                                                                            <button class="btn btn-light = border" type="button"><i class="bi bi-emoji-smile"></i></button> 
                                                                            <button class="btn btn-light = border" type="button"><i class="bi bi-paperclip"></i></button> 
                                                                            <button class="btn btn-light = border" type="button"><i class="bi bi-camera"></i></button> 
                                                                            <button class="btn btn-primary" type="button">Post</button> 
                                                                        </div> 
                                                                    </div> 
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="../assets/images/faces/12.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="d-block fw-semibold">Tom Phillip</span>
                                                                <span class="text-muted fs-13">2 days ago</span>
                                                            </div>
                                                            <div class="dropdown"> 
                                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i> 
                                                                </a> 
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                                </ul> 
                                                            </div>
                                                        </div>
                                                        <div class="my-3">Success is not final, failure is not fatal: It is the courage to continue that counts. Keep pushing forward! <a href="javascript:void(0);">&#128170; #MotivationMonday</a></div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="avatar-list-stacked">
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/12.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/15.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                and 2 others <i class="ri-heart-3-fill text-danger"></i> this post
                                                            </div>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <a href="javascript:void(0);" class="p-1 px-2 bg-primary-transparent rounded"><i class="ri-message-3-line me-1"></i>Comment</a>
                                                                <a href="javascript:void(0);" class="p-1 px-2 bg-info-transparent rounded"><i class="ri-share-forward-line me-1"></i>Share</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <ul class="list-unstyled post-comments-list">
                                                            <li>
                                                                <div class="d-flex align-items-center lh-1 flex-wrap"> 
                                                                    <div class="me-3"> 
                                                                        <span class="avatar avatar-md avatar-rounded"> 
                                                                            <img src="../assets/images/faces/12.jpg" alt=""> 
                                                                        </span> 
                                                                    </div> 
                                                                    <div class="flex-fill"> 
                                                                        <div class="input-group"> 
                                                                            <input type="text" class="form-control" placeholder="Write a comment" aria-label="comment"> 
                                                                            <button class="btn btn-light border" type="button"><i class="bi bi-emoji-smile"></i></button> 
                                                                            <button class="btn btn-light border" type="button"><i class="bi bi-paperclip"></i></button> 
                                                                            <button class="btn btn-light border" type="button"><i class="bi bi-camera"></i></button> 
                                                                            <button class="btn btn-primary" type="button">Post</button> 
                                                                        </div> 
                                                                    </div> 
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-rounded avatar-md">
                                                                    <img src="../assets/images/faces/12.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="d-block fw-semibold">Tom Phillip</span>
                                                                <span class="text-muted fs-13">14 hrs ago</span>
                                                            </div>
                                                            <div class="dropdown"> 
                                                                <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fe fe-more-vertical"></i> 
                                                                </a> 
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                                </ul> 
                                                            </div>
                                                        </div>
                                                        <div class="my-3">The serene beauty of the evening beach with the soft waves and the sky painted in shades of orange and pink is a perfect way to unwind after a long day. &#x1F305; &#127754; <a href="javascript:void(0);">#BeachVibes</a> <a href="javascript:void(0);">#EveningSunset</a> <a href="javascript:void(0);">#Relaxing</a></div>
                                                        <div>
                                                            <img src="../assets/images/media/media-10.jpg" class="card-img" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="avatar-list-stacked">
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/13.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/3.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/4.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/14.jpg" alt="img">
                                                                </span>
                                                                <span class="avatar avatar-rounded">
                                                                    <img src="../assets/images/faces/5.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                and 25 others <i class="ri-heart-3-fill text-danger"></i> this post
                                                            </div>
                                                            <div class="d-flex align-items-center gap-2 flex-wrap">
                                                                <a href="javascript:void(0);" class="p-1 px-2 bg-primary-transparent rounded"><i class="ri-message-3-line me-1"></i>Comment</a>
                                                                <a href="javascript:void(0);" class="p-1 px-2 bg-info-transparent rounded"><i class="ri-share-forward-line me-1"></i>Share</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <ul class="list-unstyled post-comments-list">
                                                            <li>
                                                                <div class="d-flex align-items-start gap-3">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md avatar-rounded">
                                                                            <img src="../assets/images/faces/6.jpg" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill p-3 rounded bg-light">
                                                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                                            <div class="fw-semibold">Emma Watson</div>
                                                                            <div class="text-muted fs-13">2 hours ago</div>
                                                                        </div>
                                                                        <div class="text-muted">
                                                                            Such a peaceful moment at the beach! Perfect way to end the day.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center lh-1 flex-wrap"> 
                                                                    <div class="me-3"> 
                                                                        <span class="avatar avatar-md avatar-rounded"> 
                                                                            <img src="../assets/images/faces/12.jpg" alt=""> 
                                                                        </span> 
                                                                    </div> 
                                                                    <div class="flex-fill"> 
                                                                        <div class="input-group"> 
                                                                            <input type="text" class="form-control" placeholder="Write a comment" aria-label="comment"> 
                                                                            <button class="btn btn-light border" type="button"><i class="bi bi-emoji-smile"></i></button> 
                                                                            <button class="btn btn-light border" type="button"><i class="bi bi-paperclip"></i></button> 
                                                                            <button class="btn btn-light border" type="button"><i class="bi bi-camera"></i></button> 
                                                                            <button class="btn btn-primary" type="button">Post</button> 
                                                                        </div> 
                                                                    </div> 
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0 border-0" id="gallery-tab-pane" role="tabpanel"
                                        aria-labelledby="gallery-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-40.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-40.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-41.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-41.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-42.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-42.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-43.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-43.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-44.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-44.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-45.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-45.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-46.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-46.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-60.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-60.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-26.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-26.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-32.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-32.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-30.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-30.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-31.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-31.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-46.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-46.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-59.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-59.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-61.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-61.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                                                <a href="../assets/images/media/media-42.jpg" class="glightbox" data-gallery="gallery1">
                                                                    <img src="../assets/images/media/media-42.jpg" alt="image" class="img-fluid rounded">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0 border-0" id="followers-tab-pane" role="tabpanel"
                                        aria-labelledby="followers-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/9.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">JohnDoe</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f05000701410b000a2f0a170e021f030a410c0002">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/1.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">SarahSmith</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7d0e1c0f1c15530e101409153d18051c100d1118531e1210">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/10.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">MichaelBrown</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb3b7bdb6bfbbb2f0bcacb1a9b09ebba6bfb3aeb2bbf0bdb1b3">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/2.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">EmmaWilson</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e88d858589c69f81849b8786a88d90898598848dc68b8785">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/11.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">JamesTaylor</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4aea5a9a1b7eab0a5bda8abb684a1bca5a9b4a8a1eaa7aba9">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-danger-ghost"><i class="ri-user-minus-line me-1"></i>Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/3.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">OliviaJohnson</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="157a797c637c743b7f7a7d7b667a7b55706d74786579703b767a78">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/13.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">DavidMartinez</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94f0f5e2fdf0baf9f5e6e0fdfaf1eed4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/4.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">SophiaGarcia</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="20534f504849410e474152434941604558414d504c450e434f4d">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/14.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">DanielLee</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7317121d1a161f5d1f161633160b121e031f165d101c1e">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/5.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">IsabellaHarris</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e188928083848d8d80cf898093938892a18499808c918d84cf828e8c">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-danger-ghost"><i class="ri-user-minus-line me-1"></i>Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/15.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">WilliamClark</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4a3bdb8b8bdb5b9fab7b8b5a6bf94b1acb5b9a4b8b1fab7bbb9">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/6.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">MiaLewis</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0ddd9d19edcd5c7d9c3f0d5c8d1ddc0dcd59ed3dfdd">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/16.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">AlexanderWalker</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6809040d1009060c0d1a461f0904030d1a280d10090518040d460b0705">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/7.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">CharlotteAllen</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f89b90998a94978c8c9dd69994949d96b89d80999588949dd69b9795">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-primary-ghost"><i class="ri-user-add-line me-1"></i>Follow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="card custom-card">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                                            <div class="lh-1">
                                                                <span class="avatar avatar-lg avatar-rounded">
                                                                    <img src="../assets/images/faces/8.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="flex-fill">
                                                                <span class="fw-semibold d-block">BenjaminYoung</span>
                                                                <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3456515a5e55595d5a1a4d5b415a5374514c55594458511a575b59">[email&#160;protected]</a></span>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-danger-ghost"><i class="ri-user-minus-line me-1"></i>Unfollow</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0 border-0" id="friends-tab-pane" role="tabpanel"
                                        aria-labelledby="friends-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/9.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">JohnDoe</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9d3d6d1d797ddd6dcf9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/1.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">SarahSmith</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7b081a091a13550816120f133b1e031a160b171e55181416">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/10.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">MichaelBrown</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e08d89838881858cce82928f978ea08598818d908c85ce838f8d">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/2.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">EmmaWilson</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9bfef6f6fab5ecf2f7e8f4f5dbfee3faf6ebf7feb5f8f4f6">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/11.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">JamesTaylor</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f19b909c9482df8590889d9e83b19489909c819d94df929e9c">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/3.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">OliviaJohnson</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb1b2b7a8b7bff0b4b1b6b0adb1b09ebba6bfb3aeb2bbf0bdb1b3">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/13.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">DavidMartinez</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfbbbea9b6bbf1b2beadabb6b1baa59fbaa7beb2afb3baf1bcb0b2">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/4.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">SophiaGarcia</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94e7fbe4fcfdf5baf3f5e6f7fdf5d4f1ecf5f9e4f8f1baf7fbf9">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/14.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">DanielLee</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="197d7877707c7537757c7c597c61787469757c377a7674">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/6.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">IsabellaHarris</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b32283a393e37373a75333a292932281b3e233a362b373e75383436">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/15.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">WilliamClark</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="06716f6a6a6f676b28656a67746d46637e676b766a632865696b">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-4 col-lg-6">
                                                <div class="card custom-card">
                                                    <div class="card-body p-4 text-center">
                                                        <div class="dropdown profile-friends-actions"> 
                                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon rounded-circle border btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i> 
                                                            </a> 
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-edit-line me-2"></i>Edit</a></li> 
                                                                <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-line me-2"></i>Delete</a></li> 
                                                            </ul> 
                                                        </div>
                                                        <div class="lh-1 mb-2">
                                                            <span class="avatar avatar-xxl avatar-rounded">
                                                                <img src="../assets/images/faces/9.jpg" alt="">
                                                            </span>
                                                        </div>
                                                        <div class="mb-3">
                                                            <span class="d-block fw-semibold">JohnDoe</span>
                                                            <span class="text-muted fs-13"><a href="https://sprukomarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="117b7e797f3f757e74517469707c617d743f727e7c">[email&#160;protected]</a></span>
                                                        </div>
                                                        <div class="btn-list">
                                                            </button><button class="btn btn-icon btn-facebook btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-facebook-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-twitter btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-twitter-x-line"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-instagram btn-wave rounded-circle waves-effect waves-light">
                                                                <i class="ri-instagram-line"></i>
                                                            </button>
                                                        </div>
                                                    </div>
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
    
    <!-- Gallery JS -->
    <script src="assets/libs/glightbox/js/glightbox.min.js"></script>

    <!-- Dropzone JS -->
    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <!-- Internal Profile JS -->
    <script src="assets/js/profile.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'981a99d7e9410027',t:'MTc1ODMwMDgyNA=='};var a=document.createElement('script');a.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/5783333ceb22/maind41d.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"c0172a2c3fc743d6bf65683eed55a966","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from sprukomarket.com/products/html/bootstrap/vyzor/dist/html/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Sep 2025 16:54:56 GMT -->
</html>