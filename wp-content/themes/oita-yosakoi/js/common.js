$(function(){
    $("#question-list dt").on("click", function() {
    $(this).next().slideToggle();
    });
    $("#question-list dt").click(function(){
        if($(this).children().hasClass('opened')){
            $(this).children().removeClass('opened')
        }else{
            $(this).children().addClass('opened')
        };
     });
});