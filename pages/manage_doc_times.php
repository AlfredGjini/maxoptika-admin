 <?php if (isset($_SESSION['username']) && $_SESSION['username']=="admin" ) {
  header("Location: /home");

  } 

?>
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
              <h3 class="box-title">Zgjidhni ditet kur doktori nuk eshte i gatshem per vizita:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form id="manage_doc_times" action="functions.php?action=manage_doc_times" method="post" class="form-horizontal">
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

  <?php 

   $orariResult = DB::getInstance()->getAll('oraret')->results();
   $orari=$orariResult[0]->oraret;
   //var_dump($orariResult); 

  ?>

      var today = new Date();
      var y = today.getFullYear();
      $('#mdp-demo').multiDatesPicker({
        addDates: <?php echo $orari; ?>,
        numberOfMonths: [3,4],
        defaultDate: '1/1/'+y
      });


      var dates = $('#mdp-demo').multiDatesPicker('getDates');
      //console.log(dates);
      
      $("#manage_doc_times").submit(function(event) {
        var dates2=$('#mdp-demo').multiDatesPicker('getDates');
        dates2=JSON.stringify(dates2);
        //console.log('zx');
        //console.log(dates2);


      /* Stop form from submitting normally */
      event.preventDefault();

             $.ajax({
              url: "functions.php?action=manage_doc_times",
              type: "post",
              data: {data:dates2} ,
              success: function (response) {
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 console.log(response);
                 
                if(response=="1"){ 
                  // Response: 1 - Success
                   swal(
                    '',
                    'Oraret u perditsuan me sukses',
                    'success'
                  )
                }else if (response == "3"){
                  // Response: 2 - Empty Fields
                  swal(
                    '',
                    'Ju lutem plotesoni te gjitha fushat',
                    'warning'
                  )
                 }else if (response == "2"){
                  // Response: 2 - Empty Fields
                  swal(
                    '',
                    'Operacioni deshtoi. Ju lutem provoni perseri.',
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