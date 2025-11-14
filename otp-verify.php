<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> VYZOR - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="dashboard template,dashboard html,bootstrap admin,dashboard admin,admin template,sales dashboard,crypto dashboard,projects dashboard,html template,html,html css,admin dashboard template,html css bootstrap,dashboard html css,pos system,bootstrap dashboard">
    <!-- Favicon -->
    <link rel="icon" href="https://sprukomarket.com/products/html/bootstrap/vyzor/dist/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="assets/css/styles.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="assets/css/icons.css" rel="stylesheet" >
<style type="text/css">
    .otp-box {
  width: 45px !important;
  height: 50px !important;
  font-size: 22px !important;
  text-align: center !important;
  border: 1px solid #ced4da !important;
  border-radius: 8px !important;
  background-color: #ffffff !important;
  color: #000000 !important;
  -webkit-text-fill-color: #000000 !important;
  font-weight: 600 !important;

  /* reset any theme masking */
  background-clip: border-box !important;
  -webkit-background-clip: border-box !important;
  text-shadow: none !important;
  filter: none !important;
  mix-blend-mode: normal !important;
  opacity: 1 !important;
  isolation: isolate !important;
}

.otp-box:focus {
  border-color: #6f42c1 !important;
  box-shadow: 0 0 0 0.2rem rgba(111, 66, 193, 0.25);
  outline: none !important;
}
</style>
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
  <label for="signin-otp" class="form-label text-default">Enter OTP</label>
  <div class="d-flex justify-content-between gap-2 mt-2">
    <input type="text" maxlength="1" class="otp-box" />
    <input type="text" maxlength="1" class="otp-box" />
    <input type="text" maxlength="1" class="otp-box" />
    <input type="text" maxlength="1" class="otp-box" />
    <input type="text" maxlength="1" class="otp-box" />
    <input type="text" maxlength="1" class="otp-box" />
  </div>
</div>
                            </div>
                            <div id="formMsg" class="text-center mt-3 fw-medium"></div>
                            <div class="d-grid mt-3">
                                <button class="btn btn-primary" onclick="signin()">Verify</button>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-12 d-xl-block d-none px-0">
            <div class="authentication-cover overflow-hidden">
                <div class="authentication-cover-logo">
                    <a href="index.html">
                        <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="desktop-dark"> 
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
                        window.location = ''
                    }

              },
              error: function() {
                  $("#formMsg").html('<span class="text-danger">Error submitting form.</span>');
              }
          });
        }

        document.querySelectorAll('.otp-box').forEach((input, index, arr) => {
  input.addEventListener('input', () => {
    input.value = input.value.replace(/[^0-9]/g, ''); // allow digits only
    if (input.value && index < arr.length - 1) arr[index + 1].focus();
  });
  input.addEventListener('keydown', (e) => {
    if (e.key === 'Backspace' && !input.value && index > 0) {
      arr[index - 1].focus();
    }
  });
});
    </script>
    </html>