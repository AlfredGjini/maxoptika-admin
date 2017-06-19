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
	                    <h4>Zgjidh Klientin :</h4>
	                    	<?php
	                    		
								$dataResult = DB::getInstance()->getAll('clients')->results();
								$res = '';
								$dataForDT = ["data"=>[]];
								$i = 0;
								echo '<select name="clients" id="clientsSelect">';
								echo "<option value='bosh'>....</option>";
								foreach ($dataResult as $tableRows) {
									echo '<option value="' . $tableRows->id . '">'. $tableRows->emer.' '.$tableRows->mbiemer.' ( '.$tableRows->email.' )</option>';
									
								}
	                    	?>
	                    </select>
                    </center>
                  </div>
                </div>
				<!-- hidden -->
				<div class='clinic-card-container'>
					
					<div class="row">
						<div class="col-sm-6">
							<div class="col-sm-12">
								<h4>Syze Dielli</h4>
							</div>
						
			                <div class="form-group">
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Min</div>
			                    <div class="col-sm-3"><input type='text' name='diellMin' /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Max</div>
			                    <div class="col-sm-3"><input type='text' name='diellMax' /></div>

			                  </div>
			                </div>
		                </div>

		                <div class="col-sm-6">
							<div class="col-sm-12">
								<h4>Syze Optike</h4>
							</div>
						
			                <div class="form-group">
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Min</div>
			                    <div class="col-sm-3"><input type='text' name='optikeMin' /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Max</div>
			                    <div class="col-sm-3"><input type='text' name='optikeMax' /></div>

			                  </div>
			                </div>
		                </div>

		                <div class="col-sm-6">
							<div class="col-sm-12">
								<h4>Lente</h4>
							</div>
						
			                <div class="form-group">
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Min</div>
			                    <div class="col-sm-3"><input type='text' name='lenteMin' /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Max</div>
			                    <div class="col-sm-3"><input type='text' name='lenteMax' /></div>

			                  </div>
			                </div>
		                </div>

	              	</div>

              		<div class="box-footer" >
	                	<button type="submit" class="btn btn-info pull-right">Register</button>
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
    var today = moment();
    
    //console.log(today);

    $('#datetimepicker1').daterangepicker({
        "singleDatePicker": true,
        "showDropdowns": true,
        "opens": "left",
	    "minDate": today,
	    "timePicker": false,
	    "locale": {
            "format": 'MM/DD/YYYY h:mm A'
        }
    }, 
    function(start, end, label) {
        var years = moment().diff(start, 'years');
        start=moment(start).format('Y-M-D'); 
        //console.log(start);
        //alert("You are " + years + " years old.");
        $('#datazgjedhur').val(start);
    });
    today=moment(today).format('Y-M-D'); 
    $('#datazgjedhur').val(today);


	$('[name=iCheck]').iCheck({
	    checkboxClass: 'icheckbox_flat',
	    radioClass: 'iradio_flat'
	  });

	$('#clientsSelect').on('change', function() {
		//console.log("called");
	  if(this.value=="bosh"){
	  	//console.log("1");
	  	$('.clinic-card-container').hide();
	  }else{
	  	//console.log("2");
	  	//console.log(this.value);
	  	$('.clinic-card-container').show();
	  }
	})



    $("#create_clinic_card").submit(function(event) {


      /* Stop form from submitting normally */
      event.preventDefault();
      var values = $(this).serialize();

       $.ajax({
              url: "functions.php?action=create_clinic_card",
              type: "post",
              data: values ,
              success: function (response) {
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 console.log(response);
                 
                if(response=="1"){ 
                  // Response: 1 - Success
                   swal(
                    '',
                    'Kartela u krijua me sukses',
                    'success'
                  )
                }else if (response == "2"){
                  // Response: 2 - Empty Fields
                  swal(
                    '',
                    'Ju lutem plotesoni te gjitha fushat',
                    'warning'
                  )
                 }else if (response == "3"){
                  // Response: 2 - Empty Fields
                  swal(
                    '',
                    'Kartela per kete klient ekziston njehere',
                    'warning'
                  )
                 }
                $('#register_clients').trigger("reset");               

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