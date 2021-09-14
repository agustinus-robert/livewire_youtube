<?php

namespace App\Http\Livewire\Episode2;

use Livewire\Component;

class Actions extends Component
{
    public $nama;
    public $jurusan;
    public $data_mahasiswa = [];
    
    public function method_saya(){
      $this->data_mahasiswa = [
        'nama' => $this->nama,
        'jurusan' => $this->jurusan
      ];
      
      return $this->data_mahasiswa;
    }
    
    public function cek_jurusan(){
        return $this->jurusan;
    }
    
    public function render()
    {
        return view('livewire.episode2.actions')->extends('welcome')->section('konten');
    }
}
