(function ($) {
    "use strict";

    $( function() {
        var $field = $(".password_field");
        var $toggle = $(".passwordSH_toggle");
        var $submit = $(".form_submit");

        // Toggle the field type
        $toggle.on("click", function(e) {
            e && e.preventDefault();
            if ($field.attr("type") == "password") {
            $field.attr("type","text");
            $(e.target).removeClass("fa-eye").addClass("fa-eye-slash");
            } else {
            $(e.target).removeClass("fa-eye-slash").addClass("fa-eye");
            $field.attr("type","password");
            }
        });

        // Set the form field back to a regular password element
        $submit.on( "click", function(e) {
          e && e.preventDefault();
          $field.attr("type","password");
        });
    });


})(jQuery);
