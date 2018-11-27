<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-right info">
        {{-- @guest
        <p>INCOS</p>
        @else --}}
          {{-- Secretaria --}}
          {{-- @if (Auth::user()->rol_id==4 OR  Auth::user()->rol_id==1 )
            @if(Auth::user()->id==$administrativos->id)
              $administrativo->nombre
            @endif
          @endif --}}

          {{-- Docente --}}
          {{-- @if (Auth::user()->rol_id==5 OR Auth::user()->rol_id==1 )

          @endif --}}

          {{-- Postulante --}}
          {{-- @if (Auth::user()->rol_id==7)
            @if(Auth::user()->id==$postulantes->usuario_id)
              {{ $postulantes->nombre }}
            @endif
          @endif --}}

          {{-- Estudiante --}}
          {{-- @if (Auth::user()->rol_id==6)
            @if(Auth::user()->id==$estudiantes->usuario_id)
              {{ $estudiantes->nombre }}
            @endif
          @endif
        @endguest --}}

        {{-- <p>{{ $postulantes->nombre }}</p> --}}
      </div>
      <br>
    </div>
    <hr color="red">
    @guest
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
    @else
      {{-- <ul class="sidebar-menu" data-widget="tree">
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
      </ul> --}}

      {{-- Secretaria --}}
      @if (Auth::user()->rol_id==4 OR  Auth::user()->rol_id==1 )
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU SECRETARIA</li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Datos Personales</span></a></li>
        <li><a href="{{ route('postulantes.index') }}"><i class="fa fa-newspaper-o"></i> <span>Inscripsión de Postulantes</span></a></li>
        <li><a href="{{ route('estudiantes.index') }}"><i class="fa fa-newspaper-o"></i> <span>Inscripsión de Estudiantes</span></a></li>
        <li><a href="#"><i class="fa fa-info-circle"></i> <span>Centralizador de Notas</span></a></li>          
        {{-- <li><a href="{{ route('administrativos.index') }}">ADMINISTRATIVOS</a></li>
        <li><a href="{{ route('docentes.index') }}">DOCENTES</a></li> --}}
        {{-- <li><a href="{{ route('estudiantes.index') }}">ESTUDIANTES</a></li> --}}
      </ul>
      @endif

      {{-- Docente --}}
      @if (Auth::user()->rol_id==5 OR Auth::user()->rol_id==1 )
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DOCENTE</li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Datos Personales</span></a></li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Lista Estudiantes</span></a></li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Subir Notas</span></a></li>
        <li><a href="#"><i class="fa fa-info-circle"></i> <span>Horarios</span></a></li>          
        {{-- <li><a href="{{ route('administrativos.index') }}">ADMINISTRATIVOS</a></li>
        <li><a href="{{ route('docentes.index') }}">DOCENTES</a></li> --}}
        {{-- <li><a href="{{ route('estudiantes.index') }}">ESTUDIANTES</a></li> --}}
      </ul>
      @endif

      {{-- Postulante --}}
      @if (Auth::user()->rol_id==7 || Auth::user()->rol_id==1 )
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU POSTULANTE</li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Datos Personales</span></a></li>
        {{-- <li><a href="{{ route('administrativos.index') }}">ADMINISTRATIVOS</a></li>
        <li><a href="{{ route('docentes.index') }}">DOCENTES</a></li> --}}
        {{-- <li><a href="{{ route('estudiantes.index') }}">ESTUDIANTES</a></li> --}}
      </ul>
      @endif

      {{-- Estudiante --}}
      @if (Auth::user()->rol_id==6 OR Auth::user()->rol_id==1 )
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU ESTUDIANTE</li>
        @if (Auth::user()->rol_id==6)
          <li><a href="{{ route('estudiantes.show', $estudiantes) }}"><i class="fa fa-newspaper-o"></i> <span>Datos Personales</span></a></li>
        @endif
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Cursos</span></a></li>
        <li><a href="#"><i class="fa fa-newspaper-o"></i> <span>Horario</span></a></li>
        <li><a href="#"><i class="fa fa-info-circle"></i> <span>Nota</span></a></li>
        <li><a href="#"><i class="fa fa-info-circle"></i> <span>Historial Academico</span></a></li>
        @if (Auth::user()->rol_id==6)
          <li><a href="{{ route('estudiantes.pensum', $estudiantes) }}"><i class="fa fa-info-circle"></i> <span>Pensum</span></a></li>
        @endif
      </ul>
      @endif
    @endguest

  </section>
</aside>