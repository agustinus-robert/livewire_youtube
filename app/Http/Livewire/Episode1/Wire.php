<?php

namespace App\Http\Livewire\Episode1;

use Livewire\Component;

class Wire extends Component
{
    public $nama;
    
    public function render()
    {
        return view('livewire.episode1.wire')->extends('welcome')->section('konten');
    }
}
