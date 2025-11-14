<?=  include 'header.php'; ?>

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
                                                <h6 class="modal-title" id="staticBackdropLabel">Upload File
                                                </h6>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <input type="file" class="form-control" id="create-folder1" placeholder="Folder Name">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-icon btn-light"
                                                data-bs-dismiss="modal"><i class="ri-close-fill"></i></button>
                                                <button type="button" class="btn btn-sm btn-success">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 file-folders-container">

                           
                            <div class="d-flex mb-6 align-items-center justify-content-between">
                                <!-- <p class="mb-0 fw-medium fs-14">Recent Files</p> -->
                                <!-- <a href="javascript:void(0);" class="fs-12 text-muted fw-medium"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a> -->
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
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-arrow-down-line"></i></a>
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
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-arrow-down-line"></i></a>
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
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-arrow-down-line"></i></a>
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
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-arrow-down-line"></i></a>
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
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light"><i class="ri-arrow-down-line"></i></a>
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
<?= include 'footer.php'; ?>    
</body>
</html>