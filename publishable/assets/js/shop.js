$(document).ready(function(){
    var url = document.URL;
    if (url.slice(-1) == '#'){
        url = url.substr(0,url.length-1);
    }
    //console.log('url:' + url);
    //$('#top-cart').load("{{url('api/page/loadTopCart')}}");
    $('.add-to-cart').click(function(event){
        event.preventDefault();
        var item_id = $(this).attr('href');
        //console.log(url + 'api/shop/addCart?id=' + item_id + "&qty=1");
        $.ajax({
            type: "get",
            url: url + 'api/shop/addCart?id=' + item_id + "&qty=1",
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

    jQuery('[data-lightbox="ajax"]').on('mfpClose', function(e) {
        //console.log('lightbox close');
        location.reload();
        //$('#top-cart').load("{{url('api/page/loadTopCart')}}");
    });
});