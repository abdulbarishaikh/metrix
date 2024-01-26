@extends('admin.layout.app')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Requirements</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Requirements
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
                            <div class="d-flex float-end mb-3">
                                <a href="{{ route('add-requirements') }}" class="mt-3">
                                    <button class="btn btn-primary"> Add Requirenment</button>
                                </a>
                            </div>
                            <table class="table table-bordered" id="bench-datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Sr No</th>
                                        <th>Title</th>
                                        <th>Job Description</th>
                                        <th>Exp Band</th>
                                        <th>Current Location</th>
                                        <th>Functional / Technical</th>
                                        <th>Monthly Budget</th>
                                        <th>Type of Opportunity</th>
                                        <th>Duration in Months</th>
                                        <th>Job Descripton</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
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
            $('#bench-datatable').DataTable( {
                responsive: true
            });
        })
    </script>
@endsection