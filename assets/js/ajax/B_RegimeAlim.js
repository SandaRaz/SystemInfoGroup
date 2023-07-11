$(document).ready(function() {
    $('#ajoutPlat').submit(function(e) {
      e.preventDefault();
      
      var formData = $(this).serialize();
      
      $.ajax({
        url: '../B_RegimeAlim_C/ajoutPlat',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
          if (response.error) {
            alert(response.error);
          } else {
            $('input[name="nom"]').val('');
            $('input[name="calorie"]').val(''); 
          }
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
  });

  

  $(document).ready(function() {
    $('#ajoutRegime').submit(function(e) {
      e.preventDefault();
      
      var formData = $(this).serialize();
      
      $.ajax({
        url: '../B_RegimeAlim_C/ajoutRegime',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function(response) {
          if (response.error) {
            alert(response.error);
          } else {
            $('input[name="nom"]').val('');
            $('input[name="calorie"]').val(''); 
          }
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
        }
      });
    });
  });