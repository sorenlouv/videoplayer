jQuery ->
	
	# copy to clipboard	
	$(".clipboard").zclip
		path: "js/ZeroClipboard.swf"
		copy: (elm) -> $(elm).text()

	# jqueryui buttons
	$( "#buttons" ).buttonset()

	# show all movie/series
	$('#list-all').click ->
		$accordion = $('<div></div>');

		movies.map (movie) ->
			$header = $('<h3><a href="#">'+movie.label+'</a></h3>');
			$body = $('<div>'+movie.path+'</div>');
			$accordion.append($header, $body);
		
		transition($accordion);
		$accordion.accordion();


	# autocomplete
	$( "#search" ).autocomplete
		source: movies,
		select: (event, ui) ->
			transition(ui.item.path);

transition = (content) ->
	$('#content').hide().html(content).fadeIn();