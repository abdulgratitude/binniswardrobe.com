@extends('layouts.app')
@section('title')
    Locality
@endsection


@section('navbar-name')
    Locality
@endsection

@section('header')
{{--    @include('users.header')--}}
@endsection


@section('sidebar')
    @include('layouts.sidebar.sidebar')
@endsection
@section('content')

    @component('layouts.components.modal', [
       'id' => 'createContinentalModal',
       'size'=>'modal-md',
       'title' => 'Create Continental',
       'body' => 'locality.create_continental',
       'submitBtnId' => 'CreateContinental',
       'submitBtn' => 'Create Continental',
       'closeBtn' => 'Close',
       'footer'=> 'true',
       'form' => 'true',
       'formAction' => 'master.create.continental',
       'formId' => 'createContinentalForm',
       'formMethod' => 'POST'
    ])
    @endcomponent

{{--    @component('layouts.components.modal', [--}}
{{--        'id' => 'createCountryModal',--}}
{{--        'size'=>'modal-md',--}}
{{--        'title' => 'Create Country',--}}
{{--        'body' => 'locality.create_country',--}}
{{--        'submitBtnId' => 'CreateCountry',--}}
{{--        'submitBtn' => 'Create Country',--}}
{{--        'closeBtn' => 'Close',--}}
{{--        'footer'=> 'true',--}}
{{--        'form' => 'true',--}}
{{--        'formAction' => 'master.create.country',--}}
{{--        'formId' => 'createCountryForm',--}}
{{--        'formMethod' => 'POST'--}}
{{--        ])--}}
{{--    @endcomponent--}}

<div class="container py-3">
        <div class="row">
            <div class="col-12 text-right my-2">
                <div class="btn btn-primary" data-toggle="modal" data-target="#createTownModal"
                     data-backdrop="static">
                    <i class="mdi mdi-plus mdi-22px cursor-pointer " id="showCreateTownModal"></i> Create Locality
                </div>
            </div>

            <div class="col-12">
                @component('layouts.components.filter_form_001',
                [
                'body' => 'locality.filter',
                'form' => 'true',
                'formAction' => 'master.continental',
                'formId' => 'filterForm',
                'formMethod' => 'POST',
                'searchBtn' => 'search',
                'resetBtn' => 'Reset',
                ])
                @endcomponent
            </div>


            <section class="col-md-12 pt-3">
                <p id="results"></p>
                <div class="container vertical-tabs">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">

                            </div>
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <div class="tab-content" id="v-pills-tabContent"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('script')
    @include('locality.script')
    @include('layouts.components.filter_form_001_script')
@endsection()
