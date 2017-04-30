<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Paneli I Administratorit
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
<!--         <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 class="numberOfProducts">150</h3>

              <p>Produkte Te Regjistruara</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="?page=manage_products" class="small-box-footer">Menaxho Produktet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div> -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 class="numberOfReservations"></h3>

              <p>Prenotime Nga Klientet</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=manage_reservations" class="small-box-footer">Menaxho Prenotimet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 class="numberOfClients"></h3>

              <p>Kliente Te Regjistruar</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?page=manage_clients" class="small-box-footer">Menaxho Klientet <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 class="numberOfClinicCards"></h3>

              <p>Kartela Klinike</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="?page=manage_clinic_card" class="small-box-footer">Menaxho Kartelat Klinike <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
                <!-- ./col -->
        <?php if (isset($_SESSION['username']) && $_SESSION['username']=="superadmin" ) { ?>
        <div class="col-lg-3 col-xs-6 perditeso" style="cursor:pointer;">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h2 style="font-weight: bold;">Perditeso te dhenat</h2>

              <!-- <p>Unique Visitors</p> -->
            </div>
            <div class="icon" style="font-size: 40px;top: 25px;">
              <i class="fa fa-database"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <?php } ?>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
    </section>
    <!-- /.content -->
  </div>


  <script type="text/javascript">

    var ip = 'http://46.252.37.186:3040';
    var username = "dea";
    var password  = "IMB.DEA";
    var encPass = "dIMB.DEA";
    
    // Make the needed encryption

    encPass  = CryptoJS.enc.Utf16LE.parse(encPass);
    //console.log(encPass);

    var encrypted = CryptoJS.SHA256(encPass).toString(CryptoJS.enc.Hex);
    //console.log(encrypted);

  // Get dashboard data
  $.ajax({
    url: "functions.php?action=getDashboardData",
    type: "post",
    success: function (response) {
      response = JSON.parse(response);
      //console.log(response);
      updateDashboard(response);

      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
  });



    
  jQuery('.perditeso').click( function(){
    console.log("thirreads");

    $.ajax({
        beforeSend: function (xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(username +":"+encrypted));
        },
        url: ip + "/artikujpost",
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({"art":[{"MARRE":"1990-01-01","NRCHUNK":1,"NRSEL":200,"PERDORUES":"dea"}]}),
        dataType: 'json',
        headers: {
        'ndermarrjaserver': 'MAXOPTIKA'
        },
        success: function (res) {
          //alert('Shit');
          //console.log(res);
          var newArr = res.entiteteTeReja.artRi;
          //console.log(newArr);
          //newArr=JSON.stringify(newArr);
          //console.log(newArr);

            /*console.log("Connected Successfully");
            console.log(res.entiteteTeReja.artRi.length);
            console.log(typeof res.entiteteTeReja.artRi);
            console.log(res.entiteteTeReja.artRi);
            var newArr = res.entiteteTeReja.artRi.splice(0, 46546);
            console.log("NEw Arr ===================");
            console.log(newArr.length);
            console.log(newArr);
            console.log('old arrrrrrrrrrrrrrrr');
            console.log(res.entiteteTeReja.artRi.length);
            console.log(res.entiteteTeReja.artRi);*/
            //ajaxCall(res,"cron_db_update","update_db_on_cron");


            //console.log(res);
            console.log(newArr);
            var newarr2=[];
            newArr.forEach( function (arrayItem)
              {
                  // Insert into the new array only those items that have PERPESHORE==true
                  if(arrayItem.AKTIV==true){
                    newarr2.push(arrayItem);
                  }
                  // if(arrayItem.KODIFIKIMARTIKULLI2=="Ray Ban"){
                  //   newarr2.push(arrayItem);
                  // }
              });
              console.log(newarr2);

              $.ajax({
                  beforeSend: function (xhr) {
                      xhr.setRequestHeader("Authorization", "Basic " + btoa(username +":"+encrypted));
                  },
                  url: ip + "/cmimipost",
                  type: 'POST',
                  contentType: 'application/json',
                  data: JSON.stringify({"cmime":[{"MARRE":"1990-01-01","NRCHUNK":1,"NRSEL":200,"PERDORUES":"dea"}]}),
                  dataType: 'json',
                  headers: {
                  'ndermarrjaserver': 'MAXOPTIKA'
                  },
                  success: function (res) {
                    //alert('Shit');
                    //console.log(res);
                    //var newArr3 = res.entiteteTeReja.artRi;
                    //console.log(newArr3);
                    console.log(res);


                    $.ajax({
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader("Authorization", "Basic " + btoa(username +":"+encrypted));
                        },
                        url: ip + "/artikujGjendje",
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({"artikujGjendje":[{"MARRE":"1990-01-01","NRCHUNK":0,"NRSEL":0,"PERDORUES":"dea"}]}),
                        dataType: 'json',
                        headers: {
                        'ndermarrjaserver': 'MAXOPTIKA'
                        },
                        success: function (res) {
                          //alert('Shit');
                          console.log(res);
                          //var newArr = res.entiteteTeReja.artRi;


                        },
                        error: function (res) {
                            console.error('Something went wrong!');
                            console.log(res);
                        }   
                    });





                  },
                  error: function (res) {
                      console.error('Something went wrong!');
                      console.log(res);
                  }   
              });







       // $.ajax({
       //        url: "worker.php",
       //        type: "post",
       //        data: {dhena:newArr },
       //        success: function (response) {

       //           // you will get response from your php page (what you echo or print) 
       //           //console.log(typeof(response));
       //           console.log(response);              

       //        },
       //        error: function(jqXHR, textStatus, errorThrown) {
       //           console.log(textStatus, errorThrown);
       //        }


       //    });





        },
        error: function (res) {
            console.error('Something went wrong!');
            console.log(res);
        }   
    });


  })
  </script>