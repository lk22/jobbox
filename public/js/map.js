	var map;


	function showMap()
	{
		map = new google.maps.Map(document.getElementById('whereMap'), {
			center: {lat: 55.6973216, lng: 12.5526163},
     	 	zoom: 18
		});

		var marker = new google.maps.Marker({
			position: {lat: 55.6973216, lng: 12.5526163},
			map: map,
			title: 'JobDesk Aps'
		});

		var content = '<div id="content">' +
					  	'<div class="siteNotice">' +
					  	'</div>' +
					  	'<h3 id="firstHeading" class="firstHeading">JobDesk ApS</h3>' +
					  	'<div id="content">' +
			            'Guldbergsgade 113 '+
			            '2200 Copenhagen Nørrebro'+
			            '</p>'+
					  	'</div>'

		var markerWindow = new google.maps.InfoWindow({
			content: content
		});

		marker.addListener('click', function() {
			markerWindow.open(map, marker);
		});
	}

	showMap();