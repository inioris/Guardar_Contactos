<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <style type="text/css">
            #titulop{
              font-size: 40px;
            }
          </style>
          <a id="titulop" class="navbar-brand" href="home.php">Compra-Facil</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <button type="submit" class="btn btn-success">Registrate</button>
          </form>
        </div>
          <!--/.navbar-collapse -->
          <style type="text/css">
            .nav{
              display: flex;
            }
            #cabeza li a{
              text-decoration: none;
              color: black;
              font-size: 20px;
              font-family: sans-serif;

            }
          </style>
          <div id="navbar">
          <ul class="nav nav-tabs" id="cabeza">
            <li class="<?php if($pagina == 'home'){echo 'active';} ?>">
               <a class="nav-link active" href="home.php">Home</a>
            </li>
            <li class="<?php if($pagina == 'ofertas'){echo 'active';} ?>">
               <a class="nav-link active" href="Ofertas.php">Ofertas</a>
            </li>
            <li class="<?php if($pagina == 'articulos'){echo 'active';} ?>">
               <a class="nav-link" href="Articulos.php">Articulos</a>
            </li>
            <li class="<?php if($pagina == 'informacion'){echo 'active';} ?>">
              <a class="nav-link" href="Informacion.php">Informacion</a>
            </li>
          </ul>
      </div>

      </div>
    </nav>