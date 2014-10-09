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
	$(this).children('.title').show();
}, function() {
	$(this).children('.title').hide();
});

$(function() {

	var $item = $('.movies .item'),
		ratio = 0.7,
		itemWidth = $item.width(),
		itemHeight = itemWidth / ratio;

	$item.each(function(index) {
		var $img 		= $(this).children('img'),
			imgWidth 	= $img.width(),
			imgHeight 	= $img.height(),
			margin;

		$(this).height(itemHeight);

		$img.show();

		if ((imgWidth/imgHeight) > ratio) {

			// set image height full box
			$img.height(itemHeight);

			var $newImg = $(this).children('img');
			var newImgWidth = $newImg.width();
			var selisih;

			if (newImgWidth > itemWidth) {
				selisih = newImgWidth - itemWidth;
				margin = selisih/2 * (-1);
				$img.css({
					'margin-left': margin
				});

			};

		} else {

			// set image width full box
			$img.width(itemWidth);

			var $newImg = $(this).children('img');
			var newImgHeight = $newImg.height();
			var selisih;

			if (newImgHeight > itemHeight) {
				selisih = newImgHeight - itemHeight;
				margin = selisih/2 * (-1);
				$img.css({
					'margin-top': margin
				});
			};
		}

	})
});