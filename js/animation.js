$(document).ready(function(){
$(".details-second").on('click', function() {
	$("#portfolio-text-second-block").toggle("slow") && $('#portfolio-third-block').toggle("fast") && $('#portfolio-fourth-block').toggle("fast") && $('#image-summary').toggle('slow') 
		&& $('#text-summary').toggle('fast') 
		&& $('#image-summary-second').toggle('slow') && $('#text-summary-second').toggle('fast') && $('#image-summary-third').toggle('slow') && $('#text-summary-third').toggle('fast') && $('#portfolio-second-block').css({
			'display': 'block',
			// 'margin-bottom': '0'
		});
});
$(".details-third").on('click', function() {
	$("#portfolio-text-third-block").toggle("slow") && $('#image-summary-fourth').toggle('slow') && $('#text-summary-fourth').toggle('fast') 
		&& $('#portfolio-third-block').css(
			"display", "block"
			) 
		&& $('.summary').css(
			"display", "block"
			) 
		&& $(".third-block").css({
		'display': 'flex',
		'position': 'relative',
		'top': '35vh',
		'justify-content': 'space-around'
	})
	&& $('.portfolio-third-block-images').css({
		 'position': 'absolute',
		  'width': '180px',
    	'height': '180px',
    	'right': '0',
    	'top': '0'
	});
});
$(".details-fourth").on('click', function() {
	$("#portfolio-text-fourth-block").toggle("slow")&& $('#image-summary-fifth').toggle('slow') 
		&& $('#text-summary-fifth').toggle('fast') 
		&& $('#portfolio-fourth-block').css(
			"display", "block"
			);
});
});

$(document).ready(function(){
var const_left = $(".pricing--tashi").position();
$(".pricing__item").hover(function(){
$(this).parent().parent().css("z-index", 1);
$(this).animate({
height: "565",
width: "380",
//left: "-=20",
top: "-=50"
}, "slow");
}, function(){
$(this).parent().parent().css("z-index", 0);
$(this).animate({
height: "515",
width: "330",
//left: "+=20",
top: "+=50"
}, "slow");
});
// $(".pricing__item").each(function(index){
// var left = (index * 0) + const_left;
// $(this).css("left", left + "px");
// });

    // $(".menu").on("click","a", function (event) {
    //     event.preventDefault();
    //     var id  = $(this).attr('href'),
    //         top = $(id).offset().top;
    //     $('body,html').animate({scrollTop: top}, 1500);
    // });

});
