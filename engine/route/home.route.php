<?php

class home extends Route{

    private $sn = 'homeData';

    public function index()
    {   
        $this -> bind('/home/home');   
    }

    public function rekomendasi()
    {
        $this -> bind('/home/rekomendasi');   
    }

    public function listSmartphone()
    {
        $data['hp'] = $this -> state($this -> sn) -> getDataHp();
        $this -> bind('/home/listSmartphone', $data);  
    }

}