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
            
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
            <!-- Jquery -->
            <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

            <!-- Css datepicker -->
            <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

            <!-- Datepicker Files -->
            <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
            <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
            <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>

            <!-- Languaje datepicker-->
            <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

            <script src="js/bootstrap-datetimepicker.min.js"></script>


          </head>

          <body id="page-top">
                             
            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
              <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="http://127.0.0.1:8000/#page-top">Viaje con nosotros</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#viajero">Gestionar Viajero</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="127.0.0.1:8000/registroViaje">Gestionar Viaje</a>
                    </li>
                     
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="http://127.0.0.1:8000/#cerrar">Cerrar Sesión</a>
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

            <!-- enctype="multipart/form-data" es para poder subir el archivo -->
            {!! Form::model($viajero, ['route' => ['editarViajero', $viajero->id], 'method' => "PUT", 'files' => "true", 'enctype' => "multipart/form-data"]) !!}
                {{csrf_field()}} <!-- se usa para enviar un formulario correctamente, debe incluir una entrada de token CSRF -->
              <section id="editar">
                
                <div class="container">
                  <div class="row">
                   <div class="col-lg-12 text-center">
                          <h2 class="section-heading">Editar Viajero</h2>
                          <hr class="my-4">
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

                        <!-- Editar viajero -->
                       
                        <label for="cedula" class="sr-only">Cédula</label>
                        <input type="text" name="cedula" class="form-control" placeholder="Cédula" value="{{$viajero->cedula }}"  required autofocus>
                        <div>
                            @if ($errors->has('cedula'))
                              <span class="text-danger">
                                {{ $errors->first('cedula') }}
                              </span>
                            @endif
                          </div>
                       
                          <br>                 

                        <label for="direccion" class="sr-only">Direccion</label>
                        <input type="text" name="direccion" class="form-control" placeholder="Dirección" value="{{$viajero->direccion }}"  required autofocus><br>
                        <div>
                            @if ($errors->has('direccion'))
                              <span class="text-danger">
                                {{ $errors->first('direccion') }}
                              </span>
                            @endif
                          </div>
                          <br>
                           <button type="sumbit" class="btn btn-primary btn-xl js-scroll-trigger">Editar</button>
                                 
                  </div>

                </div>
                
                  <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                      <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                      <br><br>
                      <label for="nombre" class="sr-only">Nombre</label>
                      <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$viajero->nombre }}" required autofocus><br>
                      <div>
                          @if ($errors->has('nombre'))
                            <span class="text-danger">
                              {{ $errors->first('nombre') }}
                            </span>
                          @endif
                        </div>
                        <br>

                      <label for="telefono" class="sr-only">Telefono</label>
                      <input type="text" name="telefono" class="form-control" placeholder="Teléfono" value="{{$viajero->telefono }}" required autofocus><br>
                      <div>
                        @if ($errors->has('telefono'))
                          <span class="text-danger">
                            {{ $errors->first('telefono') }}
                          </span>
                        @endif
                      </div>
                      <br>
                      

                  <!-- Fin Eidtar viajero -->
                </div> 
                 
                </div>
              </section>
            {!! Form::close() !!}

                       
          </form>
     
        
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
