@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="{{route('tipo_identificacion.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">Nombre:</label>
            <input type="text" name="nombres" class="form-control" id="">
            <option selected>cedula siudadania</option>
            <option value="1">cedula estragera</option>
            
        </select>
        </div>






            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
