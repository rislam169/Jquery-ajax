$(document).ready(function() {
  //Check username availabity

  $("#username").blur(function() {
    var username = $(this).val();
    $.ajax({
      url: "check/checkuser.php",
      method: "POST",
      data: {
        username: username
      },
      datatype: "text",
      success: function(data) {
        $("#userstatus").html(data);
      }
    });
  });

  //Auto Complete Textbox
  $("#skill").keyup(function() {
    var skill = $(this).val();
    if (skill != "") {
      $.ajax({
        url: "check/checkskill.php",
        method: "POST",
        data: {
          skill: skill
        },
        dataType: "text",
        success: function(data) {
          $("#statusskill").fadeIn();
          $("#statusskill").html(data);
        }
      });
    }
  });

  $(document).on("click", "li", function() {
    $("#skill").val($(this).text());
    $("#statusskill").fadeOut();
  });

  //Show Password Button

  $("#button").on("click", function() {
    var pass = $("#password");
    var fieldType = pass.attr("type");
    if (fieldType == "password") {
      var fieldType = pass.attr("type", "text");
      $(this).text("Hide password");
    } else {
      var fieldType = pass.attr("type", "password");
      $(this).text("Show password");
    }
  });

  // Auto Refresh div Content

  $("#autorefresh").click(function() {
    var content = $("#body").val();
    if (content != "") {
      $.ajax({
        url: "check/checkrefresh.php",
        method: "POST",
        data: { body: content },
        dataType: "text",
        success: function() {
          $("#body").val("");
        }
      });
      return false;
    }
  });

  setInterval(function() {
    $("#autoshow")
      .load("check/getrefresh.php")
      .fadeIn();
  }, 1000);

  //Live Search
  $("#keyword").keyup(function() {
    var word = $(this).val();
    if (word != "") {
      $.ajax({
        url: "check/livesearch.php",
        method: "POST",
        data: {
          content: word
        },
        dataType: "text",
        success: function(data) {
          $("#liveshow").fadeIn();
          $("#liveshow").html(data);
        }
      });
    } else {
      $("#liveshow").html("");
    }
  });
});
