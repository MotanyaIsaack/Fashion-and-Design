$("#contact-form").submit(function (e) {

})

/**
* To send asynchronous HTTP requests
* @param {string} url Url to which the request is sent
* @param {Object} data The POST data which will be sent along with the request
* @returns jqXHR
*/
function ajax_form_submit(url,form_data = null) {
    let btn = $('.submit-btn');
    let promise = $.ajax({
        url: url,
        method: 'POST',
        data: form_data,
        beforeSend: function () {
            disable_btn(btn);
        },
        success: function () {
            enable_btn(btn);
        },
        error: function (xhr,textStatus,errorThrown) {
            console.error(xhr.responseText);
            console.error(textStatus);
            console.error(errorThrown);
            displayAlert("An error occured. Please try again later","danger");
        }
    });

    return promise;
}

/**
 * Gets the data for each from element with attribute 'name'
 * @param {Object} form 
 */
function get_form_data(form) {
    let data = {};

    //Get elements with a _name_ attribute
    form.find('[name]').each(function () {
        let input = $(this),name = input.attr('name'),value = input.val();

        //Insert the form data into the object
        data[name] = value;
    });
    return data;
}