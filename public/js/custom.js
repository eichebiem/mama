$(document).ready(function(){

    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight: function(element) {
            $(element)
                .closest('.form-group')
                .addClass('has-error');
        },
        unhighlight: function(element) {
            $(element)
                .closest('.form-group')
                .removeClass('has-error');
        },
        errorPlacement: function (error, element) {
            if (element.prop('type') === 'checkbox') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $.validator.addMethod("valid_email", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/.test( value );
    }, 'Please enter a valid email address.');

    $.validator.addMethod("valid_number", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[0-9]*$/.test( value );
    }, 'Please enter numbers only.');


    $('#form').validate({

        rules: {
            company_name: {
                required: true
            },
            company_address: {
                required: true
            },
            company_email: {
                required: true,
                valid_email: true
            },
            company_tel: {
                minlength: 14
            },
            participants: {
                required: true,
                valid_number: true
            },
            contact_person: {
                required: true
            },
            contact_number: {
                required: true,
                minlength: 13
            },
            contact_designation: {
                required: true
            },
            contact_department: {
                required: true
            },
            course: {
                required: true
            },
            ewan: {
                required: true
            },
            days: {
                required: true
            },



            client_name: {
                required: true
            },
            client_address: {
                required: true
            },
            client_email: {
                required: true,
                valid_email: true
            },
            client_tel: {
                minlength: 14
            },
            research_title: {
                minlength: 8
            },
            stats_procedure: {
                minlength: 8
            },
            research_class: {
                required: true
            },

            username: {
                required: true,
            },
            password: {
                required: true
            },

            title: {
                required: true
            },
            body: {
                required: true
            }

        },

        messages: {

            course: {
                required: "Please select one course"
            },
            ewan: {
                required: "Please select one ewan"
            },
            days: {
                required: "Please select one"
            },
            contact_number: {
                minlength: "Invalid contact number"
            },
            company_tel: {
                minlength: "Invalid telephone number"
            },


            client_tel: {
                minlength: "Invalid telephone number"
            },
            class: {
                required: "Please select one"
            }
            
        },

        submitHandler: function(form){
            form.submit();
        }

    });


    // Input mask
    $('#contact_number').mask('0000-000-0000');
    $('#company_tel').mask('(000) 000-0000');
    $('#client_tel').mask('(000) 000-0000');


    // make check boxes behave like radio button
    $(".course").change(function() {
        $(".course").prop('checked', false);
        $(this).prop('checked', true);
    });


    $(".ewan").change(function() {
        $(".ewan").prop('checked', false);
        $(this).prop('checked', true);
    });


    $(".days").change(function() {
        $(".days").prop('checked', false);
        $(this).prop('checked', true);
    });


    $('.ewan').change(function () {
        //check if checkbox is checked
        if ($('#inter').is(':checked')) {

            $('.days').removeAttr('disabled'); //enable input

        } else {
            $('.days').removeAttr('checked');
            $('.days').attr('disabled', true); //disable input
        }
    });


    $(".research_class").change(function() {
        $(".research_class").prop('checked', false);
        $(this).prop('checked', true);
    });
    

});


