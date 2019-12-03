//pequeño canvas para l organigrama del inicio, es la parta rosa del organigrama

var c = document.getElementById("micanvas");
var ctx = c.getContext("2d");
ctx.width = window.innerWidth;
ctx.height = window.innerHeight;

// Create gradient
var grd = ctx.createLinearGradient(70,60,400,10);
grd.addColorStop(0,"hotpink");
grd.addColorStop(1,"white");

// Fill with gradient
ctx.fillStyle = grd;
ctx.fillRect(0,0,700,1000);