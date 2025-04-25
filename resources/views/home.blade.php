@extends('tablar::page')

@section('content')
<!-- Estilos -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Encabezado de Página -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Resumen</div>
                <h2 class="page-title">Dashboard</h2>
            </div>
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-warning">
                            <i class="fas fa-eye"></i> Nueva vista
                        </a>
                    </span>
                    <a href="#" class="btn btn-dark d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                        <i class="fas fa-plus"></i> Crear nuevo reporte
                    </a>
                    <a href="#" class="btn btn-dark d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Crear nuevo reporte">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sección: Quiénes Somos -->
<div class="container-xl mt-4">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">¿Quiénes somos?</h3>
            <p class="text-muted">
                Somos una plataforma dedicada al control y gestión de inventarios. Nuestro objetivo es brindar soluciones simples y eficientes para el manejo de productos, almacenamiento y reportes, permitiendo una toma de decisiones ágil y acertada en tu empresa.
            </p>
        </div>
    </div>
</div>


@endsection
