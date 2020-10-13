@extends('layouts.app')
@section('title')
    Country
@endsection


@section('navbar-name')
    Country
@endsection

@section('header')
    {{--    @include('users.header')--}}
@endsection


@section('sidebar')
    @include('layouts.sidebar.sidebar')
@endsection
@section('content')

    @component('layouts.components.modal', [
       'id' => 'createCountryModal',
       'size'=>'modal-md',
       'title' => 'Create Country',
       'body' => 'locality.country.create',
       'submitBtnId' => 'CreateCountry',
       'submitBtn' => 'Create Country',
       'closeBtn' => 'Close',
       'footer'=> 'true',
       'form' => 'true',
       'formAction' => 'master.country.store',
       'formId' => 'createCountryForm',
       'formMethod' => 'POST'
    ])
    @endcomponent

    @component('layouts.components.modal', [
      'id' => 'editCountryModal',
      'size'=>'modal-md',
      'title' => 'Edit Country',
      'body' => 'locality.country.edit',
      'submitBtnId' => 'editCountry',
      'submitBtn' => 'Update Country',
      'closeBtn' => 'Close',
      'footer'=> 'true',
      'form' => 'true',
      'formAction' => 'master.country.update',
      'formId' => 'editCountryForm',
      'formMethod' => 'POST'
   ])
    @endcomponent

    <div class="py-3">
        <div class="container">
            <div class="row">
            <div class="col-12 text-right my-2">
                <div class="btn btn-primary" data-toggle="modal" data-target="#createCountryModal"
                     data-backdrop="static">
                    <i class="mdi mdi-plus mdi-22px cursor-pointer " id="createCountryModal"></i> Create Country
                </div>
            </div>

            <div class="col-12">
                @component('layouts.components.filter_form_001',
                [
                'body' => 'locality.country.filter',
                'form' => 'true',
                'formAction' => 'master.country.show',
                'formId' => 'filterForm',
                'formMethod' => 'POST',
                'searchBtn' => 'search',
                'resetBtn' => 'Reset',
                ])
                @endcomponent
            </div>


            <div class="container">
                <div class="col-12">
                    <p id="results"></p>
                    <div id="show"></div>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection

@section('script')
    @include('locality.country.script')
    @include('layouts.components.filter_form_001_script')
@endsection()
