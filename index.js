$(document).ready(function(){
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items:1
    });

    //  Top sale Owl carousel

    $("#top-sale .owl-carousel") .owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0:{
                items:1
            },
            600:{
                items: 3
            },
            1000:{
                items : 5
            }
        }
    });

    // ISO TOP filter
    
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // filter items on button click
    
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    })

});

// PS4 Owl Carousel

$("#PS4 .owl-carousel") .owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
        0:{
            items:1
        },
        600:{
            items: 3
        },
        1000:{
            items : 5
        }
    }
});

// Blogs owl carousel
$("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
        0:{
            items:1
        },
        600:{
            items: 3
        }
    }

});

// Product section

let $qty_up = $(".qty-up");
let $qty_down = $(".qty-down");
// let $input = $(".qty_input");

// clickevent up button

$qty_up.click(function(e){
    let $input = $(`.qty_input[data-id= '${$(this).data("id")}']`);
    if($input.val()>=1 && $input.val()<=9){
        $input.val(function(i,oldval){
            return ++oldval;
        })
    }
});

// clickevent down button

$qty_down.click(function(e){
    let $input = $(`.qty_input[data-id= '${$(this).data("id")}']`);
    if($input.val()>1 && $input.val()<=10){
        $input.val(function(i,oldval){
            return --oldval;
        })
    }
});

var iprice = document.getElementByClass('iprice');
var iquantity = document.getElementByClass('iquantity');
var itotal = document.getElementByClass('itotal');

function subTotal(){
  for(i=0;i<iprice.length;i++){
    itotal[i].innerText = (iprice[i].value)*(iquantity[i].value); 
  }
}

subTotal();



