$(document).ready(function () {

    $('#menu').click(function () {
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

});

 // <!-- typed js effect starts -->
 var typed = new Typed(".typing-text", {
    strings: ["create the perfect home", "create the perfect home", "elevate your lifestyle"],
    loop: true,
    typeSpeed: 60,
    backSpeed: 30,
    backDelay: 500,
});
// <!-- typed js effect ends -->