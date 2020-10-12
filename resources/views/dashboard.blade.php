@extends('layouts.app')
@section('title')
    Dashboard
@endsection

@section('navbar-name')
    Dashboard
@endsection


@section('header')

    @include('layouts.header')
@endsection

@section('sidebar')
    @include('layouts.sidebar.sidebar')
@endsection

@section('content')
    <div class="container py-3">
        <div class="row my-2">
            <div class="col-12">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('layouts.notification_script')
@endsection
