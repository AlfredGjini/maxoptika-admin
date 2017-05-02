<style type="text/css">
  .progress-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 16px;
    line-height: 30px;
    color: #fff;
    text-align: center;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    -webkit-transition: width .6s ease;
    -o-transition: width .6s ease;
    transition: width .6s ease;
    font-weight: bold;
}
.progress {
  margin-top: -10px;
    height: 30px;
    margin-bottom: 40px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
}
</style>
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
            <div class="progress" style="display: none;">
              <div class="progress-bar progress-bar-striped progress-bar-danger active" role="progressbar"
              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:5%">
                5%
              </div>
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


    function remove_duplicates(a, b) {
      var count1=0;
      var count2=0;
      var arrayre=[];
     for (var i = 0, len = a.length; i < len; i++) { 
            for (var j = 0, len2 = b.length; j < len2; j++) { 
                if (a[i].KODARTIKULLI === b[j].KODARTIKULLI) {
                    //b.splice(j, 1);
                    count2++;
                    arrayre.push(b[j]);
                    // len2=b.length;
                }else{
                  count1++;
                }
            }
        }

        // console.log(a);
        // console.log(b);
        // console.log(count1);
        // console.log(count2);
        // console.log(arrayre);
        return arrayre;

    }


    function removeDuplicates(originalArray, prop) {
         var newArray = [];
         var lookupObject  = {};

         for(var i in originalArray) {
            lookupObject[originalArray[i][prop]] = originalArray[i];
         }

         for(i in lookupObject) {
             newArray.push(lookupObject[i]);
         }
          return newArray;
     }




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
    $('.progress').show();

    $.ajax({
        beforeSend: function (xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(username +":"+encrypted));
        },
        url: ip + "/artikujpost",
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({"art":[{"MARRE":"1990-01-01","NRCHUNK":0,"NRSEL":0,"PERDORUES":"dea"}]}),
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
          var newArr1=[];
          newArr.forEach( function (arrayItem)
            {
                  // Insert into the new array only those items that have PERPESHORE==true
                  // if(arrayItem.PERPESHORE==true){
                  //   newArr1.push(arrayItem);
                  // }
                  if(arrayItem.KODIFIKIMARTIKULLI2=="Ray Ban"){
                    newArr1.push(arrayItem);
                  }
            });
            newArr1 = removeDuplicates(newArr1, "KODARTIKULLI");
            console.log(newArr1);
            
            $('.progress-bar').css("width", "33%");
            $('.progress-bar').text("33%");

            $.ajax({
                  beforeSend: function (xhr) {
                      xhr.setRequestHeader("Authorization", "Basic " + btoa(username +":"+encrypted));
                  },
                  url: ip + "/cmimipost",
                  type: 'POST',
                  contentType: 'application/json',
                  data: JSON.stringify({"cmime":[{"MARRE":"1990-01-01","NRCHUNK":0,"NRSEL":0,"PERDORUES":"dea"}]}),
                  dataType: 'json',
                  headers: {
                  'ndermarrjaserver': 'MAXOPTIKA'
                  },
                  success: function (res) {

                    var newArrCmime = res.entiteteTeReja.cmimeReja;
                    //var newArr4 = [];

                    var newArrCmime=remove_duplicates(newArr1,newArrCmime);
                    var newArr2 = removeDuplicates(newArrCmime, "KODARTIKULLI");
                    console.log(newArr2);
                    //newArr2=JSON.stringify(newArr2);
                    $('.progress-bar').css("width", "66%");
                    $('.progress-bar').text("66%");

                    


                    $.ajax({
                        beforeSend: function (xhr) {
                            xhr.setRequestHeader("Authorization", "Basic " + btoa(username +":"+encrypted));
                        },
                        url: ip + "/entitetepost",
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({"artikujGjendje":[{"MARRE":"1/1/1900","NRSEL":0,"NRCHUNK":0,"PERDORUES":"","MAGKODI":"","KODARTIKULLI":"","ARTBARKOD":"","DETAJIM1":"","DETAJIM2":""}]}),
                        dataType: 'json',
                        headers: {
                        'ndermarrjaserver': 'MAXOPTIKA'
                        },
                        success: function (res) {
                          //alert('Shit');
                          console.log(res);
                          var newArrMagGjendje = res.entiteteTeReja.artikujGjendjeRi;
                          var newArrMagGjendje=remove_duplicates(newArr1,newArrMagGjendje);
                          var newArr3 = removeDuplicates(newArrMagGjendje, "KODARTIKULLI");
                          console.log(newArr3);
                          //newArr3=JSON.stringify(newArr3);
                          $('.progress-bar').css("width", "100%");
                          $('.progress-bar').text("100%");
                          $('.progress').hide();
                          newArr1=JSON.stringify(newArr1);
                          newArr2=JSON.stringify(newArr2);
                          newArr3=JSON.stringify(newArr3);

                          $.ajax({
                              url: "worker.php",
                              type: "post",
                              data: {dhena1:newArr1 ,dhena2:newArr2, dhena3:newArr3 },
                              success: function (response) {

                                 // you will get response from your php page (what you echo or print) 
                                 //console.log(typeof(response));
                                 console.log(response);              

                              },
                              error: function(jqXHR, textStatus, errorThrown) {
                                 console.log(textStatus, errorThrown);
                              }


                          });



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