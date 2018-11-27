<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>INCOS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>INCOS</b> - EL ALTO</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigationsdsdaaaaaaaaa</span>
      </a>
      <div class="pull-right">
        <ul class="nav navbar-nav navbar-right">
            @guest
                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                <li><a href="{{ route('register') }}">Registrarse</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        Usuario: {{ Auth::user()->usuario }}<span class="caret"></span>
                    </a>            <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Cerrar Sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
        {{-- <a href="{{ route('login') }}" class="btn btn-default btn-sm">
          <i class="fa fa-sign-in"></i>
          <span class="label label-success">Iniciar Sesión</span>
        </a>
        <a href="#" class="btn btn-default btn-sm">
          <i class="fa fa-sign-out"></i>
          <span class="label label-success">Registrarse</span>
        </a> --}}
      </div>
      <!-- Navbar Right Menu -->
      {{-- <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu"> --}}
            {{-- <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="/adminLTE/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a> --}}
            {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-sign-in"></i>
              <span class="label label-success">Iniciar Sesión</span>
            </a>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-sign-out"></i>
              <span class="label label-success">Registrarse</span>
            </a>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Iniciar Sesión</span>
            </a>

            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="/adminLTE/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div> --}}
    </nav>
  </header>