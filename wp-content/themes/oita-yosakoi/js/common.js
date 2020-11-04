$(function(){
    $("#question-list dt").on("click", function() {
    $(this).next().slideToggle();
    });
});