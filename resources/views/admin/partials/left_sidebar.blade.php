  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <p class="text-aqua" style="font-size: 2rem;margin:0 10px 0 0;">{{ Auth::user()->name }}</p>
        </div>
        <div class="pull-left">
          <a href="#" style="line-height: 30px;margin-left: 15px;"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="active">
          <a href="{{ url('/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-cogs text-red"></i>
            <span>Administration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('users.index') }}"><i class="fa fa-circle-o text-aqua"></i> Manage Users</a></li>
              <li><a class="nav-link" href="{{ route('roles.index') }}"><i class="fa fa-circle-o text-red"></i> Manage Role</a></li>
              <!-- <li><a class="nav-link" href="{{ route('posts.index') }}"><i class="fa fa-circle-o text-yellow"></i> Manage Post</a></li> -->
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-users text-aqua"></i>
            <span>Group Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('group-members') }}"><i class="fa fa-circle-o text-aqua"></i>All Group Members </a></li>
              <li><a class="nav-link" href="{{ route('createGroup-member') }}"><i class="fa fa-circle-o text-aqua"></i>Create Group Member </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-map text-red"></i>
            <span>Regions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-regions') }}"><i class="fa fa-circle-o text-aqua"></i>All Regions </a></li>
              <li><a class="nav-link" href="{{ route('createRegion') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Region </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-sitemap text-aqua"></i>
            <span>Host NGO</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-ngo') }}"><i class="fa fa-circle-o text-aqua"></i>All Host NGO </a></li>
              <li><a class="nav-link" href="{{ route('createNgo') }}"><i class="fa fa-circle-o text-aqua"></i>Create New NGO </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-users text-yellow"></i>
            <span>Committee Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('committee-members') }}"><i class="fa fa-circle-o text-aqua"></i>All Committee Members </a></li>
              <li><a class="nav-link" href="{{ route('createCommittee-member') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Committee Member </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-users text-aqua"></i>
            <span>Selected Institutions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-institution') }}"><i class="fa fa-circle-o text-aqua"></i>All Institutions </a></li>
              <li><a class="nav-link" href="{{ route('createInstitution') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Institution </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-tasks text-yellow"></i>
            <span>Activities</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-activity') }}"><i class="fa fa-circle-o text-aqua"></i>All Activities</a></li>
              <li><a class="nav-link" href="{{ route('createActivity') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Activity </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file text-red"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('reports') }}"><i class="fa fa-circle-o text-aqua"></i>All Reports</a></li>
              <li><a class="nav-link" href="{{ route('createReport') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Report </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-book text-yellow"></i>
            <span>Bulletins</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('bulletins') }}"><i class="fa fa-circle-o text-aqua"></i>All Bulletin</a></li>
              <li><a class="nav-link" href="{{ route('createBulletin') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Bulletin </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-rss-square text-aqua"></i>
            <span>Blogs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-blogs') }}"><i class="fa fa-circle-o text-aqua"></i>All Blogs</a></li>
              <li><a class="nav-link" href="{{ route('createBlog') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Blog </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-calendar text-yellow"></i>
            <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a class="nav-link" href="{{ route('all-events') }}"><i class="fa fa-circle-o text-aqua"></i>All Events</a></li>
              <li><a class="nav-link" href="{{ route('createEvent') }}"><i class="fa fa-circle-o text-aqua"></i>Create New Event </a></li>
          </ul>
        </li>









        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>