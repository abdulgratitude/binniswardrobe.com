<script>
    loader(false)

    function loaderBtn(condition, id) {
        if (condition === true) {
            $(id).addClass('loading disabled');
            $(id).prop('disabled', true);
            $(id).data("temp-name", $(id).text());
            $(id).html('processing...');
        } else {
            $(id).html($(id).data("temp-name"));
            $(id).removeClass('loading disabled');
            $(id).prop('disabled', false);
        }
    }

    function loader(condition) {
        if (condition === true) {
            $(".app-loader").show();
        } else {
            $(".app-loader").hide();
        }
    }

    function whiteBoard(modal, id) {
        let boards = $('#' + id + ' > div');
        let length = boards.length;

        $('#' + modal + '').modal("show");
        $('#' + id + ' > div').css({
            'display': 'none'
        })
        $('#' + id + ' > div:first-child').css({
            'display': 'block'
        })

        $(document).on('click', '#' + id + ' .goto', function (e) {
            let goto = $(this).data("board");
            $('#' + id + ' > div').css({
                'display': 'none'
            })
            $('#' + id + ' > #board-' + goto + '').css({
                'display': 'block'
            })
        });

        $(document).on('click', '#' + id + ' .finish', function (e) {
            $('#' + modal + '').modal("show");
        });
    }

    function getSelectOptionLocality(id, anotherId, url) {
        $(id).change(function () {


            $(anotherId).html('<option selected disabled>Processing...</option>');
            $(anotherId).selectpicker('refresh');

            let theUrl = url;
            let val = $(this).val();
            let anotherVal = $(anotherId).val();
            let data = {
                '_token': '{{csrf_token()}}',
                'val': val
            }

            axios.post(theUrl, data)
                .then(function (response) {
                    $(anotherId).html(response.data);
                    $(anotherId).focus();
                    $(anotherId).attr('title', 'choose');
                    $(anotherId).selectpicker('refresh');
                })
                .catch(function (error) {
                    console.log(error)
                });
        });
    }

    //zoom in profile image upon click event
    function zoomImage(id) {
        $('#imageZoomIn').attr('src', $(`#imageZoomInSource-${id}`).attr('src'));
        $('#profileImageZoom').modal('show');
    }

    function imageZoom(currentImageId, sourceImageId) {
        $(currentImageId).files[0].attr('src', sourceImageId).attr('src');
        $('#profileImageZoom').modal('show');
    }

    //Show Attached file nam
    function showAttachedFileName(buttonId, resultId) {
        $(buttonId).click(function () {
            $(resultId).trigger('click');
        });

        $(resultId).on('change', function (e) {
            var fileName = e.target.files[0].name;
            $(this).siblings('span').text(fileName);
        })
    }

    //Show selected image preview
    function showSelectedImagePreview(buttonID, imageID) {

        function readURL(input) {
            var url = input.value;
            var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
            if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(imageID).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                $(imageID).attr('src', '/assets/no_preview.png');
            }
        }

        $(buttonID).change(function () {
            readURL(this);
        });

    }

    //input only number s
    function onKeyUpEvent(inputId) {
        $(inputId).keyup(function (event) {
            if (event.which != 8 && event.which != 0 && event.which < 48 || event.which > 57) {
                event.preventDefault();
                let id = event.currentTarget.id;
                var invalidChars = [
                    "-",
                    "+",
                    "e",
                    "E",
                ];

                if (invalidChars.includes(event.key)) {
                    $(inputId).val(null);
                    toastr.error("Please enter only valid number", {timeOut: 3000});
                }
            }

        });
    }
</script>
