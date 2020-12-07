

$(document).ready(function() {
  $("#category").change(function(){            
         var category = $(this).val(); 
	

	
switch (category) {
  case "rent":
  var data = ['Select item...', 'Flat', 'House', 'Land', 'Commercial Property', 'Event Center/Venue']; 
  
   break;
 
 case "sale":
  var data = ['Select item...', 'Flat', 'House', 'Land', 'Commercial Property'];
   break;
    case "short_let":
  var data = ['Select item...', 'Flat', 'House', 'Land', 'Commercial Property'];
   break;
   case "joint_venture":
  var data = ['Select item...', 'Flat', 'House', 'Land', 'Commercial Property'];
   break;

 
 }
	
	


var i;
var html = [];
//loop through the array
for (var i = 0; i < data.length; i++) {//begin for loop

  var key= data[i];
    key=key.replace(" ","_");
    

  //add the option elements to the html array
 
  html.push("<option value=" + key +">" + data[i] + "</option>")

}//end for loop

//add the option values to the select list with an id of lga
document.getElementById("type").innerHTML = html.join('');

});

$("#type").change(function(){            
  var type = $(this).val(); 



switch (type) {

  case "Select_item...":
var data = []; 

break;

case "Flat":
var data = [ 'Mini Flat', 'Self Contained (Single Rooms)']; 

break;

case "House":
var data = [ 'Detached Bungalow', 'Detached Duplex', 'Semi-detached Bungalow', 'Semi-detached Duplex', 'Terraced Bungalow', 'Terraced Duplex'];
break;

case "Land":
var data = [ 'Commercial Land', 'Industrial Land', 'Mixed-us Land', 'Residential Land'];
break;

case "Commercial_Property":
var data = ['Restaurant / Bar','School','Shop','Church','Factory','Filling Station','Hotel / Guest House','Office Space','Plaza / Complex / Mall','Tank Farm','Warehouse'];
break;

case "Event_Center/Venue":
var data = [ 'Conference / meeting/ training Room'];
break;


}




var a;
var html = [];
//loop through the array
for (var a = 0; a < data.length; a++) {//begin for loop

  var key= data[a];
  key=key.replace(" ","_");

  if(data[0]){
    key = '';
  }

//add the option elements to the html array
html.push("<option value=" + key +">" + data[a] + "</option>")

}//end for loop

//add the option values to the select list with an id of lga

document.getElementById("subtype").innerHTML = html.join('');

});

});

