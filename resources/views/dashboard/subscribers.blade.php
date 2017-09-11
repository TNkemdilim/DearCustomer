@extends('layouts.dashboard')

@section('content')

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <select class="custom-select pull-right">
                    <option selected>All Companies</option>


                    @php

                    $companies = App\Company::all();

                    @endphp

                    @foreach ($companies as $company)

                    <option value="{{ $loop->index }}">{{ $company->name}}</option>

                    @endforeach
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

                            @php

                            $subscribers = App\Customer::all();

                            @endphp

                            @foreach ($subscribers as $subscriber)

                              <tr>
                                  <td style="width:50px;"><span class="round">{{ substr($subscriber->firstname, 0)[0] }}</span></td>
                                  <td>
                                      <h6>{{ $subscriber->firstname . ' ' . $subscriber->lastname}}</h6><small class="text-muted">Subscriber</small></td>
                                  <td>{{ $subscriber->company()->get()->first()->name }}</td>
                                  <td>
                                      {{ $subscriber->date_created }}
                                      {{-- $anytime = Carbon\Carbon::now();
                                      echo $anytime->toFormattedDateString(); --}}
                                  </td>
                              </tr>
                            
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row -->

@endsection
