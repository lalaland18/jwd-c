<?php
require './configs/app.php';
include './partials/head.php';
include './partials/pages/dashboard-scripts.php';
?>

<body id="page-top">
  <div id="wrapper">
    <?php include './partials/sidebar.php'; ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include './partials/navbar.php'; ?>
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-flex flex-column">
              <h1 class="h3 mb-0 text-gray-800">Data Anggota</h1>
              <p class="mb-4 mt-2">Monitor everythings in dashboard.</p>
            </div>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

          </div>
            <div class="table-responsive">
  <table
    class="table table-bordered"
    id="dataTable"
    width="100%"
    cellspacing="0"
  >
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>Alamat</th>
        <th>Jurusan</th>
        <th>Email</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>1</th>
        <th>Della</th>
        <th>Klangenan</th>
        <th>Teknik Informatika</th>
        <th>Della@gmail.com</th>
      </tr>
    </tfoot>
  </table>
</div>

        </div>
      </div>
      <?php include './partials/footer.php'; ?>
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include './components/logout-modal.php'; ?>
  <?php include './partials/foot.php'; ?>
