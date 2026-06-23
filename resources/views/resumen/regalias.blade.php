@extends('plantilla.layout')


@section('titulo')
    MMM - Regalias
@endsection

@section('contenido')
    <div class="main-content page-dashboard-sales">
        <div class="page-header">
            <h1 class="page-title">Análisis de Cuadriculas Mineras</h1>
            <nav class="breadcrumb">
                <a href="{{ route('resumen.estado') }}" class="breadcrumb-item">Estado</a>
                <span class="breadcrumb-item active">Cuadriculas</span>
            </nav>
        </div>

        <!-- Stats Row -->
        <div class="dashboard-grid dashboard-grid-4">
            <div class="card widget-stat">
                <div class="widget-stat-header">
                    <div>
                        <div class="widget-stat-value">3,200 Cuad</div>
                        <div class="widget-stat-label">Superfice total certificado</div>
                    </div>
                    <div class="widget-stat-icon info">
                        <i class="bi bi-receipt"></i>
                    </div>
                </div>
                <div class="widget-stat-change positive">
                    <i class="bi bi-arrow-up"></i> 5.3% vs {{ date('Y')-1 }}
                </div>
            </div>

            <div class="card widget-stat">
                <div class="widget-stat-header">
                    <div>
                        <div class="widget-stat-value">420</div>
                        <div class="widget-stat-label">Areas mineras Vigentes</div>
                    </div>
                    <div class="widget-stat-icon success">
                        <i class="bi bi-arrows-fullscreen"></i>
                    </div>
                </div>
                <div class="widget-stat-change positive">
                    <i class="bi bi-arrow-up"></i> 1.5% vs {{ date('Y')-1 }}
                </div>
            </div>

            <div class="card widget-stat">
                <div class="widget-stat-header">
                    <div>
                        <div class="widget-stat-value">13</div>
                        <div class="widget-stat-label">Areas en trámites</div>
                    </div>
                    <div class="widget-stat-icon primary">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                </div>
                <div class="widget-stat-change positive">
                    <i class="bi bi-arrow-up"></i> 0.2% vs {{ date('Y')-1 }}
                </div>
            </div>

            <div class="card widget-stat">
                <div class="widget-stat-header">
                    <div>
                        <div class="widget-stat-value">4</div>
                        <div class="widget-stat-label">Áreas libres para ser solicitadas</div>
                    </div>
                    <div class="widget-stat-icon warning">
                        <i class="bi bi-geo"></i>
                    </div>
                </div>
                <div class="widget-stat-change negative">
                    <i class="bi bi-arrow-down"></i> 1% vs {{ date('Y')-1 }}
                </div>
            </div>
        </div>

      <!-- Charts Row -->
      <div class="two-column-layout">
        <div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Evolución de Áreas mineras con Licencia</h5>
                    <div class="card-actions">
                        <select class="form-select form-select-sm" style="width: auto;" id="salesPeriod">
                            <option value="7">Por meses</option>
                            <option value="90">Por trimestres</option>
                            <option value="30" selected="">Por gestiones</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" id="salesOverviewChart"></div>
                </div>
            </div>

            <!-- Top Products -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Principales Minerales autorizadas</h5>
                    <div class="card-actions">
                        <a href="#" class="btn btn-sm btn-outline-primary">Ver todo</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Mineral</th>
                                <th class="text-center">Cuadriculas <br>(Uni)</th>
                                <th class="text-center">Superficie <br>(Has)</th>
                                <th class="text-center">Volumen estimado <br>(Ton)</th>
                                <th class="text-center"> - </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="fw-medium">Oro</div>
                                    </div>
                                </td>
                                <td class="text-center">699</td>
                                <td class="text-center">142,000</td>
                                <td class="text-center">283,858</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-outline-warning btn-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="fw-medium">Plata</div>
                                    </div>
                                </td>
                                <td class="text-center">699</td>
                                <td class="text-center">142,000</td>
                                <td class="text-center">283,858</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-outline-warning btn-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="fw-medium">Plomo</div>
                                    </div>
                                </td>
                                <td class="text-center">699</td>
                                <td class="text-center">142,000</td>
                                <td class="text-center">283,858</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-outline-warning btn-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Principales minerales</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container-sm" id="categoryChart"></div>
                    <div class="mt-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge-dot" style="background-color: var(--accent-color);"></span>
                                <span>Oro</span>
                            </div>
                            <span class="fw-medium">9,220</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge-dot" style="background-color: var(--success-color);"></span>
                                <span>Plata</span>
                            </div>
                            <span class="fw-medium">7,488</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge-dot" style="background-color: var(--warning-color);"></span>
                                <span>Plomo</span>
                            </div>
                            <span class="fw-medium">4,214</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge-dot" style="background-color: var(--info-color);"></span>
                                <span>Bismuto</span>
                            </div>
                            <span class="fw-medium">2,302</span>
                        </div>
                    </div>
                </div>
            </div>

          <!-- Recent Transactions -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Licencias por departamento</h5>
                </div>
                <div class="card-body">
                    <div class="transaction-list">
                        <div class="transaction-item">
                            <div class="transaction-icon success">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-title">Potosí</div>
                                <div class="transaction-meta">Plata, Oro, otros</div>
                            </div>
                            <div class="transaction-amount positive">1,999.00</div>
                        </div>
                        <div class="transaction-item">
                            <div class="transaction-icon danger">
                                <i class="bi bi-arrow-down-left"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-title">La Paz</div>
                                <div class="transaction-meta">Plara, Oro, otros</div>
                            </div>
                            <div class="transaction-amount negative">-249.00</div>
                        </div>
                        <div class="transaction-item">
                            <div class="transaction-icon success">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-title">Beni</div>
                                <div class="transaction-meta">Plata</div>
                            </div>
                            <div class="transaction-amount positive">99.00</div>
                        </div>
                        <div class="transaction-item">
                            <div class="transaction-icon success">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-title">Oruro</div>
                                <div class="transaction-meta">Estaño</div>
                            </div>
                            <div class="transaction-amount positive">98,000</div>
                        </div>
                        <div class="transaction-item">
                            <div class="transaction-icon success">
                                <i class="bi bi-arrow-up-right"></i>
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-title">Santa Cruz</div>
                                <div class="transaction-meta">Oro</div>
                            </div>
                            <div class="transaction-amount positive">8.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

@endsection

@section('javascripts')
    <script>
        document.getElementById('mResumenRegalias').classList.add('active');
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
