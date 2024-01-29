@extends('admin.layout.app')

@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Bench {{isset($bench_data) && !empty($bench_data)?'Edit':'Add'}}</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('bench-index')}}">Bench</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{isset($bench_data) && !empty($bench_data)?'Edit':'Add'}}
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
                        <form action="{{route('save-bench')}}" method="post" id="add-bench-form"> 
                            <input type="hidden" name="id" value="{{isset($bench_data) && !empty($bench_data)?$bench_data->id:''}}">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="technology" class="form-label">Technology</label>
                                            <select name="technology" id="technology" class="form-select">
                                                <option value="">Select Technology</option>
                                                @php
                                                    $platforms = platforms();
                                                @endphp
                                                @if(isset($platforms) && !empty($platforms))
                                                    @forelse ($platforms as $row)
                                                        <option value="{{$row->id}}" @if(isset($bench_data) && !empty($bench_data)) @selected($row->id==$bench_data->platform_id)@endif>
                                                            {{ucfirst($row->title)}}
                                                        </option>
                                                    @empty
                                                        
                                                    @endforelse
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="technology_type" class="form-label">Technology Type</label>
                                            <select name="technology_type" id="technology_type" class="form-select">
                                                <option value="">Select Technology Type</option>
                                                @php
                                                    $technologies = technologies();
                                                @endphp
                                                @if(isset($technologies) && !empty($technologies))
                                                    @foreach ($technologies as $row)
                                                        <option value="{{$row->id}}" @if(isset($bench_data) && !empty($bench_data)) @selected($row->id==$bench_data->techonology_type_id)@endif>
                                                            {{ucfirst($row->title)}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="experience" class="form-label">Experience</label>
                                            <select name="experience" id="experience" class="form-select">
                                                <option value="">Select Excperience</option>
                                                @php
                                                    $experience	= config('adminglobal.EXPERIENCE');
                                                @endphp
                                                @if(isset($experience) && !empty($experience))
                                                    @foreach ($experience as $row)
                                                        <option value="{{$row}}" @if(isset($bench_data) && !empty($bench_data)) @selected($row==$bench_data->experience)@endif>
                                                            {{ucfirst($row)}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="exp_band" class="form-label">Experience Band</label>
                                            <select name="exp_band" id="exp_band" class="form-select">
                                                <option value="">Select Excperience Band</option>
                                                @php
                                                    $exp_band= config('adminglobal.EXP_BAND');
                                                @endphp
                                                @if(isset($exp_band) && !empty($exp_band))
                                                    @foreach ($exp_band as $row)
                                                        <option value="{{$row}}" @if(isset($bench_data) && !empty($bench_data)) @selected($row==$bench_data->exp_band)@endif>
                                                            {{ucfirst($row)}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="mode_delivery" class="form-label">Mode Of Delivery</label>
                                            <select name="mode_delivery" id="mode_delivery" class="form-select">
                                                <option value="">Select Delivery Mode</option>
                                                @php
                                                    $mode_delivery= config('adminglobal.MODE_DELIVERY');
                                                @endphp
                                                @if(isset($mode_delivery) && !empty($mode_delivery))
                                                    @foreach ($mode_delivery as $row)
                                                        <option value="{{$row}}" @if(isset($bench_data) && !empty($bench_data)) @selected($row==$bench_data->mode_delivery)@endif>
                                                            {{ucfirst($row)}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="current_location" class="form-label">Current Location</label> 
                                            <input type="text" class="form-control" id="current_location" name="current_location" placeholder="Entrer Current Location" value="{{isset($bench_data) && !empty($bench_data)?$bench_data->current_location:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="preferred_location" class="form-label">Preferred Location</label> 
                                            <input type="text" class="form-control" id="preferred_location" name="preferred_location" placeholder="Entrer Preferred Location" value="{{isset($bench_data) && !empty($bench_data)?$bench_data->preferred_location:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="skills" class="form-label">Skills</label> 
                                            <input type="text" class="form-control" id="skills" name="skills" placeholder="Entrer Skills" value="{{isset($bench_data) && !empty($bench_data)?$bench_data->skills:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="professional_summary" class="form-label">Professional Summary</label> 
                                            <input type="text" class="form-control" id="professional_summary" name="professional_summary" placeholder="Entrer Professional Summary" value="{{isset($bench_data) && !empty($bench_data)?$bench_data->professional_summary:''}}"> 
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
            if (res.success) {
                $('#toastDefault').find('#msg').text(res.msg);
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance('#toastDefault');
                toastBootstrap.show();
                setTimeout(() => {
                    window.location.href = res.url;
                }, 3000);
            } else {
                $('.err').remove();
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
