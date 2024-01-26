<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnersController extends Controller
{
    
    public function index(){
        return view("admin.partners.list");
    }
    public function create(){
        return view("admin.partners.add");
    }
    public function store(Request $request){
        return view("admin.partners.list");
    }
    public function edit($bench_id){
        return view("admin.partners.edit");
    }
    public function update(Request $request){
        return view("admin.partners.list");
    }
}
