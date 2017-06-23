<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<div class="content-wrapper" ng-app="myApp" ng-controller="myCtrl">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kartelat Klinike
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kartela Klinike</a></li>
        <li class="active">Menaxh Kartelen Klinike</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Menaxh Kartelen Klinike</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            
              <div class="form-group">
                  <div class="col-sm-12">
                  <div><img class="gifloader pull-left" style="display: none;padding-top: 30px;width: 30px;" src="assets/img/loader.gif"></div>
                    <center>
                      <h4>Zgjidh Klientin :</h4>
                        <?php
                          
                $dataResult = DB::getInstance()->getAll('clients')->results();
                $res = '';
                $dataForDT = ["data"=>[]];
                $i = 0;
                echo '<select ng-change="updateKartele()" ng-model="selectId" name="clients" id="clientsSelect">';
                echo "<option value='bosh'>....</option>";
                foreach ($dataResult as $tableRows) {
                  echo '<option value="' . $tableRows->id . '">'. $tableRows->emer.' '.$tableRows->mbiemer.' ( '.$tableRows->email.' )</option>';
                  
                }
                        ?>
                      </select>
                    </center>
                  </div>
                </div>
    <form id="create_clinic_card" action="functions.php?action=create_clinic_card" method="post" class="form-horizontal" ng-show="erdhiKartela" ng-repeat="info in kartela">
      <div class="box-body" >

      <div >
        {{info.id}}
      </div>
        <!-- hidden -->
        <div class='clinic-card-container' >
          <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                      <center>
                        <h4>Data e vizites :</h4>
                        <div class="form-group">
                          <div class='input-group date' id='datetimepicker1'>
                            <input id="datazgjedhur" name="date" type='text' class="form-control" ng-model="info.data_vizites" />
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
                          <div class="col-sm-3"><input type='text' name='sdlsph' ng-model="info.djathte_larg_sph" /></div>
                          <div class="col-sm-3"><input type='text' name='sdlcyl' ng-model="info.djathte_larg_cyl" /></div>
                          <div class="col-sm-3"><input type='text' name='sdlaxe' ng-model="info.djathte_larg_axe"/></div>
                          {{name}}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">Afer</div>
                          <div class="col-sm-3"><input type='text' name='sdasph' ng-model="info.djathte_afer_sph"/></div>
                          <div class="col-sm-3"><input type='text' name='sdacyl' ng-model="info.djathte_afer_sph"/></div>
                          <div class="col-sm-3"><input type='text' name='sdaaxe' ng-model="info.djathte_afer_sph"/></div>
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
                          <div class="col-sm-3"><input type='text' name='smlsph' ng-model="info.majte_larg_sph"/></div>
                          <div class="col-sm-3"><input type='text' name='smlcyl' ng-model="info.majte_larg_cyl"/></div>
                          <div class="col-sm-3"><input type='text' name='smlaxe' ng-model="info.majte_larg_axe"/></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">Afer</div>
                          <div class="col-sm-3"><input type='text' name='smasph' ng-model="info.majte_afer_sph"/></div>
                          <div class="col-sm-3"><input type='text' name='smacyl' ng-model="info.majte_afer_cyl"/></div>
                          <div class="col-sm-3"><input type='text' name='smaaxe' ng-model="info.majte_afer_axe"/></div>
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
                          <div class="col-sm-9"><input type='text' name='dpl' style="width:100%" ng-model="info.distanca_pupilare_larg"/></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="col-sm-3">Afer</div>
                          <div class="col-sm-9"><input type='text' name='dpa' style="width:100%" ng-model="info.distanca_pupilare_afer" /></div>
                        </div>
                      </div>
            </div>

            <div class="col-sm-6">
              <div class='col-sm-12'>
                <h4>Shenime</h4>
              </div>
              
              <div class="col-sm-12">
                <textarea rows="3" style="width: 100%;" name="shenime" ng-model="info.shenime" ></textarea>
              </div>
                      
            </div>
        
                  </div>
                  <div class="box-footer" >
                    <button type="submit" class="btn btn-info pull-right">Update</button>
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
  <div id="myselector"></div>





  <script type="text/javascript">
    var app = angular.module('myApp', []);
      app.controller('myCtrl', function($scope, $http, $timeout) {

        $scope.selectId=0;
        $scope.updateKartele = function(){
          console.log($scope.selectId);

            jQuery.ajax({
              url: "functions.php?action=manage_clinic_card",
              type: "post",
              data: {id: $scope.selectId} ,
              success: function (response) {
                jQuery('.gifloader').hide();
                jQuery('.clinic-card-container').show(); 
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 //console.log(response);
                 response = JSON.parse(response);
                 console.log(response);
                 $scope.kartela=response;
                 $scope.erdhiKartela=true;
                 console.log($scope.kartela);
                 $scope.selectId=40;

                     var today = moment();
    
                    //console.log(today);

                    jQuery('#datetimepicker1').daterangepicker({
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
                        console.log("data u thirr");
                        //console.log(start);
                        //alert("You are " + years + " years old.");
                        jQuery('#datazgjedhur').val(start);
                    });
                    today=moment(today).format('Y-M-D'); 
                    jQuery('#datazgjedhur').val(today);






                 

                 $timeout(function() {
                  angular.element('#myselector').triggerHandler('click');
                  console.log('u klikua');
                  $scope.selectId=40;
                });
                 // setFieldValsClinicCard(response);
                 

                 if(response.exist==3){
                  swal({
                      title: 'Deshironi ta krijoni tani',
                      text: "Kartela nuk ekziston per kete klient",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Po!'
                    }).then(function () {
                      window.location.href = "home.php?page=create_clinic_card&id="+response.id;
                    })
                 }else{
                 setFieldValsClinicCard(response);
                 }
                 
                //$('#register_clients').trigger("reset");               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });



        }



        $scope.erdhiKartela=false;
          $scope.firstName = "John";
          $scope.lastName = "Doe";

  // jQuery('#clientsSelect').on('change', function() {
  //   if(this.value=="bosh"){
  //     //console.log("1");
  //     jQuery('.clinic-card-container').hide();
  //   }else{
  //     console.log(this.value);

  //        jQuery('.gifloader').show();







  //   }
  // })






      });
  </script>

  <script type="text/javascript">
    // var today = moment();
    
    // //console.log(today);

    // jQuery('#datetimepicker1').daterangepicker({
    //     "singleDatePicker": true,
    //     "showDropdowns": true,
    //     "opens": "left",
    //   "minDate": today,
    //   "timePicker": false,
    //   "locale": {
    //         "format": 'MM/DD/YYYY h:mm A'
    //     }
    // }, 
    // function(start, end, label) {
    //     var years = moment().diff(start, 'years');
    //     start=moment(start).format('Y-M-D'); 
    //     console.log("data u thirr");
    //     //console.log(start);
    //     //alert("You are " + years + " years old.");
    //     jQuery('#datazgjedhur').val(start);
    // });
    // today=moment(today).format('Y-M-D'); 
    // jQuery('#datazgjedhur').val(today);







    jQuery("#create_clinic_card").submit(function(event) {


      /* Stop form from submitting normally */
      event.preventDefault();
      var values = jQuery(this).serialize();

       $.ajax({
              url: "functions.php?action=update_clinic_card",
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
                    'Kartela u perditesua me sukses',
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
                //$('#register_clients').trigger("reset");               

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
    jQuery('.gifloader').show();

           jQuery.ajax({
              url: "functions.php?action=manage_clinic_card",
              type: "post",
              data: {id: <?php echo $_GET['id']; ?>} ,
              success: function (response) {
                jQuery('.gifloader').hide();
                jQuery('.clinic-card-container').show(); 
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 //console.log(response);
                 response = JSON.parse(response);
                 console.log(response);
                 if(response.exist==3){
                  swal({
            title: 'Deshironi ta krijoni tani',
            text: "Kartela nuk ekziston per kete klient",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Po!'
          }).then(function () {
            window.location.href = "home.php?page=create_clinic_card&id="+response.id;
          })
                 }else{
                 setFieldValsClinicCard(response);
                 }
                 
                //$('#register_clients').trigger("reset");               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });

    </script>

  <?php
    //echo "yes it's set";
  }
  ?>