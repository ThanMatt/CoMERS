$(function () {
  $("#ajax_form").submit(function (event) {
    event.preventDefault();

    var form = $(this);

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'accounts/login',
      data: form.serialize(),
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          window.location.replace("home");
        } else {
          $("#login_btn").effect("shake");
        }
      },
      error: function (response) {
        $("#login_btn").effect("shake");
      },
    });
  });
});