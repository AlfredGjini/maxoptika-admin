 <?php if (isset($_SESSION['username']) && $_SESSION['username']=="admin" ) {
  //header("Location: https://www.google.com/");
  echo "yes inside";
  ?>

  <script type="text/javascript">
    window.location.replace('http://sidanmor.com');
    console.log('yo');
  </script>

  <?php

  echo "yes inside 2";

  } 

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cmimi Filter
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Cmimi Filter</a></li>
        <li class="active">Vendos cmimet e filtrave</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Vendos cmimet e filtrave</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="create_clinic_card" action="functions.php?action=create_clinic_card" method="post" class="form-horizontal">
              <div class="box-body">
          		<div class="form-group">
                  <div class="col-sm-12">
                    <center>
	                    <h4></h4>
	                    	<?php
	                    		
								$dataResult = DB::getInstance()->getAll('cmimifilter')->results();

								foreach ($dataResult as $tableRows) {
									if ($tableRows->id==1) {
										$diellMin=$tableRows->cmimimin;
										$diellMax=$tableRows->cmimimax;
									}else if ($tableRows->id==2) {
										$optikeMin=$tableRows->cmimimin;
										$optikeMax=$tableRows->cmimimax;
									}else if ($tableRows->id==3) {
										$lenteMin=$tableRows->cmimimin;
										$lenteMax=$tableRows->cmimimax;
									}
									
								}
	                    	?>
	                    </select>
                    </center>
                  </div>
                </div>
				<!-- hidden -->
				<div class='clinic-card-container'>
					
					<div class="row">
						<div class="col-sm-4">
							<div class="col-sm-12">
								<h4>Syze Dielli</h4>
							</div>
						
			                <div class="form-group">
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Min</div>
			                    <div class="col-sm-3"><input type='text' name='diellMin' value="<?php echo $diellMin; ?>" /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Max</div>
			                    <div class="col-sm-3"><input type='text' name='diellMax' value="<?php echo $diellMax; ?>" /></div>

			                  </div>
			                </div>
		                </div>

		                <div class="col-sm-4">
							<div class="col-sm-12">
								<h4>Syze Optike</h4>
							</div>
						
			                <div class="form-group">
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Min</div>
			                    <div class="col-sm-3"><input type='text' name='optikeMin' value="<?php echo $optikeMin; ?>" /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Max</div>
			                    <div class="col-sm-3"><input type='text' name='optikeMax' value="<?php echo $optikeMax; ?>" /></div>

			                  </div>
			                </div>
		                </div>

		                <div class="col-sm-4">
							<div class="col-sm-12">
								<h4>Lente</h4>
							</div>
						
			                <div class="form-group">
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Min</div>
			                    <div class="col-sm-3"><input type='text' name='lenteMin' value="<?php echo $lenteMin; ?>"/></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Max</div>
			                    <div class="col-sm-3"><input type='text' name='lenteMax' value="<?php echo $lenteMax; ?>" /></div>

			                  </div>
			                </div>
		                </div>

	              	</div>

              		<div class="box-footer" >
	                	<button type="submit" class="btn btn-info pull-right">Vendos</button>
	              </div>
				</div>
              <!-- /.box-body -->
              
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




    $("#create_clinic_card").submit(function(event) {


      /* Stop form from submitting normally */
      event.preventDefault();
      var values = $(this).serialize();

       $.ajax({
              url: "functions.php?action=manage_cmimi_filter",
              type: "post",
              data: values ,
              success: function (response) {
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 //console.log(response);
                 
                if(response=="1"){ 
                  // Response: 1 - Success
                   swal(
                    '',
                    'Cmimet u perditesuan me sukses',
                    'success'
                  )
                }else if (response == "2"){
                  // Response: 2 - Empty Fields
                  swal(
                    '',
                    'Ju lutem plotesoni te gjitha fushat',
                    'warning'
                  )
                 }               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });
       });


  </script>

    <?php
  if (isset($_GET['id'])) { ?>
    <script type="text/javascript">
    	$('.clinic-card-container').show();
    	$("#clientsSelect").val(<?php echo $_GET['id']; ?>);


    </script>

  <?php
  	//echo "yes it's set";
  }
  ?>