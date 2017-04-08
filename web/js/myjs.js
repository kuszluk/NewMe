
// Zmiana kolorystyki strony
$('.menu a').click(function() {

    if ($(this).attr('data-skin')) {
        $(document.body).removeClass();
        $(document.body).addClass($(this).attr('data-skin'));
    }

});
