<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    
  </style>
</head>

<body style="background-color: gray;">
  <nav style="background-color: black; align-items: center;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo" style = "color:darkorange; margin-left: 43vw;">Biblioteca virtual</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php" style="color: greenyellow;">Cadastrar</a></li>
        <li><a href="relatorio.php"  style="color: greenyellow;">Relatório</a></li>
      </ul>
    </div>
  </nav>
  <div class="container" ">
    <div class="row" style="box-shadow: black 1px, 6px 5px;">
      <div class="col s12 m12">
        <div class="card" style="background-color: #454241;">
          <div class="card-content ">
            <span class="card-title blue-grey-text text-darken-2 center-align" >
              <h4 style="color: whitesmoke;">Cadastrar Livro</h4>
            </span>
            <div class="row">
              <form action="create.php" method="post" class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="titulo" name="titulo" type="text" />
                    <label for="titulo"> Titulo</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="autor" name="autor" type="text" />
                    <label for="autor"> Autor</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input id="descricao" name="descricao" type="text">
                    <label for="descricao">Descrição</label>
                  </div>
                </div>
                <button class="waves-effect waves-light btn" style="background-color: black;" type="submit" value="Enviar">Cadastrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    M.AutoInit();
  </script>
</body>

</html>