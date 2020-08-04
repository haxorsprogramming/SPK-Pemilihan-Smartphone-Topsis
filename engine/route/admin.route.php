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

    public function logout()
    {
        $this -> goto('login');
    }

}