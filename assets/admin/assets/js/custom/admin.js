Dropzone.options.dropzoneFrom = {
    autoProcessQueue: true, //true: immediate file upload
    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
    init: function () {
        // var submitButton = document.querySelector('#submit-all');
        // myDropzone = this;
        // submitButton.addEventListener("click",function () {
        //     myDropzone.processQueue();
        // });
    }
};
Dropzone.autoDiscover = false

$(document).ready(function () {
    let folder = $('#folder').val();
    let item_name = $('#short_name').val();

    $('td > input').attr('autocomplete','off');

    //Display the folder images
    list_image();
    //Populate select with the filename values
    appendFileNames(folder,item_name);

    /* Dynamic table */
    let feedback = $('.feedback');
    $(document).on('click','.add-item .add',function () {
        let row = createRow();
        feedback.addClass('d-none');
        $('.add-item tbody').append(row);
    });

    $(document).on('click','.add-item .delete',function () {
        let no_rows = $('.add-item-body tr').length;

        if (no_rows > 1) {
            feedback.addClass('d-none');
            $(this).closest('tr').remove();
        } else {
            feedback.removeClass('d-none');
        }
    });

    function createRow() {
        let row = `
        <tr>
            <td>
                <input type="text" class="form-control form-control-lg" id="mega-firstname"
                    name="overview_header[]" required>
            </td>
            <td>
                <input type="text" class="form-control form-control-lg" id="mega-firstname"
                    name="overview_content[]" required>
            </td>
            <td>
                <button type="button" class="btn btn-success add">
                    <i class="fa fa-plus"></i>
                </button>
            </td>
            <td>
                <button type="button" class="btn btn-danger delete">
                    <i class="fa fa-minus"></i>
                </button>
            </td>
        </tr>
        `;
        return row;
    }


    /* Dropzone */
    /*****Action: Display images********/

    function list_image() {
        $.ajax({
            url: base_url + "admin/fetch_photos",
            dataType: "JSON",
            success: function (data) {
                $('#preview').html(data);
            },
            error: function (xhr,textStatus,errorThrown) {
                console.log(xhr.responseText);
            }
        });
    }

    /*****End: Display images********/



    var dropzone = new Dropzone('#dropzoneFrom');

    /***Dropzone action listeners***/
    dropzone.on('complete',function () {
        setTimeout(function () {
            list_image();
            dropzone.removeAllFiles();
            appendFileNames(folder,item_name);
        },2000);

    });

    dropzone.on('error',function () {
        displayAlert("Only image files can be uploaded",warning);
    });


    /***End: Dropzone action listeners***/

    /**Action: Remove image**/
    $(document).on('click','.remove_image',function () {
        let name = $(this).attr('id');
        let landing_image = $('#current_landing_image').text();
        if (name !== landing_image) {
            let confirm_del = confirm("Delete " + name);

            if (confirm_del) {
                $.ajax({
                    url: base_url + "admin/remove_image",
                    method: "POST",
                    dataType: "JSON",
                    data: { name: name },
                    success: function (data) {
                        //Fetch images and uploads on image
                        list_image();
                        appendFileNames(folder,item_name);
                    },
                    error: function (xhr,textStatus,errorThrown) {
                        console.log(xhr.responseTxt);
                    }
                });
            }
        } else {
            displayAlert("Cannot delete landing page image",'danger');
        }
    });

    /**
     * Displays sliding notification from top of page
     * @param {string} msg 
     * @param {string} type 
     */
    function displayAlert(msg,type) {
        let target = $("#page-feedback");
        target.addClass('alert-' + type);
        target.html(msg);
        target.slideDown().delay(6000).slideUp();
        target.removeClass(type);
    }

    function appendFileNames(folder,item_name) {
        $.ajax({
            url: base_url + "admin/get_file_names",
            method: "POST",
            dataType: "JSON",
            data: { folder,item_name },
            success: function (data) {
                //Fetch images and uploads on image
                console.log(data)
                $('#image_name').html(data);
            },
            error: function (xhr,textStatus,errorThrown) {
                console.error(xhr.responseTxt);
                console.error(textStatus);
                console.error(errorThrown);
            }
        });
    }

    let image_name = $('#current_landing_image').text()
    console.log(image_name)
    $("#" + image_name).siblings('img').hide();
})

