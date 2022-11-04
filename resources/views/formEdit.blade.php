@extends('layouts.app')
@section('content')
<form class="user" action="/persona/{{$persona->id}}" method="POST" style="width: 40%">
    @csrf
    @method('put')
    <div class="form-group">
        <input type="nombre" class="form-control form-control-user"
            id="nombre" placeholder="Nombre" name="nombre">
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user"
            id="email" placeholder="Email" name="email">
    </div>
        <input type="submit" class="btn btn-primary btn-user btn-block" value="Modificar">  
    
    <hr>   
</form>
@endsection