// Slider de la home
jQuery(document).ready(function(){
    $('#slider-home').slick({
        dots: true,
        infinite: true,
        centerMode: true,
        centerPadding: '100px',
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: "<div class='slick-prev'><img src='assets/img/fleche-slider-prev.svg'></div>",
        nextArrow: "<div class='slick-next'><img src='assets/img/fleche-slider-next.svg'></div>",
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                centerPadding: '20px',
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                centerPadding: '10px',
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
    });
});

// Ahref des blocs pour le SEO
$(document).on('click', '.link-finder', function() {
    window.location.href = $(this).find('a').attr('href');
});

// Bibliothèque d'ajustement des blocs du slider
$(document).ready(() => {
    
    function ajustSize(selector, container = '.products') {
        $(container).each(function () {
            let el = $(this).find(selector);
            let maxHeight = 0;
            el.each(function () {
                $(this).css('height', '');
                let thisH = $(this).outerHeight();
                if (thisH > maxHeight) {
                    maxHeight = thisH;
                }
            });
            el.css('height', maxHeight + 'px');
        });
    }
    ajustSize('', '');
});


