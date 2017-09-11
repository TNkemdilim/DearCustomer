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

    <div class="col-lg-3">
        <div class="card">
            <img class="card-img-top img-responsive" src="{{URL::asset('images/big/img1.jpg')}}" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">20 May 2016</li>
                    <li><a href="javascript:void(0)" class="link">5 people</a></li>
                </ul>
                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
            </div>
        </div>
    </div>
    <!-- Column -->

    @endforeach
</div>
<!-- Row -->

@endsection
