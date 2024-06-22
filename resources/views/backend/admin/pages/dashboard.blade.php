@extends('backend.admin.master')
@section('content')
<div class="container-xxl">

    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-3 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
        <div class="col">
            <div class="alert-success alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-success text-light"><i class="icofont-comment fs-5"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="h6 mb-0">Total Secret</div>
                        <span class="small">{{$totalsecrets}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="alert-danger alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-danger text-light"><i class="icofont-users fs-5"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="h6 mb-0">Total Users</div>
                        <span class="small">{{$totalusers}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="alert-warning alert mb-0">
                <div class="d-flex align-items-center">
                    <div class="avatar rounded no-thumbnail bg-warning text-light"><i class="icofont-user-suited fs-5"></i></div>
                    <div class="flex-fill ms-3 text-truncate">
                        <div class="h6 mb-0">Administrators</div>
                        <span class="small">{{$totaladministrator}}</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- Row end  -->




    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Total Users</h6>
                </div>
                <div class="card-body">
                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user )

                            @endforeach
                            <tr>

                                <td>{{ $key + 1 }}</td>

                                <td>
                                {{$user->email}}
                                </td>
                                <td><span class="badge bg-warning">{{$user->created_at}}</span></td>

                            </tr>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- Row end  -->

</div>
@endsection
