<script>

    getSelectOptionLocality('#filter_country_id', '#filter_state_id', '{{route('selectOptions.getStateByCountry')}}');
    getSelectOptionLocality('#country', '#state', '{{route('selectOptions.getStateByCountry')}}');

    /* show form */
    show('form#filterForm');

    function show(data) {
        $('#v-pills-tab').empty();
        $('#v-pills-tabContent').empty();

        let form = $('#filterForm');

        let url = form.attr('action');
        let formData = $(data).serialize();
        loader(true);

        axios.post(url, formData)
            .then(function (response) {
              loader(false);
                if(response.data.status === true){
                }
            })
    }


    $('#createContinentalForm').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let url = form.attr('action');
        let data = $(this).serialize();
        loaderBtn(true, '#CreateContinental');
        axios.post(url, data)
            .then(function (response) {
                loaderBtn(false, '#CreateContinental');
                if (response.data.status == true) {
                    toastr.success(response.data.message);
                    show('form#filterForm');
                    $('#createContinentalModal').modal('hide');
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

    $('#createCountryForm').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let url = form.attr('action');
        let data = $(this).serialize();
        loaderBtn(true, '#CreateCountry');
        axios.post(url, data)
            .then(function (response) {
                loaderBtn(false, '#CreateCountry');
                if (response.data.status == true) {

                  let country = response.data.data;
                  $('#country').empty();
                  $('#create_country_id').empty();
                  $('#country_id_create_state').empty();
                  $('#country_id_create_city').empty();

                  $('#country').append('<option value="" diable class="text-capitalize">Select Country</option>');
                  $('#create_country_id').append('<option value="" diable class="text-capitalize">Select Country</option>');
                  $('#country_id_create_state').append('<option value="" diable class="text-capitalize">Select Country</option>');
                  $('#country_id_create_city').append('<option value="" diable class="text-capitalize">Select Country</option>');

                    $.each(country, function(index, country) {
                      $('#country').append('<option value="' + country.id + '" class="text-capitalize">' + country.name + '</option>');
                      $('#create_country_id').append('<option value="' + country.id + '" class="text-capitalize">' + country.name + '</option>');
                      $('#country_id_create_state').append('<option value="' + country.id + '" class="text-capitalize">' + country.name + '</option>');
                      $('#country_id_create_city').append('<option value="' + country.id + '" class="text-capitalize">' + country.name + '</option>');
                    })

                  toastr.success(response.data.message)
                  $('#createCountryModal').modal('hide');
                    show('form#filterForm');

                  $('.selectpicker').selectpicker('refresh');
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


$('.modal').on('hidden.bs.modal', function(e)
    {
      $(this).find("input, textarea, select, selectpicker, checkbox, datepicker").val('').end();
      //$(".modal-body input,textarea,select,checkbox,datepicker").val("")
    }) ;
</script>
