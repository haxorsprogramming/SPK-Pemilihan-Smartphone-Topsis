<?php

class admin extends Route{

    private $sn = 'adminData';

    public function index()
    {   
        $this -> bind('/admin/login');   
    }

    public function prosesLogin()
    {
        $username = $this -> inp('username');
        $password = $this -> inp('password');
        $passHash = md5($password);
        $cekUser = $this -> state($this -> sn) -> cekUser($username, $passHash);
        if($cekUser > 0){
            $data['status'] = 'sukses';
        }else{
            $data['status'] = 'error';
        }
       
        $this -> toJson($data);
    }

    public function dasbor()
    {
        $this -> bind('/admin/dasbor');
    }

    public function dataKriteria()
    {
        $data['kriteria'] = $this -> state($this -> sn) ->  getDataKriteria();
        $this -> bind('/admin/dataKriteria', $data);
    }

    public function dataSmartphone()
    {
        $data['hp'] = $this -> state($this -> sn) -> getDataHp();
        $this -> bind('/admin/dataSmartphone', $data);
    }

    public function tambahSmartphone()
    {
        $this -> bind('/admin/tambahSmartphone');
    }

    public function prosesTambahSmartphone()
    {
        // {'nama':nama, 'harga':harga, 'merek':merek, 'ram':ram, 'baterai':baterai, 'kameraBelakang':kameraBelakang, 'kameraDepan':kameraDepan, 'display':display}
        $nama = $this -> inp('nama');
        $harga = $this -> inp('harga');
        $merek = $this -> inp('merek');
        $ram = $this -> inp('ram');
        $baterai = $this -> inp('baterai');
        $kameraBelakang = $this -> inp('kameraBelakang');
        $kameraDepan = $this -> inp('kameraDepan');
        $display = $this -> inp('display');
        //cek nama dulu 

        $this -> state($this -> sn) -> tambahSmartphone($nama, $harga, $merek, $ram, $baterai, $kameraBelakang, $kameraDepan, $display);
        $data['status'] = 'sukses';
        $this -> toJson($data);
    }

    public function hapusSmartphone()
    {
        $id = $this -> inp('id');
        $this -> state($this -> sn) -> hapusSmartphone($id);
        $data['status'] = 'sukses';
        $this -> toJson($data);
    }

    public function logout()
    {
        $this -> goto('login');
    }

}