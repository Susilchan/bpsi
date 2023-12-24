<?= $this->extend('template/admin') ?>
<?= $this->Section('content') ?>
<style>
  .crd {
    width: 320px;
    height: 125px;
  }

  .cardd {
    width: 320px;
    height: 100px;

  }
</style>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist"></ul>
          </div>
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
              <!-- <div class="row">
                <div class="col-sm-4 mb-2">
                </div>
                <div class="col-sm-4 mb-2">
                  <div class="card text-center crd cardd">
                    <div class="card-header ukuran ">
                      <h5 class="card-title"> </h5>
                    </div>
                  </div>
                </div>
              </div> -->
              <h3>Kualitas Air Limbah <?= $data['kualitas_limbah'] ?></h2><br>
              
              <div class="row">
                <div class="col-sm-4">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div class="card text-center crd">
                      <div class="card-header">
                        Sensor (pH)
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">pH: <?= $data['ph'] ?> </h6>
                      </div>
                      <!-- <div class="card-footer text-muted">
                        <?= $data['waktu'] ?>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div class="card text-center crd">
                      <div class="card-header">
                        Sensor (PPM)
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">TDS: <?= $data['tds'] ?> </h6>
                      </div>
                      <!-- <div class="card-footer text-muted">
                        <?= $data['waktu'] ?>
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div class="card text-center crd">
                      <div class="card-header">
                        Sensor (°C)
                      </div>
                      <div class="card-body">
                        <h6 class="card-title">Suhu: <?= $data['suhu'] ?> </h6>
                      </div>
                      <!-- <div class="card-footer text-muted">
                        <?= $data['waktu'] ?>
                      </div> -->
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
  <!-- content-wrapper ends -->
  <?= $this->endSection() ?>