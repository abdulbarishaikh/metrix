@extends('admin.layout.app')

@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Partner Add</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('partner-index')}}">Partner</a>
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
                        <form action="{{route('save-partner')}}" method="post" id="add-partner-form"> 
                            <input type="hidden" name="id" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->id:''}}">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="number" class="form-label">Number</label> 
                                            <input type="number" class="form-control" id="number" name="number" placeholder="Entrer Number" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->number:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="organization_name" class="form-label">Organization Name</label>
                                            <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Entrer Organization Name" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->organization_name:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="website" class="form-label">Website</label>
                                            <input type="url" class="form-control" id="website" name="website" placeholder="Entrer Website" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->website:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="primary_technology" class="form-label">Primary Technology</label>
                                            <input type="text" class="form-control" id="primary_technology" name="primary_technology" placeholder="Entrer Primary Technology" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->primary_technology:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="technology2" class="form-label">Technology 2</label>
                                            <input type="text" class="form-control" id="technology2" name="technology2" placeholder="Entrer Technology 2" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->technology2:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="technology3" class="form-label">Technology 3</label>
                                            <input type="text" class="form-control" id="technology3" name="technology3" placeholder="Entrer Technology 3" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->technology3:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="global_locaton" class="form-label">Global Locaton</label>
                                            <select name="global_locaton" id="global_locaton" class="form-select">
                                                <option value="">Select Global Locaton</option>
                                                @php
                                                    $global_locaton = config('adminglobal.GLOBAL_LOCATION');
                                                @endphp
                                                @if(isset($global_locaton) && !empty($global_locaton))
                                                    @foreach ($global_locaton as $key=>$row)
                                                        <option value="{{$key}}" @if(isset($partner_data) && !empty($partner_data)) @selected($key==$partner_data->global_locaton)@endif>{{$row}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="onsite_location1" class="form-label">Onsite Location - 1</label> 
                                            <input type="text" class="form-control" id="onsite_location1" name="onsite_location1" placeholder="Entrer Onsite Location - 1" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->onsite_location1:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="onsite_location2" class="form-label">Onsite Location - 2</label> 
                                            <input type="text" class="form-control" id="onsite_location2" name="onsite_location2" placeholder="Entrer Onsite Location - 2"  value="{{isset($partner_data) && !empty($partner_data)?$partner_data->onsite_location2:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="india_location1" class="form-label">India Location - 1</label> 
                                            <input type="text" class="form-control" id="india_location1" name="india_location1" placeholder="Entrer India Location - 1" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->india_location1:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="india_location2" class="form-label">India Location - 2</label> 
                                            <input type="text" class="form-control" id="india_location2" name="india_location2" placeholder="Entrer India Location - 2" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->india_location2:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="services" class="form-label">Services</label> 
                                            <input type="text" class="form-control" id="services" name="services" placeholder="Entrer Services" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->services:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="primary_services" class="form-label">Primary Services</label> 
                                            <input type="text" class="form-control" id="primary_services" name="primary_services" placeholder="Entrer Primary Services" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->primary_services:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="staff_augmentation" class="form-label">Staff Augmentation </label>
                                            <select name="staff_augmentation" id="staff_augmentation" class="form-select">
                                                <option value="">Select Functional / Technical</option>
                                                @php
                                                    $staff_augmentation = config('adminglobal.STAFF_AUGMENTATION');
                                                @endphp
                                                @if(isset($staff_augmentation) && !empty($staff_augmentation))
                                                    @foreach ($staff_augmentation as $row)
                                                        <option value="{{$row}}" @if(isset($partner_data) && !empty($partner_data)) @selected($row==$partner_data->staff_augmentation)@endif>
                                                            {{$row}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="monthly_budget" class="form-label">Monthly Budget</label> 
                                            <input type="number" class="form-control" id="monthly_budget" name="monthly_budget" placeholder="Entrer Current Location" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->monthly_budget:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="nda_document " class="form-label">NDA Document</label>
                                            <select name="nda_document" id="nda_document" class="form-select">
                                                <option value="">Select NDA Document</option>
                                                @php
                                                    $nda_document = config('adminglobal.NDA_DOCUMENT');
                                                @endphp
                                                @if(isset($nda_document) && !empty($nda_document))
                                                    @foreach ($nda_document as $key=>$row)
                                                        <option value="{{$key}}" @if(isset($partner_data) && !empty($partner_data)) @selected($key==$partner_data->nda_document)@endif>
                                                            {{$row}}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="contact1" class="form-label">Contact 1</label> 
                                            <input type="number" class="form-control" id="contact1" name="contact1" placeholder="Entrer Contact 1" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->contact1:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="first_name" class="form-label">First Name</label> 
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Entrer First Name" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->first_name:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="last_name" class="form-label">Last Name</label> 
                                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Entrer Last Name" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->last_name:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="designation" class="form-label">Designation</label> 
                                            <input type="text" class="form-control" id="designation" name="designation" placeholder="Entrer Designation" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->designation:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="email_id" class="form-label">Email Id</label> 
                                            <input type="email" class="form-control" id="email_id" name="email_id" placeholder="Entrer Email Id" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->email_id:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="mobile_number" class="form-label">Mobile Number</label> 
                                            <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Entrer Mobile Number" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->mobile_number:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="location" class="form-label">location</label> 
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Entrer Location" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->location:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="first_name2" class="form-label">First Name</label> 
                                            <input type="text" class="form-control" id="first_name2" name="first_name2" placeholder="Entrer First Name" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->first_name2:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="last_name2" class="form-label">Last Name</label> 
                                            <input type="text" class="form-control" id="last_name2" name="last_name2" placeholder="Entrer Last Name" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->last_name2:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="contact2" class="form-label">Contact 2</label> 
                                            <input type="number" class="form-control" id="contact2" name="contact2" placeholder="Entrer Contact 2" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->contact2:''}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="designation2" class="form-label">Designation</label> 
                                            <input type="text" class="form-control" id="designation2" name="designation2" placeholder="Entrer Designation"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="email_id2" class="form-label">email id</label> 
                                            <input type="email" class="form-control" id="email_id2" name="email_id2" placeholder="Entrer Email Id" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->email_id2:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="mobile_number2" class="form-label">Mobile Number</label> 
                                            <input type="number" class="form-control" id="mobile_number2" name="mobile_number2" placeholder="Entrer Mobile Number" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->mobile_number2:''}}"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="location2" class="form-label">Location</label> 
                                            <input type="text" class="form-control" id="location2" name="location2" placeholder="Entrer Location" value="{{isset($partner_data) && !empty($partner_data)?$partner_data->location2:''}}">
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
        $('#add-partner-form').submit(function(e){
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