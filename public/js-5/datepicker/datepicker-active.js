(function ($) {
    "use strict";

    // Datepickers
    $("#start").datepicker({
        dateFormat: "dd.mm.yy",
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onSelect: function (selectedDate) {
            $("#finish").datepicker("option", "minDate", selectedDate);
        },
    });
    $("#finish").datepicker({
        dateFormat: "dd.mm.yy",
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onSelect: function (selectedDate) {
            $("#start").datepicker("option", "maxDate", selectedDate);
        },
    });

    $("#demo1-upload").change(() => {
		console.log($("#start").val(), $("#finish").val());
        if ($("#start").val() == undefined || $("#finish").val() == undefined) 
            return;
        let date1 = new Date($("#start").val());
        let date2 = new Date($("#finish").val());
        let newdate = date2 - date1;
        let duration = newdate / (1000 * 60 * 60 * 24);
        duration = Math.ceil(duration / 30);
        $("#duration").val(duration);
    });
})(jQuery);
