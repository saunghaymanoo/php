$(".show-sidebar-btn").click(function(){
    console.log("click");
    $(".sidebar").animate({marginLeft:0});
    
});
$(".hide-sidebar-btn").click(function(){
    console.log("click");
    $(".sidebar").animate({marginLeft:"-100%"});
    
});
function go(url){
    setTimeout(function(){
        location.href=`${url}`;
    },500);
}
$(function () {
    $('[data-toggle="popover"]').popover()
  })

$(".full-screen-btn").click(function(){
    let current=$(this).closest(".card");
    current.toggleClass("full-screen-card");
    console.log(current.hasClass("full-screen-card"));
    if(current.hasClass("full-screen-card")){
        $(this).html(`<i class="feather-minimize-2"></i>`);
    }else{
        $(this).html(`<i class="feather-maximize-2"></i>`);
    }
})

// $(document).ready(function() {
//     $('#List').DataTable();
// } );

let screenHeight=$(window).height();
let currentMenuHeight=$(".nav-menu .active").offset().top;

if(currentMenuHeight>screenHeight*0.8){
    $(".sidebar").animate({
        scrollTop:currentMenuHeight

    },1000)
}


        