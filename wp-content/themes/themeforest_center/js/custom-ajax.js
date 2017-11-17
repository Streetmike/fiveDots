function ajax(request) {

    var data = {
        action: 'my_action',
        id: request
    };

    console.log(data);

    // с версии 2.8 'ajaxurl' всегда определен в админке
    jQuery.post( myajax.ajaxurl, data, function(response) {
        console.log(response);
    });
}