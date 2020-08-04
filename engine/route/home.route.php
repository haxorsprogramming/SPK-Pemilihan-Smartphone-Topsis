<?php

class home extends Route{

    private $sn = 'homeData';
    private $su = 'utilityData';

    public function index()
    {   
        $this -> bind('/home/home');   
    }

}