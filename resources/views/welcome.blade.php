@extends('layouts.app')

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createContinentalModal" >Continent Master</button>
    <button type="button" class="btn btn-secondary" ro>Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">  <i class="mdi mdi-tag" aria-hidden="true"></i>Warning</button>
    <button type="button" class="btn btn-info">  <i class="mdi mdi-tag" aria-hidden="true"></i>Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">  <i class="mdi mdi-tag" aria-hidden="true"></i>Dark</button>

    <button type="button" class="btn btn-link">Link</button>
    <select class="selectpicker">
        <option>Mustard</option>
        <option>Ketchup</option>
        <option>Barbecue</option>
    </select>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <a href="http://127.0.0.1:8000/master/continental"><button type="button" class="btn btn-primary float-right">Continental</button></a>
    <!-- Modal -->
    @component('layouts.components.modal', [
    'id' => 'createContinentalModal',
    'size'=>'model-sm',
    'title' => 'Create Continent',
    'body' => 'locality.create_continental',
    'submitBtn' => 'Create',
    'closeBtn' => 'Close',
    'footer'=> 'true'
    ])
    @endcomponent




    @endsection

@section('script')
    <script>

        $('#createForm').on('submit', function (e) {
            e.preventDefault();
            let form = $(this);
            let url = form.attr('action');
            let data = $(this).serialize();
            loaderBtn(true, '#CreateTown');
            axios.post(url, data)
                .then(function (response) {
                    loaderBtn(false, '#CreateTown');
                    if (response.data.status == true) {
                        toastr.success(response.data.message);
                        show('form#filterForm');
                        $('#createTownModal').modal('hide');
                    }
                    if(response.data.error) {
                        toastr.error(response.data.error)
                    }
                    if(response.data.status == false) {
                        toastr.error(response.data.message)
                    }

                })
                .catch(function (error) {
                    toastr.error(error)
                });

        });

    </script>

@endsection
