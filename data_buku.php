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
              <h1 class="h3 mb-0 text-gray-800">Data Buku</h1>
              <p class="mb-4 mt-2">Pilih Buku Favorite Anda!</p>
            </div>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

          </div>

<div class="row">
  <!-- Contoh Kartu Buku 1 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/bumi.jpeg" alt="Buku Bumi" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
            Tere Liye
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">BUMI</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contoh Kartu Buku 2 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/dhirga.jpeg" alt="Buku dhirga" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Natalia Tan
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">DHIRGA</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Contoh Kartu Buku 3 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/moon.jpg" alt="Buku Bulan" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Tere Liye
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">MOON</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contoh Kartu Buku 4 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/mariposa.jpg" alt="mariposa" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Luluk HF
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">MARIPOSA</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contoh Kartu Buku 5 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/senja.jpeg" alt="senja" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Esti Kinasih
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">JINGGA DAN SENJA</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contoh Kartu Buku 6 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/pulang.jpg" alt="buku pulang" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Tere Liye
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">PULANG</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contoh Kartu Buku 7 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/sagaras.jpeg" alt="sagaras" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Tere Liye
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">SAGARAS</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contoh Kartu Buku 8 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-image">
        <img src="./assets/rindu.jpeg" alt="rindu" class="img-fluid">
      </div>
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
            Tere Liye
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">RINDU</div>
          </div>
        </div>
      </div>
      <div class="card-add tambah">
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-30"></i> Tambah</a>
      </div>
    </div>
  </div>
  


  <!-- Tambahkan lebih banyak kartu buku sesuai kebutuhan -->
</div>
</div>
              <div class="col">
                <div class="progress progress-sm mr-2">
                  <div
                    class="progress-bar bg-info"
                    role="progressbar"
                    style="width: 50%"
                    aria-valuenow="50"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
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
      <?php include './partials/footer.php'; ?>
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include './components/logout-modal.php'; ?>
