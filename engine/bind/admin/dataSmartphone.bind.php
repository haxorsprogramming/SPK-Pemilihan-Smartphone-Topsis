<?php $this -> bind('admin/template/header'); ?>

<!-- Content -->

<main class="main" style="margin-top: 30px;">
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">Data Smartphone</div>
                  <div class="card-body">
                      <div style="margin-bottom:20px;">
                          <a href='<?=HOMEBASE; ?>admin/tambahSmartphone' class="btn btn-primary">Tambah Smartphone</a>
                      </div>
                  <table id="table_id" class="table table-bordered" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>
                                <center>No </center>
                            </th>
                            <th>
                                <center>Nama Smartphone</center>
                            </th>
                            <th>
                                <center>Harga</center>
                            </th>
                            <th>
                                <center>Merek</center>
                            </th>
                            <th>
                                <center>Ram</center>
                            </th>
                            <th>
                                <center>Baterai</center>
                            </th>
                            <th>
                                <center>Kamera Belakang</center>
                            </th>
                            <th>
                                <center>Kamera Depan</center>
                            </th>
                            <th>
                                <center>Display</center>
                            </th>
                            <th>
                                <center>Aksi</center>
                            </th>
                        </tr>
                    </thead>
                    <?php 
                    $no = 1;    
                    foreach($data['hp'] as $dh) { 
                    ?>
                        <tr>
                            <td><?=$no; ?></td>
                            <td><?=$dh['nama_hp']; ?></td>
                            <td>Rp. <?=number_format($dh['harga_cap']); ?></td>
                            <td><?=$dh['merek_cap']; ?></td>
                            <td><?=$dh['ram_cap']; ?></td>
                            <td><?=$dh['baterai_cap']; ?></td>
                            <td><?=$dh['kamera_belakang_cap']; ?> Mp</td>
                            <td><?=$dh['kamera_depan_cap']; ?> Mp</td>
                            <td><?=$dh['display_cap']; ?></td>
                            <td><a href='#!' class="btn btn-warning btnHapus" id="<?=$dh['id_hp'];?>">Hapus</a></td>
                        </tr>
                    <?php
                        $no++; 
                        } 
                    ?>
                </table>
                  </div>
                </div>
                <!-- ANALISA MATRIX  -->
                <div class="card">
                <div class="card-header">Analisa Matrix</div>
                  <div class="card-body">
                  <table id="table_id" class="table table-bordered" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>
                                <center>No </center>
                            </th>
                            <th>
                                <center>Alternatif</center>
                            </th>
                            <th>
                                <center>C1 (Cost)</center>
                            </th>
                            <th>
                                <center>C2 (Benefit)</center>
                            </th>
                            <th>
                                <center>C3 (Benefit)</center>
                            </th>
                            <th>
                                <center>C4 (Benefit)</center>
                            </th>
                            <th>
                                <center>C5 (Benefit)</center>
                            </th>
                            <th>
                                <center>C6 (Benefit)</center>
                            </th>
                            <th>
                                <center>C7 (Benefit)</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($data['hp'] as $dh): ?> 
                            <tr>
                            <td><?=$no; ?></td>
                            <td>A<?=$no; ?></td>
                            <td><?=$dh['harga_angka']; ?></td>
                            <td><?=$dh['merek_angka']; ?></td>
                            <td><?=$dh['ram_angka']; ?></td>
                            <td><?=$dh['baterai_angka']; ?></td>
                            <td><?=$dh['kamera_belakang_angka']; ?></td>
                            <td><?=$dh['kamera_depan_angka']; ?></td>
                            <td><?=$dh['display_angka']; ?></td>
                        </tr>
                        <?php $no++; endforeach ;?>
                    </tbody>
                  </table>
                  </div>
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
    const server = "<?=HOMEBASE; ?>";
    $(document).ready(function(){
        $('.btnHapus').click(function(){
            let id = $(this).attr('id');
            $.post(server+'admin/hapusSmartphone', {'id':id}, function(data){
                let obj = JSON.parse(data);
                if(obj.status === 'sukses'){
                    pesanUmumApp('success', 'Sukses', 'Berhasil menghapus data smartphone');
                    setTimeout(function(){
                        window.location.assign(server+"admin/dataSmartphone");
                    }, 500);
                }else{
                    pesanUmumApp('error', 'Gagal', 'Gagal menghapus data smartphone');
                }
            });
        });
    });

    function pesanUmumApp(icon, title, text)
    {
    Swal.fire({
        icon : icon,
        title : title,
        text : text
    });
    }

</script>
      

<!-- End content  -->
<?php $this -> bind('admin/template/footer'); ?>