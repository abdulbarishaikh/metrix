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
                        <form action="#" method="post" id="add-bench-form"> 
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="number" class="form-label">Number</label> 
                                            <input type="number" class="form-control" id="number" name="number" placeholder="Entrer Number"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="organizationName" class="form-label">Organization Name</label>
                                            <input type="text" class="form-control" id="organizationName" name="organizationName" placeholder="Entrer Job Description"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="website" class="form-label">Website</label>
                                            <input type="text" class="form-control" id="website" name="website" placeholder="Entrer Job Description"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="primaryTechnology" class="form-label">Primary Technology</label>
                                            <input type="text" class="form-control" id="primaryTechnology" name="primaryTechnology" placeholder="Entrer Job Description"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="technology2" class="form-label">Technology 2</label>
                                            <input type="text" class="form-control" id="technology2" name="technology2" placeholder="Entrer Job Description"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="technology3" class="form-label">Technology 3</label>
                                            <input type="text" class="form-control" id="technology3" name="technology3" placeholder="Entrer Technology 3"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="globalLocaton" class="form-label">Global Locaton</label>
                                            <select name="globalLocaton" id="globalLocaton" class="form-select">
                                                <option value="">Select Global Locaton</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="onsiteLocation1" class="form-label">Onsite Location - 1</label> 
                                            <input type="text" class="form-control" id="onsiteLocation1" name="onsiteLocation1" placeholder="Entrer Onsite Location - 1"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="onsiteLocation2" class="form-label">Onsite Location - 2</label> 
                                            <input type="text" class="form-control" id="onsiteLocation2" name="onsiteLocation2" placeholder="Entrer Onsite Location - 1"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="indiaLocation1" class="form-label">India Location - 1</label> 
                                            <input type="text" class="form-control" id="indiaLocation1" name="indiaLocation1" placeholder="Entrer India Location - 1"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="indiaLocation2" class="form-label">India Location - 2</label> 
                                            <input type="text" class="form-control" id="indiaLocation2" name="indiaLocation2" placeholder="Entrer India Location - 2"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="services" class="form-label">Services</label> 
                                            <input type="text" class="form-control" id="services" name="services" placeholder="Entrer Services"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="primaryServices" class="form-label">Primary Services</label> 
                                            <input type="text" class="form-control" id="primaryServices" name="primaryServices" placeholder="Entrer Primary Services"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="experienceBand" class="form-label">Staff Augmentation </label>
                                            <select name="functional" id="functional" class="form-select">
                                                <option value="">Select Functional / Technical</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="monthlyBudget" class="form-label">Monthly Budget</label> 
                                            <input type="number" class="form-control" id="monthlyBudget" name="monthlyBudget" placeholder="Entrer Current Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="staffAugmentation " class="form-label">Staff Augmentation</label>
                                            <select name="staffAugmentation" id="staffAugmentation" class="form-select">
                                                <option value="">Select Staff Augmentation</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="NDADocument " class="form-label">NDA Document</label>
                                            <select name="NDADocument" id="NDADocument" class="form-select">
                                                <option value="">Select NDA Document</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="contact1" class="form-label">Contact 1</label> 
                                            <input type="number" class="form-control" id="contact1" name="contact1" placeholder="Entrer Current Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="firstName" class="form-label">First Name</label> 
                                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Entrer Current Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="lastName" class="form-label">Last Name</label> 
                                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Entrer Current Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="designation" class="form-label">Designation</label> 
                                            <input type="text" class="form-control" id="designation" name="designation" placeholder="Entrer Current Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="emailId" class="form-label">email id</label> 
                                            <input type="email" class="form-control" id="emailId" name="emailId" placeholder="Entrer Email Id"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="mobileNumber" class="form-label">Mobile Number</label> 
                                            <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Entrer Mobile Number"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="location" class="form-label">location</label> 
                                            <input type="number" class="form-control" id="location" name="location" placeholder="Entrer Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="firstName" class="form-label">First Name</label> 
                                            <input type="number" class="form-control" id="firstName" name="firstName" placeholder="Entrer First Name"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="lastName" class="form-label">Last Name</label> 
                                            <input type="number" class="form-control" id="lastName" name="lastName" placeholder="Entrer Last Name"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="contact2" class="form-label">Contact 2</label> 
                                            <input type="number" class="form-control" id="contact2" name="contact2" placeholder="Entrer Contact 2"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="designation" class="form-label">Designation</label> 
                                            <input type="number" class="form-control" id="designation" name="designation" placeholder="Entrer Designation"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="emailId" class="form-label">email id</label> 
                                            <input type="number" class="form-control" id="emailId" name="emailId" placeholder="Entrer Email Id"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="mobileNumber" class="form-label">Mobile Number</label> 
                                            <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" placeholder="Entrer Mobile Number"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="location" class="form-label">Location</label> 
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Entrer Location"> 
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