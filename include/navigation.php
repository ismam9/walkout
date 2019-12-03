<div class="container"> <!-- Aqui tenemos la barra de navegacion y cada una nos lleva a la pagina indicada-->

	<nav class="navbar navbar-expand-xl bg-light navbar-default">
	  	<a class="navbar-brand2" href="index.php">
	      <img src="include/images/1452378.svg" alt="logo" id="logo" width="30em">
	    </a>

	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    	<span class="navbar-toggler-icon"></span>
	    </button><!-- con esto conseguimos un navbar que se colapse cuando el tamaño del dispositivos es muy reducido-->

	  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
	    	<ul class="nav nav-tabs"> <!-- aqui estan los elementos que son colapsados-->


	    		<li class="nav-item">
	        		<a class="nav-link <?php if($CURRENT_PAGE=="Index1"){?> active <?php } ?>" href="index1.php">FEATURED</a>
	      		</li>

	      		<li class="nav-item">
	        		<a class="nav-link <?php if($CURRENT_PAGE=="Index2"){?> active <?php } ?>" href="index2.php">Productores</a>
	      		</li>

	      		<?php if ($CURRENT_PAGE != "Walkout") {
	      				if ($_SESSION['user'] == true) {
	      				
	      				?>	<li class="nav-item" style="float: right;">
	        					<a class="nav-link <?php if($CURRENT_PAGE=="IndexU"){?> active <?php } ?>" href="indexu.php">User</a>
	      					</li>
	      			
	      			<?php }}; ?>;

	    	</ul>


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
	  	</div>  
	</nav>
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
	  
