
$("document").ready(function(){
  $("#js-ajax-php-json").submit(function(){
    var data = {
      "action": "test"
    };
    data = $(this).serialize() + "&" + $.param(data);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "res.php", //Relative or absolute path to response.php file
      data: data,
      success: function(data) {
        $("#the-return").html(
          "Favorite beverage: " + data["abc"]
        );

        //alert("Form submitted successfully.\nReturned json: " + data["json"]);
      }
    });
    return false;
  });
});