<?= $this->extend('template/layout_login') ?>
<?= $this->Section('content') ?>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo ">
                <img class="posisi" src="template/images/bpsi.png" alt="logo">
              </div>
              <h4>Welcome BPSI Tanah dan Pupuk!</h4>
              <h6 class="fw-light">Sign in to Monitoring Limbah</h6>
              <form class="pt-3" action="/login/auth" method="post">
              <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                </div>
                <!-- <div class="my-2 d-flex justify-content-between align-items-center"> -->
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label> -->
                  <!-- </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div> -->
                  <!-- <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

  <p>
    <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
  <div class="alert alert-warning">
    <?php echo session()->getFlashdata('gagal') ?>
  </div>
<?php } ?>
</p>


<?= $this->endSection() ?>