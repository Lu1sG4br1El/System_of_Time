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
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
        <symbol id="prov" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
        </symbol>
    </svg>

    <div class="container formxd">
        <div class="text-center mt-2">
            <h2 class="fw-normal">Agregar Grupo</h2>
        </div>
        <div class="text-center m-2 mb-4">
            <svg class="bi" width="100" height="100"><use xlink:href="#prov"/></svg>
        </div>

        <form method="post" action="">
<!--            @csrf-->
            <div class="row g-3 align-items-center">
                    <div class="form-group">
                        <label class="form-label">Nombre del grupo: </label>
                        <input required type="text" class="form-control" name="nameGroup" placeholder="Introduce el nombre del grupo..." required>
                    </div>
                <div class="text-center">
                    <button type="submit" name="btnsaveU" class="btn btn-dark m-3">Guardar</button>
                </div>
            </div>
            <script>

            </script>  

        </form>
    </div>