<script src="<!--{$APP_JS}-->dashboard/profile.js?v=<!--{$date}-->"></script>

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
        <!--{if $role eq '2' or $role eq '3'}-->
        <li class="nav-item">
          <a class="nav-link " href="./health_condition">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-ambulance text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Condiciones de Salud</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./health_indicator">
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
        <!--{/if}-->
 
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Página de Perfil</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./profile">
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tu Perfil</li>
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
   
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<!--{$APP_IMG}-->people/user.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <!--{$username}-->
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                <!--{$rol}-->
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-favourite-28"></i>
                    <span class="ms-2">PoliMedic</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Editar Perfil</p>
                <button class="btn btn-primary btn-sm ms-auto">Personalización</button>
              </div>
            </div>
            <input type="hidden" name="hidIdMember" id="hidIdMember" value="<!--{$id}-->" />
            <div class="card-body">
              <p class="text-uppercase text-sm">Información de Usuario</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nombre(s)</label>
                    <input class="form-control" type="text" name="firstname" id="firstname" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Apellido(s)</label>
                    <input class="form-control" type="text" name="lastname" id="lastname" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Correo Electrónico</label>
                    <input class="form-control" type="email" name="email" id="email" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Genero</label>
                    <input class="form-control" type="text" name="gender" id="gender" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tipo de documento</label>
                    <input class="form-control" type="text" name="identification_type" id="identification_type" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Número de documento</label>
                    <input class="form-control" type="text" name="identification_number" id="identification_number" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Fecha de Nacimiento</label>
                    <input class="form-control" type="date" name="birthdate" id="birthdate" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Rol dentro de la familia</label>
                    <input class="form-control" type="text" name="type" id="type" disabled="true" value="">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Información de inicio de Sesión</p>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Usuario</label>
                    <input class="form-control" type="text" name="user" id="user" disabled="true" value="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Cambiar contraseña</label>
                    <input class="form-control" type="password" placeholder="Escribe aquí tu nueva contraseña">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <button class="btn btn-primary btn-sm ms-auto d-none">Cambiar Contraseña</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Fecha de creación</label>
                    <input class="form-control" type="date" name="creation_date" id="creation_date" disabled="true" value=""a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Fecha de modificación</label>
                    <input class="form-control" type="date" name="modification_date" id="modification_date" disabled="true" value="">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Nucleo Familiar</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nucleo Familiar</label>
                    <input class="form-control" type="text" name="family_core" id="family_core" disabled="true" value="">
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="https://www.poli.edu.co/sites/default/files/styles/1220x400/public/genericobogota.jpg?itok=sNhq_0-y" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="<!--{$APP_IMG}-->people/user.jpg" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              
              <div class="text-center mt-4">
                <h5>
                  <span id="name"></span><span class="font-weight-light" id="edad">, </span>
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2"></i><!--{$rol}-->
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Desde el <span id="cd"></span>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>PoliMedic
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
