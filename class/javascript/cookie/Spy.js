function spyMove(e) {
	//var active = document.activeElement.id; 
  var x = e.clientX;
  var y = e.clientY;
	console.log("X :"+x+" Y : "+y);
	var time = new Date();
	var h = time.getHours();
	var m = time.getMinutes();
	var s = time.getSeconds();
	// var m = d.getMonth();
	console.log(h+':'+m+':'+s);
}

function spyLive() {
 console.log("L'utilisateur a quitté la page ");
 var time = new Date();
 var h = time.getHours();
 var m = time.getMinutes();
 var s = time.getSeconds();
 // var m = d.getMonth();
 console.log(h+':'+m+':'+s);
}


