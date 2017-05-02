<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!--form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      < /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="dashboard treeview">
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
        <li class="manage_clients treeview register_clients">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Kliente</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="register_clients"><a href="?page=register_clients"><i class="fa fa-circle-o"></i> Regjistro Klient</a></li>
            <li class="manage_clients"><a href="?page=manage_clients"><i class="fa fa-circle-o"></i> Menaxho Kliente</a></li>
          </ul>
        </li>
        
<!--         <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Produktet</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=add_product"><i class="fa fa-circle-o"></i> Shto Produkt</a></li>
            <li><a href="?page=manage_products"><i class="fa fa-circle-o"></i> Menaxho Produktet</a></li>
           </ul>
        </li> -->
        <li class="manage_clinic_card create_clinic_card treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Kartela Klinike</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="create_clinic_card"><a href="?page=create_clinic_card"><i class="fa fa-circle-o"></i> Ploteso Kartele</a></li>
            <li class="manage_clinic_card"><a href="?page=manage_clinic_card"><i class="fa fa-circle-o"></i> Menaxho Kartelat</a></li>
          </ul>
        </li>
        <li class="treeview manage_reservations">
          <a href="?page=manage_reservations">
            <i class="fa fa-edit"></i> <span>Prenotimet</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <?php if (isset($_SESSION['username']) && $_SESSION['username']=="superadmin" ) { ?>
        <li class="treeview manage_doc_times">
          <a href="?page=manage_doc_times">
            <i class="fa fa-clock-o"></i> <span>Orari Doktorit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <?php } ?>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>