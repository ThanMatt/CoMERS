$(function () {
  $('#edit-regis').submit(function(e) {
    e.preventDefault();

    var register_name = $('#regis-name').val();

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'generate',
      data: $(this).serialize(),
      dataType: 'json',
      success: function(response) {
        alert('Generation successful');
        window.location.replace(BASE_URL + 'registration/' + register_name.toLowerCase() + '/' + response.id);
      },
      error: function(response) {
        alert("There was an error generating your template!");
      }
    });

  });
});