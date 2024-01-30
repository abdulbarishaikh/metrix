<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Requirements;
use Illuminate\Support\Facades\Validator;
use DataTables;

class RequirementsController extends Controller
{
    
    public function index(Request $request){
        if($request->ajax()){
            $requirementss = Requirements::query();
            return DataTables::eloquent($requirementss)
                ->addIndexColumn(function($query){
                    return $query->orderByDesc('id');
                })
                ->addColumn('platforms.title', function($row){
                    return $row->platforms?$row->platforms->title:'N/A';
                })
                ->addColumn('technology.title', function($row){
                    return $row->technology?$row->technology->title:'N/A';
                })
                ->addColumn('status', function($row){
                    $html = '';
                    if($row->status==1){
                        $html.='<span class="badge text-bg-success">Active</span>';
                    }else{
                        $html.='<span class="badge text-bg-warning">Inactive</span>';
                    }
                    return $html;
                })
                ->addColumn('action', function($row){
                    
                    $actionBtn ='<div class="btn-group" role="group" >';
                    $actionBtn .= '
                        <button data-id="'.$row->id.'" type="button" class="delete btn btn-danger btn-sm">
                            <i class="bi bi-trash" type="button" title="Delete"></i>
                        </button>';
                    $actionBtn .='
                        <a href="'.route('edit-bench',['id'=>$row->id]).'">
                            <button class="btn btn-success btn-sm mx-2">
                                <span class="bi bi-pencil" aria-hidden="true" type="button" title="Edit"></span>
                            </button>
                        </a>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['status','action'])
                ->order(function ($query) use ($request) {
                    $query->orderByDesc('id');
                    return $query;
                })
                ->filter(function ($query) use($request){
                    if($request->draw >1 ){
                        $columns = $request->columns;
                        $searchVal = $request->search['value'];
                        if($searchVal != '') {
                            $query->where(function($query)use($searchVal){
                                $query->where('experience','like','%'.$searchVal.'%')
                                ->orWhere('exp_band','like','%'.$searchVal.'%')
                                ->orWhere('mode_delivery','like','%'.$searchVal.'%')
                                ->orWhere('current_location','like','%'.$searchVal.'%')
                                ->orWhere('preferred_location','like','%'.$searchVal.'%')
                                ->orWhere('skills','like','%'.$searchVal.'%')
                                ->orWhere('professional_summary','like','%'.$searchVal.'%');
                                $query->orWhereHas('platforms',function($query)use($searchVal){
                                    $query->where('title','like','%'.$searchVal.'%');
                                });
                                $query->orWhereHas('technology',function($query)use($searchVal){
                                    $query->where('title','like','%'.$searchVal.'%');
                                });
                            });
                        }
                    }
                    return $query;

                    /* if (request()->has('email')) {
                        $query->where('email', 'like', "%" . request('email') . "%");
                    } */
                }, true)
            ->make(true);
        }
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
            $requirements =(isset($request->id) && $request->id!='')? Requirements::find($request->id) : new Requirements();
            $msg =(isset($request->id) && $request->id!='')? "Requirement update" : "Requirement added";
            $requirements->fill($data);
            $requirements->save();
            return response()->json(['success'=>true,'msg'=>$msg.' successfully','url'=>route('requirements-index')]);
        }catch(\Exception $e){
            \Log::error('User Controller Message: ' . $e->getMessage()." Line Number : ".$e->getLine());
            return ['success' =>false,'msg' => $e->getMessage()];
        }
    }
    public function edit($requirement_id){
        $requirement_data = Requirements::find($requirement_id);
        return view("admin.requirements.add",compact('requirement_data'));
    }
    public function delete($id){
        Requirements::find($id)->delete();
        return response()->json([
            'success' => true,
            'msg' => 'Bench deleted successfully',
            'url' => route('requirements-index')
        ]);
    }
}
