@extends('layouts.dashboard')

@section('content')

<!-- Row -->
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Revenue Statistics</h4>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-line-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
<!-- Row -->
@endsection
