<?= include 'header.php'; ?>
<div class="main-content app-content">
    <div class="container-fluid page-container main-body-container">

        <!-- Start::page-header -->
        <div class="d-flex align-items-center justify-content-between mb-3 page-header-breadcrumb flex-wrap gap-2">
            <div>
                <h1 class="page-title fw-medium fs-20 mb-0">Welcome, XYZ</h1>
            </div>
            <div class="d-flex align-items-center gap-2 flex-wrap">
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-text">Year:</span>
                      <input type="text" class="form-control" value="<?= date('Y') ?>" readonly>
                  </div>
              </div>
          </div>
      </div>
      <div class="row row-cols-xxl-4">
        <div class="col">
            <div class="card custom-card widget-card-style1 primary">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-3 flex-wrap">
                        <div class="lh-1">
                            <span class="avatar avatar-md bg-primary">
                                <i class="ri-group-3-fill fs-5"></i>
                            </span>
                        </div>
                        <div class="flex-fill">
                            <span class="d-block fw-bold" style="white-space: nowrap;">EPR registration status
                            </span>
                            <h5 class="fw-semibold"> <span class="badge bg-primary">ACTIVE</span> </h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card custom-card widget-card-style1 secondary">
                <div class="card-body">
                    <div class="d-flex align-items-start gap-3 flex-wrap">
                        <div class="lh-1">
                            <span class="avatar avatar-md bg-secondary">
                             <i class="ri-focus-2-line fs-5"></i></i>
                         </span>
                     </div>
                     <div class="flex-fill">
                        <span class="d-block fw-bold">Target For 2025</span>
                        <h5 class="fw-semibold">500 MT</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card custom-card widget-card-style1 success">
            <div class="card-body">
                <div class="d-flex align-items-start gap-3 flex-wrap">
                    <div class="lh-1">
                        <span class="avatar avatar-md bg-success">
                            <i class="ri-id-card-fill fs-5"></i>
                        </span>
                    </div>
                    <div class="flex-fill">
                        <span class="d-block fw-bold">Achieved</span>
                        <h5 class="fw-semibold">300 MT(60%)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card custom-card widget-card-style1 warning">
            <div class="card-body">
                <div class="d-flex align-items-start gap-3 flex-wrap">
                    <div class="lh-1">
                     <span class="avatar avatar-md bg-danger">
                        <i class="ri-briefcase-fill fs-5"></i>
                    </span>
                </div>
                <div class="flex-fill">
                    <span class="d-block fw-bold">Pending</span>
                    <h5 class="fw-semibold">200 MT(40%)</h5>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- <div class="col">
        <div class="card custom-card widget-card-style1 success">
            <div class="card-body">
                <div class="d-flex align-items-start gap-3 flex-wrap">
                    <div class="lh-1">
                        <span class="avatar avatar-md bg-success">
                            <i class="ri-id-card-fill fs-5"></i>
                        </span>
                    </div>
                    <div class="flex-fill">
                        <span class="d-block fw-bold">Total EPR credits</span>
                        <h5 class="fw-semibold">900</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<div class="row">
    <div class="col-xxl-12 col-xl-12 d-flex">
        <div class="card custom-card overflow-hidden flex-fill">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    EPR Credit Tracker
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Credit Earned</th>
                                <th scope="col">Credits Required</th>
                                <th scope="col">Fulfilment %</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="fw-semibold">300 MT</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">200MT</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">60</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12">
    <div class="card custom-card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                Compliance Progress
            </div>

        </div>
        <div class="card-body">

           <div class="progress progress-xl progress-animate custom-progress-4 danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-danger-gradient" style="width: 90%"></div>
            <div class="progress-bar-label">90%</div>
        </div>
    </div>
    <div class="card-footer d-none border-top-0">
        <!-- Prism Code -->

    </div>
</div>
</div>
<div class="row">
    <div class="col-xl-6" style="display: flex;">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Material Composition Breakdown</div>
                <button id="download-pdf"> <i class="bi bi-filetype-pdf" style="font-size: 1rem; color: cornflowerblue;"></i></button>
            </div>
            <div class="card-body">
                <div id="chart"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Recyclers- Wise Contribution</div>
            </div>
            <div class="card-body">
                <div id="bar-basic"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-7 col-xl-7 d-flex">
        <div class="card custom-card overflow-hidden flex-fill">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Compliance Breakdown
                </div>
                <!-- <a href="javascript:void(0);" class="link-primary fw-semibold">View All Orders<i class="ri-arrow-right-s-line ms-1 align-middle"></i></a> -->
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Quarter</th>
                                <th scope="col">Target(MT)</th>
                                <th scope="col">Achieved(MT)</th>
                                <th scope="col">Pending(MT)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Q1
                                    </span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">100</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">100</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">-
                                    </span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Q2
                                    </span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">100</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">100</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">-
                                    </span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <span class="fw-semibold">Q3
                                    </span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">100</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">100</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">-
                                    </span>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <span class="fw-semibold">Q4
                                    </span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">200</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">0</span>
                                </td>
                                <td>
                                    <span class="d-block fw-semibold">200
                                    </span>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-5 d-flex">
        <div class="card custom-card flex-fill">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Reminder
                </div>

            </div>
            <div class="card-body">
                <div class="alert alert-warning svg-warning d-flex align-items-center" role="alert">
                    <svg class="flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><g><rect fill="none" height="24" width="24"></rect></g><g><g><g><path d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z"></path><polygon points="13,16 11,16 11,18 13,18"></polygon><polygon points="13,10 11,10 11,15 13,15"></polygon></g></g></g></svg>
                    <div>
                        Upload Recoler Agreement by 20th Sept
                    </div>
                </div>
                <div class="alert alert-warning svg-warning d-flex align-items-center" role="alert">
                    <svg class="flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><g><rect fill="none" height="24" width="24"></rect></g><g><g><g><path d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z"></path><polygon points="13,16 11,16 11,18 13,18"></polygon><polygon points="13,10 11,10 11,15 13,15"></polygon></g></g></g></svg>
                    <div>
                        Quarterly Return Filling due in 15 days
                    </div>
                </div>
                <div class="alert alert-success svg-success d-flex align-items-center" role="alert">
                    <svg class="flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg>
                    <div>
                        Annual Report for 2024 filled successfully
                    </div>
                </div>
            </div>
            <div class="card-footer d-none border-top-0">
                <!-- Prism Code -->

                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>


