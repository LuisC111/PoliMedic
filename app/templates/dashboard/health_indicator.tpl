<script src="<!--{$APP_JS}-->dashboard/health_indicator.js?v=<!--{$date}-->"></script>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="<!--{$APP_IMG}-->logo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">PoliMedic</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Página Principal</span>
          </a>
        </li>
        <!--{if $role eq '2' or $role eq '3'}-->
        <li class="nav-item">
          <a class="nav-link " href="./familyUser">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-vector text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tu Nucleo Familiar</span>
          </a>
        </li>
        <!--{/if}-->
        <!--{if $role eq '1'}-->
        <li class="nav-item">
          <a class="nav-link" href="./user">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-circle-08 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./family_core">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-vector text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Nucleos Familiares</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./role">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-badge text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Roles</span>
          </a>
        </li>
        <!--{/if}-->
        <li class="nav-item">
          <a class="nav-link " href="./health_condition">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-ambulance text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Condiciones de Salud</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./health_indicator">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-check-bold text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Indicadores de Salud</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./medical_care_info">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Controles con profesionales</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./condition_monitoring">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-user-run text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Seguimiento de condiciones</span>
          </a>
        </li>
         <!--
<li class="nav-item">
          <a class="nav-link " href="./reports">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Reportes</span>
          </a>
        </li>
