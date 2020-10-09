<script>
    /*** filters ***/
    $('form#filterForm select[name=no_of_records]').on('click', function () {
        $('form#filterForm #filterPage').val(0);
    });

    $('form#filterForm #resetFilter').on('click', function () {
        $('form#filterForm .filterLabel').removeClass('font-weight-bold text-primary');
        $("form#filterForm .selectpicker").val('default').selectpicker("refresh");
        $('form#filterForm #filterPage').val(0);
        $('form#filterForm').trigger("reset");
        show('form#filterForm');
    });

    $(document).on('click', '#filterFormPagination .pagination a', function (event) {
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        $('form#filterForm #filterPage').val(page);
        show('form#filterForm');
    });

    $('form#filterForm').on('submit', function (e) {
        e.preventDefault();
        $('form#filterForm #filterPage').val(0);
        show('form#filterForm');
    });

    function filterCancel(id){
        let inputName = $('form#filterForm [name="'+id+'"]');
        if(!inputName.length){
            inputName = $('form#filterForm [name="'+id+'[]"]');
        }
        $(inputName).removeClass('font-weight-bold text-primary');
        $(inputName).val(null).selectpicker("refresh");
        $(inputName).val();
        $(inputName).trigger("reset");
        show('form#filterForm');
    }


</script>
