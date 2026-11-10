<!-- barra de menu de opciones -->
    <aside class="sidebar">
        <div class="sidebar-shell">
            <button class="sidebar-close" type="button" aria-label="Close sidebar">
                <i class="bi bi-x-lg"></i>
            </button>

            <!-- Sidebar Navigation -->
            <nav class="sidebar-nav">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a id="mResumenEstado" class="nav-link " href="{{ route('resumen.estado') }}">
                            <span class="nav-icon"><i class="ph-light ph-squares-four"></i></span>
                            <span class="nav-text">Resumen</span>
                            <span class="nav-meta">Estado</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="mResumenMuestreo" class="nav-link " href="{{ route('resumen.muestreo') }}">
                            <span class="nav-icon"><i class="ph-light ph-gauge"></i></span>
                            <span class="nav-text">Análisis de Muestras</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="mResumenRegalias" class="nav-link " href="{{ route('resumen.regalias') }}">
                            <span class="nav-icon"><i class="ph-light ph-puzzle-piece"></i></span>
                            <span class="nav-text">Análisis de Cuadrículas Mineras</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="mResumenComercio" class="nav-link " href="{{ route('resumen.comercio') }}">
                            <span class="nav-icon"><i class="ph-light ph-gauge"></i></span>
                            <span class="nav-text">Análisis de Comercialización</span>
                        </a>
                    </li>
                    {{-- <i class="ph-light ph-table"></i> --}}
                    {{-- <span class="nav-icon"><i class="ph-light ph-folder-open"></i></span> --}}
                    {{-- <span class="nav-icon"><i class="ph-light ph-textbox"></i></span> --}}
                    {{-- <span class="nav-icon"><i class="ph-light ph-chart-line-up"></i></span> --}}
                    {{-- <span class="nav-icon"><i class="ph-light ph-receipt"></i></span> --}}
                    {{-- <span class="nav-icon"><i class="ph-light ph-clock-counter-clockwise"></i></span> --}}

                    <li class="nav-heading"><span>Entidades relacionadas</span></li>
                    {{-- SENARECOM --}}
                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-stack"></i></span>
                            <span class="nav-text">SENARECOM</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li>
                                <a class="nav-link " href="#!">
                                    <span class="nav-dot"></span>Form M-01 Registro NIM
                                </a>
                            </li>
                            <li>
                                <a class="nav-link " href="#!">
                                    <span class="nav-dot"></span>Form M-02 Comercialización interna
                                </a>
                            </li>
                            <li>
                                <a class="nav-link " href="#!">
                                    <span class="nav-dot"></span>Form M-03 Exportaciones
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- AJAM --}}
                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-kanban"></i></span>
                            <span class="nav-text">AJAM</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li>
                                <a class="nav-link " href="#!">
                                    <span class="nav-dot"></span>Licencias de Prospección y Exploración
                                </a>
                            </li>
                            <li>
                                <a class="nav-link " href="#!">
                                    <span class="nav-dot"></span>Licencias de Prospección Aérea
                                </a>
                            </li>
                            <li>
                                <a class="nav-link " href="#!">
                                    <span class="nav-dot"></span>Contratos Administrativos Mineros
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-heading"><span>Configuraciones</span></li>
                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-users-three"></i></span>
                            <span class="nav-text">Usuarios</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a id="mConfigUsuarios" class="nav-link " href="{{ route('config.usuarios') }}"><span class="nav-dot"></span>Usuarios</a></li>
                            {{-- <li><a class="nav-link " href="#!"><span class="nav-dot"></span>Roles</a></li>
                            <li><a class="nav-link " href="#!"><span class="nav-dot"></span>Permisos</a></li>
                            <li><a class="nav-link " href="#!"><span class="nav-dot"></span>Notificaciones</a></li> --}}
                        </ul>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#!">
                            <span class="nav-icon"><i class="ph-light ph-shield-check"></i></span>
                            <span class="nav-text">Parámetros</span>
                        </a>
                    </li> --}}

                    <li class="nav-item">
                        <a id="mConfigServicios" class="nav-link" href="{{ route('config.servicios') }}">
                            <span class="nav-icon"><i class="ph-light ph-checks"></i></span>
                            <span class="nav-text">Servicios y BBDD</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#!">
                            <span class="nav-icon"><i class="ph-light ph-warning"></i></span>
                            <span class="nav-text">Monitoreo de Actividades</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer">
                <div class="sidebar-account">
                    <a href="#!" class="sidebar-account-main">
                        <img src="{{ asset('plantilla/assets/img/profile-img.webp') }}" alt="User" class="sidebar-account-avatar">
                        <div class="sidebar-account-meta">
                            <div class="sidebar-account-name">Juan Perez</div>
                            <div class="sidebar-account-role">Administrador</div>
                        </div>
                    </a>
                    <div class="sidebar-account-actions">
                        <a href="#!" class="sidebar-account-action" title="Settings">
                            <i class="bi bi-gear"></i>
                        </a>
                        <a href="#!" class="sidebar-account-action sidebar-account-logout" title="Logout">
                            <i class="bi bi-box-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay"></div>
