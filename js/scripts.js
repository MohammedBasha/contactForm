$(function() {

    'use strict';

    var usernameError = true,
        emailError = true,
        messageError = true;

    // Validate the username field
    $('#username').blur(function() {
        if ($(this).val().length <=2) {
            $(this).css('border', '1px solid #ec0b0b').next('i').fadeIn(100);
            $('.error-username').fadeIn(100);
            usernameError = true;
        } else {
            $(this).css('border', '1px solid green').next('i').fadeOut(100);
            $('.error-username').fadeOut(100);
            usernameError = false;
        }
    });

    // Validate the email field
    $('#email').blur(function() {
        if ($(this).val() === '') {
            $(this).css('border', '1px solid #ec0b0b').next('i').fadeIn(100);
            $('.error-email').fadeIn(100);
            emailError = true;
        } else {
            $(this).css('border', '1px solid green').next('i').fadeOut(100);
            $('.error-email').fadeOut(100);
            emailError = false;
        }
    });

    // Validate the message field
    $('#message').blur(function() {
        if ($(this).val().length <= 9) {
            $(this).css('border', '1px solid #ec0b0b').next('i').fadeIn(100);
            $('.error-message').fadeIn(100);
            messageError = true;
        } else {
            $(this).css('border', '1px solid green').next('i').fadeOut(100);
            $('.error-message').fadeOut(100);
            messageError = false;
        }
    });

    $('#form-contact').submit(function(e) {
        if (usernameError === true) {
            e.preventDefault();
            $('#username').blur();
        }

        if (emailError === true) {
            e.preventDefault();
            $('#email').blur();
        }

        if (messageError === true) {
            e.preventDefault();
            $('#message').blur();
        }
    });
});