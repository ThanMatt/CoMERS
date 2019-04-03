$(function () {
  $("#ajax_form").submit(function (event) {
    event.preventDefault();

    var form = $(this);

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'register',
      data: form.serialize(),
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          alert("Registration Successful!");
          location.reload();
        } else {
          alert("There was an error");
          location.reload();
        }
      },
      error: function (response) {
        alert("There was an UNEXPECTED error");
        // location.reload();
      },
    });
  });
  

  $("#ajax_form_id").submit(function (event) {
    event.preventDefault();

    var form = $(this);

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'register',
      data: form.serialize(),
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          alert("Registration Successful!");
          location.reload();
        } else {
          alert("There was an error");
          location.reload();
        }
      },
      error: function (response) {
        alert("There was an UNEXPECTED error");
        // location.reload();
      },
    });
  });
});