</div>
</div>
<!-- End::app-content -->


<!-- Footer Start -->
<?= include 'footer.php'; ?>

<script type="text/javascript">
 const labels = ['HDPE', 'LDPE', 'PP', 'PET'];
const series = [40, 20, 30, 10]; // ✅ No % symbols
const colors = ['#A855F7', '#EC4899', '#FACC15', '#22C55E'];

// Example descriptions
const descriptions = labels.map(() => 
  "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since."
  );

const options = {
  series: series,
  chart: { type: 'pie', height: 350 },
  labels: labels,
  dataLabels: { 
    enabled: true,
    formatter: val => val.toFixed(1) + '%' // ✅ Add % here
},
legend: { position: 'bottom' },
colors: colors
};

const chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

document.getElementById('download-pdf').addEventListener('click', async () => {
  const chartEl = document.getElementById('chart');
  const canvas = await html2canvas(chartEl);
  const imgData = canvas.toDataURL('image/png');

  const pdf = new jspdf.jsPDF('p', 'mm', 'a4');
  const pageWidth = pdf.internal.pageSize.getWidth();
  const imgProps = pdf.getImageProperties(imgData);
  const pdfHeight = (imgProps.height * pageWidth) / imgProps.width;

  pdf.addImage(imgData, 'PNG', 0, 10, pageWidth, pdfHeight);

  pdf.setFontSize(13);
  pdf.text("Chart Breakdown:", 10, pdfHeight + 25);

  let yPos = pdfHeight + 35;
  const boxSize = 6;

  for (let i = 0; i < labels.length; i++) {
    // Color box
    pdf.setFillColor(colors[i]);
    pdf.rect(10, yPos - 4.5, boxSize, boxSize, 'F');

    // Title line
    pdf.setTextColor(0, 0, 0);
    pdf.text(`${labels[i]} - ${series[i]}% -`, 20, yPos);

    // Wrapped paragraph
    const wrappedText = pdf.splitTextToSize(descriptions[i], pageWidth - 30);
    pdf.text(wrappedText, 20, yPos + 6);

    // Increase y-position
    yPos += 6 + wrappedText.length * 6;

    // Add new page if needed
    if (yPos > 270) {
      pdf.addPage();
      yPos = 20;
  }
}

pdf.save("team_chart.pdf");
});

</script>

<script>
  var bar_options = {
      series: [{
        data: [150, 120, 90]
    }],
      chart: {
        type: 'bar',
        height: 380,
        dropShadow: {
          enabled: true,
          color: '#6B21A8',
          top: 3,
          left: 2,
          blur: 5,
          opacity: 0.2
      },
      toolbar: { show: false }
  },
  title: {
    text: 'Recyclers – Wise Contribution (Descending Order)',
    align: 'center',
    style: { fontSize: '17px', fontWeight: 'bold', color: '#1F2937' }
},
plotOptions: {
    bar: {
      horizontal: true,
      borderRadius: 6,
      barHeight: '55%',
      distributed: false,
  }
},
fill: {
    colors: ['#8B5CF6'],
    opacity: 0.9
},
dataLabels: {
    enabled: true,
    style: { colors: ['#fff'], fontWeight: 'bold' },
    offsetX: 20
},
xaxis: {
    categories: ['ABC Recyclers', 'Green Recycler', 'XYZ Recycler'],
    title: {
      text: 'Quantity (MT)',
      style: { fontSize: '13px', fontWeight: 600, color: '#374151' }
  },
  labels: {
      style: { fontSize: '12px', color: '#4B5563' }
  },
  axisBorder: { show: true, color: '#D1D5DB' },
  axisTicks: { show: true, color: '#D1D5DB' }
},
yaxis: {
    title: {
      text: 'Recycler',
      style: { fontSize: '13px', fontWeight: 600, color: '#374151' }
  },
  labels: {
      style: { fontSize: '12px', color: '#4B5563' }
  }
},
grid: {
    borderColor: '#E5E7EB',
    strokeDashArray: 3,
}
};

var bar_chart = new ApexCharts(document.querySelector("#bar-basic"), bar_options);
bar_chart.render();


</script>
</body>
</html> 