

$(document).ready(function () {
    // Hover effect on favourite star
    $('.favourites_link').mouseenter(
        function () {
            $('.favourites_link:hover .bottom').hide();
            $('.favourites_link:hover .top').show();
        }
    );

    $('.favourites_link').mouseleave(
        function () {
            $('.favourites_link .bottom').show();
            $('.favourites_link .top').hide();
        }
    );

    // Hover effect on home button
    $('.koop-back').mouseenter(
        function () {
            $('.koop-back .top').css('opacity', '0');
        }
    );

    $('.koop-back').mouseleave(
        function () {
            $('.koop-back .top').css('opacity', '100');
        }
    );
});