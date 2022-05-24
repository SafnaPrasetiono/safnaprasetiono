$(document).scroll(function() {    
    var scroll = $(document).ready();    
    if (scroll.scrollTop() > 200) {
        $(".navbar").addClass("navbar-colour");
    }else{
        $(".navbar").removeClass("navbar-colour");
    }
})