<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menaxho Klientet
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Klient</a></li>
        <li class="active">Menaxho Klientet</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Menaxho Klientet</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manage_clients" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Emer</th>
                  <th>Mbiemer</th>
                  <th>Mosha</th>
                  <th>Gjinia</th>
                  <th>Vendlindja</th>
                  <th>Celular</th>
                  <th>Email</th>
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
  <div id="dialogModifiko" style="display:none" title="Modifiko Perdoruesin">
    <form page='manage_clients' class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" placeholder="Username...">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Password...">
          </div>
        </div>
        <div class="form-group">
          <label for="emer" class="col-sm-2 control-label">Emer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="emer" placeholder="Emer...">
          </div>
        </div>
        <div class="form-group">
          <label for="mbiemer" class="col-sm-2 control-label">Mbiemer</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="mbiemer" placeholder="Mbiemer...">
          </div>
        </div>
        <div class="form-group">
          <label for="mosha" class="col-sm-2 control-label">Mosha</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="mosha" placeholder="Mosha...">
          </div>
        </div>

        <div class="form-group">
          <label for="gjinia" class="col-sm-2 control-label">Gjinia</label>
          <div class="col-sm-10">
            <div class="radio">
              <label>
                <input type="radio" name="gjinia" value="m"> Mashkull
              </label>
              <label>
                <input type="radio" name="gjinia" value="f"> Femer 
              </label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="vendlindja" class="col-sm-2 control-label">Vendlindja</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="vendlindja" placeholder="Vendlindja...">
          </div>
        </div>
        <div class="form-group">
          <label for="celular" class="col-sm-2 control-label">Celular</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="celular" placeholder="Celular...">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="Email...">
          </div>
        </div>
        <input type="hidden" name="id" value=""/>
        <input type="hidden" name="user_id" value=""/>
      </div>
      <!-- /.box-body -->
    </form>
  </div>
  <!--div id="dialogSuccess" title="Sukses">
    <p>Hyrjet u kryen me sukses! Shtyp Ok per te vazhduar</p>
  </div-->
  <script type="text/javascript">
    $("#manage_clients").DataTable({
        "ajax" : "functions.php?action=manage_clients",
        "destroy":true,
        "iDisplayLength": 50
        "responsive": true,
        "initComplete": function(settings, json) {
          modClick();
          console.log(json);
          console.log(settings);
          $( 'table tbody tr td:last-child').addClass( 'qender' );
        }
    });
  </script>