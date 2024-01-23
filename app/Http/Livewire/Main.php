<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $first_name='sss';
    public $last_name='';
    public $organization_name='';
    public $email='';
    public $services='';
    public $message='';
    public function send_contact(){


    }
    public function render()
    {
        return view('livewire.main')->layout('layouts.app');
    }
}
