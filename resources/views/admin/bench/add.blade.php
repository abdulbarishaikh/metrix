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
                            <a href="{{route('bench-index')}}">Bench</a>
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
                                            <label for="technology" class="form-label">Technology</label>
                                            <select name="technology" id="technology" class="form-select">
                                                <option value="">Select Technology</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="technologyType" class="form-label">Technology Type</label>
                                            <select name="technologyType" id="technologyType" class="form-select">
                                                <option value="">Select Technology Type</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="experience" class="form-label">Experience</label>
                                            <select name="experience" id="experience" class="form-select">
                                                <option value="">Select Excperience</option>
                                            </select>
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
                                            <label for="modeOfDelivery" class="form-label">Mode Of Delivery</label>
                                            <select name="modeOfDelivery" id="modeOfDelivery" class="form-select">
                                                <option value="">Select Delivery Mode</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="currentLocation" class="form-label">Current Location</label> 
                                            <input type="text" class="form-control" id="currentLocation" name="currentLocation" placeholder="Entrer Current Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="preferredLocation" class="form-label">Preferred Location</label> 
                                            <input type="text" class="form-control" id="preferredLocation" name="preferredLocation" placeholder="Entrer Preferred Location"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="skills" class="form-label">Skills</label> 
                                            <input type="text" class="form-control" id="skills" name="skills" placeholder="Entrer Skills"> 
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3"> 
                                            <label for="professionalSummary" class="form-label">Professional Summary</label> 
                                            <input type="text" class="form-control" id="professionalSummary" name="professionalSummary" placeholder="Entrer Professional Summary"> 
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