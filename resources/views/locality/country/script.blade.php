<script>
    /* show form */
    show('form#filterForm');

    function show(data) {
        let form = $('#filterForm');

        let url = form.attr('action');
        let formData = $(data).serialize();
        loader(true);

        axios.post(url, formData)
            .then(function (response) {
              loader(false);
                let userData = response.data.data;
                let records_found = response.data.records;
                let onPage = $('#filterPage').val();

                let htmlCode = '';

                if (records_found != null) {

                    htmlCode += '<div class="mb-2">';

                    if (records_found > 1) {
                        htmlCode += '<span class="mx-1 badge badge-dark filter-message">' + records_found + ' results found</span>';
                    } else {
                        htmlCode += '<span class="mx-1 badge badge-dark filter-message">' + records_found + ' result found</span>';
                    }

                    if (onPage > 1) {
                        htmlCode += '<span class="mx-1 badge badge-dark filter-message"> on page ' + onPage + '</span>';
                    }

                    htmlCode += '</div>';
                }

                $('#results').html(htmlCode);

                loader(false)
                $("#show").empty();

                $.each(userData, function (indexInArray, valueOfElement) {
                    $("#show").append(`
                             <div id="accordion">
                              <div class="card shadow-on-hover my-3">
                                  <div class="card-header" id="headingOne">
                                  <div>
                                        <span class="cursor-pointer"  aria-expanded="false" >
                                            ${valueOfElement.country_name}
                                        </span>
                                         <span class="cursor-pointer badge badge-info"  aria-expanded="false" >
                                          ${valueOfElement.country_code}
                                        </span>
                                      <div class="float-right" >
                                            <span class="mdi mdi-circle-edit-outline align-middle  cursor-pointer edit" title="Edit" data-toggle="modal" data-target="#editCountryModal" onclick="editCountry('${indexInArray}','${valueOfElement.country_code}')"></span>
                                      </div>
                                  </h5>
                                  </div>
                                </div>
                            </div>
                             `)
                });
                $('#show').append(` <div id="filterFormPagination"> ${response.data.webPagination}</div>   `);

            })
            .catch((e) => {
                toastr.error("server error");
                $('#show').append(`<div class="alert alert-secondary text-center" role="alert">No data found</div>`);
            });
    }


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
                    toastr.success(response.data.message);
                    show('form#filterForm');
                    $('#createCountryModal').modal('hide');
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

    function editCountry(element_id, country_code){
        loader(true);
        let url = '{{route('master.country.edit')}}';
        let data = {
            country_code: country_code,
        };
        axios.post(url, data)
            .then(function (response) {
                loader(false);
                $('#editCountryForm')[0].reset();
                if (response.data.status == true) {
                    let userData = response.data.data;
                    $('#edit_old_country_code').val(country_code);
                    $('#edit_country_code').val(userData.country_code);
                    $('#edit_country_name').val(userData.country_name);
                    $('#edit_country_description').val(userData.country_description);
                    $('#edit_default_currency_code').html(userData.currencySelectPicker);
                    $('#edit_continent_code').html(userData.continentSelectPicker);
                    $('#edit_country_code_iso3').val(userData.country_code_iso3);
                    $('#edit_country_prefix').val(userData.country_prefix);


                    $('.selectpicker').selectpicker('refresh');

                    if (userData.is_active == 1) {
                        $('#edit_country_is_active_true').prop('checked', true);
                    }else{
                        $('#edit_country_is_active_false').prop('checked', true);
                    }

                    if (userData.shipping_enabled == 1) {
                        $('#edit_shipping_enabled_true').prop('checked', true);
                    }else{
                        $('#edit_shipping_enabled_false').prop('checked', true);
                    }

                    if (userData.check_pincode_delivery_serviceable == 1) {
                        $('#edit_check_pincode_delivery_serviceable_true').prop('checked', true);
                    }else{
                        $('#edit_check_pincode_delivery_serviceable_false').prop('checked', true);
                    }
                }
            })
            .catch(function(error){
                toastr.error(error)
            })
    }

    $('#editCountryForm').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let url = form.attr('action');
        let data = $(this).serialize();
        loaderBtn(true, '#editCountry');
        axios.post(url, data)
            .then(function (response) {
                loaderBtn(false, '#editCountry');
                if (response.data.status == true) {
                    toastr.success(response.data.message);
                    $('#editCountryModal').modal('hide');
                    show('form#filterForm');
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
