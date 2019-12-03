
<div class="container-fluid" id="navbar-cover"> <!-- Aqui tenemos la barra de navegacion y cada una nos lleva a la pagina indicada-->

	<nav class="navbar">
		<div class="navbar-brand">
		  	<a href="index.php">
	      		<img src="include/images/ws.png" alt="logo" id="logo" width="200em" style="height: auto;">
	      	</a>

	      	<div style="display:flex;">
		      	<a href="">
			      	<img src="include/images/ig.png" alt="logo" id="logoig" width="42em">
			    </a>

			    <a href="">
			     	<img src="include/images/tw1.png" alt="logo" id="logotw" width="52em">
			    </a>
			    <p id="novedades">
			    	NEWS
			    </p>
		    </div>
		</div> 	 	
		   
		<div class="navbar-sections">
	    	<ul class="nav justify-content-end" id="sections"> <!-- aqui estan los elementos que son colapsados-->

	    		<li class="nav-item">
	        		<a class="nav-link" href="index1.php">FEATURED</a>
	      		</li>

	      		<li class="nav-item">
	        		<a class="nav-link" href="index2.php">Productores</a>
	      		</li>

	      		<?php 

	      		if (!empty($_SESSION['nick'])) {	
	      			echo '	<li class="nav-item">
	      						<a class="btn btn-secundary btn-rounded" href="admin.php">Admin</a>
			      			</li>
		      			';

	      		}elseif (!empty($_SESSION['user'])) {
	      			echo '	<li class="nav-item">
	      						<a class="btn btn-secundary" href="indexu.php">User</a>
			      			</li>
		      			';
	      		}else{
	      			echo '	<li class="nav-item"> ';
		        			include("login/modal-login.php"); '
		      			</li>
	      			';

	      		}

	      		?>
	 
	    	</ul>
	    </div>

	    	<!--
	    	<?php
            /*if(!empty($_SESSION["nombre"])){
                echo "<ul class='navbar-nav navbar-expand-sm'>";
                echo "<p id='bienvenido'>Bienvenido : " . $_SESSION["nombre"] . "</p>";
                echo "</ul>";
                echo "<ul class='navbar-nav navbar-expand-sm ml-auto'>";
                echo'<li class="nav-item">
                    <a class="nav-link" href="formulariomodicarusuario.php">Actualizar datos</a>
                    </li>';
*/
            ?>
			-->
	  	
	</nav>
	<!--
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  	<a class="navbar-brand" href="#">Navbar</a>

	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

	    <span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="collapsibleNavbar">

		    <ul class="navbar-nav">
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Link</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Link</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="#">Link</a>
		      	</li>    
		    </ul>

	  	</div>  
	</nav>
-->
</div>