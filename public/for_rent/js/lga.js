

$(document).ready(function() {
  $("#faculty").change(function(){            
         var faculty = $(this).val(); 
		 $('#department').select2();

	
switch (faculty) {
  case "agriculture":
  var data = ['Select item...', 'Agriculture', 'fisheries and Aquaculture', 'Forestry and Wildlife Management']; 
   break;
 
 case "sciences":
  var data = ['Select item...', 'Biotechnology', 'Botany', 'Chemistry', 'Physics', 'Environmental Management & Toxicology', 'Biochemistry', 'Zoology', 'Biology', 'Microbiology', 'Mathematics'];
   break;
    case "art_and_ss":
  var data = ['Select item...', 'Economics', 'English Language', 'Linguistic(Arabic)', 'Linguistic(French)', 'Linguistic(English)', 'Political Science', 'Criminology and Security Studies'];
   break;
   case "management_sciences":
  var data = ['Select item...', 'Accounting', 'Actuarial Science', 'Banking and Finance', 'Business Administration', 'Taxation'];
   break;

   case "computing":
  var data = ['Select item...', 'Computer Science', 'Information Technology', 'Cyber Security', 'Software Engineering'];
   break;
   
   
    case "c_medecine":
  var data =   ['Select item...', 'Medecine & Surgery(MBBS)', 'Human Anatomy', 'Human Physiology'];
 
 }
	
	


var i;
var html = [];
//loop through the array
for (var i = 0; i < data.length; i++) {//begin for loop

  //add the option elements to the html array
  html.push("<option>" + data[i] + "</option>")

}//end for loop

//add the option values to the select list with an id of lga
document.getElementById("department").innerHTML = html.join('');

});

});

