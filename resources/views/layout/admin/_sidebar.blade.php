<div class="app-sidebar__user">
    <div>
        <p class="app-sidebar__user-name">Admin Name</p>
        <p class="app-sidebar__user-designation">Web Developer</p>
    </div>
</div>
<ul class="app-menu">
    <li>
        <a class="app-menu__item active" href="{{ route('admin.dashboard') }}">
            <i class="app-menu__icon fa fa-dashboard"></i>
            <span class="app-menu__label">Dashboard</span></a>
    </li>

    <li>
        <a class="app-menu__item" href="javascript:void(0);">
            <i class="app-menu__icon fa fa-pie-chart"></i>
            <span class="app-menu__label">Charts</span>
        </a>
    </li>

    <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-th-list"></i>
            <span class="app-menu__label">Tables</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
        </a>
        <ul class="treeview-menu">
            <li>
                <a class="treeview-item" href="javascript:void(0);">
                    <i class="icon fa fa-circle-o"></i> Basic Tables
                </a>
            </li>
            <li>
                <a class="treeview-item" href="javascript:void(0);">
                    <i class="icon fa fa-circle-o"></i> Data Tables
                </a>
            </li>
        </ul>
    </li>
</ul>
