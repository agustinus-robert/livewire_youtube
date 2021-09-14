<?php

namespace App\Http\Livewire\Episode3;

use Session;
use Livewire\Component;

class Eventlist extends Component
{
    
    public $nama;
    public $arr_masuk = [];
    
    protected $listeners = [
        'listen1' => 'ambil_nama',
        'listen2' => 'session_listenr'
    ];
    
    public function session_listenr(){
        Session::flash('berhasil-masuk','data berhasil masuk');
    }
    
    public function ambil_nama(){
        $this->arr_masuk = [
          'nama' => $this->nama  
        ];
        
        $this->emit('listen2');
    }
    
    public function render()
    {
        return view('livewire.episode3.eventlist')->extends('welcome')->section('konten');
    }
}
