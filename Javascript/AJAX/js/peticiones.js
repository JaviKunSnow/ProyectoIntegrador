$.ajax({
    type: "GET",
    url: `${SERVERSENSORES}?fecha1=${fecha} ${hora}`,
    dataType: "application/json",
    success: function (json) {
        $('<h1/>').text(json.title).appendTo('body');
        $('<div class="content"/>')
            .html(json.html).appendTo('body');
    },
    
    // error: function (jqXHR, status, error) {
    //     alert('Disculpe, existió un problema');
    // },

    // complete: function (jqXHR, status) {
    //     alert('Petición realizada');
    // }
});