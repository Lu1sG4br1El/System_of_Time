<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(58, 204, 204)">
<nav class="navbar bg-body-tertiary fixed-top" style="background-color: #0b132b">
<div class="container-fluid">
    <a class="navbar-brand text-white" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
<div class="offcanvas offcanvas-end" style="background-color: dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header" style="background-color: #0b132b">
        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">System Of Time</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="background-color: #0b132b">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('Nuser') ?'text-warning ':'' }}" aria-current="page" href="/">Usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white {{ request()->routeIs('Nmateria') ?'text-warning ':'' }}" aria-current="page" href="/materia">Materia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('Ngroup') ?'text-warning ':'' }}" aria-current="page" href="/group">Grupo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('Ncuatri') ?'text-warning ':'' }}" aria-current="page" href="/cuatri">Cuatrimestre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('Ncarrera') ?'text-warning ':'' }}" aria-current="page" href="/carrera">Carrera</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('Ncargahora') ?'text-warning ':'' }}" aria-current="page" href="/cargahora">Carga horaria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('NconsulUser') ?'text-warning ':'' }}" aria-current="page" href="/consulUser">Consultar usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('NconsulMateria') ?'text-warning ':'' }}" aria-current="page" href="/consulMateria">Consultar materias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('NconsulCuatri') ?'text-warning ':'' }}" aria-current="page" href="/consulCuatri">Consultar cuatrimestre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('NconsulCarrera') ?'text-warning ':'' }}" aria-current="page" href="/consulCarrera">Consultar Carrera</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('NconsulGroup') ?'text-warning ':'' }}" aria-current="page" href="/consulGroup">Consultar Grupos</a>
            </li>
        </ul>
        <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</div>
</nav>
</body>
</html>