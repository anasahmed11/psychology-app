$("#change").click(function(){
    $("#red").css('visibility','visible').fadeToggle(1000);
    $("#black").css('visibility','visible').fadeToggle(1200);
    $("#green").css('visibility','visible').fadeToggle(1400);
    $("#blue").css('visibility','visible').fadeToggle(1600);
     $("#purple").css('visibility','visible').fadeToggle(1800);

})
document.getElementById("green").style.visibility = "hidden";
document.getElementById("red").style.visibility = "hidden";
document.getElementById("black").style.visibility = "hidden";
document.getElementById("blue").style.visibility = "hidden";
document.getElementById("purple").style.visibility = "hidden";
$("#red").click(function(){
    $(".overlay").removeClass("o-blue o-black o-green o-purple");
    $(".overlay").addClass("o-red");
    $("#menu-toggle").addClass("red");
    $("#menu-toggle").removeClass("black green azure purple");
})
$("#black").click(function(){
    $(".overlay").removeClass("o-blue o-red o-green o-purple");
    $(".overlay").addClass("o-black");
    $("#menu-toggle").addClass("black");
    $("#menu-toggle").removeClass("red green azure purple");
})
$("#blue").click(function(){
    $(".overlay").removeClass("o-red o-black o-green o-purple");
    $(".overlay").addClass("o-blue");
    $("#menu-toggle").addClass("azure");
    $("#menu-toggle").removeClass("black green red purple");
})
$("#green").click(function(){
    $(".overlay").removeClass("o-blue o-black o-red o-purple");
    $(".overlay").addClass("o-green");
    $("#menu-toggle").addClass("green");
    $("#menu-toggle").removeClass("black red azure purple");
})
$("#purple").click(function(){
    $(".overlay").removeClass("o-blue o-black o-red o-green");
    $(".overlay").addClass("o-purple");
    $("#menu-toggle").addClass("purple");
    $("#menu-toggle").removeClass("black red azure green");
})
$("#edit").click(function(){
   $("#type-edit").val($(this).data('title'));

})
