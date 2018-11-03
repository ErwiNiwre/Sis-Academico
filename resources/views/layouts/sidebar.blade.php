<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/adminLTE/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <hr color="red">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-mortar-board"></i> <span>Carreras</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Administración de Empresas</a></li>
            <li><a href="#">Comercio Internacional</a></li>
            <li><a href="#">Contaduria General</a></li>
            <li><a href="#">Linguistica</a></li>
            <li><a href="#">Secretariado Ejecutivo</a></li>
            <li><a href="#">Sistemas Informáticos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-bullhorn"></i> <span>Admisiones</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Información</a></li>
            <li><a href="#">Convocatoria</a></li>
            <li><a href="#">Formulario</a></li>
            <li><a href="#">Resultados</a></li> 
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Noticia</span></a></li>
        <li><a href="#"><i class="fa fa-info-circle"></i> <span>Nosotros</span></a></li>
        <li><a href="#"><i class="fa fa-envelope"></i> <span>Contacto</span></a></li>
      </ul>

      <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MENU ADMINSITRADOR</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="treeview">
            <a href="#"><i class="fa fa-mortar-board"></i> <span>REGISTRAR</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              {{-- <li><a href="{{ route('administrativos.index') }}">ADMINISTRATIVOS</a></li>
              <li><a href="{{ route('docentes.index') }}">DOCENTES</a></li> --}}
              {{-- <li><a href="{{ route('estudiantes.index') }}">ESTUDIANTES</a></li> --}}
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-bullhorn"></i> <span>Admisiones</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#">Información</a></li>
              <li><a href="#">Convocatoria</a></li>
              <li><a href="#">Formulario</a></li>
              <li><a href="#">Resultados</a></li> 
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Noticia</span></a></li>
          <li><a href="#"><i class="fa fa-info-circle"></i> <span>Nosotros</span></a></li>
          <li><a href="#"><i class="fa fa-envelope"></i> <span>Contacto</span></a></li>
        </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>