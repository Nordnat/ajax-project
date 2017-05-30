
$( document ).ready(function() {
// --------------------- //
// Data tables
// --------------------- //

    $('.dataTables_filter').find('input[type=search]').addClass('form-control');

// --------------------- //
// Data tables END
// --------------------- //

// --------------------- //
// Validation
// --------------------- //
    $("#mainForm").validate({
        errorElement: 'span',
        highlight: function(element) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-danger');
            $(element).addClass('form-control-danger');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
            $(element).addClass('form-control-success');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element.closest('.form-group'));
        },
        rules: {
            fname: {
                required: true
            },
            lname: {
                required: true
            },
            age: {
                required: true,
                min: 18,
                max: 120
            },
            education: {
                required: true
            },
            gender: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            city: {
                required: true
            },
            street: {
                required: true
            },
            cityPopulation: {
                required: true
            },
            workingYears: {
                required: true
            }
        }
    });
    $("#mainForm .submit").on('click', function(){
        if($("#mainForm").valid()) {
            $("#mainForm").submit();
            $("#mainForm .reset").click();
        }
    });
    $("#mainForm .reset").on('click', function(){
       $("#mainForm .form-group").removeClass('has-success');
       $("#mainForm .form-group").removeClass('has-danger');
       $('span.error').remove();
    });

});
// --------------------- //
// Validation END
// --------------------- //
