@extends('plantilla.layout')


@section('titulo')
    MMM - Muestras
@endsection

@section('hojaEstilos')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@endsection

@section('contenido')
    <div class="main-content page-dashboard-projects">
        <!-- Page Header -->
        <div class="page-header">
            <h1 class="page-title">Análisis de Muestras</h1>
            <nav class="breadcrumb">
                <a href="{{ route('resumen.estado') }}" class="breadcrumb-item">Estado</a>
                <span class="breadcrumb-item active">Muestreo</span>
            </nav>
        </div>

        <div class="row g-4">
          <!-- Basic Alerts -->
            <div class="col-lg-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title">Dashboard - Minerales Estratégicos Bolivia</h5>
                        <p class="card-subtitle">Gestión y Análisis Geoquímico</p>
                    </div>
                    <div class="card-body">
                    <ul class="nav nav-tabs" id="basicTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#por-elemento" type="button" role="tab">
                                Análisis por Elemento
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#por-distrito" type="button" role="tab">
                                Análisis por Distrito
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-3 border border-top-0 rounded-bottom" id="basicTabsContent">
                        <div class="tab-pane fade show active" id="por-elemento" role="tabpanel">
                            <div class="mb-3">
                                <label for="searchableSelect" class="form-label">Selecciones un elemento</label>
                                <select class="form-select" id="searchableSelect" data-choices="" data-choices-search="true">
                                    <option value="">Seleccione...</option>
                                    <option value="us">Silicio - Si</option>
                                    <option value="ca">Aluminio - Al</option>
                                    <option value="uk">Hierro - Fe</option>
                                    <option value="uk">Calcio - Ca</option>
                                    <option value="uk">Magnecio - Mg</option>
                                </select>
                            </div>
                            <div>
                                <div class="row g-4 mb-4">
                                    <div class="col-12 col-xl-6">
                                        <div class="card h-100">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-0">Top Distritos por Concentración</h5>
                                                {{-- <div class="dropdown">
                                                    <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                                        Muestras <i class="bi bi-chevron-down ms-1"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Todos</a></li>
                                                        <li><a class="dropdown-item active" href="#">MUE-0013</a></li>
                                                        <li><a class="dropdown-item" href="#">MUE-0014</a></li>
                                                        <li><a class="dropdown-item" href="#">MUE-0015</a></li>
                                                        <li><a class="dropdown-item" href="#">MUE-0016</a></li>
                                                    </ul>
                                                </div> --}}
                                            </div>
                                            <div class="card-body">
                                                <div id="graphConcentracion" style="height: 320px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-xl-6">
                                        <div class="card h-100">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Top Muestras con Mayor Concentración</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Sitio</th>
                                                            <th>Distrito</th>
                                                            <th>Departamento</th>
                                                            <th>Concentrado</th>
                                                            <th>Factor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        {{-- @foreach ($rm_municipio as $municipio) --}}
                                                        <tr>
                                                            <td>1. </td>
                                                            <td><div class="fw-medium">Salar Uyuni Norte</div></td>
                                                            <td><small class="text-muted">Uyuni</small></td>
                                                            <td>Santa Cruz</td>
                                                            <td>8.92 %</td>
                                                            <td>1.2x</td>
                                                        </tr>
                                                        {{-- @endforeach --}}
                                                    </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="por-distrito" role="tabpanel">
                            <div class="mb-3">
                                <label for="searchableSelect" class="form-label">Selecciones un distrito</label>
                                <select class="form-select" id="searchableSelect" data-choices="" data-choices-search="true">
                                    <option value="">Seleccione...</option>
                                    <option value="us">Uyuni</option>
                                    <option value="ca">Coipasa</option>
                                    <option value="uk">San Cristobal</option>
                                    <option value="uk">Mutún</option>
                                    <option value="uk">Porco</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Active Projects -->
        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Distribución Espacial de Muestras</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="m-2">
                        <div id="mapElemento" style="height: 500px; border-radius: 10px; position: relative;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @endsection


        @section('javascripts')
        <script>
            document.getElementById('mResumenMuestreo').classList.add('active');
        </script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accentColor = getComputedStyle(document.documentElement).getPropertyValue('--accent-color').trim();
            const successColor = getComputedStyle(document.documentElement).getPropertyValue('--success-color').trim();
            const warningColor = getComputedStyle(document.documentElement).getPropertyValue('--warning-color').trim();
            const dangerColor = getComputedStyle(document.documentElement).getPropertyValue('--danger-color').trim();
            const infoColor = getComputedStyle(document.documentElement).getPropertyValue('--info-color').trim();
            const borderColor = getComputedStyle(document.documentElement).getPropertyValue('--border-color').trim();
            const mutedColor = getComputedStyle(document.documentElement).getPropertyValue('--muted-color').trim();
            const surfaceColor = getComputedStyle(document.documentElement).getPropertyValue('--surface-color').trim();

            const commonOptions = {
                chart: {
                    fontFamily: 'inherit',
                    toolbar: {
                        show: false
                    },
                    zoom: {
                        enabled: false
                    }
                },
                grid: {
                    borderColor: borderColor,
                    strokeDashArray: 4
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                    colors: mutedColor,
                    fontSize: '11px'
                    }
                }
                },
                yaxis: {
                labels: {
                    style: {
                    colors: mutedColor,
                    fontSize: '11px'
                    }
                }
                }
            };
            new ApexCharts(document.querySelector('#graphConcentracion'), {
                ...commonOptions,
                series: [{
                    name: 'Sales',
                    data: [15.6, 13.8, 12, 10, 5.4, 4.7, 3.1, 2.1, 0.5]
                }],
                chart: {
                    ...commonOptions.chart,
                    type: 'bar',
                    height: 280
                },
                colors: [accentColor],
                stroke: {
                    width: 3,
                    curve: 'smooth'
                },
                xaxis: {
                    ...commonOptions.xaxis,
                    categories: ['Amayapampa', 'Pulacayo', 'Porco', 'Chorolque', 'Mutún B', 'Salar Uyuni Norte', 'Salar Uyuni Central']
                },
                markers: {
                    size: 4,
                    strokeWidth: 0,
                    hover: {
                        size: 6
                    }
                },
                plotOptions: {
                    bar: {
                    borderRadius: 4,
                    borderRadiusApplication: 'end',
                    horizontal: true,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
            }).render();

            // mapa
            const capasBaseElemento = {
                calles: null,
                satelite: null,
                topografico: null,
                terreno: null
            };
            mapElemento = L.map('mapElemento').setView([-18.30807073586175, -67.3434602058806], 6);

            capasBaseElemento.calles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            });

            capasBaseElemento.satelite = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: '© Esri'
            });

            capasBaseElemento.topografico = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenTopoMap'
            });

            capasBaseElemento.terreno = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: '© Esri'
            });

            // Agregar capa inicial (calles)
            currentLayerElemento = capasBaseElemento.calles;
            currentLayerElemento.addTo(mapElemento);

        });
    </script>
@endsection
