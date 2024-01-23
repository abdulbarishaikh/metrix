var ret = {};
function ajaxForm(formdata, form = "form") {
    $.ajax({
        url: $(form).attr("action"),
        type: $(form).attr("method"),
        contentType: false,
        processData: false,
        async: false,
        data: formdata,
        dataType: "json",
        success: function (response) {
            if (response.success == false || response.success == true) {
                window.ret = response;
            } else if (response.msg) {
                window.ret = response;
            }
            //$("#form").trigger("reset");
        },
        error: function (e) {
            console.log(e);
        },
    });
    return window.ret;
}
