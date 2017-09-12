@extends('layouts.dashboard')

@section('content')

<!-- Row -->
<div class="row">
    <!-- Column -->
    @php
        $user = App\User::where('id', Auth::user()->id)->get()->first();

        $custom_messages = $user->custom_messages()->get();
    @endphp

    @foreach($custom_messages as $custom_message)
    <!-- Column -->

    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{URL::asset('images/big/img1.jpg')}}" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">{{ $custom_message->updated_at->format('dS M, Y') }}</li>
                    @php
                      $logs_count = App\SingleLog::where('custom_message_id', $custom_message->id)->count();
                    @endphp
                    <li class="pull-right"><a href="javascript:void(0)" class="link">{{ $logs_count }}  <i class="fa fa-user"></i></a></li>
                </ul>
                <h3 class="font-normal"><a href="javascript:void(0)" class="link"> {{ $custom_message->title }} </a></h3>
            </div>
        </div>
    </div>
    <!-- Column -->{{-- &amp; 20 May 2016 --}}

    @endforeach
</div>
<!-- Row -->

@endsection
