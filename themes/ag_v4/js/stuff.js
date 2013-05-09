jQuery(function($) {

    // Something happens
  $("a.open-form").on("click", function() {

    // State changes
    $("body").toggleClass("dialogIsOpen");

  });

});