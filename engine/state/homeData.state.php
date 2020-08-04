<?php 

class homeData{
   
    private $st;

    public function __construct()
    {
        $this -> st = new state;
    }

    public function getDataHp()
    {
        $this -> st -> query("SELECT * FROM data_hp;");
        return $this -> st -> queryAll();
    }

}