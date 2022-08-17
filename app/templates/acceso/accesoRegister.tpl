<link rel="stylesheet" href="<!--{$APP_CSS}-->templatemo-medic-care.css?v=<!--{$date}-->">
<link rel="stylesheet" href="<!--{$APP_CSS}-->register.css?v=<!--{$date}-->">
<script src="<!--{$APP_JS}-->register.js?v=<!--{$date}-->"></script>



<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
          <h2 id="heading">¡Vamos a crear tu cuenta!</h2>
          <p>Llena todos los campos para ir al siguiente paso</p>
          <form name="formulario" id="formulario" class="formulario" method="POST" action="<!--{$accion}-->">
            <input type="hidden" id="mailDuplicity" value="false">
            <!-- progressbar -->
            <ul id="progressbar">
              <li class="active" id="account"><strong>Cuenta</strong></li>
              <li id="personal"><strong>Personal</strong></li>
              <li id="payment"><strong>Verificación</strong></li>
              <li id="confirm"><strong>Completado</strong></li>
            </ul>
            <div class="progress">
              <div
                class="progress-bar progress-bar-striped progress-bar-animated"
                role="progressbar"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <br />
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Información de la cuenta:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Paso 1 de 4</h2>
                  </div>
                </div>
                <label class="fieldlabels">Correo Electrónico: <span style="color: red">*</span></label>
                    <input type="email" name="email" placeholder="Escribe tu dirección de correo electrónico" />
                <label class="fieldlabels">Contraseña: <span style="color: red">*</span></label>
                    <input type="password" name="pwd" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄🞄🞄🞄🞄" />
                <label class="fieldlabels">Confirma tu Contraseña: <span style="color: red">*</span></label>
                    <input type="password" name="cpwd" placeholder="🞄🞄🞄🞄🞄🞄🞄🞄🞄🞄🞄🞄" />
              </div>
              <input type="button" id="next_cuenta" name="next" class="next action-button" value="Siguiente" />
            </fieldset>
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Información personal:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Paso 2 de 4</h2>
                  </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="fieldlabels">Tipo de documento: <span style="color: red">*</span></label>
                        <select name="identification_type">
                            <option value="Cedula de ciudadanía">Cedula de ciudadanía</option>
                            <option value="Cedula de extanjería">Cedula de extanjería</option>
                            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                            <option value="NUIP">NUIP</option>
                            <option value="Pasaporte">Pasaporte</option>
                            <option value="Permiso especial de Permanencia">Permiso especial de Permanencia</option>
                          </select>  
                    </div>
                    <div class="col-6">
                        <label class="fieldlabels">Número de documento: <span style="color: red">*</span></label>
                        <input type="number" name="identification_number" placeholder="Digita tu número de documento" />        
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="fieldlabels">Nombre(s): <span style="color: red">*</span></label>
                        <input type="text" name="firstname" placeholder="Escribe tu nombre" />
                    </div>
                    <div class="col-6">
                        <label class="fieldlabels">Apellidos(s): <span style="color: red">*</span></label>
                        <input type="text" name="lastname" placeholder="Escribe tu apellido" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="fieldlabels">Genero: <span style="color: red">*</span></label>
                          <select name="gender">
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="No Binario">No Binario</option>
                          </select>  
                    </div>
                    <div class="col-6">
                        <label class="fieldlabels">Fecha de nacimiento: <span style="color: red">*</span></label>
                        <input type="date" name="birthdate"  />
                    </div>
                </div>
              </div>
              <input type="button" id="next_personal" name="next" class="next action-button" value="Siguiente" />
              <input
                type="button"
                name="previous"
                class="previous action-button-previous"
                value="Anterior"
              />
            </fieldset>
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Verificación:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Paso 3 de 4</h2>
                  </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                      <img src="<!--{$APP_IMG}-->access/email.png" class="fit-image" />
                      <p class="mt-4 code-text">Hemos enviado un código de verificación al correo electrónico que has proporcionado: <b id="correo"></b>, si no encuentras el mensaje en tu bandeja de entrada revisa en Spam/Correo no deseado</p>
                    </div>
                  </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <input class="code" type="number" name="code" placeholder="Introduce aquí el código de verificación"/>
                    </div>
                </div>
                  
              </div>
              <input type="button" id="next_verificacion" name="next" class="next action-button" value="Siguiente" />
              <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
            </fieldset>
            <fieldset>
              <div class="form-card">
                <div class="row">
                  <div class="col-7">
                    <h2 class="fs-title">Te has registrado:</h2>
                  </div>
                  <div class="col-5">
                    <h2 class="steps">Paso 4 de 4</h2>
                  </div>
                </div>
                <br /><br />
                <h2 class="purple-text text-center">
                  <strong>¡Registro Satisfactorio!</strong>
                </h2>
                <br />
                <div class="row justify-content-center">
                  <div class="col-3">
                    <img
                      src="https://i.imgur.com/rvzP9iW.png"
                      class="fit-image"
                    />
                  </div>
                </div>
                <br /><br />
                <div class="row justify-content-center">
                  <div class="col-7 text-center">
                    <h5 class="ptext-center">
                    <button class="btn btn-primary" type="submit"><a style="color:white;" href="./accesoLogin">Clic aquí para iniciar sesión</a></button> 
                    </h5>
                  </div>
                </div>
                
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
  