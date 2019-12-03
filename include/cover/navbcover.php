<div class="container"> <!-- Aqui tenemos la barra de navegacion y cada una nos lleva a la pagina indicada-->

	<nav class="navbar">
	  	<a class="navbar-subrand" href="include/rss.php">
	      <img src="include/images/1452378.svg" alt="logo" id="logo" width="30em">
	    </a>

	    	<ul class="nav nav justify-content-end"> <!-- aqui estan los elementos que son colapsados-->

	    		<div class="container">ORDERED BY
	    			<form>
			    		<select name="tipo">
			    			<option value="All">All</option>
							<option value="Free">Free</option>
							<option value="Leasing">Leasing</option>
							<option value="Exclusive">Eclusive</option>
						</select> 
					</form>
					<label id="" style="color: darkslateblue;"></label>
				</div>

          	</ul>

          	<div>
          		<input class="form-control mr-sm-4" aria-label="Search" type="text" name="palabra" id="palabra" placeholder="Buscador de beats">
          	</div>
	</nav>

	<section class="content-area" style="float: right;">
      	<div class="table-area" id="resultados">
      	</div>
  	</section>
	
</div>