@extends('layouts.dashboard')

@section('content')

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <select class="custom-select pull-right">
                    <option selected>All Companies</option>
                    <option value="1">February</option>
                    <option value="2">March</option>
                    <option value="3">April</option>
                </select>
                <h4 class="card-title">All Subscribers</h4>
                <div class="table-responsive m-t-40">
                    <table class="table stylish-table">
                        <thead>
                            <tr>
                                <th colspan="1">Picture</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Date Subscribed</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td style="width:50px;"><span class="round">S</span></td>
                                <td>
                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                <td>company name</td>
                                <td>
                                  @php
                                    $anytime = Carbon\Carbon::now();
                                    echo $anytime->toFormattedDateString();
                                  @endphp
                                </td>
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

@endsection
