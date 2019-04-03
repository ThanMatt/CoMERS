
$(function () {
  $("#ajax_form_out").submit(function (event) {
    event.preventDefault();

    var form = $(this);

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'timeout/logout',
      data: form.serialize(),
      dataType: 'json',
      success: function (response) {
        if (!response.logged_out) {
          if (response.success) {
            alert("Logout Successful!");
            location.reload();
          } else {
            alert("You are not registered in the event!");
          }
        } else {
          alert("You have already logged out!");
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

