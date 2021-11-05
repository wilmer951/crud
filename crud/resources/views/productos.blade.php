@extends('plantilla')


@section('contenido')
<h1>Crear producto</h1>    


<form action="{{route('productos.crear')}}" method="post" >

@csrf
<div>
    <input type="text" name="name" placeholder="nombre" class="form-control">
</div>

<div>
    <input type="text" name="tipo" placeholder="tipo" class="form-control">

</div>

<div>
    <textarea name="descripcion" id="" cols="30" rows="10" placeholder="descripción" class="form-control"></textarea>

</div>


<div>
<button class="bt btn-primary">Crear</button>
</div>

</form>

@endsection
