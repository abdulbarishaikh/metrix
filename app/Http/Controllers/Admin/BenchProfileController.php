<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\BenchProfile;

class BenchProfileController extends Controller
{
    
    public function index(Request $request){
        if($request->ajax()){
            $data = [];
            foreach($data as $row){
                $row[] = "<input type='checkbox' class='check' name='opdids[]' value='".$value->opdid."' id='' >";
                $row[] = $first_action . $value->patient_name . "</a>";
                $row[] = $this->opd_prefix . $value->opdid;
                $row[] = $value->guardian_name;
                $row[] = $status_html;
                $row[] = $value->gender;
                $row[] = $value->mobileno;
                $row[] = composeStaffNameByString($value->name, $value->surname, $value->employee_id);
                $row[] = $value->charge_name;
                // $row[] = $this->customlib->YYYYMMDDHisTodateFormat($value->last_visit, $this->time_format);
                $row[]  = $time_slape;
                $row[]  = $timer_html;
                $row[]     = $action;
                $dt_data[] = $row;

                $i++;
                $total_patient=$total_patient+1;
            }
            $count_data=[
                'total_patient'=>[],
                'waiting_ar'=>[],
                'waiting_op'=>[],
                'waiting_dr'=>[],
                'completed_ar'=>[],
                'completed_op'=>[],
                'completed_dr'=>[],
            ];
            $count_data = 10;
            $json_data = array(
                "draw"            => intval($dt_response->draw),
                "recordsTotal"    => intval($dt_response->recordsTotal),
                "recordsFiltered" => intval($dt_response->recordsFiltered),
                "data"            => $dt_data,
                'count_data'=>$count_data
            );
            echo json_encode($json_data);
            return true;
        }
        return view("admin.bench.list");
    }
    public function create(){
        return view("admin.bench.add");
    }
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'technology' => 'required',
            'technology_type' => 'required',
            'experience' => 'required',
            'exp_band' => 'required',
            'mode_delivery' => 'required',
            'current_location' => 'required',
            'preferred_location' => 'required',
            'skills' => 'required',
            'professional_summary' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['success'=>false,
                'errors' => $validator->errors()
            ]);
        }
        try{
            $data = [
                'platform_id'=>$request->technology,
                'techonology_type_id'=>$request->technology_type,
                'experience'=>$request->experience,
                'exp_band'=>$request->exp_band,
                'mode_delivery'=>$request->mode_delivery,
                'current_location'=>$request->current_location,
                'preferred_location'=>$request->preferred_location,
                'skills'=>$request->skills,
                'professional_summary'=>$request->professional_summary,
                'user_id'=>auth()->user()->id
            ];
            $bench =(isset($request->id) && $request->id!='')? BenchProfile::find($request->id) : new BenchProfile();
            $msg =(isset($request->id) && $request->id!='')? "Bench update" : "Bench added";
            $bench->fill($data);
            $bench->save();
            return response()->json(['success'=>true,'msg'=>$msg.' successfully','url'=>route('bench-index')]);
        }catch(\Exception $e){
            \Log::error('User Controller Message: ' . $e->getMessage()." Line Number : ".$e->getLine());
            return ['success' =>false,'msg' => $e->getMessage()];
        }
    }
    public function edit($bench_id){
        $bench_data = BenchProfile::find($bench_id);
        return view("admin.bench.add",compact('bench_data'));
    }
}
