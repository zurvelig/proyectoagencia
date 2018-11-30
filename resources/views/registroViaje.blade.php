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
                      <a class="nav-link js-scroll-trigger" href="http://127.0.0.1:8000/registroViajero">Gestionar Viajero</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#viaje">Gestionar Viaje</a>
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
            <form action= "{{url('/registroViaje')}}" method="POST" id="formulario" enctype="multipart/form-data">
                {{csrf_field()}} <!-- se usa para enviar un formulario correctamente, debe incluir una entrada de token CSRF -->
              <section id="viaje">
                
                <div class="container">
                  <div class="row">
                   <div class="col-lg-12 text-center">
                          <h2 class="section-heading">Registrar Viaje</h2>
                          <hr class="my-4">
                        </div>
                    <div class="col-lg-3 col-md-6 text-center">
                      <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
                        <p class="text-muted mb-0">Ingresa los datos solicitados en el Formulario</p>
                      </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 text-center">
                      <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i><br><br>
                        <!-- Mostrar msj -->
                         @if(session()->has('exito'))
                            <div class="alert alert-success" role="alert">
                              {{ session('exito') }}
                            </div>
                        @endif

                          
                          @if(session()->has('fallo'))
                            <div class="alert alert-danger" role="alert">
                              {{ session('fallo') }}
                            </div>
                          @endif

                        <!-- fin msj -->

                        <label for="codigo" class="sr-only">Código</label>
                        <input type="text" name="codigo" class="form-control" placeholder="Código" value="{{ old('codigo') }}" required autofocus><br>
                        <div>
                            @if ($errors->has('codigo'))
                              <span class="text-danger">
                                {{ $errors->first('codigo') }}
                              </span>
                            @endif
                          </div>
                          <br>

                       <label for="num_plaza" class="sr-only">NumPlaza</label>
                        <input type="text" name="num_plaza" class="form-control" placeholder="Numero de Plazas" value="{{ old('num_plaza') }}" required autofocus><br>
                        <div>
                            @if ($errors->has('num_plaza'))
                              <span class="text-danger">
                                {{ $errors->first('num_plaza') }}
                              </span>
                            @endif
                          </div>
                          <br>

                         <label for="precio" class="sr-only">Precio</label>
                                <input type="text" name="precio" class="form-control" placeholder="Precio" value="{{ old('precio') }}" required autofocus><br>
                                <div>
                                    @if ($errors->has('precio'))
                                      <span class="text-danger">
                                        {{ $errors->first('precio') }}
                                      </span>
                                    @endif
                                  </div>
                                <br>

                                </div>
                                <br> <br>

                       
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                          <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                          <br><br>
                           <label for="cod_origen" class="sr-only">Origen</label>
                              <select name="cod_origen" class="form-control">
                                <option value="">-Seleccione el Origen-</option>
                                @foreach($origen as $orig)
                                  <option value="{{ $orig->id }}"> {{ $orig->nombre }} </option>
                                @endforeach
                              </select>

                                  @if ($errors->has('cod_origen'))
                                    <span class="text-danger">
                                      {{ $errors->first('cod_origen') }}
                                    </span>
                                  @endif
                                  <br><br>

                                <label for="cod_destino" class="sr-only">Destino</label>
                                <select name="cod_destino" class="form-control">
                                  <option value="">-Seleccione el Destino-</option>
                                  @foreach($destino as $dest)
                                    <option value="{{ $dest->id }}"> {{ $dest->nombre }} </option>
                                  @endforeach
                              </select>

                                <div>
                                  @if ($errors->has('cod_destino'))
                                    <span class="text-danger">
                                      {{ $errors->first('cod_destino') }}
                                    </span>
                                  @endif
                                </div>
                                <br><br>


                                <label for="ced_viajero" class="sr-only">Cedula</label>
                               <select name="ced_viajero" class="form-control">
                                  <option value="">-Seleccione Cedula Viajero-</option>
                                  @foreach($cedula as $ced)
                                    <option value="{{ $ced->id }}"> {{ $ced->cedula }} </option>
                                  @endforeach
                                </select>
                                <div>
                                    @if ($errors->has('ced_viajero'))
                                      <span class="text-danger">
                                        {{ $errors->first('ced_viajero') }}
                                      </span>
                                    @endif
                                  </div>

                                <br>
                              <br>
                              <br>
                               <button type="sumbit" class="btn btn-primary btn-xl js-scroll-trigger">Registrar</button><br><br>
                                      
                  
                    </div>
                    
                      
                    </div> 
                  </div>
                </div>
              </section>
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
