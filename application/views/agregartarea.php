<?php if($this->session->userdata('nivel')=='3')  {?>

<!--Navbar-->
<nav class="navbar1 navbar-expand-lg navbar-dark warning-color-dark">

    <!-- Navbar brand -->
    <a style="padding-left:10px;" class="navbar-brand white-text" href="<?php echo base_url();?>welcome/mostrarTareas">Usuario</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="padding-left:10px;" class="nav-link" href="<?php echo base_url();?>welcome/mostrarTareas">Tareas</a>
            </li>
            <li class="nav-item active">
                <a style="padding-left:10px;" class="nav-link" href="<?php echo base_url();?>welcome/agregarTareas">Agregar Tareas</a>
            </li>
            <li class="nav-item active">
                <a style="padding-left:10px;" class="nav-link" href="<?php echo base_url();?>welcome/mostrarTareas">Tareas Completadas</a>
            </li>
            
        </ul>
        <!-- Links -->
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Tarea 1</a>
                    <a class="dropdown-item" href="#">Tarea 2</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>welcome/cerrarSesion">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
<body class="intro-3">
    
    <div class="container">
        <h1 style="color:whitesmoke; text-align:center;">Agregar Tarea</h1>
        <div style="background-color: whitesmoke;">
          <form action="<?php echo base_url();?>index.php/welcome/insertTarea" method="post" enctype="multipart/form-data"> 
            <input class="form-control" type="text" placeholder="Nombre de la tarea" name="nombre" required />
            
            <input class="form-control" type="text" placeholder="Estatus" name="status" required />
              
            <div class="form-group">
              <button class="btn btn-success" type="submit">Enviar</button>
            </div>
           </form> 
        </div>
    </div>  
    
                            
    </body>
<?php }?> 
