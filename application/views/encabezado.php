<?php if($this->session->userdata('nivel')=='1')  {?>

<!--Navbar-->
<nav class="navbar1 navbar-expand-lg navbar-dark danger-color-dark">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Administrador</a>

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
                <a class="nav-link" href="#">Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Restaurantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Usuarios</a>
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
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="<?php echo base_url();?>welcome/cerrarSesion">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<body class="intro-3">
    <div class="container">
        <h1 style="color:whitesmoke; text-align:center;">Subir alimentos</h1>
        <div style="background-color: whitesmoke;">
          <form action="<?php echo base_url();?>index.php/welcome/insertFood" method="post" enctype="multipart/form-data"> 
            <input class="form-control" type="text" placeholder="Nombre del alimento" name="nombre" required />
            
            <input class="form-control" type="text" placeholder="Costo del alimento" name="costo" required />
            
            <input class="form-control" type="text" placeholder="Descripcion del alimento" name="descripcion" required />
            
            <?php echo form_upload(['name'=>'foto', 'class'=>'form-control']); ?>
              
            <div class="form-group">
              <button class="btn btn-success" type="submit">Enviar</button>
            </div>
           </form> 
        </div>
    </div>  
</body>

<!--/.Navbar--> 
<?php }?>
<?php if($this->session->userdata('nivel')=='2')  {?>

<!--Navbar-->
<nav class="navbar1 navbar-expand-lg navbar-dark success-color-dark">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Restaurante</a>

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
                <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/chefVista">Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/mostrarPedidos">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/menuRestaurante">Menu</a>
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
                    <a class="dropdown-item" href="<?php echo base_url();?>index.php/welcome/cerrarSesion">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar--> 
<?php }?>
<?php if($this->session->userdata('nivel')=='3')  {?>

<!--Navbar-->
<nav class="navbar1 navbar-expand-lg navbar-dark default-color-dark">

    <!-- Navbar brand -->
    <a class="navbar-brand white-text" href="#">Usuario</a>

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
                <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/userVista">Inicio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/welcome/mostrarMenu">Menu</a>
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
            <li class="nav-item dropdown black-text">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Tarea 1</a>
                    <a class="dropdown-item" href="#">Tarea 2</a>
                    <a class="dropdown-item black-text" href="<?php echo base_url();?>index.php/welcome/cerrarSesion">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- Collapsible content 
</nav><div class="w-10 p-3 h-100 d-inline-block" style="background-color: steelblue;">Width 25%</div>-->
</nav>
<?php }?>
