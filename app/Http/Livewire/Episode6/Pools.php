<?php

namespace App\Http\Livewire\Episode6;

use App\dataD as tutrs;
use Livewire\Component;

class Pools extends Component
{
    public $nama;
    public $umur;
    public $tampil_data;
    
    public function mount(){
        $this->tampil_data = tutrs::select('*')->get()->toArray();
    }
    
    public function meth(){
        $this->tampil_data = tutrs::select('*')->get()->toArray();
    }
    public function masuk_data(){
        
        $arr = [
          'nama' => $this->nama,
          'umur' => $this->umur
        ];
        
        tutrs::insert($arr);
    }
    
    public function render()
    {
        return view('livewire.episode6.pools')->extends('welcome')->section('konten');
    }
}
