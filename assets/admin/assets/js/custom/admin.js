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
    $('#collection-category').val($('#category').val());
    let folder = $('#folder').val();
    let item_id = $('#item_id').val();
    let landing_image = $('#current_landing_image').text();

    onDocumentReady();

    function onDocumentReady() {
        $('td > input').attr('autocomplete','off');
        //Display the folder images
        if (landing_image != "") list_image(landing_image);
        //Populate select with the filename values
        if (folder != "") appendFileNames(folder,item_id);
    }

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


    /**Gets the images in a particular directory and displays them*/
    function list_image(landing_image) {
        $.ajax({
            url: base_url + "admin/fetch_photos",
            type: "POST",
            dataType: "JSON",
            data: { landing_image },
            success: function (data) {
                $('#preview').html(data);
            },
            error: function (xhr,textStatus,errorThrown) {
                console.error(xhr.responseText);
            }
        });
    }


    var dropzone = new Dropzone('#dropzoneFrom');

    /***Dropzone action listeners***/
    dropzone.on('complete',function () {
        setTimeout(function () {
            list_image(landing_image);
            dropzone.removeAllFiles();
            appendFileNames(folder,item_id);
        },2000);

    });

    dropzone.on('error',function () {
        displayAlert("Some images were not uploaded. Ensure they are valid image files","warning");
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
                    data: { file_name: name },
                    success: function (data) {
                        list_image(landing_image);
                        appendFileNames(folder,item_id);
                    },
                    error: function (xhr,textStatus,errorThrown) {
                        console.error(xhr.responseTxt);
                    }
                });
            }
        } else {
            displayAlert("Cannot delete landing page image",'warning');
        }
    });

    /**
     * Displays sliding notification from top of page
     * @param {string} msg 
     * @param {string} type 
     */
    function displayAlert(msg,type) {
        let target = $("#page-feedback");
        target.html(msg);
        target.slideDown().delay(10000).slideUp();
    }

    function appendFileNames(folder,item_id) {
        $.ajax({
            url: base_url + "admin/get_file_names",
            method: "POST",
            data: { folder,item_id },
            success: function (data) {
                //Fetch images and uploads on image
                console.log(data)
                data = JSON.parse(data)
                $('#image_name').html(data);
            },
            error: function (xhr,textStatus,errorThrown) {
                console.error(xhr.responseTxt);
                console.error(textStatus);
                console.error(errorThrown);
            }
        });
    }

    $('#landing_image_form').submit(function (e) {
        e.preventDefault();
        let image_name = $('#image_name').val();
        updateItem(folder,item_id,image_name);
    })

    function updateItem(folder,item_id,image_name) {
        $.ajax({
            url: $('#landing_image_form').attr('action'),
            method: "POST",
            data: { folder,item_id,image_name },
            success: function (data) {
                //Fetch images and uploads on image

                $('#current_landing_image').html(data);
                displayAlert('Landing page image updated','success');
            },
            error: function (xhr,textStatus,errorThrown) {
                console.error(xhr.responseTxt);
                console.error(textStatus);
                console.error(errorThrown);
            }
        });
    }

    let overview = {
        disabled: true
    }

    $(document).on('click','#edit-overview-btn',function () {
        enable_overview()
        let btn_text = overview.disabled ? "Edit table" : "Disable table"
        $('#edit-overview-btn').html(btn_text)
    })

    function enable_overview() {
        let input = $('.add-item-body tr td input');
        let button = $('.add-item-body tr td button');
        let state = overview.disabled;

        switch (state) {
            case true:
                input.removeAttr('readonly');
                button.removeAttr('disabled');
                break;
            case false:
                input.attr('readonly','');
                button.attr('disabled','');
                break;
        }
        overview.disabled = !state;
    }

    //Doesn't work yet
    $('.image_name').each(function (index) {
        console.log($(this).text())
        console.log("hello")
    })
})