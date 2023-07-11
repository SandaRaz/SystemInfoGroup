$(document).ready(function () {
    $('#ajoutRepas').submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '../B_RegimeAlim_C/ajoutRepas',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function (response) {
                if (response.error) {
                    alert(response.error);
                } else {
                    $('input[name="nom"]').val('');
                    $('input[name="calorie"]').val('');
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});