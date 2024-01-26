@extends('admin.layout.app')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Partners</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Partners
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex float-end mb-3">
                                        <a href="{{ route('add-partner') }}" class="mt-3">
                                            <button class="btn btn-primary"> Add Partner</button>
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="partners-datatable">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">Sr No</th>
                                                    <th>Number</th>
                                                    <th>Organization Name</th>
                                                    <th>Website</th>
                                                    <th>Primary Technology</th>
                                                    <th>Technology 2</th>
                                                    <th>Technology 3</th>
                                                    <th>Global Locaton</th>
                                                    <th>Onsite Location - 1</th>
                                                    <th>Onsite Location - 2</th>
                                                    <th>India Location - 1</th>
                                                    <th>India Location - 2</th>
                                                    <th>Services</th>
                                                    <th>Primary Services</th>
                                                    <th>Staff Augmentation</th>
                                                    <th>NDA Document</th>
                                                    <th>Contact 1</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Designation</th>
                                                    <th>email id</th>
                                                    <th>Mobile Number</th>
                                                    <th>location</th>
                                                    <th>Contact 2</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Designation</th>
                                                    <th>email id</th>
                                                    <th>Mobile Number</th>
                                                    <th>location</th>
                                                    <th>Remarks</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
        
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- /.card -->
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main>
@endsection
@section('js')
    <script>
        $(function(){
            $('#partners-datatable').DataTable( {
                responsive: true
            });
        })
    </script>
@endsection