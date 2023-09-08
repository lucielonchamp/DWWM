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
            ]
    });

    $('#slider-product').slick({
        dots: true,
        infinite: true,
        centerMode: true,
        centerPadding: '100px',
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: "<div class='slick-prev'><img src='../assets/img/fleche-slider-prev.svg'></div>",
        nextArrow: "<div class='slick-next'><img src='../assets/img/fleche-slider-next.svg'></div>",
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
            ]
    });
});

$(document).on('click', '.link-finder', function() {
    window.location.href = $(this).find('a').attr('href');
});

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


function movePriceBlock() {
    if ($(window).width() < 992){
        $('.product-block1 .infos').insertAfter($('.product-block1 .background'));
    } else if ($(window).width() >= 992) {
        $('.product-block1 .infos').insertAfter($('.product-block1 .product-block1_title-content .h2'));
    }
}

$(window).resize(function(){
    movePriceBlock();
    addTableResponsive();
    moveAddAdresses();
});

$(document).ready(function(){
    movePriceBlock();
    addTableResponsive();
    moveAddAdresses();
});

const arrowFilter = document.querySelector(".filter-arrow");
const searchForm = document.querySelector("#search-form");

arrowFilter.addEventListener("click", () => {
    searchForm.classList.toggle('active');
    arrowFilter.style.rotate = '180deg';
    arrowFilter.style.transition = '0.3s';
    if (!searchForm.classList.contains('active')) {
        arrowFilter.style.rotate = '0deg';
    }
});

document.addEventListener("click", function(event) {
    if (!searchForm.contains(event.target) && !arrowFilter.contains(event.target)) {
        searchForm.classList.remove("active");
        arrowFilter.style.rotate = '0deg';
    }
});

function addTableResponsive() {
    if ($(window).width() < 992){
        $('.cart .cart-table').addClass('table-responsive');
        $('.command .command-table').addClass('table-responsive');
    } else if ($(window).width() >= 992) {
        $('.cart .cart-table').removeClass('table-responsive');
        $('.command .command-table').removeClass('table-responsive');
    }
};

function moveAddAdresses() {
    $('.add-address').insertAfter($('#order_addresses'));
};
