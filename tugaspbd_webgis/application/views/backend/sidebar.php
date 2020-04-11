<!-- <style type="text/css">
    .sidebar{
      background: #01595A;
    }
    .sidebar .nav .nav-item .nav-link[aria-expanded="true"] {
      border-top: 1px solid #01595A;
    }
    .sidebar .nav .nav-item:first-child .nav-link {
      border-top: 1px solid #01595A;
      /* background: #01595A; */
    }
    .sidebar .nav.sub-menu .nav-item:first-child .nav-link {
      border-top: 1px solid #01595A;
      /* background: #01595A; */
    }
    .sidebar .nav.sub-menu .nav-item .nav-link:hover {
      color: #ffffff;
    }
    .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
      border: 1px solid #01595A;
    }
    .sidebar .nav.sub-menu .nav-item .nav-link:hover::before {
      border: 2px solid #f2f2f2;
      /* background: #01595A; */

    }
    .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
      background: #01595A;
    }

    .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link:hover .menu-title {
      background: #01595A;
    }

  </style> -->


<nav class="sidebar sidebar-offcanvas fixed"  id="sidebar">
        <div class="user-profile">
          <div class="user-image">
            <img src="template/regal/images/faces/face1.jpg">
          </div>

          <div class="user-name">
              <?php  echo $this->session->userdata('nama');?>
          </div>
          <div class="user-designation">
          <?php  echo $this->session->userdata('role');?>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=site_url('gunung')?>">Table Maps</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Maps View</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/feather-icons.html">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docs/documentation.html">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>