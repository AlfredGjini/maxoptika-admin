<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Paneli I Administratorit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<!--         <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 class="numberOfProducts">150</h3>

              <p>Produkte Te Regjistruara</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="?page=manage_products" class="small-box-footer">Menaxho Produktet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 class="numberOfReservations"></h3>

              <p>Prenotime Nga Klientet</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=manage_reservations" class="small-box-footer">Menaxho Prenotimet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 class="numberOfClients"></h3>

              <p>Kliente Te Regjistruar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?page=manage_clients" class="small-box-footer">Menaxho Klientet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 class="numberOfClinicCards"></h3>

              <p>Kartela Klinike</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="?page=manage_clinic_card" class="small-box-footer">Menaxho Kartelat Klinike <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
                <!-- ./col -->
        <?php if (isset($_SESSION['username']) && $_SESSION['username']=="superadmin" ) { ?>
        <div class="col-lg-3 col-xs-6 perditeso" style="cursor:pointer;">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h2 style="font-weight: bold;">Perditeso te dhenat</h2>

              <!-- <p>Unique Visitors</p> -->
            </div>
            <div class="icon" style="font-size: 40px;top: 25px;">
              <i class="fa fa-database"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <?php } ?>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
    </section>
    <!-- /.content -->
  </div>


  <script type="text/javascript">



    
  jQuery('.perditeso').click( function(){
    console.log("thirreads");

  })
  </script>