@extends('backend.admin.master')
@section('content')
<div class="container-xxl">

   <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Total Users</h6>
                </div>
                <div class="card-body">
                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Email</th>
                                <th>Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user )

                            @endforeach
                            <tr class="text-center">

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
