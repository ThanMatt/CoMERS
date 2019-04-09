$(document).ready(function(){
    
    tostudentnum();
    
    function tostudentnum(){
        
        $(".studentnum").on("click", function(){
            $(".form-container-student").toggleClass('show');
            $(".form-container").toggleClass('hide');
        });
        
    }
});