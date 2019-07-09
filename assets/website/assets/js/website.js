$(function () {
    let btn = $('.submit-btn');

    $(document).on("submit","#contactForm",function (e) {
        e.preventDefault();
        let form = $('#contactForm'),
            url = form.attr('action'),
            form_data = getFormData(form);

        console.log(form_data)
        ajax_form_submit(url,form_data).then(data => {
            console.log(data)
            data = JSON.parse(data)
            let alert = $("#email-feedback");
            alert.removeClass('hide');
            alert.html(data.msg);
            if (data.status) {
                document.getElementById('contactForm').reset();
                btn.html("Send message")
            }
        })
    })


    /**
     * Filter through the cards
     */

    $("#event_search #event").keyup(function () {
        let value = $(this).val().toLowerCase();

        $(".portfolio *").filter(function () {
            let text = $(this).text();
            console.log(text);
            $(this).toggle(text.toLowerCase().includes(value));
        })
    });

    /**
    * To send asynchronous HTTP requests
    * @param {string} url Url to which the request is sent
    * @param {Object} data The POST data which will be sent along with the request
    * @returns jqXHR
    */
    function ajax_form_submit(url,form_data = null) {
        let promise = $.ajax({
            url: url,
            method: 'POST',
            data: form_data,
            beforeSend: function () {
                disableBtn(btn);
            },
            success: function () {
                enableBtn(btn);
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

    function disableBtn(btn) {
        btn.attr('disabled',true);
        btn.html('Please wait...');
    }

    function enableBtn(btn) {
        btn.attr('disabled',false);
    }


    /**
     * Gets the data for each from element with attribute 'name'
     * @param {Object} form 
     */
    function getFormData(form) {
        let data = {};

        //Get elements with a _name_ attribute
        form.find('[name]').each(function () {
            let input = $(this),name = input.attr('name'),value = input.val();

            //Insert the form data into the object
            data[name] = value;
        });
        return data;
    }


    /**
     * Displays notification that slides down from the top of the page
     * @param {string} msg
     * @param {string} type
     * @returns {undefined}
     */
    function displayAlert(msg,type) {
        let target = $("#page-feedback");
        let class_ = getClass(target);

        target.removeClass('d-none');
        target.removeClass(class_);
        target.addClass('alert-' + type);

        target.html(msg);
        target.slideDown().delay(6000).slideUp();
    }

    /**
     * Gets the current class that is assigned to the alert div
     * @param {string} target jQuery selector 
     */
    function getClass(target) {
        let classes = ['alert-success','alert-danger','alert-warning'];

        for (let class_ of classes) {
            if (target.hasClass(class_)) {
                return class_;
            }
        }
        return null;
    }
})