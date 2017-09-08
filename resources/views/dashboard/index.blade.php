@extends('layouts.dashboard')

@section('content')

<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-sm-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">No. of Companies</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0">{{-- <i class="ti-arrow-up text-success"></i> --}}  1 / <a class="text-danger">5</a></h2>
                    {{-- <span class="text-muted">Todays companies created</span> --}}
                </div>
                <span class="text-success">80%</span>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{(1/ 5)  * 100 }}%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <!-- Column -->
    <div class="col-sm-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Total Subscribers</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-success"></i> 120</h2>
                    {{-- <span class="text-muted">Todays Income</span> --}}
                </div>
                <span class="text-success">80%</span>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->

    <!-- Column -->
    <div class="col-sm-4">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Subscribers this week</h4>
                <div class="text-right">
                    <h2 class="font-light m-b-0"><i class="ti-arrow-up text-info"></i> 20</h2>
                    {{-- <span class="text-muted">Todays Income</span> --}}
                </div>
                <span class="text-info">30%</span>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <select class="custom-select pull-right">
                    <option selected>January</option>
                    <option value="1">February</option>
                    <option value="2">March</option>
                    <option value="3">April</option>
                </select>
                <h4 class="card-title">Sent Mails (Top 10)</h4>
                <div class="table-responsive m-t-40">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th colspan="1">Picture</th>
                                <th>Name</th>
                                <th>Message</th>
                                <th>Delivered</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                            <tr class="active">
                                <td style="width:50px;"><span class="round">S</span></td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                <td>Elite Admin</td>
                                <td><span class="badge badge-danger">Failed</span></td>
                            </tr>
                            
                            @endfor

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{URL::asset('images/big/img1.jpg')}}" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">20 May 2016</li>
                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                </ul>
                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{URL::asset('images/big/img2.jpg')}}" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">20 May 2016</li>
                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                </ul>
                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{URL::asset('images/big/img4.jpg')}}" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">20 May 2016</li>
                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                </ul>
                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->

@endsection