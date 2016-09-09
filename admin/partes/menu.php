<?php
use mas_acceso\util\Functions as FNC;
use mas_acceso\Autenticacion\AutenticarClass;


    ?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/admin">Administración +Acceso</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope"></i>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu message-dropdown">
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted">
                                    <i class="fa fa-clock-o"></i>
                                    Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted">
                                    <i class="fa fa-clock-o"></i>
                                    Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted">
                                    <i class="fa fa-clock-o"></i>
                                    Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name
                        <span class="label label-default">Alert Badge</span>
                    </a>
                </li>
                <li>
                    <a href="#">Alert Name
                        <span class="label label-primary">Alert Badge</span>
                    </a>
                </li>
                <li>
                    <a href="#">Alert Name
                        <span class="label label-success">Alert Badge</span>
                    </a>
                </li>
                <li>
                    <a href="#">Alert Name
                        <span class="label label-info">Alert Badge</span>
                    </a>
                </li>
                <li>
                    <a href="#">Alert Name
                        <span class="label label-warning">Alert Badge</span>
                    </a>
                </li>
                <li>
                    <a href="#">Alert Name
                        <span class="label label-danger">Alert Badge</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                John Smith
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="/logout/">
                        <i class="fa fa-fw fa-power-off"></i>
                        Cerrar sesión</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li <?php echo FNC::isActive("admin", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/">
                    <i class="fa fa-fw fa-dashboard"></i>
                    Dashboard</a>
            </li>
            <li <?php echo FNC::isActive("lugares", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/lugares/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Lugares</a>
            </li>
            <li <?php echo FNC::isActive("comentarios", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/comentarios/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Comentarios</a>
            </li>
            <li <?php echo FNC::isActive("usuarios", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/usuarios/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Usuarios</a>
            </li>
            <li <?php echo FNC::isActive("categorias", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/categorias/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Categorías</a>
            </li>
            <li <?php echo FNC::isActive("reportes", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/reportes/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Reportes</a>
            </li>
            <li <?php echo FNC::isActive("discapacidades", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/discapacidades/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Discapacidades</a>
            </li>
            <li <?php echo FNC::isActive("rol-permisos", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/rol-permisos/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Roles y permisos</a>
            </li>
            <li <?php echo FNC::isActive("votos", htmlspecialchars($_SERVER["PHP_SELF"])) ? "class=\"active\"" : " asd"; ?>>
                <a href="/admin/votos/">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    Votos</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
