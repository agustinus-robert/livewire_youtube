<?php

namespace App\Http\Livewire\Episode2;

use Livewire\Component;

class Actions extends Component
{
    public function render()
    {
        return view('livewire.episode2.actions')->extends('welcome')->section('konten');
    }
}
