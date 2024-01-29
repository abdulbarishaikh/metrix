@extends('admin.layout.app')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Benchs</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Benchs
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
                                <a href="{{ route('add-bench') }}" class="mt-3">
                                    <button class="btn btn-primary"> Add Bench</button>
                                </a>
                            </div>
                            <table class="table table-bordered ajaxlist" id="bench-datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Sr No</th>
                                        <th>Technology</th>
                                        <th>Type</th>
                                        <th>Excperience</th>
                                        <th>Exp Band</th>
                                        <th>Mode of Delivery</th>
                                        <th>Current Location</th>
                                        <th>Preferred Location</th>
                                        <th>Skills</th>
                                        <th>Professional Summary</th>
                                        <th>Label</th>
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
            // initDatatable('ajaxlist','admin/bench/list',[],[],100)
            /* $('#bench-datatable').DataTable( {
                responsive: true
            }); */
        })
    </script>
@endsection