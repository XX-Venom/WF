    // update hour by time 

var d = new Date(); 
var h = d.getHours(); 
var greeting = document.getElementById("times");
if (h >= 5 && h < 12) {
  greeting.innerHTML ="Good morning";
} else if (h >= 12 && h < 18) {
  greeting.innerHTML ="Good afternoon";
} else {
  greeting.innerHTML ="Good evening";
}


  //