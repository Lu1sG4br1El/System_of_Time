@extends('plantilla')
<h6 class = "mt-4 display-1 text-center"></h6>
<style>
    div.formxd{
        border-color: black;
        border-style: solid;
        border-radius: 5px;
        margin-top: 10px;
        position: relative;
        width: 30%;
        background-color: white;
    }
</style>
<br>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <symbol id="prov" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
    </svg>
    <div class="container formxd">
        <div class="text-center mt-2">
            <h2 class="fw-normal">Eliminar Usuario</h2>
        </div>
        <div class="text-center m-2 mb-4">
            <svg class="bi" width="100" height="100"><use xlink:href="#prov"/></svg>
        </div>

        <form method="post" action="{{ route('usu.destroy', $usu->id) }}">
            @csrf
            @method('DELETE')
    <div class="form-group">
        <label class="form-label">Nombre: </label>
        <input required type="text" class="form-control" name="nombre" placeholder="Introduce el nombre de usuario..." value="{{$usu->nombre}}" required>
    </div>
    <div class="form-group">
        <label class="form-label">Apellido paterno: </label>
        <input required type="text" class="form-control" name="apPaterno" placeholder="Introduce el Apellido paterno..." value="{{$usu->apPaterno}}" required>
    </div>
    <div class="form-group">
        <label class="form-label">Apellido materno: </label>
        <input required type="text" class="form-control" name="apMaterno" placeholder="Introduce el Apellido materno..." value="{{$usu->apMaterno}}" required>
    </div>
    <div class="form-group">
        <label class="form-label">Correo electronico: </label>
        <input required type="text" class="form-control" name="email" placeholder="Introduce su correo electronico" value="{{$usu->email}}" required>
    </div>
    <div class="form-group">
        <label for="inputPassword5" class="form-label">Contraseña: </label>
        <input type="password" id="inputPassword5" class="form-control" name="password" placeholder="Password..." aria-labelledby="passwordHelpBlock" value="{{$usu->password}}" required>
        <div id="passwordHelpBlock" class="form-text">
            8 a 12 caracteres, letras y números, sin espacios y sin caracteres especiales ni emoji.
        </div>
        <div class="text-center">
            <button type="submit" name="btnaddU" class="btn btn-dark m-3" onclick="">Eliminar</button>
        </div>

