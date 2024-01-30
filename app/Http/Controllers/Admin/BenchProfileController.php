<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\BenchProfile;
use DataTables;

class BenchProfileController extends Controller
{
    
    public function index(Request $request){
        if($request->ajax()){
            $benchs = BenchProfile::query()->with(['platforms','technology']);
            return DataTables::eloquent($benchs)
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
    public function delete($id){
        BenchProfile::find($id)->delete();
        return response()->json([
            'success' => true,
            'msg' => 'Bench deleted successfully',
            'url' => route('bench-index')
        ]);
    }
}
