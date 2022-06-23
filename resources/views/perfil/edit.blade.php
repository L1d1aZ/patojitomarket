@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Edicion del id_perfil # {{$perfil->id}}</h2>
    <form action="{{route('teachers.update',$perfil)}}" method="post" class="form">
        @method('PUT')
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">tipo de perfil:</label>
            <input type="text" name="tipo de perfil" class="form-control" id="" value="{{$teacher->nombres}}">
        </div>
        <option selected>Admisttrado</option>
        <option value="1">vendedor</option>
        <option value="1">micro emprendedor</option>
    </select>
    <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>


    <?php

