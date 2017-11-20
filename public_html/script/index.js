// JavaScript Document

function myMove() {
  var elem = document.getElementById("animate");
  var elem1 = document.getElementById("Stext");   
  var pos = 0;
  var fSize = 25;
  var id = setInterval(frame, 10);
  function frame() {
    if (pos > 450) {
          clearInterval(id);
		  pos=0;
		  fSize = 25;
		   elem1.style.visibility = 'visible'
    } else {
      pos++; 
	  elem.style.visibility = 'visible'
	  elem1.style.visibility='hidden'
	  elem.style.fontSize=fSize + 'px'
	 if (pos < 300){
	   elem.style.color='#096';
	   fSize = 25 - pos/50;
	      }
	  if(pos > 300){
	   elem.style.color='#000'
	    fSize = 25 - pos/60;
	}
	if(pos > 350){
	   elem.style.color='#999';
	    fSize = 25 - pos/70;
  }
      elem.style.top = pos + 'px';  
    }
  }
}
