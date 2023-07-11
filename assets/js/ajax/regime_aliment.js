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


$(document).ready(function () {
    $('#ajoutMenu').submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '../B_RegimeAlim_C/ajoutMenu',
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


$(document).ready(function () {
    $('#ajoutmvt').submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '../B_RegimeSport_C/ajoutmvt',
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

$(document).ready(function () {
    $('#ajoutregimeS').submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '../B_RegimeSport_C/ajoutRegimeS',
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


$(document).ready(function () {
    $('#ajoutSport').submit(function (e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: '../B_RegimeSport_C/ajoutSport',
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
