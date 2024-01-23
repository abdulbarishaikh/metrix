<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Aboutus extends Component
{
    public function render()
    {
        $section = request()->section;
        $component='';
        if($section==null)
        {
          $component='aboutus';
        }
        elseif($section=='team')
        {
          $component='team';
        }
        elseif($section=='why_matrixone')
        {
          $component='matrix';            
        }
        return view('livewire.pages.about.'.$component)->layout('layouts.app');
    }
}
