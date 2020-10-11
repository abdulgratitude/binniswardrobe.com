@extends('layouts.app')
@section('title')
    Continental
@endsection


@section('navbar-name')
    Continental
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
       'body' => 'locality.continental.create',
       'submitBtnId' => 'CreateContinental',
       'submitBtn' => 'Create Continental',
       'closeBtn' => 'Close',
       'footer'=> 'true',
       'form' => 'true',
       'formAction' => 'master.continental.store',
       'formId' => 'createContinentalForm',
       'formMethod' => 'POST'
    ])
    @endcomponent

    @component('layouts.components.modal', [
      'id' => 'editContinentalModal',
      'size'=>'modal-md',
      'title' => 'Edit Continental',
      'body' => 'locality.continental.edit',
      'submitBtnId' => 'editContinental',
      'submitBtn' => 'Update Continental',
      'closeBtn' => 'Close',
      'footer'=> 'true',
      'form' => 'true',
      'formAction' => 'master.continental.update',
      'formId' => 'editContinentalForm',
      'formMethod' => 'POST'
   ])
    @endcomponent

    <div class="py-3">
        <div class="container">
            <div class="row">
            <div class="col-12 text-right my-2">
                <div class="btn btn-primary" data-toggle="modal" data-target="#createContinentalModal"
                     data-backdrop="static">
                    <i class="mdi mdi-plus mdi-22px cursor-pointer " id="createContinentalModal"></i> Create Continental
                </div>
            </div>

            <div class="col-12">
                @component('layouts.components.filter_form_001',
                [
                'body' => 'locality.continental.filter',
                'form' => 'true',
                'formAction' => 'master.continental.show',
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
    @include('locality.continental.script')
    @include('layouts.components.filter_form_001_script')
@endsection()
