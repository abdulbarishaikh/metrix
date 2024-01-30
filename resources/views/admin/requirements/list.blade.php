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
                            <table class="table table-bordered" id="requirements-datatable">
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
                                        <th>Remarks</th>
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
            $('#requirements-datatable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                ajax: {
                    url:"{{route('requirements-list')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                },
                // "order": [],
                columns: [
                    { data: 'DT_RowIndex', name: 'id',width: "3%",searchable: false,orderable:false  },
                    { data: 'title',name:'title',width: "7%",searchable: false,orderable:false  },
                    { data: 'job_desc',name:'job_desc',width: "7%",searchable: false,orderable:false  },
                    { data: 'experience_band',name:'experience_band',width: "7%",searchable: false,orderable:false  },
                    { data: 'location',name:'location',width: "7%",searchable: false,orderable:false  },
                    { data: 'functiona_tec',name:'functiona_tec',width: "7%",searchable: false,orderable:false  },
                    { data: 'monthly_budget',name:'monthly_budget',width: "7%",searchable: false,orderable:false  },
                    { data: 'type_oppurtunity',name:'type_oppurtunity',width: "7%",searchable: false,orderable:false  },
                    { data: 'duration_month',name:'duration_month',width: "7%",searchable: false,orderable:false  },
                    { data: 'remark',name:'remark',width: "7%",searchable: false,orderable:false  },
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
                request.url = '{{ url("admin/requirements/delete") }}/' + id;
                var ret = swalFun(request);
            });
        })
    </script>
@endsection