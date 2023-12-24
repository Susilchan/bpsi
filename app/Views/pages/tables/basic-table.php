<?= $this->extend('template/admin') ?>
<?= $this->Section('content') ?>

<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>





<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="home-tab">
              <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                  <h4 class="card-title">Data Table</h4>
                </ul>
                <div class="d-flex justify-content-center">
                  <form action="/basic-table" method="post">
                    <input type="date" class="btn btn-outline-primary" name="tanggal_mulai">
                    <button type="submit" class="btn btn-outline-primary ">Cari</button>
                  </form>
                </div>
                <div class="btn-wrapper">
                  <!-- <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a> -->
                  <a target="_blank" href="<?php $baseUrl ?>/print" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                  <a target="_blank" href="<?php $baseUrl ?>/export" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                </div>
              </div>
              <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
              <div class="table-responsive">
                <table id="data" class="table">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Waktu</th>
                      <th>pH</th>
                      <th>TDS</th>
                      <th>Suhu</th>
                      <th>Kualitas Limbah</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    $i = 1;
                    foreach ($data as $isi) { ?>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $isi['tanggal'], ' ', $isi['waktu'] ?></td>
                        <td><?= $isi['ph'] ?> </td>
                        <td><?= $isi['tds'] ?> </td>
                        <td><?= $isi['suhu'] ?> </td>
                        <td><?= $isi['kualitas_limbah'] ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- 
        <div>
          <span id="time"></span>
        </div> -->

        <script>
          $(document).ready(function() {
            $('#data').DataTable({
              dom: 'Bfrtip ',
              buttons: [{
                extend: 'excelHtml5',
                text: 'Download',
                titleAttr: 'Excel'
              }],
              scrollY: "300px",
              scrollX: true,
              scrollCollapse: true,
              paging: false,
              fixedColumns: {
                heightMatch: 'semiauto'
              },
            });
          });
        </script>



        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>
        <script src="https://cdn.datatables.net/fixedcolumns/4.2.2/css/fixedColumns.dataTables.min.css"></script>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


        <?= $this->endSection() ?>