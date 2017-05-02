<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Orari i Doktorit
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
              <h3 class="box-title">Zgjidhni ditet kur doktori eshte i gatshem per vizita:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="register_clients" action="functions.php?action=register_clients" method="post" class="form-horizontal">
              <div id="mdp-demo"></div>
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Update</button>
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

      var today = new Date();
      var y = today.getFullYear();
      $('#mdp-demo').multiDatesPicker({
        addDates: ['10/14/'+y, '02/19/'+y, '01/14/'+y, '11/16/'+y],
        numberOfMonths: [3,4],
        defaultDate: '1/1/'+y
      });


      var dates = $('#mdp-demo').multiDatesPicker('getDates');
      console.log(dates);
  </script>