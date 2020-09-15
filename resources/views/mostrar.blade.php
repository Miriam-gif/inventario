<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://kit.fontawesome.com/1f9a657990.js" crossorigin="anonymous"></script>
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
  <div class="container px-5 py-5">
    <div class="row">
      <h2>Listado de Documentos</h2>
      <table class="table alignitems-center table-flush" id="registro-table">
        <thead class="thead-light">
          <tr>
            <!--<th scope="col">ID</th-->
            <th scope="col">N° de Código</th>
            <th scope="col">Gestíon</th>
            <th scope="col">Área de Unidad</th>
            <th scope="col">Título de Proceso</th>
            <th scope="col">Formato</th>
            <!--<th scope="col">Tomo</th-->
            <!--<th scope="col">Total de Tomo</th-->
            <!--<th scope="col">total_fojas</th-->
            <!--<th scope="col">num_estantes</th-->
            <th scope="col">Bandeja Alfabética</th>
            <!--<th scope="col">prioridad_1</th-->
            <th scope="col">Tipología</th>
            <!--<th scope="col">cod_detalle</th-->
            <!--<th scope="col">descripcion_adjunta</th-->
            <!--<th scope="col">hoja_ruta</th-->
            <!--<th scope="col">fech_inicio</th-->
            <!--<th scope="col">fojas</th-->
            <!--<th scope="col">original</th-->
            <!--<th scope="col">copia</th-->
            <!--<th scope="col">legalizado</th-->
            <!--<th scope="col">fotocopia</th-->
            <th scope="col">Observacion</th>
            <th scope="col">Mostrar</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registros as $registro)
          <tr>
            <!--<td scope="col">{{ $registro->id }}</td-->
            <td scope="col">{{ $registro->num_codigo }}</td>
            <td scope="col">{{$registro->gestion}}</td>
            <td scope="col">{{$registro->area_unidad}}</td>
            <td scope="col">{{$registro->titulo_proceso}}</td>
            <td scope="col">{{$registro->formato}}</td>
            <!--<td scope="col">{{$registro->tomo}}</td-->
            <!--<td scope="col">{{$registro->total_tomo}}</td-->
            <!--<td scope="col">{{$registro->total_fojas}}</td-->
            <!--<td scope="col">{{$registro->num_estantes}}</td-->
            <td scope="col">{{$registro->bandeja_alfabetica}}</td>
            <!--<td scope="col">{{$registro->prioridad_1}}</td-->
            <td scope="col">{{$registro->tipologia}}</td>
            <!--<td scope="col">{{$registro->cod_detalle}}</td-->
            <!--<td scope="col">{{$registro->descripcion_adjunta}}</td-->
            <!--<td scope="col">{{$registro->hoja_ruta}}</td-->
            <!--<td scope="col">{{$registro->fech_inicio}}</td-->
            <!--<td scope="col">{{$registro->fojas}}</td-->
            <!--<td scope="col">{{$registro->original}}</td-->
            <!--<td scope="col">{{$registro->copia}}</td-->
            <!--<td scope="col">{{$registro->legalizado}}</td-->
            <!--<td scope="col">{{$registro->fotocopia}}</td-->
            <td scope="col">{{$registro->observacion}}</td>

            <td>
              <a class="btn btn-secondary" href=" {{ route('muestra', $registro->id)}} "><i class="fas fa-eye"></i></a>
            </td>
            <td>
              <a class="btn btn-secondary" href=" {{ route('obtener', $registro->id)}} "><i class="fas fa-user-edit"></i></a>
            </td>
            <td>
              <form action="{{ route('registros.eliminar', $registro->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');"><i class="fas fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
          $('#registro-table').DataTable({
              prosessing: true,
              serverSider: true,

              "language": {

                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                  "sFirst": "Primero",
                  "sLast": "Último",
                  "sNext": "Siguiente",
                  "sPrevious": "Anterior"
                },
                "oAria": {
                  "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                  "copy": "Copiar",
                  "colvis": "Visibilidad"

                },
              }, 
                column: [{
                    data: 'num_codigo',
                    name: 'num_codigo'
                  },
                  {
                    data: 'gestion',
                    name: 'gestion'
                  },
                  {
                    data: 'area_unidad',
                    name: 'area_unidad'
                  },
                  {
                    data: 'titulo_proceso',
                    name: 'titulo_proceso'
                  },
                  {
                    data: 'formato',
                    name: 'formato'
                  },
                  {
                    data: 'tomo',
                    name: 'tomo'
                  },
                  {
                    data: 'total_tomo',
                    name: 'total_tomo'
                  },
                  {
                    data: 'total_fojas',
                    name: 'total_fojas'
                  },
                  {
                    data: 'num_estantes',
                    name: 'num_estantes'
                  },
                  {
                    data: 'bandeja_alfabetica',
                    name: 'bandeja_alfabetica'
                  },
                  {
                    data: 'prioridad_1',
                    name: 'prioridad_1'
                  },
                  {
                    data: 'tipologia',
                    name: 'tipologia'
                  },
                  {
                    data: 'cod_detalle',
                    name: 'cod_detalle'
                  },
                  {
                    data: 'descripcion_adjunta',
                    name: 'descripcion_adjunta'
                  },
                  {
                    data: 'hoja_ruta',
                    name: 'hoja_ruta'
                  },
                  {
                    data: 'fech_inicio',
                    name: 'fech_inicio'
                  },
                  {
                    data: 'fojas',
                    name: 'fojas'
                  },
                  {
                    data: 'original',
                    name: 'original'
                  },
                  {
                    data: 'copia',
                    name: 'copia'
                  },
                  {
                    data: 'legalizado',
                    name: 'legalizado'
                  },
                  {
                    data: 'fotocopia',
                    name: 'fotocopia'
                  },
                  {
                    data: 'observacion',
                    name: 'observacion'
                  }
                ]
              });
          });
  </script>
</body>

</html>