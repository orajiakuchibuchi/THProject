(function ($) {
    'use strict';


    $(".menu__triger").on("click", function(){
        $("body").toggleClass("has-sidebar");
    })

    $( ".datepicker" ).datepicker({
            dateFormat: "dd-mm-yy",   
            duration: "fast",
            changeMonth: true,
            changeYear: true
    });

    $('.date').datepicker({
        onSelect: function (fd, d, calendar) {
                calendar.hide()
        }
    })







    $(".act-btn--more").on("click", function () {
        $(this).parent().find("div").slideToggle();
    })




    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });

    $("#cardNumber").on("click", function(){
        $('#cardModal').modal('show'); 
        $("#te").remove();
        $(this).attr("value", "455855585855587");
        $("#customerPhoneNumber").val("");
        $("#customerPhoneNumber").attr("disabled", true);
    })


    


    $(".rdAcType").on("change", function(){
        var selValue = $('.rdAcType:checked').val();
        if(selValue == "number") {
            $("#cpn").show();
            $("#ccn").hide();
        }
        else if(selValue == "card") {
            $("#ccn").show();
            $("#cpn").hide();
        }
    });






})(jQuery);


