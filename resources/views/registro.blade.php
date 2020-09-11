<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container px-5">
    <h2 class="text-center" >Inventario de documentos</h2>
    <form action="{{ route( 'registro.guardar' ) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="num_codigo">Numero de codigo</label>
            <input class="form-control" type="text" name="num_codigo">
        </div>
        
        <div class="form-group">
            <label for="gestion">Gestion</label>
            <input class="form-control" type="number" name="gestion">
        </div>
        <div class="form-group">
            <label for="area_unidad">Area o Unidad</label>
            <input class="form-control" type="text" name="area_unidad">
        </div>
        <div class="form-group">
            <label for="titulo_proceso">Titulo del Proceso</label>
            <input class="form-control" type="text" name="titulo_proceso">
        </div>
        <div class="form-group">
            <label for="formato">Formato</label>
            <input class="form-control" type="text" name="formato">
        </div>
        <div class="form-group">
            <label for="tomo">Tomo</label>
            <input class="form-control" type="number" name="tomo">
        </div>

        <div class="form-group">
            <label for=" total_tomo"> Total de tomo</label>
            <input class="form-control" type="text" name=" total_tomo">
        </div>
        <div class="form-group">
            <label for=" total_fojas"> Total de Fojas</label>
            <input class="form-control" type="text" name=" total_fojas">
        </div>
        <div class="form-group">
            <label for="num_estantes">No de estantes</label>
            <input class="form-control" type="number" name="num_estantes">
        </div>
        <div class="form-group">
            <label for="bandeja_alfabetica">Bandeja Alfabetica</label>
            <input class="form-control" type="text" name="bandeja_alfabetica">
        </div>
        <div class="form-group">
            <label for="prioridad_1">Prioridad 1</label>
            <input class="form-control" type="text" name="prioridad_1">
        </div>
        
        <div class="form-group">
            <label for="tipologia">Tipologia</label>
            <input class="form-control" type="text" name="tipologia">
        </div>
        <div class="form-group">
            <label for="cod_detalle">Cod de Detalle</label>
            <input class="form-control" type="text" name="cod_detalle">
        </div>
        <div class="form-group">
            <label for="descripcion_adjunta">Descripcion Adjunta</label>
            <input class="form-control" type="text" name="descripcion_adjunta">
        </div>
        <div class="form-group">
            <label for="hoja_ruta">Hoja de Ruta</label>
            <input class="form-control" type="number" name="hoja_ruta">
        </div>
        <div class="form-group">
            <label for="fech_inicio">Fech Inicio</label>
            <input class="form-control" type="date" name="fech_inicio">
        </div>
        <div class="form-group">
            <label for="fojas">Fojas</label>
            <input class="form-control" type="number" name="fojas">
        </div>
        <div class="form-group">
            <label for="original">Original</label>
            <input class="form-control" type="text" name="original">
        </div>
        <div class="form-group">
            <label for="copia">Copia</label>
            <input class="form-control" type="text" name="copia">
        </div>
        <div class="form-group">
            <label for="legalizado">Legalizado</label>
            <input class="form-control" type="text" name="legalizado">
        </div>
        <div class="form-group">
            <label for="fotocopia">Fotocopia</label>
            <input class="form-control" type="text" name="fotocopia">
        </div>
        <div class="form-group">
            <label for="observacion">Observacion</label>
            <input class="form-control" type="text" name="observacion">
        </div>

        <button class="btn btn-primary" type="submit">Guardar datos</button>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>