var menuToggleWidth = 67,
	menuFullWidth = 400;

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