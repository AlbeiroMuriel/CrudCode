<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CRUD </title>
  </head>
  <body>
        <div class="container">
            <div class="row">                
                <div class="col-sm-8">
                    <h2 class="text-center">INGRESAR DATOS</h2>
                    <form method="POST" action="<?php echo base_url().'/crear' ?>">
                        <label for="identificacion">Nro Identificación</label>
                        <input type="text" name="identificacion" id="identificacion" class="form-control">

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control">

                        <label for="nombres">Nombres</label>
                        <input type="text" name="nombres" id="nombres" class="form-control">

                        <label for="celular">Nro Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control">

                        <label for="programa">Nombre del Programa </label>
                        <input type="text" name="programa" id="programa" class="form-control">
                        <br>

                        <button class="btn btn-primary">Guardar Registro</button>
                    
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12"> 
                    <div class="table table-responsive">

                    <!-- <?php print_r($datos);  ?> -->
                    <h3 class="text-center">LISTADO DE ESTUDIANTES</h3>
                        <table class="table table-hover table-bordered text-center">
                            <tr>
                                <td>Identificación</td> <td>Apellidos</td><td>Nombres</td><td>Celular</td><td>Programa</td>
                                <td></td> <td></td>                            
                            </tr>
                            <tr>
                            <?php foreach($datos as $key):  ?>
                                <td><?php echo $key->IdIdentificacion ?></td>
                                <td><?php echo $key->apellidos ?></td>
                                <td><?php echo $key->nombres ?></td>
                                <td><?php echo $key->celular ?></td>
                                <td><?php echo $key->programa ?></td>
                                <td> <a href="<?php echo base_url().'/editar/'.$key->IdIdentificacion  ?>" class="btn btn-info">Editar </a></td>
                                <td> <a href="#" class="btn btn-danger">Eliminar</a></td>                            
                            </tr>
                            <?php endforeach ?>
                        </table>                    
                    </div>                
                </div>
            </div>

        </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>
</html>