<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Services extends Component
{
    public function render()
    {
        $section = request()->section;
        $component='';
        if($section==null)
        {
          $component='aboutus';
        }
        elseif($section=='bench')
        {
          $component='bench';
        }
        elseif($section=='why_matrixone')
        {
          $component='matrix';            
        }
        elseif($section=='service_management')
        {
          $component='service_management';            
        }
        elseif($section=='pmo_service')
        {
          $component='pmo';             
        }
        elseif($section=='product')
        {
          $component='products';
        }
        
        return view('livewire.pages.services.'.$component)->layout('layouts.app');
    }
}
