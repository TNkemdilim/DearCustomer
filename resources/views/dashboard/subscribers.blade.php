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
                                <th colspan="1">
                                  <input type="checkbox" onclick="CheckAllSubscribers(this.checked);" name=""> All
                                </th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Date and Time Subscribed</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php

                            $subscribers = App\Customer::all();

                            @endphp

                            @foreach ($subscribers as $subscriber)

                              <tr>
                                  <td><input type="checkbox" name="" class="check-subscribers"></td>
                                  <td><span class="round">{{ substr($subscriber->firstname, 0)[0] }}</span></td>
                                  <td>
                                      <h6>{{ $subscriber->firstname . ' ' . $subscriber->lastname}}</h6>

                                      <small class="text-muted">Subscriber</small>
                                  </td>
                                  <td>{{ $subscriber->company()->get()->first()->name }}</td>
                                  <td>
                                      {{ $subscriber->created_at }}
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


@section('scripts')

<script type="text/javascript">
  function CheckAllSubscribers(value) {
      $('input:checkbox.check-subscribers').each(function (chk) {
          this.checked = value;
      });
      //console.log($('input:checkbox.check-subscribers'));
    }  
</script>

@endsection