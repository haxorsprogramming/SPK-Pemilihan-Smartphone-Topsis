<?php $this -> bind('admin/template/header'); ?>

<!-- Content -->

<main class="main" style="margin-top: 30px;">
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Data Kriteria</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-striped" style="margin-top: 20px">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Bobot</th>
                          <th>Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; foreach($data['kriteria'] as $dk) : ?>
                            <tr>
                                <td><?=$no; ?></td>
                                <td><?=$dk['kriteria']; ?></td>
                                <td><?=$dk['bobot']; ?></td>
                                <td><?=$dk['nilai']; ?></td>
                            </tr>
                        <?php $no++; endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>


<!-- End content  -->
<?php $this -> bind('admin/template/footer'); ?>