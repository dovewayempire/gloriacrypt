@extends('backend.admin.master')
@section('content')
<div class="container-xxl">




    <div class="row g-3 mb-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                    <h6 class="m-0 fw-bold">Total Secrets</h6>
                </div>
                <div class="card-body">
                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                        <thead>
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Is Read</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($secrets as $key => $secret)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>******************************</td>
                                <td><span class="badge bg-warning">{{ $secret->created_at }}</span></td>
                                <td>
                                    @if($secret->is_read == 0)
                                        <span class="badge bg-primary">Not Read</span>
                                    @else
                                        <span class="badge bg-success">is Read</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- Row end  -->

</div>
@endsection
