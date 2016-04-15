$('.open-search-mobile').click(function(){
   if($('.search-mobile').is(":visible")){
      $('.search-mobile').animate({ width: "toggle" });
      $('.topo').css('margin-top', '0px');
   }else{
      $('.search-mobile').animate({ width: "toggle" });
      $('.topo').css('margin-top', '45px');
   }
});
$('.close-search-mobile').click(function(){
   $('.search-mobile').animate({ width: "toggle" });
   $('.topo').css('margin-top', '0px');
});

$(document).ready(function () {
    $('.titulo-menu-lateral').click(function(){
        if ($(this).attr('class') != 'active'){
            $('.menu-lateral').slideUp();
            $(this).next('.menu-lateral').slideToggle();
            $('.menu-lateral li').removeClass('active');
            $(this).addClass('active');
        }
    });
});