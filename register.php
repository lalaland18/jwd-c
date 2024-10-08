<?php
require './configs/app.php';
include './partials/head.php';
?>

<body class="bg-primary">
   <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center align-items-center" style="height: 100vh !important;">
        <div class="col-xl-6 col-lg-6 col-md-6">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">
                        Registrasi Account
                      </h1>
                    </div>
                      <!-- email -->
                      <div class="form-group">
                        <input
                          type="email"
                          class="form-control form-control-user"
                          id="exampleInputEmail"
                          aria-describedby="emailHelp"
                          placeholder="Email Address"
                        />
                      </div>
                      <!-- password -->
                      <div class="form-group">
                        <input
                          type="password"
                          class="form-control form-control-user"
                          id="exampleInputPassword"
                          placeholder="Password"
                        />
                      </div>
                      <!-- re password -->
                      <div class="form-group">
                        <input
                          type="password"
                          class="form-control form-control-user"
                          id="exampleInputPassword"
                          placeholder="Re-Password"
                        />
                      </div>
                  
                  
                      <a
                        href="login.php"
                        class="btn btn-primary btn-user btn-block"
                      >
                        submit
                      </a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include './partials/foot.php'; ?>
