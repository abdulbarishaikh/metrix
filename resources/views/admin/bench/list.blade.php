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
                                        <th>Status</th>
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
            $('#bench-datatable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                ajax: {
                    url:"{{route('bench-list')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                },
                // "order": [],
                columns: [
                    { data: 'DT_RowIndex', name: 'id',width: "3%",searchable: false,orderable:false  },
                    { data: 'platforms.title',name:'platforms.title',width: "7%",searchable: false,orderable:false  },
                    { data: 'technology.title',name:'technology.title',width: "7%",searchable: false,orderable:false  },
                    { data: 'experience',name:'experience',width: "7%",searchable: false,orderable:false  },
                    { data: 'exp_band',name:'exp_band',width: "7%",searchable: false,orderable:false  },
                    { data: 'mode_delivery',name:'mode_delivery',width: "7%",searchable: false,orderable:false  },
                    { data: 'current_location',name:'current_location',width: "7%",searchable: false,orderable:false  },
                    { data: 'preferred_location',name:'preferred_location',width: "7%",searchable: false,orderable:false  },
                    { data: 'skills',name:'skills',width: "7%",searchable: false,orderable:false  },
                    { data: 'professional_summary',name:'professional_summary',width: "7%",searchable: false,orderable:false  },
                    { data: 'status',name:'status',width: "7%",searchable: false,orderable:false  },
                    { data: 'action',name:'action',width: "7%",searchable: false,orderable:false }
                ],
            });
            $(document).on('click', '.delete', function() {
                let id = $(this).data('id');
                var request = {};
                request.delete = true;
                request.action = 'Yes, delete it!';
                request.message = 'Are you sure to delete ?';
                request.url = '{{ url("admin/bench/delete") }}/' + id;
                var ret = swalFun(request);
            });
        })
    </script>
@endsection