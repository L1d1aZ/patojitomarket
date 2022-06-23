@extends('Template.template')
@section('plantillaweb')

<h2>tipo de perfil</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">tipo de perfil</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($perfil as $sub)
      <tr>
        <td scope="row"> {{$sub->id}}</td>
        <th scope="row">{{$sub->tipo_de_perfil}}</th>
    >

        <td>
          <a href="{{route('perfil.edit',$sub)}}" class="btn btn-warning btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td>
          <form action="" method="post">
            @method('DELETE')
         
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$perfil->links()}}
@endsection
