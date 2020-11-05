<?php include "cabecalho.php"?>
<body>
<nav class="nav-extended  purple lighten-3">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
        <h1>FreeCine</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent  purple darken-1">
        <li class="tab"><a href="#test1">Todos</a></li>
        <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col s6 offset-s3">
        <div class="card">
            <div class="card-content ">
                <span class="card-title">Cadastrar filme</span>
                <!--ínicio do input título -->
                <div class="row">
                <div class="input-field col s12">
                <input id="titulo" type="text" class="validate" require>
                <label for="titulo">Título do Filme</label>
                </div>          
            </div>
                <!--Fim do input Título-->
                <!-- Ínicio do input da sinopse-->
            <div class="row">
                <form class="col s12">
                    <div class="row">
                    <div class="input-field col s12">
                        <textarea id="sinopse" class="materialize-textarea"></textarea>
                        <label for="sinopse">Sinopse</label>
                    </div>
                    </div>
                </form>
            </div>
            <!-- Fim do input da sinopse-->
            <div class="file-field input-field">
      <div class="btn purple lighten-2 black-text">
        <span>Capa</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Selecione a capa do Filme">
      </div>
            <!--Ínicio do input de nota do Filme -->
            <div class="row">
            <div class="input-field col s4">
            <input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
                <label for="nota">Nota do filme</label>
            </div>
            </div>
             <!-- Ínicio do inout file-->
            <div class="card-action">
                <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
                <a href="#" class="waves-effect waves-light btn purple">Confimar</a>
            </div>
            <!--Fim don input de nota -->           
    </div>
</div>
</div>
</div>
  </div>
</body>
</html>