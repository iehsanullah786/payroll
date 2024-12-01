<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="" class="app-brand-link">
            <img src="{{asset('img/avatars/logo.png')}}"  style="width: 90px; height: auto;">

            </a>


          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item {{ request()->is('AdminDashboard*') ? ' active' : '' }}">
            <a href="{{route(name: "admin.dashboard")}}" class="menu-link">
            <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
              </a>
              </li>

            <li class="menu-item {{ request()->is('employees*') ? ' active' : '' }}">
              <a href="{{route(name: "employees.index")}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Employees">Employees</div>
              </a>
            </li>

            <li class="menu-item {{ request()->is('AdjustmentTypes*') ? ' active' : '' }}">
              <a href="{{route(name: "AdjustmentTypes.index")}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Adjustment Types">Admin Types</div>
              </a>
            </li>



          </ul>
        </aside>
