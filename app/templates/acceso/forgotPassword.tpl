<link rel="stylesheet" href="<!--{$APP_CSS}-->templatemo-medic-care.css?v=<!--{$date}-->">
<link rel="stylesheet" href="<!--{$APP_CSS}-->forgotPassword.css?v=<!--{$date}-->">
<script src="<!--{$APP_JS}-->forgotPassword.js?v=<!--{$date}-->"></script>

<body class="auth_class">

    <div class="container login-container">
      <div class="row">
        <div class="col-md-6 welcome_auth">
            <div class="auth_welcome">
                <img src="<!--{$APP_IMG}-->access/forgotPass.jpg" style="max-width:200%;margin-left: -75px;" alt="Forgot Password">
            </div>
        </div>         
        <div class="col-md-6 login-form">
            <div class="login_form_in">
              <h1 class="auth_title text-left">Restablece tu contraseña</h1>
              <form>
                <div class="alert alert-success bg-soft-primary border-0" role="alert">
                    Ingresa el correo eletrónico con el que te registraste y te enviaremos un mensaje con instrucciones para restablecer tu contraseña.
                </div>                    
                <div class="form-group">
                  <input type="email" class="form-control" name="email" style="text-align:center;" placeholder="Escribe aquí tu correo electrónico">
                </div>
                <div class="form-group">
                  <button type="button" id="forgotPassword" class="btn btn-primary btn-lg btn-block">Enviar</button>
                  <a href="./accesoLogin"><button type="button" id="login" class="btn btn-primary btn-lg btn-block"><i class="fa fa-arrow-right"></i></button></a>
                </div>
                <div class="form-group other_auth_links">
                    <a class="" href="./accesoLogin">Iniciar Sesión</a>
                    <a class="" href="./accesoRegister">Registrate</a>
                </div>
              </form>
            </div>
        </div>       
      </div>
    </div>
</body>