@extends('admin.layout.app')

@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Requirements Add</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('requirements-index')}}">Requirements</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> 
    <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row g-4"> <!--begin::Col-->
                <div class="col-12"> <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                        <form action="{{route('save-requirements')}}" method="post" id="add-bench-form"> 
                            <input type="hidden" name="id" value="{{isset($requirement_data) && !empty($requirement_data)?$requirement_data->id:''}}">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="title" class="form-label">Title</label> 
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Entrer Title" value="{{isset($requirement_data) && !empty($requirement_data)?$requirement_data->title:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="job_desc" class="form-label">Job Descripton</label>
                                            <input type="text" class="form-control" id="job_desc" name="job_desc" placeholder="Entrer Job Description" value="{{isset($requirement_data) && !empty($requirement_data)?$requirement_data->job_desc:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="experience_band" class="form-label">Experience Band</label>
                                            <select name="experience_band" id="experience_band" class="form-select">
                                                <option value="">Select Excperience Band</option>
                                                @php
                                                    $exp_band= config('adminglobal.EXP_BAND');
                                                @endphp
                                                @if(isset($exp_band) && !empty($exp_band))
                                                    @foreach ($exp_band as $row)
                                                        <option value="{{$row}}" @if(isset($requirement_data) && !empty($requirement_data)) @selected($row==$requirement_data->experience_band)@endif>
                                                            {{ucfirst($row)}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="location" class="form-label">Location</label> 
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Entrer Location" value="{{isset($requirement_data) && !empty($requirement_data)?$requirement_data->location:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="functiona_tec" class="form-label">Functional / Technical</label>
                                            <select name="functiona_tec" id="functiona_tec" class="form-select">
                                                <option value="">Select Functional / Technical</option>
                                                @php
                                                    $functional= config('adminglobal.FUNCTIONAL');
                                                @endphp
                                                @if(isset($functional) && !empty($functional))
                                                    @foreach ($functional as $key=>$row)
                                                        <option value="{{$key}}" @if(isset($requirement_data) && !empty($requirement_data)) @selected($key==$requirement_data->functiona_tec)@endif>
                                                            {{ucfirst($row)}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="monthly_budget" class="form-label">Monthly Budget</label> 
                                            <input type="number" class="form-control" id="monthly_budget" name="monthly_budget" placeholder="Entrer Current Location" value="{{isset($requirement_data) && !empty($requirement_data)?$requirement_data->monthly_budget:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="type_oppurtunity" class="form-label">Type of Opportunity</label>
                                            <select name="type_oppurtunity" id="type_oppurtunity" class="form-select">
                                                <option value="">Select Type of Opportunity</option>
                                                @php
                                                    $opportunity= config('adminglobal.OPPORTUNITY');
                                                @endphp
                                                @if(isset($opportunity) && !empty($opportunity))
                                                    @foreach ($opportunity as $key=>$row)
                                                        <option value="{{$key}}" @if(isset($requirement_data) && !empty($requirement_data)) @selected($key==$requirement_data->type_oppurtunity)@endif>
                                                            {{ucfirst($row)}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="duration_month" class="form-label">Duration in Months</label> 
                                            <input type="number" class="form-control" id="duration_month" name="duration_month" placeholder="Entrer Current Location" value="{{isset($requirement_data) && !empty($requirement_data)?$requirement_data->duration_month:''}}" > 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="remark" class="form-label">Remarks</label> 
                                            <input type="text" class="form-control" id="remark" name="remark" placeholder="Entrer Remark" value="{{isset($requirement_data) && !empty($requirement_data)?$requirement_data->remark:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary float-end">Submit</button>

                                    </div>
                                </div>
                            </div> 
                            <!--end::Body--> 
                        </form> <!--end::Form-->
                    </div> <!--end::Quick Example-->
                </div> <!--end::Col--> 
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
@endsection
@section('js')
<script>
    $(function(){
        $('#add-bench-form').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            let res = ajaxForm(formData);
            console.log("res", res);
            $('.err').remove();
            if (res.success) {
                $('#toastDefault').find('#msg').text(res.msg);
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance('#toastDefault');
                toastBootstrap.show();
                setTimeout(() => {
                    window.location.href = res.url;
                }, 3000);
            } else {
                
                if(!res.success) {
                  let i=1;
                  $.each(res.errors, function (index,item){
                      let inputField = $('#' + index);
                      if(i == 1) {
                        inputField.focus();
                      }
                      inputField.after(`<p class="text-danger text-start err mb-0 mt-1" >${item}</p>`);
                      i++;
                  });
                }
            }
        });
    });
</script>
@endsection