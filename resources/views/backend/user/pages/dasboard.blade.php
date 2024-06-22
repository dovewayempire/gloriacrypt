@extends('backend.user.master')
@section('content')
<div class="container-xxl">



    <div class="row g-3">
        <div class="col-lg-12 col-md-12">
            <div class="tab-filter d-flex align-items-center justify-content-between mb-3 flex-wrap">
                <ul class="nav nav-tabs tab-card tab-body-header rounded  d-inline-flex w-sm-100">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#create" >Create secret</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#recent-secret" >Recent Secret</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-month" >Month</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#summery-year" >Year</a></li> --}}
                </ul>

            </div>
            <div class="tab-content mt-1">
                <div class="tab-pane fade show active" id="create">
                    <div class="row g-1 g-sm-3 mb-3 row-deck">

                        @if (session('secret_link'))
                        <div role="alert" class="alert alert-primary text-center">
                            Secret link created: <a href="{{ session('secret_link') }}">{{ session('secret_link') }}</a>
                        </div>
                        @endif
                        <div class="col-md-12">
                            <div class="card">


                                    <div class="card">
                                        <form  action="{{route('userSecret')}}" method="POST">
                                            @csrf
                                        <div class="conatiner m-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Content</label>
                                                    <textarea name="content" class="form-control" rows="5" cols="30" placeholder="Secret content goes here...." required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Phasepass</label>
                                                    <input name="phasepass" type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Email</label>
                                                    <input type="text"  name="email" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Life Time(Expiration)</label>
                                                    <select name="expires_at" id="expires_at" class="form-control" required>
                                                        <option value="1d">1 Day</option>
                                                        <option value="7d">7 Days</option>
                                                        <option value="2d">2 Days</option>

                                                        <option value="12h">12 Hours</option>
                                                        <option value="4h">4 Hours</option>
                                                        <option value="1h">1 Hour</option>
                                                        <option value="30m">30 Minutes</option>
                                                        <option value="5m">5 Minutes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group pt-3" >
                                                <button  class=" form-control btn btn-primary text-white" >Create secret Link</button>
                                            </div>
                                        </div>

                                        </form>

                                </div>
                          </div>
                      </div>
                    </div> <!-- row end -->
                </div>
                <div class="tab-pane fade" id="recent-secret">
                    <div class="row g-3 mb-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                    <h6 class="m-0 fw-bold">Recent Secrets</h6>
                                </div>
                                <div class="card-body">
                                    <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Id</th>
                                                <th>Content</th>
                                                <th>Expired</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                                @forelse ($secrets as $key => $secret )
                                                <tr class="text-center">
                                                    <td><strong>{{ $key + 1 }}</strong></td>

                                                    <td >************************</td>

                                                    <td ><span class="badge bg-success">{{$secret->expires_at}}</span></td>
                                                </tr>
                                                @empty
                                                     <p class="text-center">no secret</p>
                                                @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>





</div>
@endsection
