<script src='https://maps.googleapis.com/maps/api/js?
key=AIzaSyDNi7fQreXQ_AvjDEbMBGtBo2XoP5QkxRs'></script>
<div style='overflow:hidden;height:440px;width:700px;'>
<div id='gmap_canvas' style='height:440px;width:700px;'></div>
<style>#gmap_canvas img{
     max-width: none !important;
	 background:none!important
	 }
	 </style>
</div>
<script type='text/javascript'>
	function init_map(){
	 var myOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(22.4718443,91.79812909999998),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(22.4718443,91.79812909999998)});
	infowindow = new google.maps.InfoWindow({content:'<strong>University of Chittagong</strong><br>Chittagong , Bangladesh<br>'});
	google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
	infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>
</head>