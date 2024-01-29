<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Requirements;
use Illuminate\Support\Facades\Validator;

class RequirementsController extends Controller
{
    
    public function index(){
        return view("admin.requirements.list");
    }
    public function create(){
        return view("admin.requirements.add");
    }
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'job_desc' => 'required',
            'experience_band' => 'required',
            'location' => 'required',
            'functiona_tec' => 'required',
            'monthly_budget' => 'required|numeric',
            'type_oppurtunity' => 'required',
            'duration_month' => 'required|numeric',
            'remark' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['success'=>false,
                'errors' => $validator->errors()
            ]);
        }
        try{
            $data = [
                'title'=>$request->title,
                'job_desc'=>$request->job_desc,
                'experience_band'=>$request->experience_band,
                'location'=>$request->location,
                'functiona_tec'=>$request->functiona_tec,
                'monthly_budget'=>$request->monthly_budget,
                'type_oppurtunity'=>$request->type_oppurtunity,
                'duration_month'=>$request->duration_month,
                'remark'=>$request->remark,
                'user_id'=>auth()->user()->id
            ];
            $bench =(isset($request->id) && $request->id!='')? Requirements::find($request->id) : new Requirements();
            $msg =(isset($request->id) && $request->id!='')? "Requirement update" : "Requirement added";
            $bench->fill($data);
            $bench->save();
            return response()->json(['success'=>true,'msg'=>$msg.' successfully','url'=>route('requirements-index')]);
        }catch(\Exception $e){
            \Log::error('User Controller Message: ' . $e->getMessage()." Line Number : ".$e->getLine());
            return ['success' =>false,'msg' => $e->getMessage()];
        }
    }
    public function edit($bench_id){
        $requirement_data = Requirements::find($bench_id);
        return view("admin.requirements.add",compact('requirement_data'));
    }
}
