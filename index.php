<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Lecog</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="dashboard template,dashboard html,bootstrap admin,dashboard admin,admin template,sales dashboard,crypto dashboard,projects dashboard,html template,html,html css,admin dashboard template,html css bootstrap,dashboard html css,pos system,bootstrap dashboard">
    <!-- Favicon -->
    <link rel="icon" href="assets/newimages/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >

</head>

<body class="bg-white">

<div class="row authentication authentication-cover-main mx-0">
    <div class="col-xxl-9 col-xl-9">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
                <div class="card custom-card border-0 shadow-none my-4">
                    <div class="card-body p-5">
                        <div>
                            <h4 class="mb-1 fw-semibold">Hi,Welcome back!</h4>
                            <p class="mb-4 text-muted fw-normal">Please enter your credentials</p>
                        </div>
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label for="signin-email" class="form-label text-default">Email</label>
                                <input type="text" class="form-control" id="signin-email" placeholder="Enter Email" >
                            </div>
                                <!-- <div class="col-xl-12 mb-2">
                                    <label for="signin-password" class="form-label text-default d-block">Password</label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="signin-password" placeholder="Enter Password" value="12345678">
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signin-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                    <div class="mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                            <label class="form-check-label" for="defaultCheck1">
                                                Remember me
                                            </label>
                                            <a href="reset-password-basic.html" class="float-end link-danger fw-medium fs-12">Forget password ?</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div id="formMsg" class="text-center mt-3 fw-medium"></div>
                            <div class="d-grid mt-3">
                                <button class="btn btn-primary" onclick="signin()">Sign In</button>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span class="op-4 fs-13">OR</span>
                            </div>
                            <div class="text-center mt-3 fw-medium">
                                Dont have an account? <a href="sign-up.php" class="text-primary">Register Here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-12 d-xl-block d-none px-0">
            <div class="authentication-cover overflow-hidden">
                <div class="authentication-cover-logo">
                    <a href="index.php">
                        <img src="assets/newimages/logolecog.png" alt="logo" class="desktop-dark"> 
                    </a>
                </div>
                <div class="authentication-cover-background">
                    <img src="assets/images/media/backgrounds/9.png" alt="">
                </div>
                <div class="authentication-cover-content">
                    <div class="p-5">
                        <h3 class="fw-semibold lh-base">Welcome to Dashboard</h3>
                        <p class="mb-0 text-muted fw-medium">Manage your website and content with ease using our powerful admin tools.</p>
                    </div>
                    <div>
                        <img src="assets/images/media/media-72.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password JS -->
    <script src="assets/js/show-password.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        function signin(){
            var email = $('#signin-email').val()
            var formData = new FormData()

            formData.append('email',email)

            $.ajax({
                url: "check_email.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                  //   $("#orgForm")[0].reset();
                  //   Swal.fire({
                  //     icon: "success",
                  //     title: response,
                  //     showConfirmButton: false,
                  //     timer: 1500
                  // }).then(() => {
                  //     window.location = 'index.php';
                  // });
                    var res = JSON.parse(response)
                    if(res.Status == "Error"){
                        $("#formMsg").html(res.Message)
                    }else{
                        document.cookie = "username="+encodeURIComponent(email) +"; path=/";
                        window.location = 'otp-verify.php'
                    }

              },
              error: function() {
                  $("#formMsg").html('<span class="text-danger">Error submitting form.</span>');
              }
          });
        }
    </script>
    </html>