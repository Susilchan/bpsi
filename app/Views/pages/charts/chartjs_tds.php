<?= $this->extend('template/admin') ?>
<?= $this->Section('content') ?>


<style>
  @media only screen and (max-width: 300px) {

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 220px;
      max-width: 8000px;
      margin: 1em auto;
    }

    .container-figure {
      max-width: 200px;
    }
  }

  @media only screen and (max-width: 350px) {

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 300px;
      max-width: 8000px;
      margin: 1em auto;
    }

    .container-figure {
      max-width: 220px;
    }
  }

  @media only screen and (max-width: 400px) {

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 330px;
      max-width: 8000px;
      margin: 1em auto;
    }

    .container-figure {
      max-width: 280px;
    }
  }

  @media only screen and (max-width: 520px) {

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 400px;
      max-width: 8000px;
      margin: 1em auto;
    }

    .container-figure {
      max-width: 330px;
    }
  }

  @media only screen and (max-width: 720px) {

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 600px;
      max-width: 8000px;
      margin: 1em auto;
    }

    .container-figure {
      max-width: 280px;
    }
  }

  @media only screen and (max-width: 840px) {

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 650px;
      max-width: 8000px;
      margin: 1em auto;
    }

    .container-figure {
      max-width: 280px;
    }
  }



  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
    position: relative;

  }

  .highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
    position: relative;

  }


  .highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
    position: relative;

  }

  .highcharts-data-table td,
  .highcharts-data-table th,
  .highcharts-data-table caption {
    padding: 0.5em;
    position: relative;

  }

  .highcharts-data-table thead tr,
  .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
    position: relative;

  }

  .highcharts-data-table tr:hover {
    background: #f1f7ff;
    position: relative;
  }
</style>


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

              <div class="row mt-4">
                <div class="col-sm-12">
                  <div class="container">
                    <div class="card text-center">
                      <div class="card-header"> Sensor TDS (ppm)
                      </div>
                      <div class="card-body">
                        <!-- <figure class="chart-area">
                            <div id="container-tds"></div>
                          </figure> -->
                        <div class="chart-area">
                          <figure id="container-tds"></figure>
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
    </div>
  </div>
</div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<?php include 'grafik.php'; ?>

<?= $this->endSection() ?>