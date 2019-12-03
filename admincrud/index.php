<?php

session_start();

?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <!-- Esto nos conviene para el posicionamiento SEO de nuestra pagina web, colocar palbras clave en el titulo e introducir la etiqueta meta -->
        
        <title>Featured</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </head>

    <body>

    	<nav class="navbar">
			<div class="navbar-brand">
			  	<a href="../index.php">
		      		<img src="../include/images/ws.png" alt="logo" id="logo" width="200em">
		      	</a>
			</div> 
		</nav>

        

        <div class="container mt-3">
		  	<h2><strong>WALKOUT</strong></h2>
		  	<p>Here is the admin panel.
		  
		  <!-- Nav tabs -->
		  	<ul class="nav nav-tabs">
		    	<li class="nav-item">
		      		<a class="nav-link active" href="#home">Usuarios</a>
		    	</li>
			    <li class="nav-item">
			      <a class="nav-link" href="#menu1">Beats</a>
			    </li>
			     <li class="nav-item">
			      <a class="nav-link" href="#menu2">Beats w/ pistas</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#menu3">Peticiones</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#menu4">Almacenar Beat</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#menu5">Almacenar Pista</a>
			    </li>
		  	</ul>

		  <!-- Tab panes -->
		  	<div class="tab-content border mb-3">
			    <div id="home" class="container tab-pane active"><br>
			      	<h3><mark>Usuarios registrados</mark></h3>
			      	<?php include("include/showuser.php"); ?>
			    </div>
			    <div id="menu1" class="container tab-pane fade"><br>
			      	<h3>Beat registrados</h3>
			      	<?php include("include/showbeats.php"); ?>
			    </div>
			    <div id="menu2" class="container tab-pane fade"><br>
			      	<h3>Beat con pistas registrados</h3>
			      	<?php include("include/showbeatswp.php"); ?>
			    </div>
			    <div id="menu3" class="container tab-pane fade"><br>
			      	<h3>Menu 2</h3>
			      	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
			    </div>
			    <div id="menu4" class="container tab-pane fade"><br>
			      	<?php include("include/beatform.php"); ?>
			    </div>
			    <div id="menu5" class="container tab-pane fade"><br>
			      	<div class="container">
			      		<?php include("include/pistasform.php"); ?>
			      	</div>
			    </div>

		  	</div>

		  	<p class="act"><b>Active Tab</b>: <span></span></p>
		  	<p class="prev"><b>Previous Tab</b>: <span></span></p>

		</div>
       
        <div class="container">
        <?php include("../include/footer.php"); ?>

        </div>
            
     </body>

</html>

<script>
	$(document).ready(function(){
	  	$(".nav-tabs a").click(function(){
	    	$(this).tab('show');
	  	});

	  	$('.nav-tabs a').on('shown.bs.tab', function(event){
	    	var x = $(event.target).text();         // active tab
	    	var y = $(event.relatedTarget).text();  // previous tab
	    	$(".act span").text(x);
	    	$(".prev span").text(y);
	  	});
	});
</script>