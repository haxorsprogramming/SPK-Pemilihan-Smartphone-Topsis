<?php

class home extends Route{

    private $sn = 'homeData';

    public function index()
    {   
        $this -> bind('home/home');   
    }

    public function rekomendasi()
    {
        $this -> bind('home/rekomendasi');   
    }

    public function listSmartphone()
    {
        $data['hp'] = $this -> state($this -> sn) -> getDataHp();
        $this -> bind('home/listSmartphone', $data);  
    }

    public function prosesPerhitungan()
    {
        $data['nama'] = $this -> inp('txtNama');
        $data['harga'] = $this -> inp('txtHarga');
        $data['merek'] = $this -> inp('txtMerek');
        $data['ram'] = $this -> inp('txtRam');
        $data['baterai'] = $this -> inp('txtBaterai');
        $data['kameraBelakang'] = $this -> inp('txtKameraBelakang');
        $data['kameraDepan'] = $this -> inp('txtKameraDepan');
        $data['display'] = $this -> inp('txtDisplay');
        $data['hp'] = $this -> state($this -> sn) -> getDataHp();
        $this -> bind('home/prosesPerhitungan', $data);
    }

}