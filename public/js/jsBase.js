/**
 * Created by louis on 24.11.16.
 */

function  postFrom(data, url, type, dataType) {

    console.log(data);

    var request = $.ajax({
        url: url,
        method:type,
        data: data,
        dataType: dataType
    });

    request.done(function( msg ) {
        AjaxCallBack(msg);
    });

    request.fail(function( jqXHR, textStatus ) {
        AjaxFaillCallBack( jqXHR, textStatus );
    });


}

/*
$("#submintRequest").on("click", function (e) {
    e.stopPropagation();
  var data = $("#contactForm").serializeObject();
    postFrom(data, "/contactus", "POST", "JSON");

});
*/
function AjaxCallBack(data) {
    console.log(data);
}


function AjaxFaillCallBack( jqXHR, textStatus ) {
     var data = jqXHR.responseText;

    console.log( "Request failed: " + data );
}




$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