-->
 
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Página de Perfil</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tu Perfil</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <input type="hidden" name="familycore_id" id="familycore_id" value="<!--{$familycore_id}-->">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Páginas</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Indicadores de Salud</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0"><!--{$username}--></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center" id="logout">
                <i class="fa fa-sign-out fixed-plugin-button-nav cursor-pointer" style="color:white;"></i>
            </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
   
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6 class="text-center">Condiciones de Salud</h6>
              </div>
              <!--{if $role eq '2' or $role eq '3'}-->
              <div class="row">
                <div class="col-6">
                    <button id="btnModalAgregar" style="width:50%;float:left;" type="button" class="btn btn-success" >+ Registrar tu Condición de Salud</button>
                </div>
                <!--{if $role eq '2'}-->
                <div class="col-6">
                    <button id="btnModalAgregarMember" style="width:70%;float:right;" type="button" class="btn btn-success" >+ Registrar la Condición de Salud de un Familiar</button>
                </div>
                </div>
                <!--{/if}-->
              <!--{/if}-->
              <input type="hidden" name="hidIdMember" id="hidIdMember" value="<!--{$id}-->" />
              <input type="hidden" name="hidIdFamily" id="hidIdFamily" value="<!--{$familycore_id}-->" />

              <!--{if $role eq '1'}-->
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <div id="divTblSolicitudes" class="form-group"> <!--style="display:none"-->
                        <div class="table-responsive">
                            <table id="tblSolicitudes" class="table align-items-center mb-0" name="tblSolicitudes" style="width:100%">
                            </table>
                        </div>
                    </div>
                </div>
              </div>
              <!--{/if}-->

            <!--{if $role eq '2'}-->
            <div class="card-body pb-2">
                <div class="table-responsive p-0">
                    <div id="divTblSolicitudesOwner" class="form-group"> <!--style="display:none"-->
                        <div class="table-responsive">
                            <table id="tblSolicitudesOwner" class="table align-items-center mb-0" name="tblSolicitudesOwner" style="width:100%">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--{/if}-->

            <!--{if $role eq '3'}-->
            <div class="card-body pb-2">
                <div class="table-responsive p-0">
                    <div id="divTblSolicitudesMember" class="form-group"> <!--style="display:none"-->
                        <div class="table-responsive">
                            <table id="tblSolicitudesMember" class="table align-items-center mb-0" name="tblSolicitudesMember" style="width:100%">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--{/if}-->


            </div>
          </div>
        </div>

        <div id="modal-detalleSolicitud" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog  modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h3 style="display:block;margin:auto;">Detalles del estado de Salud</h3>
                      </div>
                      <div class="modal-body">
                          <div id="divTblDetalleSolicitud" class="form-group">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered text-center" id="tblDetalleSolicitud" name="tblDetalleSolicitud">
                                  </table>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button id="btnModalCerrar" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div id="modal-agregar" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 style="display:block;margin:auto;">Registrar Condición de Salud</h3>
                    </div>
                    <div class="modal-body">
                        <form id="formAgregar" name="formAgregar" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-6">
                                <label for="txtNombre">Ejercicio</label>
                                <select class="form-control" id="selWorkout" name="selWorkout">
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="fieldlabels">Ritmo cardiaco (Latidos/minuto): <span style="color: red">*</span></label>
                                <input type="text" name="heart_rate" id="heart_rate" class="form-control" placeholder="80">                      
                            </div>
                            <div class="col-6">
                                <label class="fieldlabels">Presión arterial: <span style="color: red">*</span></label>
                                <input type="text" name="blood_pressure" id="blood_pressure" class="form-control" placeholder="120">                      
                            </div>
                            <div class="col-6">
                              <label class="fieldlabels">Distancia recorrida (KM): <span style="color: red">*</span></label>
                              <input type="text" name="distance_in_km" id="distance_in_km" class="form-control" placeholder="5">                      
                            </div>

                            <div class="col-6">
                              <label class="fieldlabels">Calorias quemadas: <span style="color: red">*</span></label>
                              <input type="text" name="	burned_calories" id="burned_calories" class="form-control" placeholder="700">                      
                            </div>

                            <div class="col-6">
                              <label class="fieldlabels">Peso (KG): <span style="color: red">*</span></label>
                              <input type="text" name="weight_in_kg" id="weight_in_kg" class="form-control" placeholder="65">                      
                            </div>

                            <div class="col-6">
                              <label class="fieldlabels">Estatura (CM): <span style="color: red">*</span></label>
                              <input type="text" name="height_in_cm" id="height_in_cm" class="form-control" placeholder="175">                      
                            </div>
                            <div class="col-6">
                              <label class="fieldlabels">Saturación de oxigeno en la sangre:</label>
                              <input type="text" name="blood_oxygen_saturation" id="blood_oxygen_saturation" class="form-control" placeholder="95">                      
                            </div>
                            <div class="col-6">
                              <label class="fieldlabels">Vacunas:</label>
                              <input type="text" name="vaccines" id="vaccines" class="form-control" placeholder="Ej: Pfizer/Tétano/No">                      
                            </div>

                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="btnModalAdd" class="btn btn-success" name="btnModalAdd" value="Registrar" />
                        <button id="btnModalClose" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
      </div>


      <div id="modal-agregar-member" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 style="display:block;margin:auto;">Registrar condición de salud de un familiar</h3>
                    </div>
                    <div class="modal-body">
                        <form id="formAgregarMember" name="formAgregarMember" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-6">
                                <label for="txtNombre">Selecciona el familiar</label>
                                <select class="form-control" id="selMember" name="selMember">
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="txtNombre">Ejercicio</label>
                                <select class="form-control" id="selWorkout-member" name="selWorkout-member">
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="fieldlabels">Ritmo cardiaco (Latidos/minuto): <span style="color: red">*</span></label>
                                <input type="text" name="heart_rate-member" id="heart_rate-member" class="form-control" placeholder="80">                      
                            </div>
                            <div class="col-6">
                                <label class="fieldlabels">Presión arterial: <span style="color: red">*</span></label>
                                <input type="text" name="blood_pressure-member" id="blood_pressure-member" class="form-control" placeholder="120">                      
                            </div>
                            <div class="col-6">
                              <label class="fieldlabels">Distancia recorrida (KM): <span style="color: red">*</span></label>
                              <input type="text" name="distance_in_km-member" id="distance_in_km-member" class="form-control" placeholder="5">                      
                            </div>

                            <div class="col-6">
                              <label class="fieldlabels">Calorias quemadas: <span style="color: red">*</span></label>
                              <input type="text" name="	burned_calories-member" id="burned_calories-member" class="form-control" placeholder="700">                      
                            </div>

                            <div class="col-6">
                              <label class="fieldlabels">Peso (KG): <span style="color: red">*</span></label>
                              <input type="text" name="weight_in_kg-member" id="weight_in_kg-member" class="form-control" placeholder="65">                      
                            </div>

                            <div class="col-6">
                              <label class="fieldlabels">Estatura (CM): <span style="color: red">*</span></label>
                              <input type="text" name="height_in_cm-member" id="height_in_cm-member" class="form-control" placeholder="175">                      
                            </div>
                            <div class="col-6">
                              <label class="fieldlabels">Saturación de oxigeno en la sangre:</label>
                              <input type="text" name="blood_oxygen_saturation-member" id="blood_oxygen_saturation-member" class="form-control" placeholder="95">                      
                            </div>
                            <div class="col-6">
                              <label class="fieldlabels">Vacunas:</label>
                              <input type="text" name="vaccines-member" id="vaccines-member" class="form-control" placeholder="Ej: Pfizer/Tétano/No">                      
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="btnModalAdd-member" class="btn btn-success" name="btnModalAdd-member" value="Registrar" />
                        <button id="btnModalClose-member" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
      </div>


    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configuración PoliMedic</h5>
          <p>Personaliza la página a tus gustos.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Colores de barra lateral</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Tipos de Menú Lateral</h6>
          <p class="text-sm">Elige entre los dos tipos de menú que tenemos para ti.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">Claro</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Oscuro</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Modo Claro / Oscuro</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="<!--{$APP_DASH}-->js/core/popper.min.js"></script>
  <script src="<!--{$APP_DASH}-->js/core/bootstrap.min.js"></script>
  <script src="<!--{$APP_DASH}-->js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<!--{$APP_DASH}-->js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<!--{$APP_DASH}-->js/plugins/chartjs.min.js"></script>
  <script>

    $("#logout").click(function(){
        window.location.href = '../acceso/accesoLogin';
    }
);
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<!--{$APP_DASH}-->js/argon-dashboard.min.js?v=2.0.4"></script>
