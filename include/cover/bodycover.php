<!--
<main role="main" class="inner cover">
	<h1 class="cover-heading">Cover your page.</h1>
	<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
	<p class="lead">
	  	<a href="#" class="btn btn-lg btn-secondary">Learn more</a>
	</p>
</main>


<canvas id="micanvas" width="400em" height="700em">
</canvas>

<script type="text/javascript" src="js/cover_canvas.js"></script>


<img src="..." class="img-fluid" alt="Responsive image">


<p id="P44" class="test">Enter this paragraph.</p>
<button>hola</button>

-->

<br>
<br>
<br>

<div class="container-fluid" id="body-cover">

	<div class="container">

		<div class="row">
			<?php 

			require_once("php/db.php");

			$free = $_POST['tipo'];

			$consulta = "SELECT * FROM producer p, beat b, publicacion c WHERE c.prod = p.cod_p AND c.beat = b.cod_b AND publicado = 1";
			$result = $conn->query($consulta);


			
			if($result->num_rows >= 0){
			    while($row = $result->fetch_assoc()){

				echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				    	<div class="card text-dark bg-light mb-3" style="max-width:24rem">
				      		<div class="card-body text-center">

				      			<p><img class="img-fluid" src="include/images/soundcloud.jpeg" alt="card image"></p>
								<h4 class="card-title" style="float:left;">'.$row['nickname'].'</h4>
								<p style="float:right;"><i>'.$row['titulo'].'</i></p>
								<br>
		                        <p class="card-text" style="float:right;">'.$row['highlight'].'
		                        </p>
		                        <p class="card-text">
		                        '.$row['tipo'].'
		                        </p>
		                        <form action="verbeat.php" method="post">
		                        	<input type="hidden" name="beatc" value="'.$row['cod_b'].'">
		                        	</input>
			                        <button href="#" class="btn btn-primary btn-sm">Ver Beat
			                        </button>
		                        </form>
							</div>                   
		                    
				      	</div>
				    </div>
				    ';
	  			}
	  		}

			?>
		</div>
	</div>
</div>

