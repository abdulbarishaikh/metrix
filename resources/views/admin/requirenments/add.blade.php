@extends('admin.layout.app')

@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Bench Add</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('bench-index')}}">Bench Profile</a>
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
                                            <label for="title" class="form-label">Title</label> 
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Entrer Title"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="jobDescription" class="form-label">Job Descripton</label>
                                            <input type="text" class="form-control" id="jobDescription" name="jobDescription" placeholder="Entrer Job Description"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="experienceBand" class="form-label">Experience Band</label>
                                            <select name="experienceBand" id="experienceBand" class="form-select">
                                                <option value="">Select Excperience Band</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="location" class="form-label">Location</label> 
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Entrer Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="experienceBand" class="form-label">Functional / Technical</label>
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
                                            <label for="experienceBand" class="form-label">Type of Opportunity</label>
                                            <select name="functional" id="functional" class="form-select">
                                                <option value="">Select Type of Opportunity</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="duration" class="form-label">Duration in Months</label> 
                                            <input type="number" class="form-control" id="duration" name="duration" placeholder="Entrer Current Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="remarks" class="form-label">Remarks</label> 
                                            <input type="text" class="form-control" id="remarks" name="preferredLocation" placeholder="Entrer Preferred Location"> 
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