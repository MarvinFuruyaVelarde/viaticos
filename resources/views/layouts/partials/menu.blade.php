<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link {{ isActiveRoute('home') }}" href="{{ route('home') }}">
        <i class="bi bi-grid"></i>
        <span>INICIO</span>
      </a>
    </li><!-- End Dashboard Nav -->  
    
    <li class="nav-item">
      <a class="nav-link {{ isActiveRoute(['users.*', 'roles.*']) }}" data-bs-target="#administracionSistema-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gear"></i><span>ADMINISTRACIÓN</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="administracionSistema-nav" class="nav-content collapse {{ mostrar(['users.*', 'roles.*']) }}" data-bs-parent="#sidebar-nav">
        @can('users.index')
        <li>
          <a href="{{ route('users.index') }}" class="{{ isActiveSubMenu(['users.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Usuarios</span>
          </a>
        </li>
        @endcan
        @can('roles.index')
        <li>
          <a href="{{ route('roles.index') }}" class="{{ isActiveSubMenu(['roles.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Roles</span>
          </a>
        </li>
        @endcan
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ isActiveRoute(['feriados.*', 'lugares.*', 'vias.*']) }}" data-bs-target="#parametricas-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-sliders"></i>
        <span>PARAMÉTRICAS</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="parametricas-nav" class="nav-content collapse {{ mostrar(['feriados.*', 'lugares.*', 'vias.*']) }}" data-bs-parent="#sidebar-nav">
        @can('feriados.index')
        <li>
          <a href="{{ route('feriados.index') }}" class="{{ isActiveSubMenu(['feriados.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Feriado</span>
          </a>
        </li>
        @endcan
        @can('lugares.index')
        <li>
          <a href="{{ route('lugares.index') }}" class="{{ isActiveSubMenu(['lugares.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Lugar</span>
          </a>
        </li>
        @endcan
        @can('vias.index')
        <li>
          <a href="{{ route('vias.index') }}" class="{{ isActiveSubMenu(['vias.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Via</span>
          </a>
        </li>
        @endcan
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ isActiveRoute(['viaticos.*', 'registrarpagoviaticos.*', 'viaticopagados.*']) }}" data-bs-target="#viaticos-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gear"></i><span>VIATICOS</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="viaticos-nav" class="nav-content collapse {{ mostrar(['viaticos.*', 'registrarpagoviaticos.*', 'viaticopagados.*']) }}" data-bs-parent="#sidebar-nav">
        @can('viaticos.index')
        <li>
          <a href="{{ route('viaticos.index') }}" class="{{ isActiveSubMenu(['viaticos.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Lista de Viaticos</span>
          </a>
        </li>
        @endcan
        @can('registrarpagoviaticos.index')
        <li>
          <a href="{{ route('registrarpagoviaticos.index') }}" class="{{ isActiveSubMenu(['registrarpagoviaticos.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Registrar Pago de Viaticos</span>
          </a>
        </li>
        @endcan
        @can('viaticopagados.index')
        <li>
          <a href="{{ route('viaticopagados.index') }}" class="{{ isActiveSubMenu(['viaticopagados.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Viaticos Pagados</span>
          </a>
        </li>
        @endcan
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ isActiveRoute(['reportedetalleviatico.*', 'reporteplanillaimpositiva.*']) }}" data-bs-target="#reportes-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gear"></i><span>REPORTES</span>
        <i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="reportes-nav" class="nav-content collapse {{ mostrar(['reportedetalleviatico.*', 'reporteplanillaimpositiva.*']) }}" data-bs-parent="#sidebar-nav">
        @can('reportedetalleviatico.index')
        <li>
          <a href="{{ route('reportedetalleviatico.index') }}" class="{{ isActiveSubMenu(['reportedetalleviatico.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Detalle de Viaticos</span>
          </a>
        </li>
        @endcan
        @can('reporteplanillaimpositiva.index')
        <li>
          <a href="{{ route('reporteplanillaimpositiva.index') }}" class="{{ isActiveSubMenu(['reporteplanillaimpositiva.*']) }}">
            <i class="bi bi-circle fs-6"></i><span>Planilla Impositiva RC-IVA</span>
          </a>
        </li>
        @endcan
      </ul>
    </li>
  </ul>

</aside><!-- End Sidebar-->