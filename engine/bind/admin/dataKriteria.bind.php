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
                  <div id='divBtnTambahKriteria'>
                    <a href='#!' class='btn btn-primary btn-lg' id='btnTambahKriteria'>Tambah Kriteria</a>
                  </div>
                  <div id='divFormTambahKriteria'>
                    <a href='#!' class='btn btn-primary btn-lg' id='btnKembali'>Kembali</a>
                    <hr/>
                    <table class="table" style="width: 50%;">
                      <tr>
                        <td>Nama Kriteria</td>
                        <td><input type='text' class='form-control' id='txtNamaKriteria'></td>
                      </tr>
                      <tr>
                        <td>Bobot Kriteria</td>
                        <td><input type='number' class='form-control' id='txtBobot'></td>
                      </tr>
                      <tr>
                        <td>Nilai Kriteria</td>
                        <td>
                          
                          1. <input type='text' class='form-control' id='txtNilai1'><br/>
                          2. <input type='text' class='form-control' id='txtNilai2'><br/>
                          3. <input type='text' class='form-control' id='txtNilai3'><br/>
                          4. <input type='text' class='form-control' id='txtNilai4'><br/>
                          5. <input type='text' class='form-control' id='txtNilai5'><br/>
                        </td>

                      </tr>
                    </table>
                    <a href='#!' class='btn btn-primary btn-lg' id='btnSimpan'>Simpan</a>
                  </div>
                    <table class="table table-responsive-sm table-striped" style="margin-top: 20px" id="tblDataKriteria">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Bobot</th>
                          <th>Nilai</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; foreach($data['kriteria'] as $dk) : ?>
                            <tr>
                                <td><?=$no; ?></td>
                                <td><?=$dk['kriteria']; ?></td>
                                <td><?=$dk['bobot']; ?></td>
                                <td><?=$dk['nilai']; ?></td>
                                <td>
                                  <a href='#!' class='btn btn-primary'>Edit</a>
                                  <a href='#!' class='btn btn-warning'>Hapus</a>
                                </td>
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
      <script>
        $('#divFormTambahKriteria').hide();

        $('#btnTambahKriteria').click(function(){
          $('#divFormTambahKriteria').show();
          $('#divBtnTambahKriteria').hide();
          $('#tblDataKriteria').hide('#txtNilai1').value;

          document.querySelector('#txtNamaKriteria').focus();
        });

        document.querySelector('#btnKembali').addEventListener('click', function(){
          window.location.reload();
        });

        document.querySelector('#btnSimpan').addEventListener('click', function(){
          let nama = document.querySelector('#txtNamaKriteria').value;
          let bobot = document.querySelector('#txtBobot').value;
          let n1 = document.querySelector('#txtNilai1').value;
          let n2 = document.querySelector('#txtNilai2').value;
          let n3 = document.querySelector('#txtNilai3').value;
          let n4 = document.querySelector('#txtNilai4').value;
          let n5 = document.querySelector('#txtNilai5').value;
          if(nama === ''){
            window.alert("Masukkan nama kriteria !!");
          }else{
            if(bobot === '0' || bobot === '' || bobot <= 0){
              window.alert("Bobot tidak boleh kosong atau di bawah 1");
            }else{
              if(n1 === '' || n2 === '' || n3 === '' || n4 === '' || n5 === ''){
                window.alert("Masukkan nilai kriteria!!!");
              }else{
                let dataSend = {'nama':nama, 'bobot':bobot, 'n1':n1, 'n2':n2, 'n3':n3, 'n4':n4, 'n5':n5}
                let server = '<?=HOMEBASE;?>admin/prosesTambahKriteria';
                $.post(server, dataSend, function(data){
                  let obj = JSON.parse(data);
                  window.alert("Data kriteria berhasil ditambahkan...");
                  window.location.reload();
                });
              }
            }
          }

        });

      </script>                    

<!-- End content  -->
<?php $this -> bind('admin/template/footer'); ?>