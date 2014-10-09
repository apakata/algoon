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
		var $img = $(this).children('img'),
			// imgWidth = $img.attr('width'),
			// imgHeight = $img.attr('height'),
			imgWidth = $img.width(),
			imgHeight = $img.height(),
			imgRatio = imgWidth/imgHeight,
			emptySpace, margin;

		$(this).height(itemHeight);

		// Jika lebih lebar maka 
		// lebarnya disesuiakan dg box
		if ((imgWidth/imgHeight) > ratio) {
			emptySpace = itemHeight - imgHeight;
			margin = emptySpace/2;
			console.log(emptySpace);

			console.log(imgWidth);
			$img.width(itemWidth);
			//$img.height(itemWidth/imgRatio);
			$img.height(itemHeight);

		} else
		// Jika lebih tinggi maka 
		// tinggignyad desesuiakan dengan box
		if ((imgWidth/imgHeight) <= ratio) {
			$img.height(itemHeight);
			$img.width(itemHeight/imgRatio);
		};

	})
});