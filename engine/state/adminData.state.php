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

}