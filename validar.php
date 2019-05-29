<!DOCTYPE>
<html>
 <head>
  <title> Formulario </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>
  <?php
    $name = $_POST['name'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
  ?>
  <div class="container justify-content-center">
    <div class="row">
      <div class="col-12">
        <h4 class="text-muted text-center">Sus datos han sido enviados correctamente y son los siguientes</h4>
      </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-sm-7 col-md-8 col-lg-10">
          <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6 col-sm-7 col-md-8 col-lg-10 text-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
            Ver datos
          </button>
        </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModal3Label">Usuario <?php echo $_POST['name']?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-info">Nombre:<?php echo "<p class=\"text-muted text-capitalize\">{$_POST['fullName']}</p>" ?></p>
          <p class="text-info">Correo:<p class="text-muted"><?php echo $_POST['email']?></p></p>
          <p class="text-info">Edad:<p class="text-muted"><?php echo $_POST['age']?></p></p>
          <p class="text-info">Genero:<p class="text-muted"><?php echo $_POST['inlineRadioOptions']?></p></p>
          <?php 
            if(isset($_POST['password'])){
              echo "<p class=\"text-info\">Password:<p class=\"text-muted\"> {$_POST['password']}</p></p>";
            }
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
</html>