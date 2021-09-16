<?php

namespace App\Http\Livewire\Episode4;

use Livewire\Component;

class Valid extends Component
{
    public $nama;
    
    public function updated($propertyName){
        
        $this->validateOnly($propertyName, [

            'nama' => ['required', function ($attribute, $value, $fail) use ($propertyName) {
                for($i = 0; $i < strlen($value); $i++){
                    if(is_numeric($value[$i])){
                        $fail('tidak boleh ada angka');
                    } else if(strlen($value) < 6){
                        $fail('Karakter tidak boleh kurang dari 6');
                    }
                }       
            }]
        ]);
    }
    
    public function render()
    {
        return view('livewire.episode4.valid')->extends('welcome')->section('konten');
    }
}
