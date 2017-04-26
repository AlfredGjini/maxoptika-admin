<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kartelat Klinike
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kartela Klinike</a></li>
        <li class="active">Krijo Kartelen Klinike</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Krijo Kartelen Klinike</h3>
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
				<div class='clinic-card-container' style="display: none;">
					<div class="form-group">
	                  <div class="col-sm-2"></div>
	                  <div class="col-sm-8">
	                    <center>
		                    <h4>Data e vizites :</h4>
	                    	<div class="form-group">
			                    <div class='input-group date' id='datetimepicker1'>
				                    <input id="datazgjedhur" name="date" type='text' class="form-control" value="" />
				                    <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
				                    </span>
				                </div>
			                </div>
	                    </center>
	                  </div>
	                  <div class="col-sm-2"></div>
	                </div>
					
					<div class="row">
						<div class="col-sm-6">
							<div class="col-sm-12">
								<h4>Syri i djathte</h4>
							</div>
						
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3"></div>
			                    <div class="col-sm-3">Sph.</div>
			                    <div class="col-sm-3">Cyl.</div>
			                    <div class="col-sm-3">Axe.</div>
			                  </div>
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Larg</div>
			                    <div class="col-sm-3"><input type='text' name='sdlsph' /></div>
			                    <div class="col-sm-3"><input type='text' name='sdlcyl' /></div>
			                    <div class="col-sm-3"><input type='text' name='sdlaxe' /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Afer</div>
			                    <div class="col-sm-3"><input type='text' name='sdasph' /></div>
			                    <div class="col-sm-3"><input type='text' name='sdacyl' /></div>
			                    <div class="col-sm-3"><input type='text' name='sdaaxe' /></div>
			                  </div>
			                </div>
		                </div>

		                <div class="col-sm-6">
							<div class="col-sm-12">
								<h4>Syri i majte</h4>
							</div>
						
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3"></div>
			                    <div class="col-sm-3">Sph.</div>
			                    <div class="col-sm-3">Cyl.</div>
			                    <div class="col-sm-3">Axe.</div>
			                  </div>
							</div>
			                <div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Larg</div>
			                    <div class="col-sm-3"><input type='text' name='smlsph' /></div>
			                    <div class="col-sm-3"><input type='text' name='smlcyl' /></div>
			                    <div class="col-sm-3"><input type='text' name='smlaxe' /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Afer</div>
			                    <div class="col-sm-3"><input type='text' name='smasph' /></div>
			                    <div class="col-sm-3"><input type='text' name='smacyl' /></div>
			                    <div class="col-sm-3"><input type='text' name='smaaxe' /></div>
			                  </div>
			                </div>
		                </div>
	              	</div>

					<div class="row">
						<div class="col-sm-6">
							<div class='col-sm-12'>
								<h4>Distanca Pupilare</h4>
							</div>
							<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Larg</div>
			                    <div class="col-sm-9"><input type='text' name='dpl' style="width:100%" /></div>
			                  </div>
			              	</div>
			              	<div class="form-group">
			                  <div class="col-sm-12">
			                    <div class="col-sm-3">Afer</div>
			                    <div class="col-sm-9"><input type='text' name='dpa' style="width:100%" /></div>
			                  </div>
			                </div>
						</div>

						<div class="col-sm-6">
							<div class='col-sm-12'>
								<h4>Shenime</h4>
							</div>
							
							<div class="col-sm-12">
								<textarea rows="3" style="width: 100%;" name="shenime"></textarea>
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
		console.log("called");
	  if(this.value=="bosh"){
	  	console.log("1");
	  	$('.clinic-card-container').hide();
	  }else{
	  	console.log("2");
	  	console.log(this.value);
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
                    'Perdoruesi u regjistrua me sukses',
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
                    'Ky perdorues ekziston',
                    'warning'
                  )
                 }
                //$('#register_clients').trigger("reset");               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });
       });


  </script>