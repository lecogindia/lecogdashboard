<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
<head>

  <!-- Meta Data -->
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lecog - Create Account</title>
  <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
  <meta name="Author" content="Spruko Technologies Private Limited">

  <!-- Favicon -->
  <link rel="icon" href="assets/newimages/favicon.ico" type="image/x-icon">

  <!-- Bootstrap Css -->
  <link id="style" href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Style Css -->
  <link href="assets/css/styles.css" rel="stylesheet">

  <!-- Icons Css -->
  <link href="assets/css/icons.css" rel="stylesheet">


  <link href="
  https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.min.css
  " rel="stylesheet">

  <style>
    body {
      background-color: #fff;
    }
    .authentication-cover {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background: linear-gradient(135deg, #f9fafb, #eef2f7);
    }
    .authentication-cover-background img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
  </style>

</head>

<body class="bg-white">

  <div class="row authentication authentication-cover-main mx-0">

    <!-- LEFT: FORM SECTION -->
    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-10 col-sm-12">
          <div class="card custom-card border-0 shadow-none my-4">
            <div class="card-body p-5">
              <div>
                <h4 class="mb-1 fw-semibold">Create your account</h4>
                <p class="mb-4 text-muted fw-normal">Please enter valid credentials</p>
              </div>

              <!-- FORM START -->
              <form id="orgForm" enctype="multipart/form-data">
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label text-default">Organization Name</label>
                    <input type="text" class="form-control" id="orgName" name="orgName" required placeholder="Enter Organization Name">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">Email ID</label>
                    <input type="email" class="form-control" id="email1" name="email" required placeholder="Enter Email">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">Contact Number</label>
                    <input type="number" class="form-control" id="contact" name="contact" required placeholder="Enter Contact Number">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">Full Address</label>
                    <textarea class="form-control" id="full_address" name="address" required></textarea>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">City</label>
                    <input type="text" id="city" class="form-control" name="city" required placeholder="Enter City">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">State</label>
                    <select class="form-control" id="state" name="state">
                      <option value="">-- Select State --</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">Pin Code</label>
                    <input type="number" id="pin_code" class="form-control" name="pincode" required placeholder="Enter Pincode">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">CIN (Corporate Identification Number)</label>
                    <input type="text" id="cin" class="form-control" name="cin" required placeholder="Enter CIN">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">Company Logo</label>
                    <input type="file" id="logo_file" class="form-control" name="logo">
                  </div>

                  <div class="col-md-6">
                    <label class="form-label text-default">Organization Type</label>
                    <select class="form-control" id="org_type" name="org_type" required>
                      <option value="">Please select</option>
                      <option value="Private Ltd">Private Ltd</option>
                      <option value="LLP">LLP</option>
                      <option value="Proprietorship">Proprietorship</option>
                      <option value="Public Ltd">Public Ltd</option>
                      <option value="NGO">NGO</option>
                    </select>
                  </div>
                </div>

                <!-- TERMS -->
                <div class="form-check d-flex justify-content-center mt-4">
                  <input class="form-check-input me-2" type="checkbox" id="termsCheck" name="termsCheck">
                  <label class="form-check-label" for="termsCheck">
                    I agree to the <a href="#" class="text-primary text-decoration-none">Terms & Conditions</a>
                  </label>
                </div>

                <!-- BUTTON -->
                <div class="d-grid mt-3">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
                <div id="formMsg" class="text-center mt-3 fw-medium"></div>
              </form>

              <div class="text-center mt-3 fw-medium">
                Already have an account? <a href="index.php" class="text-primary">Login Here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RIGHT: IMAGE / INFO SECTION -->
    <div class="col-xxl-3 col-xl-3 col-lg-4 d-xl-block d-none px-0">
      <div class="authentication-cover overflow-hidden">
        <div class="authentication-cover-logo mb-3">
          <a href="index.php">
            <img src="assets/newimages/logolecog.png" alt="logo" class="desktop-dark">
          </a>
        </div>
        <div class="authentication-cover-content">
          <div class="p-4">
            <h3 class="fw-semibold lh-base">Welcome to Dashboard</h3>
            <p class="mb-4 text-muted fw-medium">
              Manage your website and content with ease using our powerful admin tools.
            </p>
          </div>
          <div>
            <img src="assets/images/media/media-72.png" alt="illustration" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS -->
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="
  https://cdn.jsdelivr.net/npm/sweetalert2@11.26.3/dist/sweetalert2.all.min.js
  "></script>
  <script>
    $("#orgForm").on("submit", function(e) {
      e.preventDefault();

  // Validate terms checkbox
      if (!$("#termsCheck").is(":checked")) {
        $("#formMsg").html('<span class="text-danger">Please agree to the Terms & Conditions.</span>');
        return;
      }

  // Validate required fields manually
      let valid = true;
      $("#orgForm [required]").each(function() {
        if ($(this).val() === "") {
          valid = false;
          $(this).addClass("is-invalid");
        } else {
          $(this).removeClass("is-invalid");
        }
      });

      if (!valid) {
        $("#formMsg").html('<span class="text-danger">Please fill in all mandatory fields.</span>');
        return;
      }

      var formData = new FormData(this);

      $.ajax({
        url: "create_signup.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          $("#orgForm")[0].reset();
          Swal.fire({
            icon: "success",
            title: response,
            showConfirmButton: false,
            timer: 1500
          }).then(() => {
            window.location = 'index.php';
          });

        },
        error: function() {
          $("#formMsg").html('<span class="text-danger">Error submitting form.</span>');
        }
      });
    });

     fetch('data/india_states_and_uts.json')
    .then(r => r.json())
    .then(data => {
        const sel = document.getElementById('state');
        sel.innerHTML = '<option value="">-- Select State --</option>';
        [...data.states, ...data.union_territories].forEach(s => {
            const opt = document.createElement('option');
            opt.value = s;
            opt.textContent = s;
            sel.appendChild(opt);
        });
    });

  </script>
</body>
</html>
