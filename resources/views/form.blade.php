@extends('layouts.app')
@section('content')
<form class="user" action="@if (! empty($persona))/persona/{{$persona->id}} @else /persona @endif" method="POST" style="width: 40%">
    @csrf
    @if (! empty($persona))
        @method('put')
    @endif
    <div class="form-group">
        <input type="nombre" class="form-control form-control-user"
            id="nombre" placeholder="Nombre" name="nombre"@if (! empty($persona)) value="{{$persona->nombre}}" @endif>
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user"
            id="email" placeholder="Email" name="email"@if (! empty($persona)) value="{{$persona->email}}" @endif>
    </div>
        <input type="submit" class="btn btn-success btn-user btn-block" value="@if (! empty($persona)) Modificar @else Ingresar @endif">  
    
    <hr>   
</form>
@endsection