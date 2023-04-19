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
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
        <symbol id="prov" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
        </symbol>
    </svg>

    <div class="container formxd">
        <div class="text-center mt-2">
            <h2 class="fw-normal">Agregar Carga Horaria</h2>
        </div>
        <div class="text-center m-2 mb-4">
            <svg class="bi" width="100" height="100"><use xlink:href="#prov"/></svg>
        </div>

        <form method="post" action="">
<!--            @csrf-->
            <div class="row g-3 align-items-center">
                    <div class="form-group">
                        <label class="form-label">Nombre de la materia: </label>
                        <input required type="text" class="form-control" name="User" placeholder="Introduce el nombre de usuario..." required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" name="TypeU">Día: </label>
                        <select name="Dia" class="form-select" aria-label=".form-select-lg example">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="0">Lunes</option>
                            <option value="1">Martes</option>
                            <option value="2">Miercoles</option>
                            <option value="3">Jueves</option>
                            <option value="4">Viernes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" name="TypeU">Hora de inicio: </label>
                        <select name="hourStart" class="form-select" aria-label=".form-select-lg example">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="0">7:00 AM</option>
                            <option value="1">8:40 AM</option>
                            <option value="2">9:00 AM</option>
                            <option value="3">10:20 AM</option>
                            <option value="4">11:40 AM</option>
                            <option value="5">12:00 PM</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" name="TypeU">Hora final: </label>
                        <select name="hourEnd" class="form-select" aria-label=".form-select-lg example">
                            <option disabled selected>Selecciona una opción</option>
                            <option value="0">8:40 AM</option>
                            <option value="1">9:00 AM</option>
                            <option value="2">10:20 AM</option>
                            <option value="3">11:40 AM</option>
                            <option value="4">12:00 PM</option>
                            <option value="5">1:40 PM</option>
                        </select>
                    </div>
                <div class="text-center">
                    <button type="submit" name="btnsaveU" class="btn btn-dark m-3">Guardar</button>
                </div>
            </div>
            <script>

            </script>  

        </form>
    </div>