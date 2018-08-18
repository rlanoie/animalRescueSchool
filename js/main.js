



	//DATE & TIME FORMATTING
	function inputDateFormat(date_input) {
  var formattedDate = new Date(date_input + 'PST');
  var d = ("0" + (formattedDate.getDate())).slice(-2);
  var m = ("0" + (formattedDate.getMonth() + 1)).slice(-2);
  var y = formattedDate.getFullYear();
  return y + "-" + m + "-" + d;
}
	

	/*Date formatting MM-DD-YYYY*/
	function dateFormatting(date_input) {
  	var formattedDate = new Date(date_input + 'PST');
	  var d = ("0" + (formattedDate.getDate())).slice(-2);
  	var m = ("0" + (formattedDate.getMonth() + 1)).slice(-2);
	  var y = formattedDate.getFullYear();
  	return m + "-" + d + "-" + y;
	}

	/*Date & Time formatting MM-DD-YYYY h:m:s am/pm*/
	function dateTimeFormatting(date_input) {
  	var formattedDate = new Date(date_input);
	  var d = ("0" + (formattedDate.getDate())).slice(-2);
  	var m = ("0" + (formattedDate.getMonth() + 1)).slice(-2);
	  var y = formattedDate.getFullYear();
  	var hr = formattedDate.getHours();
	  var ampm = "am";
  	if (hr > 12) {
    	hr -= 12;
	    ampm = "pm";
  	}else if(hr === 12){
			ampm = "pm";
		}
  	var min = formattedDate.getMinutes();
	  if (min < 10) {
  	  min = "0" + min;
  	}
  	var seconds = formattedDate.getSeconds();
  	if (seconds < 10) {
    	seconds = "0" + seconds;
	  }
  	return m + "-" + d + "-" + y + " " + hr + ":" + min + ":" + seconds + ampm;
	}


	//Deletes a div's children based on the ID input.
	function deleteDivID(div) {
  	var myNode = document.getElementById(div);
	  while (myNode.firstChild) {
  	  myNode.removeChild(myNode.firstChild);
  	}
	}


