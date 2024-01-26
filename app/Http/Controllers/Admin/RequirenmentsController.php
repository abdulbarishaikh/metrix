<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequirenmentsController extends Controller
{
    
    public function index(){
        return view("admin.requirenments.list");
    }
    public function create(){
        return view("admin.requirenments.add");
    }
    public function store(Request $request){
        return view("admin.requirenments.list");
    }
    public function edit($bench_id){
        return view("admin.requirenments.edit");
    }
    public function update(Request $request){
        return view("admin.requirenments.list");
    }
}
