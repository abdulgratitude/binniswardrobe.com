<script>
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
                                            ${valueOfElement.continent_name}
                                        </span>
                                         <span class="cursor-pointer badge badge-info"  aria-expanded="false" >
                                          ${valueOfElement.continent_code}
                                        </span>
                                      <div class="float-right" >
                                            <span class="mdi mdi-circle-edit-outline align-middle  cursor-pointer edit" title="Edit" data-toggle="modal" data-target="#editContinentalModal" onclick="editContinent('${indexInArray}','${valueOfElement.continent_code}')"></span>
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

    function editContinent(element_id, continent_code){
        loader(true);
        let url = '{{route('master.continental.edit')}}';
        let data = {
            continent_code: continent_code,
        };
        axios.post(url, data)
            .then(function (response) {
                loader(false);
                $('#editContinentalForm')[0].reset();
                if (response.data.status == true) {
                    let userData = response.data.data;
                    $('#edit_old_continent_code').val(continent_code);
                    $('#edit_continent_code').val(userData.continent_code);
                    $('#edit_continent_name').val(userData.continent_name);
                    $('#edit_continent_description').val(userData.continent_description);

                    if (userData.is_active == 1) {
                        $('#edit_continent_is_active_true').prop('checked', true);
                    }else{
                        $('#edit_continent_is_active_false').prop('checked', true);
                    }
                }
            })
            .catch(function(error){
                toastr.error(error)
            })
    }

    $('#editContinentalForm').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let url = form.attr('action');
        let data = $(this).serialize();
        loaderBtn(true, '#editContinental');
        axios.post(url, data)
            .then(function (response) {
                loaderBtn(false, '#editContinental');
                if (response.data.status == true) {
                    toastr.success(response.data.message);
                    $('#editContinentalModal').modal('hide');
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
