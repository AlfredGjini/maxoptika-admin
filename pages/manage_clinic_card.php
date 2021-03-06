<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<div class="content-wrapper" ng-app="myApp" ng-controller="myCtrl">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kartelat Klinike
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Kartela Klinike</a></li>
        <li class="active">Menaxho Kartelen Klinike</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Menaxho Kartelen Klinike</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            
              <div class="form-group" style="margin-bottom: 95px;">
                  <div class="col-sm-12">
                  <div><img ng-show="gifloader" class="gifloader pull-left" style="padding-top: 30px;width: 30px;" src="assets/img/loader.gif"></div>
                    <center>
                      <h4>Zgjidh Klientin :</h4>
                        <?php
                          
                $dataResult = DB::getInstance()->getAll('clients')->results();
                $res = '';
                $dataForDT = ["data"=>[]];
                $i = 0;
                if (isset($_GET['id'])) { 
                echo '<select ng-change="updateKartele()" ng-model="selectId" ng-init="selectId=\''.$_GET['id'].'\'" name="clients" id="clientsSelect">';
                }else{
                  echo '<select ng-change="updateKartele()" ng-model="selectId" ng-init="selectId=\'0\'" name="clients" id="clientsSelect">';
                }
                echo "<option value='0'>....</option>";
                foreach ($dataResult as $tableRows) {
                  echo '<option value="' . $tableRows->id . '">'. $tableRows->emer.' '.$tableRows->mbiemer.' ( '.$tableRows->email.' )</option>';
                  
                }
                        ?>
                      </select>
                    </center>
                  </div>
                </div>
    <div class="container-fluid" ng-show="erdhiKartela" ng-repeat="info in kartela">
      <button  type="button" class="btn btn-info btn-block btn-lg" style="margin-bottom: 15px;" data-toggle="collapse" data-target="#formaNr{{info.id}}">Vizita numer: {{$index+1}} Date: {{info.data_vizites}}</button>
    <div id="formaNr{{info.id}}" aria-expanded="false" class="collapse" style="height: 0px;">
    <form id="create_clinic_card"  method="post" class="form-horizontal dergo{{$index++1}}" >
      <input type="hidden" name="id" value="{{info.id}}">
      <input type="hidden" name="id_client" value="{{info.id_client}}">
      <input type="hidden" name="user_id" value="{{info.user_id}}">
      <div class="box-body" >

<!--       <div >
        {{info.id}}
      </div> -->
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
                    <button ng-click="updateVizite($index++1)" id="dergo{{$index++1}}" class="btn btn-info pull-right ">Update</button>
                </div>
        </div>
              <!-- /.box-body -->
              
              <!-- /.box-footer -->
            </form>
            </div>
            </div>
            <!-- Mbyllet ng-repeat -->
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




  </script>
  





  <script type="text/javascript">
    var app = angular.module('myApp', []);
      app.controller('myCtrl', function($scope, $http, $timeout) {

        $scope.updateVizite = function(event){
          var klasa=".dergo"+event;

          var values = jQuery(klasa).serialize();
          console.log(values);
            
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
                    'Vizita u perditesua me sukses',
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
                    'Perditesimi i vizites pati nje problem',
                    'warning'
                  )
                 }
                //$('#register_clients').trigger("reset");               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });

        }







        $scope.gifloader=false;


          // This will fire only if the id is set in the url so every time the user comes from the clients page
          <?php
          if (isset($_GET['id'])) { ?>

              console.log("para gif u thirr");
          $scope.gifloader=true;
          console.log($scope.selectId);

            jQuery.ajax({
              url: "functions.php?action=manage_clinic_card",
              type: "post",
              data: {id: <?php echo $_GET['id']; ?>} ,
              success: function (response) {
                $scope.gifloader=false;
                // jQuery('.gifloader').hide();
                // jQuery('.clinic-card-container').show(); 
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 console.log(response);
                 response = JSON.parse(response);
                 
                 // setFieldValsClinicCard(response);
                 

                 if(response.exist==3){
                    $scope.kartela=[];
                    $scope.erdhiKartela=false;
                    console.log('erdhiKartela');
                    console.log($scope.erdhiKartela);
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

                    $timeout(function() {
                        angular.element('#myselector').triggerHandler('click');
                        console.log('u klikua');
                        //$scope.selectId=40;
                        $scope.kartela=[];
                        $scope.erdhiKartela=false;
                        
                      });



                    
                 }else{
                       console.log(response);
                       $scope.kartela=response;
                       $scope.erdhiKartela=true;
                       console.log($scope.kartela);

                       $timeout(function() {
                        angular.element('#myselector').triggerHandler('click');
                        console.log('u klikua');
                        //$scope.selectId=40;
                        jQuery("#clientsSelect").val($scope.selectId);
                        console.log($scope.selectId);
                        
                      });
                 }
                 
                //$('#register_clients').trigger("reset");               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });



          <?php  
          }
          ?>


        $scope.updateKartele = function(){
          console.log("para gif u thirr");
          $scope.gifloader=true;
          console.log($scope.selectId);

            jQuery.ajax({
              url: "functions.php?action=manage_clinic_card",
              type: "post",
              data: {id: $scope.selectId} ,
              success: function (response) {
                $scope.gifloader=false;
                // jQuery('.gifloader').hide();
                // jQuery('.clinic-card-container').show(); 
                 // you will get response from your php page (what you echo or print) 
                 //console.log(typeof(response));
                 console.log(response);
                 response = JSON.parse(response);
                 
                 // setFieldValsClinicCard(response);
                 

                 if(response.exist==3){
                    $scope.kartela=[];
                    $scope.erdhiKartela=false;
                    console.log('erdhiKartela');
                    console.log($scope.erdhiKartela);
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

                    $timeout(function() {
                        angular.element('#myselector').triggerHandler('click');
                        console.log('u klikua');
                        //$scope.selectId=40;
                        $scope.kartela=[];
                        $scope.erdhiKartela=false;
                        
                      });



                    
                 }else{
                       console.log(response);
                       $scope.kartela=response;

                       $scope.kartela.sort(function(a, b){
                          var keyA = new Date(a.data_vizites),
                              keyB = new Date(b.data_vizites);
                              console.log('brenda dates');
                          // Compare the 2 dates
                          if(keyA < keyB) return -1;
                          if(keyA > keyB) return 1;
                          return 0;
                      });


                       $scope.erdhiKartela=true;
                       console.log($scope.kartela);

                       $timeout(function() {
                        angular.element('#myselector').triggerHandler('click');
                        console.log('u klikua');
                        //$scope.selectId=40;
                        jQuery("#clientsSelect").val($scope.selectId);
                        console.log($scope.selectId);
                        
                      });
                 }
                 
                //$('#register_clients').trigger("reset");               

              },
              error: function(jqXHR, textStatus, errorThrown) {
                 console.log(textStatus, errorThrown);
              }


          });



        }



        $scope.erdhiKartela=false;

      });


  </script>

  