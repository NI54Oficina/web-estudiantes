


/********************* Codigo propio *******************/

function Locacion(nombreLocacion,geo,content,tipo){
	this.name=nombreLocacion;
	this.geo= geo;
	this.content= content;
	this.tipo= tipo;
};

Locacion.prototype= {
	constructor: Locacion,
	GetValues: function(){
		return "Nombre: "+this.name+" Geo: "+this.geo;
	}
};
var locaciones;

function SetLocaciones(){
	
	locaciones= [
	
	new Locacion(
	"Parque deportivo Gobernador Benegas",
	new google.maps.LatLng(-38.7258217,-62.2743),
	'<div class="content-iw appButton btn_entrar " href="#obra-1 "><div class="img-iw" style="background-image:url(img/img_obra_1.png);" ></div>Parque deportivo Gobernador Benegas</div>',
	"espacios"
	),
	
	/*new Locacion(
	"Anfiteatro verde de La Estanzuela",
	new google.maps.LatLng(-32.9417292,-68.8681302),
	'<div class="content-iw  appButton  btn_entrar" href="#cultura-1"><div class="img-iw" style="background-image:url(img/img_cultura_1.png);" ></div>Anfiteatro verde de La Estanzuela</div>',
	"cultura"
	)
	
	*/
	
	];
	
	
}

function GetLocaciones(tipo){
	if(tipo==""){
		return locaciones;
	}
	var toReturn=[];
	jQuery.each(locaciones,function(index,value){
		if(value.tipo==tipo){
			toReturn.push(value);
		}
	});
	
	return toReturn;
}


function DrawLocaciones(tipo){
	clearMarkers();
	var toDraw=GetLocaciones(tipo);
	
	jQuery.each(toDraw,function(index,value){
		
		addMarker(value);
		
		
		
	});
}
 
var map;


var markers= [];

   function initMap() {
	   
		SetLocaciones();
		
	   jQuery('#directions-panel').hide();
	
	
	/** en markers **/
	
	
	var directionsDisplay;

	
	/** Inicializacion mapa **/
    map = new google.maps.Map(document.getElementById('map_canvas'), {
       zoom: 17,
       center: new google.maps.LatLng(-38.7258217,-62.2743),
       mapTypeId: google.maps.MapTypeId.ROADMAP,
	   scrollwheel: false   
     });
	 /** **/
	  
	
	
	
	map.controls[google.maps.ControlPosition.TOP_LEFT].pop();

};

function IrLocacion(id){
	
	if(!zoomSet){
		SetZoom(14);
	}
	
	map.setCenter(locaciones[id].geo);
	console.log(locaciones[id].tipo);
	DrawLocaciones(locaciones[id].tipo);
	jQuery(".filtro-mapa td").css("background-color","#bbbbbb");
	
	switch(locaciones[id].tipo) {
    case "cultura":
		console.log("entra deporte");
        jQuery(".filtro-mapa:nth-child(7n) td").css("background-color","#DC7EA9");
        break; 
		case "espacios":
		console.log("entra deporte");
        jQuery(".filtro-mapa:nth-child(6n) td").css("background-color","#84AB46");
        break;
		case "seguridad":
	
        jQuery(".filtro-mapa:nth-child(8n) td").css("background-color","#4C9ECE");
        break;
		case "vialidad":
	
        jQuery(".filtro-mapa:nth-child(9n) td").css("background-color","#FF905C");
        break;
		case "deportes":
	
        jQuery(".filtro-mapa:nth-child(10n) td").css("background-color","#906312");
        break;
    case "":
        jQuery(".filtro-mapa:nth-child(11n) td").find('td').css("background-color","grey");
        break;
	}
	
}

	
function alignInfoWindow(){

	// Reference to the DIV that wraps the bottom of infowindow
	var iwOuter = jQuery('.gm-style-iw');
	
	iwOuter.parent().attr('style', function(i,s){ return s + "width:210px;"});
	
	 jQuery(".gm-style-iw").next("div").hide();

	/* Since this div is in a position prior to .gm-div style-iw.
	 * We use jQuery and create a iwBackground variable,
	 * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
	*/
	var iwBackground = iwOuter.prev();

	// Removes background shadow DIV
	iwBackground.children(':nth-child(2)').css({'display' : 'none'});

	// Removes white background DIV
	iwBackground.children(':nth-child(4)').css({'display' : 'none'});

	
	// Moves the shadow of the arrow 76px to the left margin.
	iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s});

	// Moves the arrow 76px to the left margin.
	iwBackground.children(':nth-child(3)').find("div div").attr('style', function(i,s){ return s + 'background-color:#5d236c;'});

	// Changes the desired tail shadow color.
	iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(93,35,108, 0.6) 0px 1px 6px', 'z-index' : '1'});

	// Reference to the div that groups the close button elements.
	var iwCloseBtn = iwOuter.next();

	// Apply the desired effect to the close button
	iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #5d236c', 'border-radius': '13px', 'box-shadow': '0 0 5px #5d236c'});

	// If the content of infowindow not exceed the set maximum height, then the gradient is removed.
	if(jQuery('.iw-content').height() < 140){
	  jQuery('.iw-bottom-gradient').css({display: 'none'});
	}

	// The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
	iwCloseBtn.mouseout(function(){
	  jQuery(this).css({opacity: '1'});
	});
}

function addMarker(location) {
		var marker = new google.maps.Marker({
		   position: location.geo,
		   draggable: false,
		   map: map,
		   icon: "http://localhost/web-estudiantes/img/icono-"+location.tipo+".png"
		});
		
		 var infowindow = new google.maps.InfoWindow({
			content: location.content,

			// Assign a maximum value for the width of the infowindow allows
			// greater control over the various content elements
			maxWidth: 200
		  });
		
		  

		  // This event expects a click on a marker
		  // When this event is fired the Info Window is opened.
		 /* google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		  });

		  // Event that closes the Info Window with a click on the map
		  google.maps.event.addListener(map, 'click', function() {
			infowindow.close();
		  });*/
		  
		  google.maps.event.addListener(infowindow, 'domready', alignInfoWindow);
/*
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });*/
  markers.push(marker);
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}

var zoomSet=false;
function SetZoom(zoom){
	map.setZoom(zoom);
	zoomSet=true;
}

	   
/*** Directions ***/

var directionsDisplay;
var directionsService;

function initialize() {
	directionsService= new google.maps.DirectionsService()
  directionsDisplay = new google.maps.DirectionsRenderer();
  /*var chicago = new google.maps.LatLng(41.850033, -87.6500523);
  var mapOptions = {
    zoom:7,
    center: chicago
  }
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
  */
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById('right-panel'));
}

function calcRoute() {
  var start = document.getElementById("start").value;
  var end = document.getElementById("end").value;
  var request = {
    origin:start,
    destination:end,
    travelMode: google.maps.TravelMode.DRIVING
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}

/**INITIALIZE**/
function CheckG(){
		if (typeof google === 'object' && typeof google.maps === 'object') {
			
			initMap();
			DrawLocaciones('');
			directionsService = new google.maps.DirectionsService();
			initialize();
		}else{
			setTimeout(function(){CheckG()},1000);
		}
	}
	setTimeout(function(){CheckG()},1000);