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
                  <th>Aprovuar</th>
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
  <div id="dialogModifiko" style="display:none" title="Modifiko Rezervimin">
    <form page='manage_reservations' class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Klienti</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="klienti" placeholder="Klienti..." readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="data" class="col-sm-2 control-label">Data</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="data" placeholder="Data...">
          </div>
        </div>
        <div class="form-group">
          <label for="emer" class="col-sm-2 control-label">Ora</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="ora" placeholder="Ora...">
          </div>
        </div>
        <div class="form-group">
          <label for="mbiemer" class="col-sm-2 control-label">Dyqani</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="dyqani" placeholder="Dyqani...">
          </div>
        </div>
        <div class="form-group">
          <label for="mosha" class="col-sm-2 control-label">Shenime</label>
          <div class="col-sm-10">
            <textarea name="shenime" class="form-control" placeholder="Shenime..."></textarea>
            <!-- <input type="text" class="form-control" name="shenime" placeholder="Shenime..."> -->
          </div>
        </div>

        <div class="form-group">
          <label for="mosha" class="col-sm-2 control-label">Shenime</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="optradio">Po
            </label>
            <label class="radio-inline">
              <input type="radio" name="optradio">Jo
            </label>
          </div> 
        </div>
        <input type="hidden" name="id" value=""/>
        <input type="hidden" name="id_klienti" value=""/>
      </div>
      <!-- /.box-body -->
    </form>
  </div>

  <script type="text/javascript">
    $("#manage_reservations").DataTable({
        "ajax" : "functions.php?action=manage_reservations",
        "destroy":true,
        "responsive": true,
        "initComplete": function(settings, json) {
          modClick();
          console.log(json);
          console.log(settings);
        }
    });
  </script>