<?php 

class adminData{
   
    private $st;

    public function __construct()
    {
        $this -> st = new state;
    }

    public function cekUser($username, $password)
    {
        $this -> st -> query("SELECT id FROM tbl_user WHERE username='$username' AND password='$password';");
        return $this -> st -> numRow();
    }

    public function getDataKriteria()
    {
        $this -> st -> query("SELECT * FROm tbl_kriteria;");
        return $this -> st -> queryAll();
    }

    public function getDataHp()
    {
        $this -> st -> query("SELECT * FROM data_hp;");
        return $this -> st -> queryAll();
    }

    public function tambahSmartphone($nama, $harga, $merek, $ram, $baterai, $kameraBelakang, $kameraDepan, $display)
    {
        if($harga < 1499999){
			$harga_angka = 1;
		} 
		elseif($harga >= 1500000 && $harga <= 1999999){
			$harga_angka = 2;
		}
		elseif($harga > 20000000 && $harga <= 2499999){
			$harga_angka = 3;
		}
		elseif($harga > 250000 && $harga <= 2999999){
			$harga_angka = 4;
		}
		elseif($harga > 3000000){
			$harga_angka = 5;
        }

        if($merek === 'Samsung'){
            $merek_angka = '5';
        }elseif($merek === 'Xiaomi'){
            $merek_angka = '5';
        }elseif($merek === 'Oppo'){
            $merek_angka = '3';
        }elseif($merek === 'Huawei'){
            $merek_angka = '3';
        }elseif($merek === 'Realme'){
            $merek_angka = '3';
        }elseif($merek === 'Asus'){
            $merek_angka = '4';
        }elseif($merek === 'Vivo'){
            $merek_angka = '4';
        }else{
            $merek_angka = '0';
        }

        if($ram === '> 4/64'){
            $ram_angka = '5';
        }elseif($ram === '3/64'){
            $ram_angka = '4';
        }elseif($ram === '3/32'){
            $ram_angka = '3';
        }elseif($ram === '2/32'){
            $ram_angka = '2';
        }elseif($ram === '2/16'){
            $ram_angka = '1';
        }else{
            $ram_angka = '0';
        }
        
        if($baterai > 5000){
            $baterai_angka = '5';
        }elseif($baterai >= 4500 && $baterai <= 4999){
            $baterai_angka = '4';
        }elseif($baterai >= 4000 && $baterai <= 4499){
            $baterai_angka = '3';
        }elseif($baterai >= 3500 && $baterai <= 3999){
            $baterai_angka = '2';
        }elseif($baterai >= 0 && $baterai <= 3499){
            $baterai_angka = '1';
        }

        if($kameraBelakang > 25){
            $kameraBelakang_angka = '5';
        }elseif($kameraBelakang >= 21 && $kameraBelakang <= 25){
            $kameraBelakang_angka = '4';
        }elseif($kameraBelakang >= 14 && $kameraBelakang <= 20){
            $kameraBelakang_angka = '3';
        }elseif($kameraBelakang >= 9 && $kameraBelakang <= 13){
            $kameraBelakang_angka = '2';
        }elseif($kameraBelakang >= 0 && $kameraBelakang <= 8){
            $kameraBelakang_angka = '1';
        }

        if($kameraDepan > 25){
            $kameraDepan_angka = '5';
        }elseif($kameraDepan >= 21 && $kameraDepan <= 25){
            $kameraDepan_angka = '4';
        }elseif($kameraDepan >= 14 && $kameraDepan <= 20){
            $kameraDepan_angka = '3';
        }elseif($kameraDepan >= 9 && $kameraDepan <= 13){
            $kameraDepan_angka = '2';
        }elseif($kameraDepan >= 0 && $kameraDepan <= 8){
            $kameraDepan_angka = '1';
        }

        if($display === 'Sangat Menarik'){
            $display_angka = '5';
        }elseif($display === 'Cukup Menarik'){
            $display_angka = '4';
        }elseif($display === 'Menarik'){
            $display_angka = '3';
        }elseif($display === 'Lumayan Menarik'){
            $display_angka = '2';
        }elseif($display === 'Tidak Menarik'){
            $display_angka = '1';
        }

        $query = "INSERT INTO data_hp VALUES(null, '$nama','$harga','$harga_angka','$merek','$merek_angka','$ram','$ram_angka','$baterai','$baterai_angka','$kameraBelakang','$kameraBelakang_angka','$kameraDepan','$kameraDepan_angka','$display','$display_angka');";
        $this -> st -> query($query);
        $this -> st -> queryRun();
    }

    public function hapusSmartphone($id)
    {
        $query = "DELETE FROM data_hp WHERE id_hp='$id';";
        $this -> st -> query($query);
        $this -> st -> queryRun();
    }


}