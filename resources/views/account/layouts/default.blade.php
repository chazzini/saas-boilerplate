@extends('layouts.app')
@section('content')
    <div class="row">
        @include('account.layouts.partials.alert._alert')
        <div class="col-md-3">
            @include('account.layouts.partials._navigation')
        </div>
        <div class="col-md-9">
            @yield('account.content')
        </div>
    </div>
@endsection
