      <!DOCTYPE html>
      <html lang="en">

        <head>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">

          <title>Sistema de Gestión de Viajes</title>

          <!-- Bootstrap core CSS -->
          <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity= "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin= "anonymous" > <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity= "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin= "anonymous" ></script> 

          <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>
      

          <link href="{{ asset('css/creative.min.css') }}" rel="stylesheet">
          <link href="{{ asset('css/creative.css') }}" rel="stylesheet">

         

          <!-- Custom fonts for this template -->
          <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
          <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
          <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

          <!-- Plugin CSS -->
          <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

          <!-- Custom styles for this template -->
          <link href="css/creative.min.css" rel="stylesheet">
          
        


        </head>

        <body id="page-top">
                           
          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand js-scroll-trigger" href="#page-top">Viaje con Nosotros</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Información</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#login">Iniciar Sesión</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#registrar">Registrarse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <h1 class="text-uppercase">
                    <strong>Sistema de Gestión de Viajes</strong>
                  </h1>
                  <hr>
                </div>
               
              </div>
            </div>
          </header>

          <section class="bg-primary" id="about">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                  <h2 class="section-heading text-white">We've got what you need!</h2>
                  <hr class="light my-4">
                  <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                  <a class="btn btn-light btn-xl js-scroll-trigger" href="#login">Get Started!</a>
                </div>
              </div>
            </div>
          </section>
          
          <!-- Seccion Iniciar sesión-->
          <form method="POST" action="{{url('/login')}}">
            {{csrf_field()}} 

          <section id="login">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Ingresa al Sistema</h2>
                  <hr class="my-4">
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row"> 
                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
                    <h3 class="mb-3">Iniciar Sesión</h3>
                     <!-- Mostrar msj -->
                     @if(session()->has('msg1'))
                        <div class="alert alert-success" role="alert">
                          <!-- si la variable exito esta llena muestro el msj ubicado en el controlador al guardar -->
                          {{ session('msg1') }}
                        </div>
                    @endif

                      
                      @if(session()->has('msg2'))
                        <div class="alert alert-danger" role="alert">
                          {{ session('msg2') }}
                        </div>
                      @endif

                    <!-- fin msj -->
                      <label for="nombre_usu" class="sr-only">Nombre de Usuario</label>
                      <input type="text" name="nombre_usu" class="form-control" placeholder="Nombre de Usuario" required autofocus><br>
                        <div>
                        @if ($errors->has('nombre_usu'))
                          <span class="text-danger">
                            {{ $errors->first('nombre_usu') }}
                          </span>
                        @endif
                      </div>
                      <br>
                    
                      <label for="clave" class="sr-only">Contraseña</label>
                      <input type="password" name="clave" class="form-control" placeholder="Clave" required autofocus><br>
                      <div>
                        @if ($errors->has('clave'))
                          <span class="text-danger">
                            {{ $errors->first('clave') }}
                          </span>
                        @endif
                      </div>
                      <br>
                      <!--
                      <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" value="remember-me"> Recordarme
                        </label>
                      </div>-->
                     <button type="sumbit" class="btn btn-primary btn-xl js-scroll-trigger">Ingresar</button>

                  </div>
                </div>         
            </div>
          </section>
          </form>
            <!-- Fin Seccion Iniciar sesión-->
            

          <!-- Seccion Registro -->
         
          <form action= "{{url('/registrar')}}" method="POST" id="formulario">
                {{csrf_field()}} <!-- se usa para enviar un formulario correctamente, debe incluir una entrada de token CSRF -->
          <section id="registrar">
            
            <div class="container">
              <div class="row">
               
                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
                    <h3 class="mb-3">Registrarse</h3>
                    <p class="text-muted mb-0">Ingresa los datos solicitados en el Formulario</p>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                  <div class="service-box mt-5 mx-auto">
                    <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i><br><br>
                    <!-- Mostrar msj -->
                     @if(session()->has('exito'))
                        <div class="alert alert-success" role="alert">
                          <!-- si la variable exito esta llena muestro el msj ubicado en el controlador al guardar -->
                          {{ session('exito') }}
                        </div>
                    @endif

                      
                      @if(session()->has('fallo'))
                        <div class="alert alert-danger" role="alert">
                          {{ session('fallo') }}
                        </div>
                      @endif

                    <!-- fin msj -->

                    <label for="nombres" class="sr-only">Nombres</label>
                    <input type="text" name="nombres" class="form-control" placeholder="Nombres" value="{{ old('nombres') }}" required autofocus><br>
                    <div>
                        @if ($errors->has('nombres'))
                          <span class="text-danger">
                            {{ $errors->first('nombres') }}
                          </span>
                        @endif
                      </div>
                      <br>

                   <label for="cedula" class="sr-only">Cédula</label>
                    <input type="text" name="cedula" class="form-control" placeholder="Cédula" value="{{ old('cedula') }}" required autofocus><br>
                    <div>
                        @if ($errors->has('cedula'))
                          <span class="text-danger">
                            {{ $errors->first('cedula') }}
                          </span>
                        @endif
                      </div>
                      <br>

                    <label for="empresa" class="sr-only">Empresa</label>
                    <input type="text" name="empresa" class="form-control" placeholder="Empresa" value="{{ old('empresa') }}" required autofocus><br>
                    <div>
                        @if ($errors->has('empresa'))
                          <span class="text-danger">
                            {{ $errors->first('empresa') }}
                          </span>
                        @endif
                      </div>
                      <br>

                     <label for="nombre_usu" class="sr-only">Nombre de Usuario</label>
                    <input type="text" name="nombre_usu" class="form-control" placeholder="Nombre de Usuario" value="{{ old('nombre_usu') }}" required autofocus><br>
                    <div>
                        @if ($errors->has('nombre_usu'))
                          <span class="text-danger">
                            {{ $errors->first('nombre_usu') }}
                          </span>
                        @endif
                      </div>
                      <br>
                   
                  </div>
                </div>
                
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                      <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                      <br><br>
                      <label for="apellidos" class="sr-only">Apellidos</label>
                      <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="{{ old('apellidos') }}" required autofocus><br>
                      <div>
                        @if ($errors->has('apellidos'))
                          <span class="text-danger">
                            {{ $errors->first('apellidos') }}
                          </span>
                        @endif
                      </div>
                      <br>

                      <label for="correo" class="sr-only">Email</label>
                      <input type="email" name="correo" class="form-control" placeholder="Correo Electrónico" value="{{ old('correo') }}" required autofocus><br>
                      <div>
                        @if ($errors->has('correo'))
                          <span class="text-danger">
                            {{ $errors->first('correo') }}
                          </span>
                        @endif
                      </div>
                      <br>

                      <label for="telefono" class="sr-only">Telefono</label>
                      <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{ old('telefono') }}" required autofocus><br>
                      <div>
                        @if ($errors->has('telefono'))
                          <span class="text-danger">
                            {{ $errors->first('telefono') }}
                          </span>
                        @endif
                      </div>
                      <br>

                      <label for="clave" class="sr-only">Contraseña</label>
                      <input type="password" name="clave" id=clave class="form-control" placeholder="Clave" required autofocus><br>
                      <div>
                        @if ($errors->has('clave'))
                          <span class="text-danger">
                            {{ $errors->first('clave') }}
                          </span>
                        @endif
                      </div>
                      <br>

                      <label for="repetir_clave" class="sr-only">Repetir Contraseña</label>
                      <input type="password" name="repetir_clave" id=repetir_clave class="form-control" placeholder="Repetir Clave" required confirmed autofocus><br>
                        <div>
                          @if ($errors->has('repetir_clave'))
                          <span class="text-danger">
                            {{ $errors->first('repetir_clave') }}
                          </span>
                          @endif
                        </div>
                        <br>
                      </div>

                      <button type="sumbit" class="btn btn-primary btn-xl js-scroll-trigger">Registrar</button>
            
                </div> 
              </div>
            </div>
          </section>
          </form>
          <!-- Fin Seccion registro-->

          <section class="p-0" id="portfolio">
            <div class="container-fluid p-0">
              <div class="row no-gutters popup-gallery">
                <div class="col-lg-4 col-sm-6">
                  <a class="portfolio-box" href="../img/portfolio/fullsize/1.jpg">
                    <img class="img-fluid" src="../img/portfolio/thumbnails/1.jpg" alt="">
                    <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                        <div class="project-category text-faded">
                          Category
                        </div>
                        <div class="project-name">
                          Project Name
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
                    <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                        <div class="project-category text-faded">
                          Category
                        </div>
                        <div class="project-name">
                          Project Name
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
                    <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                        <div class="project-category text-faded">
                          Category
                        </div>
                        <div class="project-name">
                          Project Name
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
                    <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                        <div class="project-category text-faded">
                          Category
                        </div>
                        <div class="project-name">
                          Project Name
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
                    <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                        <div class="project-category text-faded">
                          Category
                        </div>
                        <div class="project-name">
                          Project Name
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                  <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
                    <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
                    <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                        <div class="project-category text-faded">
                          Category
                        </div>
                        <div class="project-name">
                          Project Name
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>

          <section class="bg-dark text-white">
            <div class="container text-center">
              <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
              <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
            </div>
          </section>

          <section id="contact">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                  <h2 class="section-heading">Let's Get In Touch!</h2>
                  <hr class="my-4">
                  <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                  <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                  <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                  <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                  <p>
                    <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- Bootstrap core JavaScript -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

          <!-- Plugin JavaScript -->
          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
          <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
          <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

          <!-- Custom scripts for this template -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

         <!-- <script src="js/creative.js"></script> 
          <script src="js/creative.min.js"> </script> 
         -->
          
          <!-- plugin de validación -->
          <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
          
            <!-- validando que las contraseñas sean iguales -->
          <script type="text/JavaScript" src='ValidarContrasena.js'></script>



        </body>

      </html>
