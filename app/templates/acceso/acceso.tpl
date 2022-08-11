<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><!--{$titulo}--></title>
    <link rel="icon" href="<!--{$fav}-->" type="image/x-icon">
    <meta name="description" content="PoliMedic" />
    <meta name="author" content="SubGrupo-07" />
    <link rel="stylesheet" href="<!--{$APP_CSS}-->owl.carousel.min.css">
    <link rel="stylesheet" href="<!--{$APP_CSS}-->owl.theme.default.min.css">
    <link rel="stylesheet" href="<!--{$APP_CSS}-->templatemo-medic-care.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
        <div class="container">
            <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                MediFlow
                <strong class="d-block">Turnos médicos</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/#hero">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#about">Acerca</a>
                    </li>

                    <a class="navbar-brand d-none d-lg-block" href="/">
                        <span class="title-nav">POLIMEDIC</span>
                        <strong class="d-block">Gestión de la Salud</strong>
                    </a>

                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Contacto</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/auth/login">Iniciar sesión</a>
                    </li>
                    
                </ul>
                
            </div>

        </div>
    </nav>
    <section class="hero" id="hero">
        <div class="container">
            <div class="row">
    
                <div class="col-12">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<!--{$bannerImg2}-->" class="img-fluid" alt="">
                            </div>
    
                            <div class="carousel-item">
                                <img src="<!--{$bannerImg2}-->" class="img-fluid" alt="">
                            </div>
    
                            <div class="carousel-item">
                                <img src="<!--{$bannerImg3}-->" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                </div>
    
            </div>
        </div>
    </section>
    
    <section class="section-padding" id="about">
        <div class="container">
            <div class="row">
    
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="mb-lg-3 mb-3">Un tip por tu salud!</h2>
    
                    <p>Protéjase y proteja a los demás usando máscaras y lavándose las manos con frecuencia. El exterior es más seguro que el interior para reuniones o eventos. Las personas que se enferman con la enfermedad del coronavirus (COVID-19) experimentarán síntomas leves a moderados y se recuperarán sin tratamientos especiales.
                    </p>
    
                </div>
    
                <div class="col-lg-4 col-md-5 col-12 mx-auto">
                    <div class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                        <p class="featured-text"><span class="featured-number">#1</span> Top<br> en control de turnos médicos.</p>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    
    
    
    
    <section class="section-padding pb-0" id="reviews">
    <div class="container">
    <div class="accordion d-flex justify-content-center align-items-center height" id="accordionExample">
    <div class="row">
    <div class="col-md-6">
        <div class="p-3">
            <ul class="testimonial-list">
                <li>
                    <div class="card p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="d-flex flex-row align-items-center"> <img src="<!--{$APP_IMG}-->people/mujer.jpg" width="50" class="rounded-circle">
                            <div class="d-flex flex-column ml-2"> <span class="font-weight-normal">Maria Rodriguez</span> <span>Responsable de Familia</span> </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card p-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="d-flex flex-row align-items-center"> <img src="<!--{$APP_IMG}-->people/man.jpg" width="50" class="rounded-circle">
                            <div class="d-flex flex-column ml-2"> <span class="font-weight-normal">Cristian Alarcon</span> <span>Miembro de Familia</span> </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card p-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <div class="d-flex flex-row align-items-center"> <img src="<!--{$APP_IMG}-->people/mujer2.png" width="50" class="rounded-circle">
                            <div class="d-flex flex-column ml-2"> <span class="font-weight-normal">Lina Vargas</span> <span>Responsable de Familia</span> </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="p-3 testimonials-margin">
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac consequat tortor.</h4>
                    <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac consequat tortor. In hac habitasse platea dictumst. Integer aliquam luctus dui vel posuere. Fusce tempus aliquam ligula vel faucibus. Etiam semper est ut lacus convallis, a laoreet massa auctor. Vestibulum semper scelerisque dolor in posuere. Mauris mattis, arcu et consectetur faucibus, risus est posuere arcu, at finibus mi eros nec nisl. Vivamus nec felis metus. Mauris auctor blandit odio, nec venenatis dui porttitor et.</p>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac consequat tortor.</h4>
                    <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac consequat tortor. In hac habitasse platea dictumst. Integer aliquam luctus dui vel posuere. Fusce tempus aliquam ligula vel faucibus. Etiam semper est ut lacus convallis, a laoreet massa auctor. Vestibulum semper scelerisque dolor in posuere. Mauris mattis, arcu et consectetur faucibus, risus est posuere arcu, at finibus mi eros nec nisl. Vivamus nec felis metus. Mauris auctor blandit odio, nec venenatis dui porttitor et.</p>
                </div>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac consequat tortor.</h4>
                    <div class="ratings"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac consequat tortor. In hac habitasse platea dictumst. Integer aliquam luctus dui vel posuere. Fusce tempus aliquam ligula vel faucibus. Etiam semper est ut lacus convallis, a laoreet massa auctor. Vestibulum semper scelerisque dolor in posuere. Mauris mattis, arcu et consectetur faucibus, risus est posuere arcu, at finibus mi eros nec nisl. Vivamus nec felis metus. Mauris auctor blandit odio, nec venenatis dui porttitor et.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    <section class="section-padding" id="contact">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="booking-form">
                        
                        <h2 class="text-center mb-lg-3 mb-2">Contáctanos</h2>
                        <p class="text-center">¿Tienes dudas, peticiones quejas o recursos?. Tu opinión es muy importante para nosotros, por ello en el momento que lo desees puedes hacer clic en ¡Enviar! en donde accederas a un formato de correo electrónico para contactarnos, nuetros usuarios son la prioridad número 1 de <span class="text-primary">PoliMedic</span> y por eso te atenderemos en cuestión de minutos. </p>
                        <div class="row">
                            <div class="col-lg-3 mt-4 text-center" d-block style="margin:auto;">
                                <button type="submit" class="glow-on-hover" type="button" id="submit-button">¡Enviar!</button>
                            </div>
                        </div>
    
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    
    </main>
    
    <script>
    const buttonContact = document.getElementById("submit-button");
    
    buttonContact.onclick = function(){
    window.open('mailto:contactoMediFlow@mediflow.com?subject=subject&body=body');
    };
    </script>


    
  
</body>

</html>