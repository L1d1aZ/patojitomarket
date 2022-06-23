@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Formulario perfil</h2>
    <form action="{{route('perfil.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">tipo perfil:</label>
            <input type="text" name="tipo_perfil" class="form-control" id="">
        </div>

            <label for="exampleInputPassword1" class="form-label">tipo de perfil</label>
            <select class="form-select" aria-label="Default select example" name="nivel_academico">

                <option selected>Admisttrado</option>
                <option value="1">vendedor</option>
                <option value="1">micro emprendedor</option>
            </select>
            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection
