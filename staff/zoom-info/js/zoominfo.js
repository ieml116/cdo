$(document).ready(function () {
    $('.galleryImage').toggle(
        function () {

            $(this).find('img').animate({width:81, height:60, marginTop:5, marginLeft:5}, 500);

        },
        function () {

            $(this).find('img').animate({width:245, height:180, marginTop:0, marginLeft:0}, 300);

        });
});

                       
                   