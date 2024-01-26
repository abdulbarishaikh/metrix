<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequirementsController extends Controller
{
    
    public function index(){
        return view("admin.requirements.list");
    }
    public function create(){
        return view("admin.requirements.add");
    }
    public function store(Request $request){
        return view("admin.requirements.list");
    }
    public function edit($bench_id){
        return view("admin.requirements.edit");
    }
    public function update(Request $request){
        return view("admin.requirements.list");
    }
}
