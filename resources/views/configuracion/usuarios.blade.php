@extends('plantilla.layout')


@section('titulo')
    MMM - Usuarios
@endsection

@section('contenido')
    <div class="main-content page-users">
        <div class="page-users users-lab">
            <div class="users-lab-hero mb-3">
                <div>
                    <h1 class="page-title mb-1">Gestión de Usuarios</h1>
                    <p class="users-page-subtitle">Sección para administrar usuarios en el sistema.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="bi bi-plus-lg me-1"></i> Nuevo Usuario
                    </button>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-xl-8">
                    <div class="card users-list-card">
                        <div class="users-toolbar">
                            <div class="users-toolbar-left">
                                <div class="users-filter-tabs">
                                    <button class="users-filter-tab" data-filter="all">Todos <span class="users-filter-count">6</span></button>
                                    <button class="users-filter-tab" data-filter="active">Activos <span class="users-filter-count">4</span></button>
                                    <button class="users-filter-tab" data-filter="inactive">Inactivos <span class="users-filter-count">1</span></button>
                                    <button class="users-filter-tab" data-filter="pending">Suspendidos <span class="users-filter-count">1</span></button>
                                </div>
                            </div>

                            <div class="users-toolbar-right">
                                <div class="users-search">
                                    <i class="bi bi-search"></i>
                                    <input type="text" placeholder="Buscar usuarios" autocomplete="off">
                                </div>

                                <div class="dropdown">
                                    <button class="users-toolbar-btn dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="bi bi-sliders"></i> Roles
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Todos los Roles</a></li>
                                        <li><a class="dropdown-item" href="#">Administrador</a></li>
                                        <li><a class="dropdown-item" href="#">Director</a></li>
                                        <li><a class="dropdown-item" href="#">Técnico</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive users-table-wrap">
                            <table class="table table-hover align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Nro.</th>
                                        <th class="text-center">Usuario</th>
                                        <th class="text-center">Rol</th>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Último acceso</th>
                                        <th class="text-center">Alta</th>
                                        <th class="users-th-actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <div class="users-user">
                                                <div class="users-user-info">
                                                    <a href="users-view.html" class="users-user-name">Juan Administrador</a>
                                                    <span class="users-user-email"><a href="#!" class="__cf_email__">juan@gmail.com</a></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="users-role admin"><i class="bi bi-shield-check"></i> Administrador</span></td>
                                        <td><span class="users-status active"><span class="users-status-dot"></span> Active</span></td>
                                        <td class="users-meta">12:25</td>
                                        <td class="users-meta">15/06/2026</td>
                                        <td>
                                            <div class="users-actions">
                                            <a href="users-view.html" class="users-action-btn" title="View"><i class="bi bi-eye"></i></a>
                                            <a href="users-edit.html" class="users-action-btn" title="Edit"><i class="bi bi-pencil"></i></a>
                                            <div class="dropdown">
                                                <button class="users-action-btn dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-envelope me-2"></i> Enviar Email</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i> Resetear Password</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Eliminar</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            <div class="users-user">
                                                <div class="users-user-info">
                                                    <a href="users-view.html" class="users-user-name">Marce direc</a>
                                                    <span class="users-user-email"><a href="#!" class="__cf_email__">marce@gmail.com</a></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="users-role manager"><i class="bi bi-person-gear"></i> Director</span></td>
                                        <td><span class="users-status active"><span class="users-status-dot"></span> Active</span></td>
                                        <td class="users-meta">08:25</td>
                                        <td class="users-meta">15/04/2026</td>
                                        <td>
                                            <div class="users-actions">
                                            <a href="users-view.html" class="users-action-btn" title="View"><i class="bi bi-eye"></i></a>
                                            <a href="users-edit.html" class="users-action-btn" title="Edit"><i class="bi bi-pencil"></i></a>
                                            <div class="dropdown">
                                                <button class="users-action-btn dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-envelope me-2"></i> Enviar Email</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i> Resetear Password</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Eliminar</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3.</td>
                                        <td>
                                            <div class="users-user">
                                                <div class="users-user-info">
                                                    <a href="users-view.html" class="users-user-name">Pancho Villa</a>
                                                    <span class="users-user-email"><a href="#!" class="__cf_email__">pancho@gmail.com</a></span>
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="users-role user"><i class="bi bi-person"></i> Técnico</span></td>
                                        <td><span class="users-status inactive"><span class="users-status-dot"></span> Inactive</span></td>
                                        <td class="users-meta">08:25</td>
                                        <td class="users-meta">15/04/2026</td>
                                        <td>
                                            <div class="users-actions">
                                            <a href="users-view.html" class="users-action-btn" title="View"><i class="bi bi-eye"></i></a>
                                            <a href="users-edit.html" class="users-action-btn" title="Edit"><i class="bi bi-pencil"></i></a>
                                            <div class="dropdown">
                                                <button class="users-action-btn dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-envelope me-2"></i> Enviar Email</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i> Resetear Password</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i> Eliminar</a></li>
                                                </ul>
                                            </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="users-pagination">
                            <div class="users-pagination-info">Mostrando <strong>1-8</strong> of <strong>248</strong> users</div>
                            <nav>
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">31</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card users-lab-card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Usuarios</h5>
                        </div>
                        <div class="card-body">
                            <div class="users-lab-kpis">
                                <div class="users-lab-kpi users-lab-kpi-total">
                                    <small>Total</small>
                                    <strong>6</strong>
                                    <span>100%</span>
                                </div>
                                <div class="users-lab-kpi users-lab-kpi-active">
                                    <small>Activos</small>
                                    <strong>4</strong>
                                    <span>66%</span>
                                </div>
                                <div class="users-lab-kpi users-lab-kpi-inactive">
                                    <small>Inactivos</small>
                                    <strong>1</strong>
                                    <span>16%</span>
                                </div>
                                <div class="users-lab-kpi users-lab-kpi-pending">
                                    <small>Suspendidos</small>
                                    <strong>1</strong>
                                    <span>16%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card users-lab-card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Distribución por roles</h5>
                        </div>
                        <div class="card-body">
                            <div class="users-lab-role">
                                <div class="users-lab-role-head"><span>Director</span><strong>1</strong></div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 17%"></div>
                                </div>
                            </div>
                            <div class="users-lab-role">
                                <div class="users-lab-role-head"><span>Técnicos</span><strong>3</strong></div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" style="width: 63%"></div>
                                </div>
                            </div>
                            <div class="users-lab-role">
                                <div class="users-lab-role-head"><span>Administrador</span><strong>2</strong></div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width: 33%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="addUserModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Adicionar nuevo usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="form-label">Nombres</label>
                                        <input type="text" class="form-control" placeholder="Ingrese nombres">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Apellidos</label>
                                        <input type="text" class="form-control" placeholder="Ingreso apellidos">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" placeholder="Correo electrónco email address">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Rol</label>
                                        <select class="form-select">
                                            <option value="">Seleccionar rol...</option>
                                            <option value="admin">Administrador</option>
                                            <option value="manager">Director</option>
                                            <option value="user">Técnico</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Confirmar Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm password">
                                    </div>
                                    <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="sendInvite" checked="">
                                        <label class="form-check-label" for="sendInvite">Enviar email con detalles de login</label>
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script>
        document.getElementById('mConfigUsuarios').classList.add('active');
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      const accentColor = getComputedStyle(document.documentElement).getPropertyValue('--accent-color').trim();
      const successColor = getComputedStyle(document.documentElement).getPropertyValue('--success-color').trim();
      const warningColor = getComputedStyle(document.documentElement).getPropertyValue('--warning-color').trim();
      const infoColor = getComputedStyle(document.documentElement).getPropertyValue('--info-color').trim();
      const borderColor = getComputedStyle(document.documentElement).getPropertyValue('--border-color').trim();
      const mutedColor = getComputedStyle(document.documentElement).getPropertyValue('--muted-color').trim();
      // Sales Overview Chart
      const salesOptions = {
        series: [ {
          name: 'Orders',
          type: 'column',
          data: [44, 55, 41, 67, 45, 72, 58, 78, 52, 84, 62, 95, 72, 102, 85, 112, 98, 125, 108, 138, 118, 152, 132, 165, 148, 180, 162, 198, 178, 220]
        }],
        chart: {
          height: 300,
          fontFamily: 'inherit',
          toolbar: {
            show: false
          },
          zoom: {
            enabled: true
          }
        },
        colors: [successColor],
        stroke: {
          width: [0, 3],
          curve: 'smooth'
        },
        plotOptions: {
          bar: {
            columnWidth: '60%',
            borderRadius: 2
          }
        },
        fill: {
          opacity: [1, 1]
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: Array.from({
            length: 30
          }, (_, i) => (i + 1).toString()),
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
            },
            rotate: 0,
            hideOverlappingLabels: true
          }
        },
        yaxis: [{
        //   opposite: true,
          title: {
            text: 'Orders',
            style: {
              color: mutedColor
            }
          },
          labels: {
            style: {
              colors: mutedColor
            }
          }
        }],
        grid: {
          borderColor: borderColor,
          strokeDashArray: 4
        },
        legend: {
          position: 'top',
          horizontalAlign: 'right',
          fontSize: '13px'
        },
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function(val, opts) {
              return opts.seriesIndex === 0 ? 'c' + val.toLocaleString() : val + ' orders';
            }
          }
        }
      };
      new ApexCharts(document.querySelector('#salesOverviewChart'), salesOptions).render();


      // Category Donut Chart
      const categoryOptions = {
        series: [9220, 7488, 4214, 2302],
        chart: {
          type: 'donut',
          height: 220,
          fontFamily: 'inherit'
        },
        colors: [accentColor, successColor, warningColor, infoColor],
        labels: ['Oro', 'Plata', 'Plomo', 'Bismuto'],
        plotOptions: {
          pie: {
            donut: {
              size: '70%',
              labels: {
                show: true,
                name: {
                    show: true,
                    color: mutedColor
                  },
                value: {
                    show: true,
                    fontSize: '16px',
                    fontWeight: 700,
                    color: accentColor,
                    formatter: function(val) {
                      return Number(val).toLocaleString('es-BO', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + ' Uni';
                    }
                  },
                total: {
                  show: true,
                  label: 'Total',
                  formatter: function() {
                    return '800';
                  }
                }
              }
            }
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: false
        },
        stroke: {
          width: 0
        }
      };
      new ApexCharts(document.querySelector('#categoryChart'), categoryOptions).render();
    });
  </script>

@endsection
