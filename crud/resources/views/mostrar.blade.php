@extends('plantilla')


@section('contenido')

<h1>Lista de productos</h1>



<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nonbre</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descripción</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach ($producto as $productos)

      


      <tr>
        
        <td>{{$productos->id}}</td>
        <td>{{$productos->name}}</td>
        <td>{{$productos->tipo}}</td>
        <td>{{$productos->descripcion}}</td>
      </tr>
         
     @endforeach



   
    </tbody>
  </table>















@endsection