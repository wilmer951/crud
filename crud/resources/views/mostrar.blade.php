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
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach ($producto as $productos)

      


      <tr>
        
        <td>{{$productos->id}}</td>
        <td>{{$productos->name}}</td>
        <td>{{$productos->tipo}}</td>
        <td>{{$productos->descripcion}}</td>
        <td><a  href="{{route('productos.editar',$productos->id)}}"><button class="bnt btn-primary">Editar</button> </a></td>
        <td>
          <form action="{{route('productos.delete',$productos->id)}}" method="POST">
            @csrf
            @method('delete')
            <button class="bnt btn-danger">Eliminar</button>
          </form>
          
          
      </tr>
         
     @endforeach



   
    </tbody>
  </table>















@endsection