@extends('plantilla.layout')


@section('titulo')
    MMM - Estado
@endsection

@section('contenido')
    <div class="main-content page-dashboard">
        <div class="page-dashboard nd-dashboard">
            <section class="nd-topbar">
                <div>
                    <h1 class="nd-title">Estado de Información al {{ date('d-m-Y') }}</h1>
                    <p class="nd-subtitle">Se muestra los distintos estados de datos disponibles a la fecha.</p>
                </div>
            </section>

            <section class="row g-3 mb-3 nd-kpi-rail">
                <div class="col-xxl-3 col-md-6">
                    <article class="nd-kpi-card nd-kpi-leads">
                        <span class="nd-kpi-icon"><i class="bi bi-people"></i></span>
                        <span class="nd-kpi-label">Cantidad de Actores Mineros</span>
                        <strong class="nd-kpi-value">1,486</strong>
                        <span class="nd-kpi-trend up"><i class="bi bi-arrow-up-right"></i> 6.1%</span>
                    </article>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <article class="nd-kpi-card nd-kpi-revenue">
                        <span class="nd-kpi-icon"><i class="bi bi-currency-dollar"></i></span>
                        <span class="nd-kpi-label">Total Regalías Mineras</span>
                        <strong class="nd-kpi-value">Bs. 94,200.00</strong>
                        <span class="nd-kpi-trend up"><i class="bi bi-arrow-up-right"></i> 9.4%</span>
                    </article>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <article class="nd-kpi-card nd-kpi-cycle">
                        <span class="nd-kpi-icon"><i class="bi bi-currency-dollar"></i></span>
                        <span class="nd-kpi-label">Regalía Comercio Interno</span>
                        <strong class="nd-kpi-value">Bs. 60,000.00</strong>
                        <span class="nd-kpi-trend down"><i class="bi bi-arrow-down-right"></i> 3.5%</span>
                    </article>
                </div>
                <div class="col-xxl-3 col-md-6">
                    <article class="nd-kpi-card nd-kpi-retention">
                        <span class="nd-kpi-icon"><i class="bi bi-currency-dollar"></i></span>
                        <span class="nd-kpi-label">Regalía por Exportaciones</span>
                        <strong class="nd-kpi-value">Bs. 34,200.00</strong>
                        <span class="nd-kpi-trend up"><i class="bi bi-arrow-up-right"></i> 1.8%</span>
                    </article>
                </div>
            </section>

            <section class="row g-3 mb-3">
                {{-- Lado izquierdo --}}
                <div class="col-xl-5">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Participación por Gobiernos</h5>
                        </div>
                        <div class="card-body">
                            <div id="trafficChart" class="nd-donut-canvas"></div>
                            <div class="nd-acq-list">
                                <div><span>Gobiernos Departamentales</span><strong>499,715,000.00</strong></div>
                                <div><span>Gobiernos Muncipales</span><strong>88,185,000.00</strong></div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Regalías Mineras a Nivel Nacional (En bolivianos)</h5>
                        </div>
                        <div class="card-body">
                            <div class="nd-health-row">
                                <span>Total Nacional (Bs.)</span>
                                <strong>587,900,000.00</strong>
                            </div>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Regalía por departamento (En bolivianos)</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 nd-matrix-table">
                                    <thead>
                                    <tr>
                                        <th>Departamento</th>
                                        <th>Gobernación </th>
                                        <th>Municipio</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Potosí</td>
                                        <td><span class="badge bg-primary-light text-primary">318,500,000.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">56,200,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">374,700,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>La Paz</td>
                                        <td><span class="badge bg-primary-light text-primary">71,400,000.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">12,600,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">84,000,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Beni</td>
                                        <td><span class="badge bg-primary-light text-primary">44,700,000.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">7,900,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">52,600,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oruro</td>
                                        <td><span class="badge bg-primary-light text-primary">40,600,000.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">7,200,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">47,800,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Santa Cruz</td>
                                        <td><span class="badge bg-primary-light text-primary">14,000,000.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">2,500,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">16,500,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cochabama</td>
                                        <td><span class="badge bg-primary-light text-primary">6,100,000.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">1,100,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">7,200,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Chuquisaca</td>
                                        <td><span class="badge bg-primary-light text-primary">3,800,000.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">681,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">4,500,000.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Tarija</td>
                                        <td><span class="badge bg-primary-light text-primary">470,600.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">83,000.00</span></td>
                                        <td><span class="badge bg-success-light text-black">553,600.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Pando</td>
                                        <td><span class="badge bg-primary-light text-primary">262,800.00</span></td>
                                        <td><span class="badge bg-warning-light text-warning">46,400.00</span></td>
                                        <td><span class="badge bg-success-light text-black">309,200.00</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Lado derecho --}}
                <div class="col-xl-7">
                    <div class="card mb-3">
                        <div class="card-header nd-chart-header">
                            <h5 class="card-title mb-0">Historial de Regalías Mineras (En bolivianos)</h5>
                            <div class="nd-period-switch">
                                <button class="nd-period-btn active" data-period="monthly">Mensual</button>
                                <button class="nd-period-btn" data-period="weekly">Semanal</button>
                                <button class="nd-period-btn" data-period="daily">Diario</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="nd-chart-summary">
                                <div>
                                    <span>Gobernaciones</span>
                                    <strong id="summaryRevenue">94.2 MM</strong>
                                </div>
                                <div>
                                    <span>Municipios</span>
                                    <strong id="summaryExpenses">25 MM</strong>
                                </div>
                                <div>
                                    <span>Total</span>
                                    <strong id="summaryProfit">120.6 MM</strong>
                                </div>
                            </div>
                            <div id="revenueChart" class="nd-chart-canvas"></div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Principales municipios con Actividad Minera </h5>
                            <a href="invoice-list.html" class="nd-inline-link">Ver todo</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0 nd-transaction-table">
                                    <thead>
                                    <tr>
                                        <th>Municipio</th>
                                        <th>Departamento</th>
                                        <th>Ragalía</th>
                                        <th> - </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Colcha K</td>
                                        <td><div class="nd-user"><span>Potosí</span></div></td>
                                        <td>26,600,000.00</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary btn-icon">
                                                <i class="bi bi-graph-up-arrow"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Potosí</td>
                                        <td><div class="nd-user"><span>Potosí</span></div></td>
                                        <td>14,600,000.00</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary btn-icon">
                                                <i class="bi bi-graph-up-arrow"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Porco</td>
                                        <td><div class="nd-user"><span>Potosí</span></div></td>
                                        <td>6,200,000.00</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary btn-icon">
                                                <i class="bi bi-graph-up-arrow"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colquiri</td>
                                        <td><div class="nd-user"><span>La Paz</span></div></td>
                                        <td>1,900,000.00</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-primary btn-icon">
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
            </section>
        </div>
    </div>
