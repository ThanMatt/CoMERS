$(function () {

  registoggle();
  hideJIC();
  checkboxtest();

  function registoggle() {

    $('#manual').on("click", function () {
      $(".right-container").css("width", "100%");
      $("#back").css("opacity", "1");
      $(this).css("opacity", "0");
      $(".right-content").css("display", "none");
      $('.register').css("display", "flex");
      $("input[type=submit").css("opacity", "0");
      $("#txt_snum").attr("disabled", "disabled");
      $("#txt_snum").removeAttr("placeholder");
      $("#txt_snum").val("");
    });

    $("#back").on("click", function () {
      $(this).css("opacity", "0");
      $("#manual").css("opacity", "1");
      $(".right-container").css("width", "40%");
      $(".right-content").css("display", "flex");
      $('.register').css("display", "none");
      $("input[type=submit]").css("opacity", "1");
      $("#txt_snum").removeAttr("disabled");
      $("#txt_snum").attr("placeholder", "Enter Student Number...");
      $("#fname").val("");
      $("#mi").val("");
      $("#lname").val("");
      $("#txt_snum2").val("");
    });

  }

  function hideJIC() {
    $("#just-in-case").css("display", "none");
  }

  function checkboxtest() {

    $("input[type=checkbox]").on("click", function () {
      $(".no-dept").toggle();
      $("#just-in-case").toggle();
    });

  }

  //To check user input
  $('#ajax-form-id').submit(function (event) {
    event.preventDefault();
    var form = $(this);

    $.ajax({
      type: 'POST',
      url: BASE_URL + 'register/id',
      data: form.serialize(),
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          alert("You've successfully logged in!");
          $('#txt_snum').val('');
        } else {
          var student_id = response.student_id;
          alert("Your student number is not yet registered! Kindly fill-up the following fields after clicking OK");
          $(".right-container").css("width", "100%");
          $("#back").css("opacity", "1");
          $("#manual").css("opacity", "0");
          $(".right-content").css("display", "none");
          $('.register').css("display", "flex");
          $("input[type=submit").css("opacity", "0");
          $("#txt_snum").val("");
          $("#txt_snum").attr("disabled", "disabled");
          $("#txt_snum").removeAttr("placeholder");
          $("#txt_snum2").val(student_id);
        }
      },
      error: function (response) {
        alert('THERE WAS AN UNEXPECTED ERROR');
      }

    });
  });



});