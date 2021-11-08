@extends('plantilla')


@section('contenido')
<h1>Editar Producto</h1>    


<form action="{{route('productos.update',$producto)}}" method="post" >

@csrf
@method('PUT')
<div>
    <input type="text" name="name" placeholder="nombre" class="form-control" value="{{$producto->name}}">
</div>

<div>
    <input type="text" name="tipo" placeholder="tipo" class="form-control" value="{{$producto->tipo}}">

</div>

<div>
    <textarea name="descripcion" id="" cols="30" rows="10" placeholder="descripción" class="form-control">{{$producto->descripcion}}</textarea>

</div>


<div>
<button class="bt btn-primary">Actualizar</button>
</div>

</form>

@endsection
