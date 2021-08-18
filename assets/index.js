$(document).ready(function () {
    $('.study_link').mouseenter(
        function () {
            $('#study_txt').css('background-color', '#28497c');
            $('#study_b').css('color', 'white');
        }
    );

    $('.study_link').mouseleave(
        function () {
            $('#study_txt').css('background-color', 'white');
            $('#study_b').css('color', '#28497C');
        }
    );

    $('.subjects_link').mouseenter(
        function () {
            $('#subjects_txt').css('background-color', '#28497c');
            $('#subjects_b').css('color', 'white');
        }
    );

    $('.subjects_link').mouseleave(
        function () {
            $('#subjects_txt').css('background-color', 'white');
            $('#subjects_b').css('color', '#28497C');
        }
    );

    $('.media_link').mouseenter(
        function () {
            $('#media_txt').css('background-color', '#28497c');
            $('#media_b').css('color', 'white');
        }
    );

    $('.media_link').mouseleave(
        function () {
            $('#media_txt').css('background-color', 'white');
            $('#media_b').css('color', '#28497C');
        }
    );

    $('.practice_link').mouseenter(
        function () {
            $('#practice_txt').css('background-color', '#28497c');
            $('#practice_b').css('color', 'white');
        }
    );

    $('.practice_link').mouseleave(
        function () {
            $('#practice_txt').css('background-color', 'white');
            $('#practice_b').css('color', '#28497C');
        }
    );
});