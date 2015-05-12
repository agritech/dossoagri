
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('/') }}"> DOSSO Agriculture (béta)</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> 1 Nouvelle alerte
                            <span class="pull-right text-muted small">4 minutes environ</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 Nouveaux agriculteurs
                            <span class="pull-right text-muted small">12 minutes environ</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Nouvelle recolte
                            <span class="pull-right text-muted small">4 minutes environ</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> Nouvelle négociation
                            <span class="pull-right text-muted small">4 minutes environ</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Serveur redemarrer
                            <span class="pull-right text-muted small">4 minutes environ</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Voir toutes les alertes</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->Username }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile utilisateur</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Déconnection</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
        <li >
            <img alt="Brand" src="{{ URL::to('/') }}/dossoagri.jpg" style="height:35px;width:35px;" >
            
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a @if(Request::is('/')) class="active" @endif href="{{ URL::to('') }}"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
                </li>
                @if(Auth::user()->hasRole('ALERT'))
                <li @if(Request::is('alert') or Request::is('alert/create') or Request::is('alert/*/edit')) class="active" @endif>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Alertes<sspan class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a @if(Request::is('alert') or Request::is('alert/*/edit')) class="active" @endif href="{{ URL::to('alert') }}">Liste des alertes enregistrées</a>
                        </li>
                        <li>
                            <a @if(Request::is('alert/create')) class="active" @endif href="{{ URL::to('alert/create') }}">Ajouter une alerte</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                @endif
                @if(Auth::user()->hasRole('ADMIN'))
                <li @if(Request::is('admin/user') or Request::is('admin/user/create') or Request::is('admin/user/*/edit')) class="active" @endif>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Utilisateurs<sspan class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a @if(Request::is('admin/user') or Request::is('admin/user/*/edit')) class="active" @endif href="{{ URL::to('admin/user') }}">Liste des utilisateurs</a>
                        </li>
                        <li>
                            <a @if(Request::is('admin/user/create')) class="active" @endif href="{{ URL::to('admin/user/create') }}">Ajouter un utilisateur</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                @endif
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>