<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rezervimet
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Prenotimet</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Menaxho Rezervimet</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manage_reservations" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Klienti</th>
                  <th>Data</th>
                  <th>Ora</th>
                  <th>Dyqani</th>
                  <th>Shenime</th>
                  <th>Veprimi</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
             
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
    </section>
    <!-- /.content -->
  </div>
  <!--div id="dialogFshij" title="Deshironi te fshini perdoruesin?">
    <p>Kujdes! Ky veprim nuk mund te kthehet mbrapsht.</p>
  </div>
  <div id="dialogError" title="Gabim ne regjistrim!">
    <p>Kujdes! Fushat nuk jane plotesuar sakte.</p>
  </div-->
  
  <!--div id="dialogSuccess" title="Sukses">
    <p>Hyrjet u kryen me sukses! Shtyp Ok per te vazhduar</p>
  </div-->
  <script type="text/javascript">
    $("#manage_reservations").DataTable({
        "ajax" : "functions.php?action=manage_reservations",
        "destroy":true,
        responsive: true,
        "initComplete": function(settings, json) {
          modClick();
        }
    });
  </script>