{{-- <script src="{{URL::asset('plugins/jquery/jquery.min.js')}}"></script> --}}

@extends('layouts.dashboard-web-builder')

@section('content')

<div id="gjs"></div>

@php
    $user = App\User::where('id', Auth::user()->id)->get()->first();

    $custom_messages = $user->custom_messages()->first();
@endphp

<style type="text/css">
  #gjs {
    padding: 0px;
    margin: 0px;
  }
</style>

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/grapes.min.css') }}">
@endsection

@section('scripts')

{{-- GrapesJS --}}

<script src="{{ URL::asset('js/grapes.min.js') }}"></script>

<script type="text/javascript">

  var editor = grapesjs.init({
      container : '#gjs',
      components: "<div>hello world</div>",
      style: '.txt-red{color: red}',
  });

{{-- End GrapesJS --}}
</script>

@endsection

@endsection