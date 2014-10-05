var menuToggleWidth = 40,
	menuFullWidth = 300;

$('#menu').click(function(event) {

	var $container = $('.sidemenu'),
		currentMargin = $container.css('margin-left');

	if (currentMargin == '0px') {
		$container.animate({
			marginLeft: (menuToggleWidth - menuFullWidth)},
			'fast', function() {
			/* stuff to do after animation is complete */
		});
	} else {
		$container.animate({
			marginLeft: 0},
			'fast', function() {
			/* stuff to do after animation is complete */
		});
	};
});

$('.movies .item').hover(function() {
	var $item = $(this);
	$item.children('.title').show();
}, function() {
	var $item = $(this);
	$item.children('.title').hide();
});