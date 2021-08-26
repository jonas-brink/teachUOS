$(document).ready(function () {
    $('.study_link').mouseenter(
        function () {
            $('#study_txt').css('background-color', '#28497c');
            $('#study_b').css('color', 'white');
            $('a.hover_image img.top.study_link').css('opacity', 0);
        }
    );

    $('.study_link').mouseleave(
        function () {
            $('#study_txt').css('background-color', 'white');
            $('#study_b').css('color', '#28497C');
            $('a.hover_image img.top.study_link').css('opacity', 100);
        }
    );

    $('.subjects_link').mouseenter(
        function () {
            $('#subjects_txt').css('background-color', '#28497c');
            $('#subjects_b').css('color', 'white');
            $('a.hover_image img.top.subjects_link').css('opacity', 0);
        }
    );

    $('.subjects_link').mouseleave(
        function () {
            $('#subjects_txt').css('background-color', 'white');
            $('#subjects_b').css('color', '#28497C');
            $('a.hover_image img.top.subjects_link').css('opacity', 100);
        }
    );

    $('.media_link').mouseenter(
        function () {
            $('#media_txt').css('background-color', '#28497c');
            $('#media_b').css('color', 'white');
            $('a.hover_image img.top.media_link').css('opacity', 0);
        }
    );

    $('.media_link').mouseleave(
        function () {
            $('#media_txt').css('background-color', 'white');
            $('#media_b').css('color', '#28497C');
            $('a.hover_image img.top.media_link').css('opacity', 100);
        }
    );

    $('.practice_link').mouseenter(
        function () {
            $('#practice_txt').css('background-color', '#28497c');
            $('#practice_b').css('color', 'white');
            $('a.hover_image img.top.practice_link').css('opacity', 0);
        }
    );

    $('.practice_link').mouseleave(
        function () {
            $('#practice_txt').css('background-color', 'white');
            $('#practice_b').css('color', '#28497C');
            $('a.hover_image img.top.practice_link').css('opacity', 100);
        }
    );
});