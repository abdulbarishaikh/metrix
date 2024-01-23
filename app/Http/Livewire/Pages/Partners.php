<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Partners extends Component
{
    public function render()
    {
        $section = request()->section;
        $component='';
        if($section==null)
        {
          $component='partners';
        }
        elseif($section=='why_partner')
        {
          $component='why_partner';
        }
        elseif($section=='partner_network')
        {
          $component='network';
        }
        return view('livewire.pages.partners.'.$component);
    }
}
