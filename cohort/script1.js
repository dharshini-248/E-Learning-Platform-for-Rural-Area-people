$(document).ready(function() {

    $('#menu').click(function() {
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $('#login').click(function() {
        $('.login-form').addClass('popup');
    });

    $('.login-form form .fa-times').click(function() {
        $('.login-form').removeClass('popup');
    });

    $('#logout').click(function() {
        $('.logout-form').addClass('popup');
    });

    $('.logout-form form .fa-times').click(function() {
        $('.logout-form').removeClass('popup');
    });


    $('#register').click(function() {
        $('.register-form').addClass('popup');
    });

    $('.register-form form .fa-times').click(function() {
        $('.register-form').removeClass('popup');
    });


    //for adding a link through JavaScript for login
    let anchor = document.createElement("a");
    anchor.href = "page2.html";
    anchor.innerText = "Login"; //optional
    console.log(anchor)
    let to_add = document.getElementById("login")
    to_add.appendChild(anchor)




    $(window).on('load scroll', function() {

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        $('.login-form').removeClass('popup');
        $('.register-form').removeClass('popup');
        $('.logoutr-form').removeClass('popup');

        $('section').each(function() {

            let top = $(window).scrollTop();
            let height = $(this).height();
            let id = $(this).attr('id');
            let offset = $(this).offset().top - 200;

            if (top > offset && top < offset + height) {
                $('.navbar ul li a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');
            }


        });

    });

});