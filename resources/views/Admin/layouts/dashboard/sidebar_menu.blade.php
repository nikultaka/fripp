<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
         
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>CMS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url(ADMIN.'/cms')}}"><i class="fa fa-circle-o"></i>CMS</a></li>
            <li><a href="{{url(ADMIN.'/cms/list')}}"><i class="fa fa-circle-o"></i>CMS List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url(ADMIN.'/blog')}}"><i class="fa fa-circle-o"></i>Add Blog</a></li>
            <li><a href="{{url(ADMIN.'/blog/list')}}"><i class="fa fa-circle-o"></i>Blog List</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url(ADMIN.'/category')}}"><i class="fa fa-circle-o"></i>Category</a></li>
            <li><a href="{{url(ADMIN.'/subcategory')}}"><i class="fa fa-circle-o"></i>Sub Category</a></li>
          </ul>
        </li>

        <li><a href="{{url(ADMIN.'/banner')}}"><i class="fa fa-flag"></i> <span>Banner</span></a></li>
        <li><a href="{{url(ADMIN.'/advancesettings')}}"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>

        
        
        <li><a href="{{url(ADMIN.'/contact')}}"><i class="fa fa-phone"></i> <span>Contact us</span></a></li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-medium"></i>
            <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url(ADMIN.'/media')}}"><i class="fa fa-circle-o"></i>Media Category</a></li>
            <li><a href="{{url(ADMIN.'/upload-media')}}"><i class="fa fa-circle-o"></i>Media Upload</a></li>
          </ul>
        </li>

        <li><a href="{{ url(ADMIN_LOGOUT)}}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>