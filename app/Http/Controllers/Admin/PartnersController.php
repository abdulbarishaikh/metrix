<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Support\Facades\Validator;
use DataTables;

class PartnersController extends Controller
{
    
    public function index(Request $request){
        if($request->ajax()){
            $partner = Partner::query();
            return DataTables::eloquent($partner)
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
                        <a href="'.route('edit-partner',['id'=>$row->id]).'">
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
        return view("admin.partners.list");
    }
    public function create(){
        return view("admin.partners.add");
    }
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
                'number' => 'required|numeric',
                'organization_name' => 'required',
                'website' => 'required',
                'primary_technology' => 'required',
                'technology2' => 'required',
                'technology3' => 'required',
                'global_locaton' => 'required',
                'onsite_location1' => 'required',
                'onsite_location2' => 'required',
                'india_location1' => 'required',
                'india_location2' => 'required',
                'services' => 'required',
                'primary_services' => 'required',
                'staff_augmentation' => 'required',
                'monthly_budget' => 'required',
                'nda_document' => 'required',
                'contact1' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'designation' => 'required',
                'email_id' => 'required|email',
                'mobile_number' => 'required|numeric',
                'location' => 'required',
                'contact2' => 'required',
                'first_name2' => 'required',
                'last_name2' => 'required',
                'designation2' => 'required',
                'email_id2' => 'required|email',
                'mobile_number2' => 'required',
                'location2' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['success'=>false,
                'errors' => $validator->errors()
            ]);
        }
        try{
            $data = [
                'number'=>$request->number,
                'organization_name'=>$request->organization_name,
                'website'=>$request->website,
                'primary_technology'=>$request->primary_technology,
                'technology2'=>$request->technology2,
                'technology3'=>$request->technology3,
                'global_locaton'=>$request->global_locaton,
                'onsite_location1'=>$request->onsite_location1,
                'onsite_location2'=>$request->onsite_location2,
                'india_location1'=>$request->india_location1,
                'india_location2'=>$request->india_location2,
                'services'=>$request->services,
                'primary_services'=>$request->primary_services,
                'staff_augmentation'=>$request->staff_augmentation,
                'monthly_budget'=>$request->monthly_budget,
                'nda_document'=>$request->nda_document,
                'contact1'=>$request->contact1,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'designation'=>$request->designation,
                'email_id'=>$request->email_id,
                'mobile_number'=>$request->mobile_number,
                'location'=>$request->location,
                'contact2'=>$request->contact2,
                'first_name2'=>$request->first_name2,
                'last_name2'=>$request->last_name2,
                'designation2'=>$request->designation2,
                'email_id2'=>$request->email_id2,
                'mobile_number2'=>$request->mobile_number2,
                'location2'=>$request->location2,
                'user_id'=>auth()->user()->id
            ];
            $partner =(isset($request->id) && $request->id!='')? Partner::find($request->id) : new Partner();
            $msg =(isset($request->id) && $request->id!='')? "Partner update" : "Partner added";
            $partner->fill($data);
            $partner->save();
            return response()->json(['success'=>true,'msg'=>$msg.' successfully','url'=>route('partner-index')]);
        }catch(\Exception $e){
            \Log::error('User Controller Message: ' . $e->getMessage()." Line Number : ".$e->getLine());
            return ['success' =>false,'msg' => $e->getMessage()];
        }
    }
    public function edit($partner_id){
        $partner_data = Partner::find($partner_id);
        return view("admin.partners.add",compact('partner_data'));
    }
    public function delete($id){
        Partner::find($id)->delete();
        return response()->json([
            'success' => true,
            'msg' => 'Partner deleted successfully',
            'url' => route('partner-index')
        ]);
    }
}
