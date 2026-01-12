const submitContactForm = () => {
    const form = $('#contact-us-form');
    const email = $('#email-input');
    const emailError = $('#email-error');
    const contactName = $('#contact-name-input');
    const contactNameError = $('#contact-name-error');
    const business = $('#business-input');
    const businessError = $('#business-error');
    const message = $('#message-input');
    const messageError = $('#message-error');

    email.removeClass('is-invalid')
    emailError.text('')
    contactName.removeClass('is-invalid')
    contactNameError.text('')
    business.removeClass('is-invalid')
    businessError.text('')
    message.removeClass('is-invalid')
    messageError.text('')

    let result = true

    if (validator.isEmpty(contactName.val())) {
        contactName.addClass('is-invalid')
        $(contactNameError.text('Please provide a valid contact name'))
        result = false
    }
    if (!validator.isLength(contactName.val(), {max: 100})) {
        contactName.addClass('is-invalid')
        $(contactNameError.text('Max length of field is 100 symbols'))
        result = false
    }
    if (!validator.isEmail(email.val())) {
        email.addClass('is-invalid')
        $(emailError.text('Please provide a valid email'))
        result = false
    }
    if (!validator.isLength(business.val(), {max: 200})) {
        business.addClass('is-invalid')
        $(businessError.text('Max length of field is 200 symbols'))
        result = false
    }
    if (!validator.isLength(message.val(), {max: 500})) {
        message.addClass('is-invalid')
        $(messageError.text('Max length of field is 500 symbols'))
        result = false
    }
console.log(form.serialize())
    if (!result) {
        return false
    }

    const responseError = $('#response-error')
    const responseSuccess = $('#response-success')

    $.ajax({
        url: form.attr('action'),
        type: 'post',
        dataType: "json",
        data: form.serialize(),
        // processData: false,
        // contentType: false,
        success: function (response) {
            form.hide()
            responseError.html('')
            responseSuccess.html(response.success)
        },
        error: function (error) {
            if (error && error.responseJSON && error.responseJSON.errors) {
                const err = error.responseJSON.errors
                for (const k in err) {
                    responseError.html(err[k])
                }
            }
        }
    });

    return false
}