@endsection

@section('javascripts')
    <script>
        document.getElementById('mResumenEstado').classList.add('active');
    </script>
      <script>
    document.addEventListener('DOMContentLoaded', function() {
      var rootStyles = getComputedStyle(document.documentElement);
      var accentColor = rootStyles.getPropertyValue('--accent-color').trim();
      var successColor = rootStyles.getPropertyValue('--success-color').trim();
      var warningColor = rootStyles.getPropertyValue('--warning-color').trim();
      var infoColor = rootStyles.getPropertyValue('--info-color').trim();
      var borderColor = rootStyles.getPropertyValue('--border-color').trim();
      var mutedColor = rootStyles.getPropertyValue('--muted-color').trim();
      var surfaceColor = rootStyles.getPropertyValue('--surface-color').trim();
      var seriesMap = {
        monthly: {
          categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
          revenue: [72, 78, 74, 81, 85, 88, 94, 91, 97, 103, 99, 108],
          costs: [46, 49, 47, 52, 56, 57, 61, 60, 63, 67, 65, 71],
          totals: {
            revenue: '$94.2K',
            expenses: '$57.6K',
            profit: '$36.6K'
          }
        },
        weekly: {
          categories: ['Sem1', 'Sem2', 'Sem3', 'Sem4', 'Sem5', 'Sem6'],
          revenue: [16, 18, 17, 19, 21, 23],
          costs: [10, 11, 10, 12, 13, 14],
          totals: {
            revenue: '$45.8K',
            expenses: '$27.3K',
            profit: '$18.5K'
          }
        },
        daily: {
          categories: ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab', 'Dom'],
          revenue: [4.2, 4.8, 4.4, 5.1, 5.6, 3.2, 2.7],
          costs: [2.5, 2.8, 2.6, 3.1, 3.3, 2.1, 1.8],
          totals: {
            revenue: '$30.0K',
            expenses: '$18.2K',
            profit: '$11.8K'
          }
        }
      };

      function setSummary(period) {
        var totals = seriesMap[period].totals;
        var rev = document.getElementById('summaryRevenue');
        var exp = document.getElementById('summaryExpenses');
        var prof = document.getElementById('summaryProfit');
        if (rev) rev.textContent = totals.revenue;
        if (exp) exp.textContent = totals.expenses;
        if (prof) prof.textContent = totals.profit;
      }
      var revenueTarget = document.querySelector('#revenueChart');
      var trafficTarget = document.querySelector('#trafficChart');
      var revenueChart;
      if (revenueTarget && typeof ApexCharts !== 'undefined') {
        revenueChart = new ApexCharts(revenueTarget, {
          chart: {
            type: 'area',
            height: 320,
            toolbar: {
              show: false
            },
            zoom: {
              enabled: false
            },
            fontFamily: 'inherit'
          },
          series: [{
              name: 'Gobernaciones',
              data: seriesMap.monthly.revenue
            },
            {
              name: 'Municipios',
              data: seriesMap.monthly.costs
            }
          ],
          colors: [accentColor, warningColor],
          stroke: {
            width: [2.5, 2.5],
            curve: 'smooth'
          },
          fill: {
            type: 'gradient',
            gradient: {
              shadeIntensity: 1,
              opacityFrom: 0.28,
              opacityTo: 0.02,
              stops: [0, 100]
            }
          },
          dataLabels: {
            enabled: false
          },
          xaxis: {
            categories: seriesMap.monthly.categories,
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
            labels: {
              style: {
                colors: mutedColor,
                fontSize: '12px'
              }
            }
          },
          yaxis: {
            labels: {
              style: {
                colors: mutedColor,
                fontSize: '12px'
              }
            }
          },
          grid: {
            borderColor: borderColor,
            strokeDashArray: 4,
            xaxis: {
              lines: {
                show: false
              }
            }
          },
          legend: {
            position: 'top',
            horizontalAlign: 'left',
            labels: {
              colors: mutedColor
            }
          },
          tooltip: {
            y: {
              formatter: function(val) {
                return '$' + val.toFixed(1) + 'K';
              }
            }
          }
        });
        revenueChart.render();
      }
      if (trafficTarget && typeof ApexCharts !== 'undefined') {
        var trafficChart = new ApexCharts(trafficTarget, {
          chart: {
            type: 'donut',
            height: 330,
            fontFamily: 'inherit'
          },
          series: [499715000, 88185000],
          labels: ['Departamentales', 'Municipales'],
          colors: [accentColor, warningColor],
          legend: {
            show: false
          },
          stroke: {
            width: 3,
            colors: [surfaceColor]
          },
          dataLabels: {
            enabled: true,
            formatter: function (val) { return val + "%" }
          },
          tooltip: {
            enabled: false
          },
          plotOptions: {
            pie: {
              donut: {
                size: '60%',
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
                      return Number(val).toLocaleString('es-BO', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + ' Bs';
                    }
                  },
                  total: {
                    show: true,
                    label: 'Total',
                    color: mutedColor,
                    formatter: function() {
                      return '587,900,000 Bs';
                    }
                  }
                }
              }
            }
          }
        });
        trafficChart.render();
      }
      document.querySelectorAll('.nd-period-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.nd-period-btn').forEach(function(i) {
            i.classList.remove('active');
          });
          btn.classList.add('active');
          var period = btn.getAttribute('data-period');
          if (!period || !revenueChart) return;
          revenueChart.updateOptions({
            xaxis: {
              categories: seriesMap[period].categories
            }
          });
          revenueChart.updateSeries([{
              name: 'Revenue',
              data: seriesMap[period].revenue
            },
            {
              name: 'Costs',
              data: seriesMap[period].costs
            }
          ]);
          setSummary(period);
        });
      });
      setSummary('monthly');
    });
  </script>
@endsection
