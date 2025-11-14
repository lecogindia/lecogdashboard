<?= include 'header.php'; ?>
<style type="text/css">
    .nav-tabs .nav-link.active {
      color: #ffffff !important;
/*  border-color: transparent transparent #8b5cf6 transparent;*/
border-width: 0 0 2px 0;
border-style: solid;
background-color: #237535;
}
</style>
<div class="main-content app-content">
    <div class="container-fluid page-container main-body-container p-0">

        <!-- Start::page-header -->


        <ul class="nav nav-tabs mb-3" id="profileTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="company-tab" data-bs-toggle="tab" data-bs-target="#company"
                type="button" role="tab">COMPANY INFORMATION</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab">CONTACT PERSON DETAILS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="epr-tab" data-bs-toggle="tab" data-bs-target="#epr"
                type="button" role="tab">EPR ROLE IDENTIFICATION</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="regulatory-tab" data-bs-toggle="tab" data-bs-target="#regulatory" type="button"
                role="tab">REGULATORY DETAILS</button>
            </li>
        </ul>
        <div class="tab-content mt-3" id="profileTabsContent">

            <!-- Company Tab -->
            <div class="tab-pane fade show active" id="company" role="tabpanel" aria-labelledby="company-tab">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Company Information</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <label for="company_name_company" class="form-label">Company / Organization Name
                                :</label>
                                <input type="text" class="form-control" id="company_name_company"
                                placeholder="Enter Company / Organization Name">
                            </div>
                            <div class="col-xl-6">
                                <label for="cin_company" class="form-label">CIN (Corporate Identification Number)
                                :</label>
                                <input type="text" class="form-control" id="cin_company" placeholder="Enter CIN">
                            </div>
                            <div class="col-xl-6">
                                <label for="gst_company" class="form-label">GST Number :</label>
                                <input type="text" class="form-control" id="gst_company" placeholder="Enter GST Number">
                            </div>
                            <div class="col-xl-6">
                                <label for="pan_company" class="form-label">PAN Number :</label>
                                <input type="text" class="form-control" id="pan_company" placeholder="Enter PAN Number">
                            </div>
                            <div class="col-xl-12">
                                <label for="address_company" class="form-label">Registered Address :</label>
                                <textarea class="form-control" id="address_company" rows="3"
                                placeholder="Enter Address"></textarea>
                            </div>
                            <div class="col-xl-6">
                                <label for="state_company" class="form-label">State :</label>
                                <select class="form-control" id="state_company">
                                    <option value="">-- Select State --</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <label for="city_company" class="form-label">City / District :</label>
                                <input type="text" class="form-control" id="city_company"
                                placeholder="Enter City / District">
                            </div>
                            <div class="col-xl-3">
                                <label for="pin_company" class="form-label">Pin Code :</label>
                                <input type="number" class="form-control" id="pin_company" placeholder="Enter Pin Code">
                            </div>
                            <div class="col-xl-9">
                                <label for="org_type_company" class="form-label">Type of Organization :</label>
                                <select class="form-control" id="org_type_company">
                                    <option value="">-- Select organization type --</option>
                                    <option value="Private Ltd">Private Ltd</option>
                                    <option value="LLP">LLP</option>
                                    <option value="Proprietorship">Proprietorship</option>
                                    <option value="Public Ltd">Public Ltd</option>
                                    <option value="NGO">NGO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary float-end">Save Changes</button>
                    </div>
                </div>
            </div>

            <!-- Contact Tab -->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <!-- You can repeat similar structure here or adjust fields -->
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Contact Information</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <label for="company_name_company" class="form-label">Full Name
                                :</label>
                                <input type="text" class="form-control" id="full_name"
                                placeholder="Enter Full Name">
                            </div>
                            <div class="col-xl-6">
                                <label for="company_name_company" class="form-label">Designation
                                :</label>
                                <input type="text" class="form-control" id="designation"
                                placeholder="Enter Designation">
                            </div>
                            <div class="col-xl-4">
                                <label for="company_name_company" class="form-label">Mobile Number
                                :</label>
                                <input type="number" class="form-control" id="number"
                                placeholder="Enter Mobile Number">
                            </div>
                            <div class="col-xl-4">
                                <label for="company_name_company" class="form-label">Email ID
                                :</label>
                                <input type="text" class="form-control" id="email"
                                placeholder="Enter Primary Email ID">
                            </div>
                            <div class="col-xl-4">
                                <label for="company_name_company" class="form-label">Alternate Email (optional)
                                :</label>
                                <input type="text" class="form-control" id="optional_email"
                                placeholder="Enter Alternate Email">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary float-end">Save Changes</button>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="epr" role="tabpanel" aria-labelledby="epr-tab">
                <!-- You can repeat similar structure here or adjust fields -->
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Epr Role Identification</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <label for="company_name_company" class="form-label">Select Role
                                :</label>
                                <select class="form-control" name="role" id="role">
                                    <option value="">--Select Role--</option>
                                    <option value="Producer">Producer</option>
                                    <option value="Importer">Importer</option>
                                    <option value="Brand Owner">Brand Owner</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <label for="company_name_company" class="form-label">Material Type
                                :</label>
                                <select class="form-control" name="material_type" id="material_type" multiple>
                                    <option value="Plastic">Plastic</option>
                                    <option value="Battery">Battery</option>
                                    <option value="E-Waste">E-Waste</option>
                                    <option value="Tyre">Tyre</option>
                                    <option value="Paper">Paper</option>
                                    <option value="Metal">Metal</option>

                                </select>
                            </div>
                            <div class="col-xl-12">
                                <label for="company_name_company" class="form-label">Plastic Category (if Plastic selected)
                                :</label>
                                <select class="form-control" name="plastic_categroy" id="plastic_categroy" multiple>
                                    <option value="Plastic">Plastic</option>
                                    <option value="Battery">Battery</option>
                                    <option value="E-Waste">E-Waste</option>
                                    <option value="Tyre">Tyre</option>
                                    <option value="Paper">Paper</option>
                                    <option value="Metal">Metal</option>

                                </select>
                            </div>
                            <div class="col-xl-6">
                                <label for="company_name_company" class="form-label">Annual Quantity Introduced (MT)
                                :</label>
                                <input type="number" class="form-control" id="designation"
                                placeholder="Enter Annual Quantity Introduced (MT)">
                            </div>
                            <div class="col-xl-4">
                                <label for="company_name_company" class="form-label">Target Year (FY)
                                :</label>
                                <select class="form-control" name="target_year" id="target_year">
                                    <option value="2025-26">2025-26</option>
                                    <option value="2025-27">2025-27</option>
                                    <option value="2025-28">2025-28</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary float-end">Save Changes</button>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="regulatory" role="tabpanel" aria-labelledby="regulatory-tab">
                <!-- You can repeat similar structure here or adjust fields -->
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Regulatory Details</div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <label for="company_name_company" class="form-label">CPCB / SPCB Registration Number
                                :</label>
                                <input type="text" class="form-control" id="full_name"
                                placeholder="Enter Official registration ID">
                            </div>
                            <div class="col-xl-6">

                                <div class="row">
                                  <div class="col-md-6">
                                    <label for="valid_from" class="form-label">Validity Period (From):</label>
                                     <input type="text" class="form-control flatpickr-input active" id="date" placeholder="Choose date" readonly="readonly">
                                </div>
                                <div class="col-md-6">
                                    <label for="valid_to" class="form-label">To:</label>
                                     <input type="text" class="form-control flatpickr-input active" id="date" placeholder="Choose date" readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <label for="company_name_company" class="form-label">Upload Registration Certificate
                            :</label>
                            <input type="file" class="form-control" name="registartion_file" id="registartion_file"
                            placeholder="Enter Mobile Number">
                        </div>
                        <div class="col-xl-6">
                            <label for="company_name_company" class="form-label">Upload MoU with Recycler / PRO
                            :</label>
                            <input type="file" class="form-control" name="mou_file" id="mou_file"
                            placeholder="Enter Primary Email ID">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary float-end">Save Changes</button>
                </div>
            </div>
        </div>

    </div>

</div>
</div>

<?= include 'footer.php'; ?>

<script>
    fetch('data/india_states_and_uts.json')
    .then(r => r.json())
    .then(data => {
        const sel = document.getElementById('state_company');
        sel.innerHTML = '<option value="">-- Select State --</option>';
        [...data.states, ...data.union_territories].forEach(s => {
            const opt = document.createElement('option');
            opt.value = s;
            opt.textContent = s;
            sel.appendChild(opt);
        });
    });

    new Choices('#material_type', {
      allowHTML: true,
      removeItemButton: true,
  });

    new Choices('#plastic_categroy', {
      allowHTML: true,
      removeItemButton: true,
  });
</script>
</body>

</html>