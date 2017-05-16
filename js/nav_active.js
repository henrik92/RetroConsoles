//jQuery Skript: Setzt Navigationspunkte auf class="active" wenn geklickt
$("#nav-link").click(function(e){
    e.preventDefault();
   $(this).addClass('active');
   $(this).siblings().each(function(){
        $(this).removeClass('active') ;
    });
  });
