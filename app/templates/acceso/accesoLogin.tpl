<head>
<link rel="stylesheet" href="<!--{$APP_CSS}-->templatemo-medic-care.css?v=<!--{$date}-->">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<!--{$APP_CSS}-->../fonts/icomoon/style.css?v=<!--{$date}-->">
<link rel="stylesheet" href="<!--{$APP_CSS}-->owl.carousel.min.css?v=<!--{$date}-->">
<link rel="stylesheet" href="<!--{$APP_CSS}-->login.css?v=<!--{$date}-->">

</head>

<body> 
  <div class="content">
    <form id="formulario" name="formulario" method="POST" action="../dashboard/dashboard" enctype="multipart/form-data" > 
      <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<!--{$APP_IMG}-->access/login.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-2">
              <h3>Iniciar sesión</h3>
              <p class="mb-4">Bienvenido a PoliMedic, recuerda que el nombre de usuario lo puedes encontrar en tu correo.</p>
            </div>
              <div class="form-group first">
                <label for="username">Nombre de Usuario</label>
                <input type="text" class="form-control" name="user" id="username">
              </div>
              <div class="form-group last my-3">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password">
                
              </div>
              
              <div class="d-flex mb-3 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Recuérdame</span>
                  <input type="checkbox" id="remember" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="./forgotPassword" class="forgot-pass">¿Olvidaste tu contraseña?</a></span> 
              </div>

              <button id="login" class="btn btn-block btn-primary mb-2">Iniciar Sesión</button>

            <span class="ml-auto pt-2"><a href="./accesoRegister" class="forgot-pass">¿No tienes una cuenta? Registrate</a></span>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>

  </form>  

  </div>

    <script src="<!--{$APP_JS}-->login.js?v=<!--{$date}-->"></script>
    <script src="<!--{$APP_JS}-->popper.min.js?v=<!--{$date}-->"></script>
  </body>
</html>
