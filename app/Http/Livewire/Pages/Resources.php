<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Resources extends Component
{
    public function render()
    {
        $section = request()->section;
        $component='';
        if($section==null)
        {
          $component='resources';
        }
        elseif($section=='success_stories')
        {
          $component='success_stories';
        }
        return view('livewire.pages.resources.'.$component);
    }
}
