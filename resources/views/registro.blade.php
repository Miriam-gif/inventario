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
  <div>
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
    
      <div class="container mt-5">
        <div>
          <h2 class="text-center">Regístro de Documentos</h2>
          <form action="{{ route( 'registro.guardar' ) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class='row'>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="num_codigo">N° de código</label>
                  <input class="form-control" type="text" name="num_codigo">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="gestion">Gestíon</label>
                  <input class="form-control" type="number" name="gestion">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="area_unidad">Área o Unidad</label>
                  <input class="form-control" type="text" name="area_unidad">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="titulo_proceso">Título del Proceso</label>
                  <input class="form-control" type="text" name="titulo_proceso">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="formato">Formato</label>
                  <input class="form-control" type="text" name="formato">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="tomo">Tómo</label>
                  <input class="form-control" type="number" name="tomo">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for=" total_tomo"> Total de tómo</label>
                  <input class="form-control" type="text" name=" total_tomo">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for=" total_fojas"> Total de Fojas</label>
                  <input class="form-control" type="text" name=" total_fojas">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="num_estantes">N° de Estantes</label>
                  <input class="form-control" type="number" name="num_estantes">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="bandeja_alfabetica">Bandeja Alfabética</label>
                  <input class="form-control" type="text" name="bandeja_alfabetica">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="prioridad_1">Prioridad 1</label>
                  <input class="form-control" type="text" name="prioridad_1">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="tipologia">Tipología</label>
                  <input class="form-control" type="text" name="tipologia">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="cod_detalle">Cod de Detalle</label>
                  <input class="form-control" type="text" name="cod_detalle">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="descripcion_adjunta">Descripción Adjunta</label>
                  <input class="form-control" type="text" name="descripcion_adjunta">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="hoja_ruta">Hoja de Ruta</label>
                  <input class="form-control" type="number" name="hoja_ruta">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="fech_inicio">Fecha de Inició</label>
                  <input class="form-control" type="date" name="fech_inicio">
                </div>
              </div>
              <div class='col-md-3'>
                <div class="form-group">
                  <label for="fojas">Fojas</label>
                  <input class="form-control" type="text" name="fojas">
                </div>
              </div>


              <div class='col-md-3'>
                <p class="text-center">Original</p>
                <div class="d-flex justify-content-around">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="original" value="si">
                    <label class="form-check-label" for="original">
                      si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="original" value="no">
                    <label class="form-check-label" for="original">
                      no
                    </label>
                  </div>
                </div>
              </div>

              <div class='col-md-3'>
                <p class="text-center">Copia</p>
                <div class="d-flex justify-content-around">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="copia" value="si">
                    <label class="form-check-label" for="copia">
                      si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="copia" value="no">
                    <label class="form-check-label" for="copia">
                      no
                    </label>
                  </div>
                </div>
              </div>

              <div class='col-md-3'>
                <p class="text-center">Legalizado</p>
                <div class="d-flex justify-content-around">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="legalizado" value="si">
                    <label class="form-check-label" for="legalizado">
                      si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="legalizado" value="no">
                    <label class="form-check-label" for="legalizado">
                      no
                    </label>
                  </div>
                </div>
              </div>
              
             <div class='col-md-3'>
                <p class="text-center">Fotocopia</p>
                <div class="d-flex justify-content-around">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fotocopia" value="si">
                    <label class="form-check-label" for="fotocopia">
                      si
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fotocopia" value="no">
                    <label class="form-check-label" for="fotocopia">
                      no
                    </label>
                  </div>
                </div>
              </div>

              <div class='col-md-3'>
                <div class="form-group">
                  <label for="observacion">Observacion</label>
                  <!-- <input class="form-control"  name="observacion"> -->
                  <textarea class="form-control" name="observacion" cols="30" rows="2"></textarea>
                </div>
              </div>
              <!--doc pdf
              <div class='col-md-6'>
                <div class="form-group">
                  <label for="documento_pdf">Subir PDF</label>
                  <input class="form-control" type="file" name="documento_pdf">
                </div>
              </div>-->
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Guardar datos</button>

      </div>


      </form>


    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</body>

</html>