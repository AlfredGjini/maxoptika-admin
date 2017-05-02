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
              <h3 class="box-title">Menaxho Oraret e lejuara te Vizitave</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="register_clients" action="functions.php?action=register_clients" method="post" class="form-horizontal">
              <div id="mdp-demo"></div>
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Register</button>
              </div>
              </form>


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


  <script type="text/javascript">

    var date = new Date();
    $('#mdp-demo').multiDatesPicker({
      // preselect the 14th and 19th of the current month
      addDates: [date.setDate(14), date.setDate(19)]
    }); 
  </script>