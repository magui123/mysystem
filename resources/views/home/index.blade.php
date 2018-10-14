<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis ventas</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('mysystemhomedesign/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('mysystemhomedesign/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
     <!-- Custom styles for this template -->
    <link href="{{ asset('mysystemhomedesign/css/clean-blog.min.css')}}" rel="stylesheet">
</head>
<body>

     <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand" href="index.html">Mi Cuaderno de Negocios</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#registrarme">Registrarme</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactos">Contactos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>    

    <header class="masthead" style="background-image: url('mysystemhomedesign/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Mi Cuaderno de Negocios</h1>
              <span class="subheading">Controla tus negocios con esta aplicacion</span>
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="container">
        <div class="row" id="registrarme">
             <div class="col-lg-8 col-md-10 mx-auto">
                 <h2>Registrarme</h2>
                 <form action="javascript:" name="register" >
                      <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}">
                     <div class="form-group floating-label-form-group controls">
                         <label for="">Nombres</label>
                         <input type="text" id="name" name="name" class="form-control" placeholder="Nombres" required="" data-validation-required-message="Ingresa tu nombre">
                         <p class="help-block text-danger"></p>
                     </div>

                      <div class="form-group floating-label-form-group controls">
                         <label for="">Apellidos</label>
                         <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Apellidos" required="" data-validation-required-message="Ingresa tu apellido">
                         <p class="help-block text-danger"></p>
                     </div>

                      <div class="form-group floating-label-form-group controls">
                         <label for="">Telefono/Celular</label>
                         <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefono/Celular" required="" data-validation-required-message="Ingresa tu nombre">
                         <p class="help-block text-danger"></p>
                     </div>

                
                     <div class="form-group floating-label-form-group controls">
                         <label for="">Correo</label>
                         <input type="email" id="email" name="email" class="form-control" placeholder="Correo" required="" data-validation-required-message="Ingresa tu correo ">
                         <p class="help-block text-danger"></p>
                     </div>



                     <div class="form-group floating-label-form-group controls">
                         <label for="">Usuario</label>
                         <input type="text" id="user" name="user" class="form-control" placeholder="Usuario" required="" data-validation-required-message="Ingresa usuario">
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="form-group floating-label-form-group controls">
                         <label for="">Contraseña</label>
                         <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required="" data-validation-required-message="Ingresa tu nombre">
                         <p class="help-block text-danger"></p>
                     </div>

                     <div class="form-group floating-label-form-group controls">
                         <label for="">Confirmar contraseña</label>
                         <input type="password" id="password-repeat" name="password-repeat" class="form-control" placeholder="Confirmar Contraseña" required="" data-validation-required-message="Ingresa tu nombre">
                         <p class="help-block text-danger"></p>
                     </div>
                     <div id="msjregister"></div>
                     <div class="form-group">
                        
                         <input type="submit" class="btn btn-primary" value="Registrarme">
                         <p class="help-block text-danger"></p>
                     </div>   
                 </form>
                
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
             </div>
        </div>
        <div class="row" id="login">
            <div class="col-lg-8 col-md-10 mx-auto">
                 <h2>login</h2>
                 <form action="javascript:" name="log">
                     <div class="form-group floating-label-form-group controls">
                         <label for="">Correo o usuario</label>
                         <input type="text" id="loguser" name="loguser" class="form-control" placeholder="Correo o usuario" required="" data-validation-required-message="Ingresa usuario">
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="form-group floating-label-form-group controls">
                         <label for="">Contraseña</label>
                         <input type="password" id="logpassword" name="logpassword" class="form-control" placeholder="Contraseña" required="" data-validation-required-message="Ingresa usuario">
                         <p class="help-block text-danger"></p>
                     </div>
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="msjlogin"></div>
                 </form>

                 <br>
                 <br>
                 <br>
                 <br>
                 <br>

              
             </div>
        </div> 
        <div class="row" id="contactos">
             <div class="col-lg-8 col-md-10 mx-auto">
                 <h2>Contactos</h2>

                 <div class="post-preview">
                        <a href="javascript:void(0)">
                        <h2 class="post-title">
                            Margareth Dávila Gutierrez
                        </h2>
                        <h3 class="post-subtitle">
                           Que tu negocio no te complique la vida
                        </h3>
                        </a>
                        <p class="post-meta">Celular
                        <a href="#"> 73715301</a>
                        La Paz - Bolivia, 2018</p>
                    </div>
             </div>
        </div>
    </div>

     <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Derechos reservados &copy; Cuaderno de negocios 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('mysystemhomedesign/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('mysystemhomedesign/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('mysystemhomedesign/js/clean-blog.min.js')}}"></script>
    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/us.reg.js')}}"></script>
</body>
</html>