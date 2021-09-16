<?php

namespace App\Http\Livewire\Episode5;

use Livewire\Component;

class Dirych extends Component
{
    public $nama;
    public $umur;
    public $alamat;
    
    public function render()
    {
        return view('livewire.episode5.dirych')->extends('welcome')->section('konten');
    }
}
