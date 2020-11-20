  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                  </div>
                  <?= $this->session->flashdata('message'); ?>
                  <form class="user" method="POST" action="<?= base_url('auth') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" value='<?= set_value('email') ?>' aria-describedby="emailHelp" placeholder="Enter Email Address...">
                      <div class="small text-danger"><?= form_error('email') ?></div>

                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <div class="small text-danger"><?= form_error('password') ?></div>

                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">

                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>

                    <hr>
                  </form>
                  <div class="text-center">
                    <a href="<?= base_url('auth/forgotpassword') ?>"> forgot password</a>
                  </div>
                  <div class=" text-center">
                    <a class="small" href="<?php base_url() ?>auth/registration"> Register</a>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>