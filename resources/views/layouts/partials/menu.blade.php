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
  </ul>

</aside><!-- End Sidebar-->