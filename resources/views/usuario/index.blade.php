@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE PROFESORES</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombe</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Celular</th>
        <th scope="col">Nivel Academico</th>
      </tr>

          <a href="{{route('teachers.edit',$T)}}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td>
          <form action="" method="post">
            @method('DELETE')
            @csrf
          <a href="{{route('usuario.destroy',$T)}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$teachers->links()}}
@endsection
