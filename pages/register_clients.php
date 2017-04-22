<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Regjistro Klient
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Klient</a></li>
        <li class="active">Regjistro Klient</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Regjistro Klient</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="register_clients" action="functions.php?action=register_clients" method="post" class="form-horizontal">
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
              </div>
              <!-- /.box-body -->
              <div class="box-footer" >
                <button type="submit" class="btn btn-info pull-right">Register</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
             
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
    </section>
    <!-- /.content -->
  </div>


  <script type="text/javascript">

      $("#register_clients").submit(function(event) {


      /* Stop form from submitting normally */
      event.preventDefault();
      var validator = $( "#register_clients" ).validate();

      if(validator){
      /* Get from elements values */
      var values = $(this).serialize();

       $.ajax({
              url: "functions.php?action=register_clients",
              type: "post",
              data: values ,
              success: function (response) {
                 // you will get response from your php page (what you echo or print) 
                 console.log(response); 
                 swal(
                  '',
                  'Perdoruesi u regjistrua me sukses',
                  'success'
                )               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });

        }else {
          console.log("error");
        }
       });
  </script>