$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function(xhr) {
            $('form').find('button[type="submit"],input[type="submit"]').attr('disabled',
                'disabled');
        },
        complete: function(xhr) {
            setTimeout(() => {
                $('form').find('button[type="submit"],input[type="submit"]').removeAttr('disabled');                        
            }, 5000);
        },
    });
});
var ret = {};
function ajaxForm(formdata,form='form') {
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
function sendRequest(detail,isLoader=false) {
  $.ajax({
    url: detail.url,
    type: detail.method,
    data: detail,
    beforeSend: function(){
      if(isLoader){
        $('#loader-spinner').css('display', 'inline-block !important');
      }
    },
    async: false,
    dataType: "json",
    success: function (response) {
      window.ret = response;
    },
    complete:function(){
      if(isLoader){
        $('#loader-spinner').css('display', 'none !important');
      }
    },
    error: function (request, status, error) {
        alert(request.responseText);
    }
  });
  return window.ret;
}
function ajaxReq(detail) {
  var msg = "Something Goes Wrong";
  $.ajax({
    url: detail.url,
    type: detail.method,
    data: detail,
    async: false,
    dataType: "json",
    success: function (response) {
      if (response.success == false || response.success == true) {
        if (response.success) {
          Swal.fire({
            title: "",
            text: response.msg,
            icon: "success",
            showCancelButton: false,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "OK",
            timer: 2000
          }).then((result) => {
            if(response.url != undefined){
              if (result.isConfirmed) {
                window.location.href = response.url;
              }
              if (result.dismiss === swal.DismissReason.timer) {
                location.reload();
              }
            }
            window.ret = response;
          });
        } else {
          var msg =
            response.msg == undefined ? "Something Goes Wrong" : response.msg;
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: msg,
          });
        }
      }
    },
    error: function (e) {
      console.log(e);
    },
  });
  return window.ret;
}
function swalFun(request, opps = "Oops...", check = false) {
  if (request.error == true) {
    Swal.fire({
      icon: "error",
      title: opps,
      text: request.message,
    });
  } else if (request.success == true) {
    Swal.fire({
      icon: "success",
      title: request.message,
    }).then((result) => {
      if (result.isConfirmed) {
        if(request.url!== 'undefined')
        {
          window.location.href = request.url;
        }
        return true;
      } else {
        window.location.href = request.url;
      }
    });
  } else if (request.edit == true || request.delete == true) {
    Swal.fire({
      title: request.message,
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: request.action,
      cancelButtonText: request.cancelButtonText != undefined?request.cancelButtonText:"No",
    }).then((result) => {
      if (result.isConfirmed) {
        if (request.edit == true) {
          window.location.href = request.url;
        } else {
          var id = $(this).data("id");
          var detail = {};
          detail.url = request.url;
          detail.method = "get";
          ajaxReq(detail);
        }
        /* setTimeout(function() {
                    location.reload();
                }, 5000); */
      } else {
        if (check != false) {
          $("#" + check).prop("checked", true);
        }
      }
    });
  }
}
function autoRedirect(request)
{
    Swal.fire({
      icon: "success",
      title: request.message,
    });
    setTimeout(function() {
        window.location=request.url;
    },1000);
}
