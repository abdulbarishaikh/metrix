<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BenchProfileController extends Controller
{
    
    public function index(){
        return view("admin.bench.list");
    }
    public function create(){
        return view("admin.bench.add");
    }
    public function store(Request $request){
        return view("admin.bench.list");
    }
    public function edit($bench_id){
        return view("admin.bench.edit");
    }
    public function update(Request $request){
        return view("admin.bench.list");
    }
}
