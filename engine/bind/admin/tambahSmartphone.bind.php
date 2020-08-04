<?php $this -> bind('admin/template/header'); ?>

<!-- Content -->

<main class="main" style="margin-top: 30px;">
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Tambah Data Smartphone</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="company">Nama</label>
                                <input type="text" class="form-control" id='txtNama'>
                            </div>
                            <div class="form-group">
                                <label for="company">Harga</label>
                                <input type="number" class="form-control" id='txtHarga'>
                            </div>
                            <div class="form-group">
                                <label for="company">Merek</label>
                                <select class="form-control" id='txtMerek'>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Xiaomi">Xiaomi</option>
                                    <option value="Oppo">Oppo</option>
                                    <option value="Huawei">Huawie</option>
                                    <option value="Realme">Realme</option>
                                    <option value="Asus">Asus</option>
                                    <option value="Vivo">Vivo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company">RAM/ROM</label>
                                <select class="form-control" id='txtRam'>
                                    <option value="> 4/64">> 4 /64</option>
                                    <option value="3/64">3/64</option>
                                    <option value="3/32">3/32</option>
                                    <option value="2/32">2/32</option>
                                    <option value="2/16">2/16</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company">Baterai (mAh)</label>
                                <input type="number" id='txtBaterai' class="form-control">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company">Kamera Belakang</label>
                                <select class="form-control" id='txtKameraBelakang'>
                                    <option value="25">25 MP</option>
                                    <option value="24">24 MP</option>
                                    <option value="23">23 MP</option>
                                    <option value="22">22 MP</option>
                                    <option value="21">21 MP</option>
                                    <option value="20P">20 MP</option>
                                    <option value="19">19 MP</option>
                                    <option value="18">18 MP</option>
                                    <option value="17">17 MP</option>
                                    <option value="16">16 MP</option>
                                    <option value="15">15 MP</option>
                                    <option value="14">14 MP</option>
                                    <option value="13">13 MP</option>
                                    <option value="12">12 MP</option>
                                    <option value="11">11 MP</option>
                                    <option value="10">10 MP</option>
                                    <option value="9">9 MP</option>
                                    <option value="8">8 MP</option>
                                    <option value="7">7 MP</option>
                                    <option value="6">6 MP</option>
                                    <option value="5">5 MP</option>
                                    <option value="4">4 MP</option>
                                    <option value="3">3 MP</option>
                                    <option value="2">2 MP</option>
                                    <option value="1">1 MP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company">Kamera Depan</label>
                                <select class="form-control" id='txtKameraDepan'> 
                                <option value="25 MP">25 MP</option>
                                <option value="25">25 MP</option>
                                    <option value="24">24 MP</option>
                                    <option value="23">23 MP</option>
                                    <option value="22">22 MP</option>
                                    <option value="21">21 MP</option>
                                    <option value="20P">20 MP</option>
                                    <option value="19">19 MP</option>
                                    <option value="18">18 MP</option>
                                    <option value="17">17 MP</option>
                                    <option value="16">16 MP</option>
                                    <option value="15">15 MP</option>
                                    <option value="14">14 MP</option>
                                    <option value="13">13 MP</option>
                                    <option value="12">12 MP</option>
                                    <option value="11">11 MP</option>
                                    <option value="10">10 MP</option>
                                    <option value="9">9 MP</option>
                                    <option value="8">8 MP</option>
                                    <option value="7">7 MP</option>
                                    <option value="6">6 MP</option>
                                    <option value="5">5 MP</option>
                                    <option value="4">4 MP</option>
                                    <option value="3">3 MP</option>
                                    <option value="2">2 MP</option>
                                    <option value="1">1 MP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="company">Display</label>
                                <select class="form-control" id='txtDisplay'>
                                    <option value="Sangat Menarik">Sangat Menarik</option>
                                    <option value="Cukup Menarik">Cukup Menarik</option>
                                    <option value="Menarik">Menarik</option>
                                    <option value="Lumayan Menarik">Lumayan Menarik</option>
                                    <option value="Tidak Menarik">Tidak Menarik</option>
                                </select>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-sm-6">
                                    <a href='#!' class="btn btn-primary btn-lg btn-block" id='btnSimpan'>Simpan</a>
                                </div>
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
        $('#btnSimpan').click(function(){
            let nama = document.getElementById('txtNama').value;
            let harga = document.getElementById('txtHarga').value;
            let merek = document.getElementById('txtMerek').value;
            let ram = document.getElementById('txtRam').value;
            let baterai = document.getElementById('txtBaterai').value;
            let kameraBelakang = document.getElementById('txtKameraBelakang').value;
            let kameraDepan = document.getElementById('txtKameraDepan').value;
            let display = document.getElementById('txtDisplay').value;
            let dataSend = {'nama':nama, 'harga':harga, 'merek':merek, 'ram':ram, 'baterai':baterai, 'kameraBelakang':kameraBelakang, 'kameraDepan':kameraDepan, 'display':display}
            
            if(nama === '' || harga === '' || parseInt(harga) <= 0 || parseInt(baterai) <= 0){
                pesanUmumApp('warning', 'Isi field!!', 'Harap isi field!!!');
            }else{
                $.post(server+'admin/prosesTambahSmartphone', dataSend, function(data){
                let obj = JSON.parse(data);
                if(obj.status === 'sukses'){
                    pesanUmumApp('success', 'Sukses', 'Berhasil menambahkan data smartphone...');
                    setTimeout(function(){
                        window.location.assign(server+"admin/dataSmartphone");
                    }, 500);
                }else{
                    pesanUmumApp('error', 'Gagal!!', 'Gagal menambahkan data smartphone...');
                }
            });
            }
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