$("#demo1-upload").change(() => {
    if ($("#start").val() == undefined || $("#finish").val() == undefined)
        return;
    let date1 = new Date($("#start").val());
    let date2 = new Date($("#finish").val());
    let newdate = date2 - date1;
    let duration = newdate / (1000 * 60 * 60 * 24);
    duration = Math.ceil(duration / 30);
    $("#duration").val(duration);
});
