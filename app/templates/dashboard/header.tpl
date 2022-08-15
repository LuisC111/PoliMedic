<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="<!--{$APP_IMG}-->Logo_y_Nombre.png" class="mr-2" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="<!--{$APP_IMG}-->logo.png" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
              <span class="input-group-text" id="search">
                <i class="icon-search"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Escribe algo para buscar..." aria-label="search" aria-describedby="search">
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="icon-bell mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notificaciones</p>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="ti-info-alt mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Error en el sistema</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Justo ahora
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="ti-settings mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Configuración</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Mensaje privado
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="ti-user mx-0"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <h6 class="preview-subject font-weight-normal">Nuevo usuario registrado</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Hace 2 días
                </p>
              </div>
            </a>
          </div>
        </li>
        
      <li class="nav-item">AQUI VA EL NOMBRE DE USER</li>

        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="<!--{$APP_IMG}-->people/user.png" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a href="./editarPerfil" class="dropdown-item">
              <i class="ti-settings text-primary"></i>
              Editar perfil
            </a>
            <a class="dropdown-item" href="./logout">
              <i class="ti-power-off text-primary"></i>
                  Cerrar sesión
              </a>
          </div>
        </li>
        <!--<li class="nav-item"><a href="./logout" style="color:red; text-decoration:none">Cerrar Sesión</a></li>-->
        <li class="nav-item nav-settings d-none d-lg-flex">
          <a class="nav-link" href="#">
            <i class="icon-ellipsis"></i>
          </a>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>

  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="ti-settings"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <p class="settings-heading">COLOR DE BARRA LATERAL</p>
        <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Claro</div>
        <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Oscuro</div>
        <p class="settings-heading mt-2">COLOR DE CABECERA</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default"></div>
        </div>
      </div>
    </div>
      <div id="right-sidebar" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TAREAS PENDIENTES</a>
              </li>
          </ul>
          <div class="tab-content" id="setting-content">
              <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                  <div class="add-items d-flex px-3 mb-0">
                      <form class="form w-100">
                          <div class="form-group d-flex">
                          <input type="text" class="form-control todo-list-input" placeholder="Escribe un pendiente...">
                          <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Agregar</button>
                          </div>
                      </form>
                  </div>
                  <div class="list-wrapper px-3">
                      <ul class="d-flex flex-column-reverse todo-list">
                          <li class="completed">
                              <div class="form-check">
                                  <label class="form-check-label">
                                  <input class="checkbox" type="checkbox" checked>
                                  Nueva dashboard
                                  </label>
                              </div>
                              <i class="remove ti-close"></i>
                          </li>
                      </ul>
                  </div>
                  <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Eventos</h4>
                  <div class="events pt-4 px-3">
                      <div class="wrapper d-flex mb-2">
                          <i class="ti-control-record text-primary mr-2"></i>
                          <span>Ago 23 2022</span>
                      </div>
                  <p class="mb-0 font-weight-thin text-gray">Presentación total de</p>
                  <p class="text-gray mb-0">PoliMedic</p>
              </div>
          </div>
      </div>
      </div>


    <!--ROL ADMIN-->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="./dashboard">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Página principal</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./user">
            <i class="ti-user menu-icon"></i>
            <span class="menu-title">Usuarios</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./family_core">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Nucleos Familiares</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./role">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Roles</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./health_condition">
            <i class="ti-ticket menu-icon"></i>
            <span class="menu-title">Condiciones de Salud</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./health_indicator">
            <i class="ti-wheelchair  menu-icon"></i>
            <span class="menu-title">Indicadores de Salud</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./medical_care_info">
              <i class="ti-wheelchair  menu-icon"></i>
              <span class="menu-title">Controles con profesionales</span>
            </a>
          </li>
        <li class="nav-item">
        <a class="nav-link" href="./condition_monitoring">
            <i class="ti-wheelchair  menu-icon"></i>
            <span class="menu-title">Seguimiento de condiciones</span>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./reports">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Reportes</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./common_disease">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Enfermedades comunes</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./condition_type">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Tipos de condición médica</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./lab_type">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Examenes de Laboratotio</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./physician_type">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Tipo de Profesional de la Salud</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./workuot">
                <i class="ti-wheelchair  menu-icon"></i>
                <span class="menu-title">Entrenamientos</span>
            </a>
        </li>

  
      </ul>
    </nav>
   