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