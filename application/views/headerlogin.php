<header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url();?>index.php">
                <strong>Goplek Full Stack</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>index.php">Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">¿Quiénes Somos?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Intro Section-->
    <section class="view intro-2 custom-gradient">
        <div class="full-bg-img">
            <div class="container flex-center">
                <div class="d-flex align-items-center content-height">
                    <div class="row flex-center pt-5 mt-3">
                        <div class="col-md-6 text-center text-md-left mb-5">
                            <div class="white-text"><br><br><br>
                                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">
                                Lista de Tareas</h1>
                                <hr class="hr-light mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="card wow fadeInLeft" data-wow-delay="0.3s">  
                                <div class="card-body">
                                    <h6 style="text-align: justify;" class="wow fadeInLeft" data-wow-delay="0.3s">Somos una alternativa tecnológica buscando agilizar el control de tareas.</h6></div></div>
                                <br>
                                <a class="btn btn-outline-warning waves-effect wow fadeInLeft" data-wow-delay="0.3s" data-toggle="modal" data-target="#modalSubscriptionForm" style="background-color: whitesmoke !important; ">Iniciar Sesión</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-5" style="padding-top: 20px; padding-bottom: 25px;">
                            <!--Form-->
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                              <form method="POST" action="<?php echo base_url();?>index.php/welcome/register">  
                                <div class="card-body">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fa fa-check white-text"></i> Registrarse</h3>
                                        <hr class="hr-light">
                                    </div>

                                    <!--Body-->
                                    <div class="md-form">
                                        <i class="fa fa-user prefix white-text active"></i>
                                        <input type="text" id="username" name="username" class="white-text form-control"  required="required">
                                        <label for="username" data-toggle="tooltip" title="Puede ser su nombre completo o nickname personal" data-placement="left">Nombre de Usuario</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-tag prefix white-text active"></i>
                                        <input type="text" id="matricula" name="matricula" class="white-text form-control"  required="required">
                                        <label for="matricula" data-toggle="tooltip" title="Matricula Estudiantil" data-placement="left">Matrícula</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-whatsapp prefix white-text active"></i>
                                        <input type="text" id="telefono" name="telefono" class="white-text form-control"  required="required">
                                        <label for="telefono" data-toggle="tooltip" title="Comunicación via Whatsapp" data-placement="left">Teléfono</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text active"></i>
                                        <input type="password" id="password" name="password" class="white-text form-control"  required="required" />
                                        <label for="password" data-toggle="tooltip" title="Debe tener un minimo 5 caracteres alfanuméricos" data-placement="left">Contraseña</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text active"></i>
                                        <input type="password" id="confirm_password" name="confirm_password" class="white-text form-control" required="required">
                                        <label for="confirm_password">Confirmar Contraseña</label>
                                    </div>
                                    <div>
                                        <input type="number" id="nivel" name="nivel" style="visibility: hidden !important" value="3" readonly>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-orange" name="register">Enviar</button>
                                        <hr class="hr-light mb-3 mt-4">
                                    </div>
                                </div>
                              </form>    
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>    
    </section>
  <!--Login Modal-->
 <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="POST" action="<?php echo base_url();?>index.php/welcome/validaLogin">
        <div class="modal-content" style="background-color:orange;">
            <div class="modal-header text-center" style="background-color:orange;">
                <h4 class="modal-title w-100 font-weight-bold" style="color: whitesmoke;">Iniciar Sesión</h4>
                <button type="button" class="close" style="color: whitesmoke;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-4">
                    <i class="fa fa-user prefix white-text"></i>
                    <input type="text" id="usern" name="usern" class="form-control white-text" required="required" />
                    <label for="usern" style="color: whitesmoke;">Nombre de Usuario</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix white-text"></i>
                    <input type="password" id="pwd" name="pwd" class="form-control white-text" required="required" />
                    <label for="pwd" style="color: whitesmoke;">Contraseña</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-white">Enviar <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
      </form>      
    </div>
 </div>
</header>    

<!--Main Layout-->
<main class="text-center py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                -->
            </div>
        </div>
    </div>

</main>
<!--Main Layout-->
                