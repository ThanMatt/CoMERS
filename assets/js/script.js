$(document).ready(function(){
    
    parallaxscroll();
    
    function parallaxscroll(){
        
        $(window).scroll(function(){
            
            var vscroll = $(this).scrollTop();
            
            $(".title").css({
                'transform' : 'translate(0px, '+ vscroll/10 +'%)'
            });
            
            $(".lantern1").css({
                'transform' : 'translate(0px, '+ vscroll/5 +'%)'
            });
            
            $(".lantern2").css({
                'transform' : 'translate(0px, -'+ vscroll/10 +'%)'
            });
            
        });
        
    }
    
});