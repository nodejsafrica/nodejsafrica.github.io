$(document).ready(function() {
    $('.artist-slide').slick({
        centerPadding: '60px',
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    console.log("slick");
});

function minTwoDigits(n) {
    return (n < 10 ? '0' : '') + n;
}

function minThreeDigits(n) {
    return (n < 1000 ? '0' : '') + n;
}
// Set the date we're counting down to
var countDownDate = new Date("Aug 6, 2018 17:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // days = minTwoDigits(days);
    days = minTwoDigits(days);
    hours = minTwoDigits(hours);
    minutes = minTwoDigits(minutes);
    seconds = minTwoDigits(seconds);

    // Output the result in an element with id="demo"
    $('#day').html(days);
    $('#hours').html(hours);
    $('#mins').html(minutes);
    $('#secs').html(seconds);
    // document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
    //     minutes + "m " + seconds + "s ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);