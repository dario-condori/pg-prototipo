@extends('plantilla.layout')


@section('titulo')
    MMM - Usuarios
@endsection

@section('contenido')
    <div class="main-content page-pricing">
        <div class="page-pricing">
            <section class="pricing-plan-grid mb-3">
                <article class="pricing-tier-card">
                    <div class="pricing-tier-head">
                        <span class="pricing-tier-icon pro"><i class="bi bi-database-check"></i></span>
                        <div>
                            <h5>AJAM</h5>
                            <p>Estado: <span class="badge badge-soft-success">Disponible</span></p>
                        </div>
                    </div>
                    <ul class="pricing-tier-list">
                        <li><i class="bi bi-check2"></i>Ultima conexión: 29-06-2026 08:36</li>
                        <li><i class="bi bi-check2"></i>Datos disponibles: al 28-06-2026</li>
                        <li><i class="bi bi-check2"></i>Tamaño de datos: 1.4 GB</li>
                        <li><i class="bi bi-check2"></i>Periodicidad: Diaria</li>
                    </ul>
                </article>

                <article class="pricing-tier-card">
                    <div class="pricing-tier-head">
                        <span class="pricing-tier-icon pro"><i class="bi bi-database-check"></i></span>
                        <div>
                            <h5>SENARECOM</h5>
                            <p>Estado: <span class="badge badge-soft-success">Disponible</span></p>
                        </div>
                    </div>
                    <ul class="pricing-tier-list">
                        <li><i class="bi bi-check2"></i>Ultima conexión: 29-06-2026 09:16</li>
                        <li><i class="bi bi-check2"></i>Datos disponibles: al 28-06-2026</li>
                        <li><i class="bi bi-check2"></i>Tamaño de datos: 0.6 GB</li>
                        <li><i class="bi bi-check2"></i>Periodicidad: Diaria</li>
                    </ul>
                </article>

                <article class="pricing-tier-card">
                    <div class="pricing-tier-head">
                        <span class="pricing-tier-icon pro"><i class="bi bi-database-check"></i></span>
                        <div>
                            <h5>ADUANA</h5>
                            <p>Estado: <span class="badge badge-soft-warning">En espera</span></p>
                        </div>
                    </div>
                    <ul class="pricing-tier-list">
                        <li><i class="bi bi-check2"></i>Ultima actualización: 10-06-2026 15:24</li>
                        <li><i class="bi bi-check2"></i>Datos disponibles: al 31-05-2026</li>
                        <li><i class="bi bi-check2"></i>Tamaño de datos: 8.4 GB</li>
                        <li><i class="bi bi-check2"></i>Periodicidad: Mensual</li>
                    </ul>
                </article>
            </section>

            <div class="row g-3 mb-3">
                <div class="col-xl-10">
                    <div class="card pricing-matrix-card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Servicios de interoperabilidad</h5>
                            <span class="pricing-matrix-note">Información según servicio implementado</span>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="pricing-matrix-table">
                                    <thead>
                                    <tr>
                                        <th>Entidad</th>
                                        <th>Servicio</th>
                                        <th>Estado</th>
                                        <th>Ultima conexión</th>
                                        <th>Usuario</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>AJAM</td>
                                        <td>Cuadriculas Mineras</td>
                                        <td class="text-center">
                                            <span class="badge badge-soft-success">Vigente</span>
                                        </td>
                                        <td>29-06-2026</td>
                                        <td>admin</td>
                                    </tr>
                                    <tr>
                                        <td>AJAM</td>
                                        <td>Contrato Minero</td>
                                        <td class="text-center">
                                            <span class="badge badge-soft-success">Vigente</span>
                                        </td>
                                        <td>29-06-2026</td>
                                        <td>admin</td>
                                    </tr>
                                    <tr>
                                        <td>SENARECOM</td>
                                        <td>Form M-02 comercio interno</td>
                                        <td class="text-center">
                                            <span class="badge badge-soft-success">Vigente</span>
                                        </td>
                                        <td>29-06-2026</td>
                                        <td>admin</td>
                                    </tr>
                                    <tr>
                                        <td>SENARECOM</td>
                                        <td>Form M-03 exportaciones</td>
                                        <td class="text-center">
                                            <span class="badge badge-soft-danger">Fallo</span>
                                        </td>
                                        <td>29-06-2026</td>
                                        <td>admin</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xl-4">
                    <div class="card pricing-faq-card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Common Questions</h5>
                    </div>
                    <div class="card-body">
                        <div class="pricing-faq-list">
                        <article class="pricing-faq-item">
                            <h6>Can we switch plans later?</h6>
                            <p>Yes. Upgrades apply immediately and downgrades start at the next billing cycle.</p>
                        </article>
                        <article class="pricing-faq-item">
                            <h6>Can annual plans be canceled?</h6>
                            <p>Yes. You can migrate to monthly billing after your current annual term.</p>
                        </article>
                        <article class="pricing-faq-item">
                            <h6>Do you support invoice billing?</h6>
                            <p>Annual Professional and Enterprise subscriptions can pay by invoice.</p>
                        </article>
                        <a href="faq.html" class="btn btn-outline-secondary btn-sm w-100">Read Full FAQ</a>
                        </div>
                    </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script>
        document.getElementById('mConfigServicios').classList.add('active');
    </script>
@endsection
