<header class="header">
        <div class="header-left">
            <button class="sidebar-toggle" title="Toggle Sidebar" aria-label="Toggle sidebar">
                <span class="menu-lines" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <a href="{{ route('inicio') }}" class="header-brand" aria-label="Regalias mineras">
                <span class="header-logo">
                    <img src="{{ asset('plantilla/assets/img/mmm-escudo.png') }}" alt="NiceAdmin">
                </span>
                <span class="header-context">
                    <strong class="header-context-title">Ministerio de Minería y Metalurgia</strong>
                </span>
            </a>
        </div>

        <div class="header-right">
            <div class="header-actions-desktop">
                <div class="header-action-wrap dropdown quickaccess-dropdown">
                    <button class="header-action dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" title="Aceso rápido">
                        <i class="ph-light ph-squares-four"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end quickaccess-menu">
                    <div class="menu-title">Aceso rápido</div>
                    <div class="quickaccess-grid">
                        <a href="#!" class="quickaccess-item">
                            <i class="bi bi-people"></i>
                            <span>Usuarios</span>
                            <small>Roles-Permisos</small>
                        </a>
                        <a href="#!" class="quickaccess-item">
                            <i class="bi bi-kanban"></i>
                            <span>Parámetros</span>
                            <small>Valores de cálculo</small>
                        </a>
                        <a href="apps-chat.html" class="quickaccess-item">
                            <i class="bi bi-database"></i>
                            <span>Base de datos</span>
                            <small>Estado de las BBDD</small>
                        </a>
                        <a href="apps-email.html" class="quickaccess-item">
                            <i class="bi bi-link"></i>
                            <span>Servicios</span>
                            <small>Estado de Interoperabilidad</small>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="header-action-wrap dropdown notification-dropdown">
                    <button class="header-action dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" title="Notifications">
                        <i class="bi bi-bell"></i>
                        <span class="header-badge">2</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end notification-menu">
                    <div class="notification-header">
                        <div>
                            <h6>Notificaciones</h6>
                            <span>2 no leído</span>
                        </div>
                        {{-- <a href="#" data-notification-action="mark-all-read">Mark all read</a> --}}
                    </div>
                    <div class="notification-list">
                        <div class="notification-item unread">
                            <span class="notification-dot"></span>
                            <div class="notification-icon warning">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                            <div class="notification-content">
                                <div class="notification-title">BD AJAM actualizado</div>
                                <div class="notification-text">Se actualizó datos de AJAM.</div>
                                <span class="notification-time">Hoy</span>
                            </div>
                        </div>
                        <div class="notification-item unread">
                            <span class="notification-dot"></span>
                            <div class="notification-icon success">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <div class="notification-content">
                                <div class="notification-title">BD Senarecom actualizado</div>
                                <div class="notification-text">BD actualizado satisfactoriamente !!!.</div>
                                <span class="notification-time">20/06/2026 05:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="notification-footer">
                        <a href="#!">Ir al centro de notificaciones <i class="bi bi-arrow-right"></i></a>
                    </div>
                    </div>
                </div>

                <button class="header-action theme-toggle" title="Toggle Theme">
                    <i class="ph-light ph-moon-stars theme-icon-dark"></i>
                    <i class="ph-light ph-sun theme-icon-light"></i>
                </button>

                <div class="header-action-wrap dropdown user-dropdown">
                    <button class="dropdown-toggle user-trigger" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('plantilla/assets/img/profile-img.webp') }}" alt="User" class="user-avatar">
                        <div class="user-brief">
                            <span class="user-name">Juan Perez</span>
                            <span class="user-role">Director</span>
                        </div>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end user-menu">
                        <div class="user-menu-header">
                            <img src="{{ asset('plantilla/assets/img/profile-img.webp') }}" alt="User" class="user-menu-avatar">
                            <div class="user-menu-info">
                            <div class="user-menu-name">Juan Perez</div>
                            <div class="user-menu-email">
                                <a href="#!" class="__cf_email__">juanperez@gmail.com</a>
                            </div>
                            </div>
                        </div>
                        <div class="user-menu-body">
                            <a class="user-menu-item" href="#!">
                                <i class="bi bi-person"></i>
                                <span>Mi Perfil</span>
                            </a>
                            <a class="user-menu-item" href="#!">
                                <i class="bi bi-sliders"></i>
                                <span>Preferencias</span>
                            </a>
                            <a class="user-menu-item" href="#!">
                                <i class="bi bi-activity"></i>
                                <span>Mis Actividades</span>
                            </a>
                        </div>
                        <div class="user-menu-footer">
                            <a class="user-menu-logout" href="#!">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Salir</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-actions-mobile">
                <button class="header-action mobile-menu-toggle" title="More">
                    <i class="bi bi-three-dots"></i>
                </button>
            </div>
        </div>
    </header>

    {{-- Header para moviles --}}
    <div class="mobile-header-menu">
        <div class="mobile-header-menu-content">
            <button class="mobile-menu-item theme-toggle" title="Toggle Theme">
                <i class="ph-light ph-moon-stars theme-icon-dark"></i>
                <i class="ph-light ph-sun theme-icon-light"></i>
                <span class="mobile-menu-label">Tema</span>
            </button>

            <a href="#!" class="mobile-menu-item">
                <i class="bi bi-bell"></i>
                <span class="badge">2</span>
                <span class="mobile-menu-label">Notificaciones</span>
            </a>

            <a href="#!" class="mobile-menu-item">
                <i class="bi bi-person"></i>
                <span class="mobile-menu-label">Mi Perfil</span>
            </a>

            <a href="#!" class="mobile-menu-item">
                <i class="bi bi-sliders"></i>
                <span class="mobile-menu-label">Preferencias</span>
            </a>

            <a href="#!" class="mobile-menu-item mobile-menu-item-danger">
                <i class="bi bi-box-arrow-right"></i>
                <span class="mobile-menu-label">Salir</span>
            </a>
        </div>
    </div>
