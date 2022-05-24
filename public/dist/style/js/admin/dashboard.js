$("#btn-slider-toggle").click(() => {
    if ($("#slider-toggle").hasClass('active')) {
        $("#slider-toggle").removeClass('active');
        $(".slider-background").remove();
    } else {
        $("#slider-toggle").addClass('active');
        $(".wrapper").append('<div class="slider-background" onClick="sliderToggle()"></div>');
    }
});
sliderToggle = () => {
    $("#slider-toggle").removeClass('active');
    $(".slider-background").remove();
};
