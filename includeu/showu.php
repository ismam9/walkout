<div class="container">
    
    <div class="card-body">
        
        <form action='login/logout.php' method='post'><button class='btn btn-primary btn-block' type='submit'>cerrar sesion</button></form>

        <p>
            <img class="img-fluid" src="include/images/iwasaura.jpg" alt="card image" style="width: 8em; float: right;" >
        </p>
        <h4 class="card-title"><i><strong><?php echo $_SESSION['user']; ?></strong>, <?php echo $_SESSION['telefono']; ?>.</i></h4>
        <p class="card-text"><?php echo $_SESSION['email_u']; ?>, <i><?php echo $_SESSION['edad']; ?> años. </i></p>
        <small class="card-text"><?php echo $_SESSION['rol']; ?></small>

          
          <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#home">Editar perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu1">Peticiones</a>
            </li>
            
        </ul>

      <!-- Tab panes -->
        <div class="tab-content border mb-3">
            <div id="home" class="container tab-pane active"><br>
                <form action="includeu/updateu.php" method="post">

                    <div class="container">
                        <?php include('includeu/updateu_form.php'); ?>

                        <p style="float: right;"> 
                            <button id="datosu" type="submit" class="btn btn-warning" value="Enviar">Editar</a></button>
                        </p>
                    </div>

                </form>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
        </div>

        <p class="act"><b>Active Tab</b>: <span></span></p>
        <p class="prev"><b>Previous Tab</b>: <span></span></p>

    </div>
</div>


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
