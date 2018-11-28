$(function () {
  $('#edit-regis').on('submit', function (e) {
    e.preventDefault();

    var register_name = $('#regis-name').val();
    var event_name = $('#event-name').val();

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'generate',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
        alert('Generation successful');
        window.location.replace(BASE_URL + 'registration/' + register_name.toLowerCase() + '/' + response.id);
      },
      error: function (response) {
        alert("There was an error generating your template!");
      }
    });
  });

});