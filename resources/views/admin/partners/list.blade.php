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
            $('#partners-datatable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                ajax: {
                    url:"{{route('partner-list')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                },
                // "order": [],
                columns: [
                    { data: 'DT_RowIndex', name: 'id',width: "3%",searchable: false,orderable:false  },
                    { data: 'number',name:'number',width: "7%",searchable: false,orderable:false  },
                    { data: 'organization_name',name:'organization_name',width: "7%",searchable: false,orderable:false  },
                    { data: 'website',name:'website',width: "7%",searchable: false,orderable:false  },
                    { data: 'primary_technology',name:'primary_technology',width: "7%",searchable: false,orderable:false  },
                    { data: 'technology2',name:'technology2',width: "7%",searchable: false,orderable:false  },
                    { data: 'technology3',name:'technology3',width: "7%",searchable: false,orderable:false  },
                    { data: 'global_locaton',name:'global_locaton',width: "7%",searchable: false,orderable:false  },
                    { data: 'onsite_location1',name:'onsite_location1',width: "7%",searchable: false,orderable:false  },
                    { data: 'india_location1',name:'india_location1',width: "7%",searchable: false,orderable:false  },
                    { data: 'india_location2',name:'india_location2',width: "7%",searchable: false,orderable:false  },
                    { data: 'services',name:'services',width: "7%",searchable: false,orderable:false  },
                    { data: 'primary_services',name:'primary_services',width: "7%",searchable: false,orderable:false  },
                    { data: 'staff_augmentation',name:'staff_augmentation',width: "7%",searchable: false,orderable:false  },
                    { data: 'monthly_budget',name:'monthly_budget',width: "7%",searchable: false,orderable:false  },
                    { data: 'nda_document',name:'nda_document',width: "7%",searchable: false,orderable:false  },
                    { data: 'contact1',name:'contact1',width: "7%",searchable: false,orderable:false  },
                    { data: 'first_name',name:'first_name',width: "7%",searchable: false,orderable:false  },
                    { data: 'last_name',name:'last_name',width: "7%",searchable: false,orderable:false  },
                    { data: 'designation',name:'designation',width: "7%",searchable: false,orderable:false  },
                    { data: 'email_id',name:'email_id',width: "7%",searchable: false,orderable:false  },
                    { data: 'mobile_number',name:'mobile_number',width: "7%",searchable: false,orderable:false  },
                    { data: 'location',name:'location',width: "7%",searchable: false,orderable:false  },
                    { data: 'contact2',name:'contact2',width: "7%",searchable: false,orderable:false  },
                    { data: 'first_name2',name:'first_name2',width: "7%",searchable: false,orderable:false  },
                    { data: 'last_name2',name:'last_name2',width: "7%",searchable: false,orderable:false  },
                    { data: 'designation2',name:'designation2',width: "7%",searchable: false,orderable:false  },
                    { data: 'email_id2',name:'email_id2',width: "7%",searchable: false,orderable:false  },
                    { data: 'mobile_number2',name:'mobile_number2',width: "7%",searchable: false,orderable:false  },
                    { data: 'location2',name:'location2',width: "7%",searchable: false,orderable:false  },
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
                request.url = '{{ url("admin/partner/delete") }}/' + id;
                var ret = swalFun(request);
            });
        });
    </script>
@endsection