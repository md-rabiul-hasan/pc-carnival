<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="height: 50px; width:50px" src="https://thumbs.dreamstime.com/b/unknown-man-profile-avatar-vector-male-office-icon-potrait-175425661.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
          <p class="app-sidebar__user-designation">{{ auth()->user()->role }}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ route('admin.dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Parameter Setup</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('admin.brand.index')}}"><i class="icon fa fa-circle-o"></i> Brand</a></li>
            <li><a class="treeview-item" href="{{ route('admin.category.index')}}"><i class="icon fa fa-circle-o"></i> Category</a></li>
            <li><a class="treeview-item" href="{{ route('admin.sub-category.index')}}"><i class="icon fa fa-circle-o"></i> Sub-Category</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Home Page</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('admin.home-page.feature-category.index')}}"><i class="icon fa fa-circle-o"></i> Feature Category</a></li>
            <li><a class="treeview-item" href="{{ route('admin.home-page.adds.index')}}"><i class="icon fa fa-circle-o"></i>Adds Setup</a></li>
            <li><a class="treeview-item" href="{{ route('admin.home-page-product.index')}}"><i class="icon fa fa-circle-o"></i> Product Setup</a></li>           
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{ route('admin.product.index') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Product</span></a></li>
        <li><a class="app-menu__item" href="{{ route('admin.order.index') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Orders</span></a></li>
        <li><a class="app-menu__item" href="{{ route('admin.pc-build.index') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">PC Build</span></a></li>
        <li><a class="app-menu__item" href="{{ route('admin.dynamic-page.index') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Dynamic Pages</span></a></li>
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li>
      </ul>
    </aside>

    