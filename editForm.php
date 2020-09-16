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
        .error {
            color: red !important;
        }
    </style>
</head>

<?php
$id = $_GET['id'];
$con = new PDO("mysql:host=localhost;dbname=test", "root", "");

$resultado = $con->query("SELECT * FROM book WHERE id = $id");

$titulo = "";
$autor = "";
$descricao = "";

foreach ($resultado as $r) {
    $titulo = $r['titulo'];
    $autor = $r['autor'];
    $descricao = $r['descricao'];
}

?>


<body>
    <nav style="background-color: black;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">CRUD LIVROS</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Cadastrar</a></li>
                <li><a href="relatorio.php">Relatório</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title blue-grey-text text-darken-2 center-align">
                            <h4>Editar Livro</h4>
                        </span>

                        <div class="row">
                            <form action="edit.php" method="post" class="col s12">
                                <input  value="<?php echo $id ?>" name="id" type="hidden" />
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="titulo" value="<?php echo $titulo ?>" name="titulo" type="text" />
                                        <label for="titulo"> Titulo</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="autor" value="<?php echo $autor ?>" name="autor" type="text" />
                                        <label for="autor"> Autor</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="descricao" value="<?php echo $descricao ?>" name="descricao" type="text">
                                        <label for="descricao">Descrição</label>
                                    </div>
                                </div>
                                <button class="waves-effect waves-light btn" style="background-color: #4d91ea;" type="submit" value="Enviar">Editar</button>
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