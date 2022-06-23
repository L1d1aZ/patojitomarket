@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="{{route('Usuario.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">Nombre:</label>
            <input type="text" name="nombres" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido:</label>
            <input type="text" class="form-control" name="apellidos">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">telefono</label>
            <input type="num" class="form-control" name="telefono">
        </div>

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">email</label>
        <input type="num" class="form-control" name="email">
    </div>

</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">direccion</label>
    <input type="num" class="form-control" name="direccion">
</div>






            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
