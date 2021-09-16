<?php

namespace App;

trait Data
{
    public $nama;
    public $jurusan;
    
    public function arrays(){
        $this->nama = "abc";
        $this->jurusan = "defg";
    }
}
