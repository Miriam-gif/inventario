<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>

<body style="background:  rgba(241,231,103,1);">
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Inventario</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="{{ route('mostrar') }}">Mostrar</a>
          <a class="nav-item nav-link" href="{{ route('registro') }}">Registrar</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container px-5 py-5 ">
    <h2 class="text-center">DOCUMENTOS REGISTRADOS</h2>
    <form action="{{ route( 'muestra' ,$registro->id ) }}" method="get">
      <!-- @csrf -->
      {{ csrf_field() }}
      {{ method_field('PATCH') }}
    <div class='row'>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="num_codigo">N° de codigo</label>
            <input disabled class="form-control" type="text" name="num_codigo" value="{{$registro->num_codigo}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="gestion">Gestíon</label>
            <input disabled class="form-control" type="number" name="gestion" value="{{$registro->gestion}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="area_unidad">Área o Unidad</label>
            <input disabled class="form-control" type="text" name="area_unidad" value="{{$registro->area_unidad}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="titulo_proceso">Título del Proceso</label>
            <input disabled class="form-control" type="text" name="titulo_proceso" value="{{$registro->titulo_proceso}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="formato">Formato</label>
            <input disabled class="form-control" type="text" name="formato" value="{{$registro->formato}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="tomo">Tómo</label>
            <input disabled class="form-control" type="number" name="tomo" value="{{$registro->tomo}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for=" total_tomo"> Total de tómo</label>
            <input disabled class="form-control" type="text" name=" total_tomo" value="{{$registro->total_tomo}}">
          </div>
      </div>
      <div class='col-md-3'>  
          <div class="form-group">
            <label for=" total_fojas"> Total de Fojas</label>
            <input disabled class="form-control" type="text" name=" total_fojas" value="{{$registro->total_fojas}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="num_estantes">N° de Estantes</label>
            <input disabled class="form-control" type="number" name="num_estantes" value="{{$registro->num_estantes}}">
          </div>
      </div>  
      <div class='col-md-3'>
          <div class="form-group">
            <label for="bandeja_alfabetica">Bandeja Alfabética</label>
            <input disabled class="form-control" type="text" name="bandeja_alfabetica" value="{{$registro->bandeja_alfabetica}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="prioridad_1">Prioridad 1</label>
            <input disabled class="form-control" type="text" name="prioridad_1" value="{{$registro->prioridad_1}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="tipologia">Tipología</label>
            <input disabled class="form-control" type="text" name="tipologia" value="{{$registro->tipologia}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="cod_detalle">Cod de Detalle</label>
            <input disabled class="form-control" type="text" name="cod_detalle" value="{{$registro->cod_detalle}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="descripcion_adjunta">Descripción Adjunta</label>
            <input disabled class="form-control" type="text" name="descripcion_adjunta" value="{{$registro->descripcion_adjunta}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="hoja_ruta">Hoja de Ruta</label>
            <input disabled class="form-control" type="number" name="hoja_ruta" value="{{$registro->hoja_ruta}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="fech_inicio">Fecha Inicio</label>
            <input disabled class="form-control" type="date" name="fech_inicio" value="{{$registro->fech_inicio}}">
          </div>
      </div>
      <div class='col-md-3'>
          <div class="form-group">
            <label for="fojas">Fojas</label>
            <input disabled class="form-control" type="text" name="fojas" value="{{$registro->fojas}}">
          </div>
      </div>
      <div class='col-md-3'>
          <p>Original</p>
          <div class="form-check">
            <input disabled class="form-check-input" type="radio" name="original" value="si" @if ( $registro->original == "si") checked @endif>
            <label class="form-check-label" for="original">
              Si
            </label>
          </div>
          <div class="form-check">

            <input disabled class="form-check-input" type="radio" name="original" value="no" @if ( $registro->original == "no") checked @endif>
            <label class="form-check-label" for="original">
              No
            </label>
          </div>
          
      </div>
      <div class='col-md-3'>
          <p>Copia</p>
          <div class="form-check">
            <input disabled class="form-check-input" type="radio" name="copia" value="si" @if ( $registro->copia == "si") checked @endif>
            <label class="form-check-label" for="copia">
              Si
            </label>
          </div>
          <div class="form-check">

            <input disabled class="form-check-input" type="radio" name="copia" value="no" @if ( $registro->copia == "no") checked @endif>
            <label class="form-check-label" for="copia">
              No
            </label>
          </div>
      </div>
      <div class='col-md-3'>
          <p>Legalizado</p>
          <div class="form-check">
            <input disabled class="form-check-input" type="radio" name="legalizado" value="si" @if ( $registro->legalizado == "si") checked @endif>
            <label class="form-check-label" for="legalizado">
              Si
            </label>
          </div>
          <div class="form-check">

            <input disabled class="form-check-input" type="radio" name="legalizado" value="no" @if ( $registro->legalizado == "no") checked @endif>
            <label class="form-check-label" for="legalizado">
              No
            </label>
          </div>

      </div>
      <div class='col-md-3'>
          <p>Fotocopia</p>
          <div class="form-check">
            <input disabled class="form-check-input" type="radio" name="fotocopia" value="si" @if ( $registro->fotocopia == "si") checked @endif>
            <label class="form-check-label" for="fotocopia">
              Si
            </label>
          </div>
          <div class="form-check">

            <input disabled class="form-check-input" type="radio" name="fotocopia" value="no" @if ( $registro->fotocopia == "no") checked @endif>
            <label class="form-check-label" for="fotocopia">
              No
            </label>
          </div>
      </div>

      <div class='col-md-3'>
          <div class="form-group">
            <label for="observacion">Observacion</label>
            <!-- <input class="form-control" type="text" name="observacion" value="{{$registro->observacion}}"> -->
            <textarea class="form-control" name="observacion" cols="30" rows="2">{{$registro->observacion}}</textarea>
          </div>
      </div>
  </div>
      
      <!-- <button class="btn btn-primary" type="submit">Salir</button> -->

      <a class="btn btn-primary" href="{{route('mostrar')}}">Atras</a>
    </form>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</body>

</html>