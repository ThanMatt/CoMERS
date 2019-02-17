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
        window.location.replace(BASE_URL + 'home/works');
      },
      error: function (response) {
        alert("There was an error generating your template!");
      }
    });
  });

  $('#edit-temp').on('submit', function (e) {
    e.preventDefault();

    var system_id = $('#system-id').val();
    var event_name = $('#event-name').val();

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'generate/edit',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      dataType: 'json',
      success: function (response) {
        alert('Edit successful');
        window.location.replace(BASE_URL + 'home/works');
      },
      error: function (response) {
        alert("There was an error generating your template!");
      }
    });
  });

  $(document).on('click', '.delete-content', function () {

    var delete_buttonID = $(this).attr('id');
    var system_id = delete_buttonID.split("/")[1];

    if (confirm("Deleting this won't undo your actions")) {

      $.ajax({
        type: 'POST',
        url: BASE_URL + 'generate/delete',
        data: {
          system_id: system_id,
        },
        dataType: 'json',
        success: function (response) {
          if (response.success) {
            alert("Deletion successful!");
            location.reload();
          } else {
            alert("There was an error!");
          }
        },
        error: function (response) {
          alert("There was an error");
        }
      });
    }
  });

  $(document).on('click', '.deploy-content', function () {

    var deploy_buttonID = $(this).attr('id');
    var system_id = deploy_buttonID.split("/")[1];

    if (confirm("Your registration will become publicly available. Proceed?")) {

      $.ajax({
        type: 'POST',
        url: BASE_URL + 'generate/deploy',
        data: {
          system_id: system_id,
        },
        dataType: 'json',
        success: function (response) {
          if (response.success) {
            alert("Deployment Successful");
            location.reload();
          } else {
            alert("There was an error!");
          }
        },
        error: function (response) {
          alert("There was an unexpected error");
        }
      });
    }
  });

  $(document).on('click', '.undeploy-content', function () {

    var deploy_buttonID = $(this).attr('id');
    var system_id = deploy_buttonID.split("/")[1];

    if (confirm("Your registration will be closed. Proceed?")) {

      $.ajax({
        type: 'POST',
        url: BASE_URL + 'generate/deploy',
        data: {
          system_id: system_id,
        },
        dataType: 'json',
        success: function (response) {
          if (response.success) {
            alert("Close Successful");
            location.reload();
          } else {
            alert("There was an error!");
          }
        },
        error: function (response) {
          alert("There was an unexpected error");
        }
      });
    }
  });

});