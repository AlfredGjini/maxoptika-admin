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
.progressSuccess {
    font-size: 16px;
    margin-top: -10px;
    text-align: justify;
    font-weight: bold;
    color: white;
    border: 2px solid #8787a2;
    padding: 8px;
    background: orange;
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
              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:7%">
                7%
              </div>
            </div>
            <div class="progressSuccess" style="display: none;">Te dhenat u transferuan me sukses. Ju lutem prisni afersisht 1 ore per te pare produktet e perditesuara ne aplikacion.</div>
          
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

//remove_duplicates
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

  function add_remove_duplicates(a, b) {
      var count1=0;
      var count2=0;
      var arrayre=[];
     for (var i = 0, len = a.length; i < len; i++) { 
            for (var j = 0, len2 = b.length; j < len2; j++) { 
                if (a[i].KODARTIKULLI === b[j].KODARTIKULLI) {
                    //b.splice(j, 1);
                    // TODO:Convert it to integer
                    b[j].gjendje=Number(b[j].gjendje)+Number(a[i].gjendje);
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


    // Remove duplicates of it's own, ex: only keeps one unique object based on KODARTIKULL
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
     function add_removeDuplicates(originalArray, prop) {
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

  function removeDuplicatesNew2(arr) {
    //console.log("original length: "+arr.length);
    for (var i=0; i<arr.length; i++) {
        var listI = arr[i];
        loopJ: for (var j=0; j<arr.length; j++) {
            var listJ = arr[j];
            if (listI === listJ) continue; //Ignore itself
            if (JSON.stringify(listJ.KODI) !== JSON.stringify(listI.KODI)) {
                continue loopJ;
            }
            if (JSON.stringify(listJ.KODARTIKULLI) !== JSON.stringify(listI.KODARTIKULLI)) {
                continue loopJ;
            }      
            arr.splice(j--, 1);
        }
    }
    //console.log("length without duplicates: "+arr.length);
    return arr;
}





    var ip = 'http://79.106.161.194:3040';
    var username = "dea";
    var password  = "IMB.DEA";
    var encPass = "dIMB.DEA";
    
    // Make the needed encryption

    encPass  = CryptoJS.enc.Utf16LE.parse(encPass);
    //console.log(encPass);

    var encrypted = CryptoJS.SHA256(encPass).toString(CryptoJS.enc.Hex);
    //console.log('pasi eshte');
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

  var trupiEksport = new Array();
  var kokaEksport = new Array();

  var kokeNew = {
          'ID_DOKIMPORT':'99999999999999999999999999999999999999999',
          'NENKATEGORIA':'USH',
          'LLOJDOKUMENTI':'USHmag',
          'NRDOK': '999999999999999999999999999999999999999',
          // 'NDERMARRJEKOD': vlera,
          'DATEDOK': '2017-11-11',
          'KLIENTFURNITOR': 'KL83',
          'MENYREPAGESE': 'Pagese',
          'DTREGJISTRIMI': '2017-11-11', 
          'EMERKLIENTI': 'Test Klienttt',
          'KONTAKTI': '069121212',
     };

    kokaEksport.push(kokeNew);

    // Trupi eshte nje array me objetet qe do te shiten brenda
    // for (var j = 0; j < trupi.length; j++) {
    //     var trupNew = {
    //         'ID_DOKIMPORTKOKA': '99999999999999999999999999999999999999999', //Këtu duhet vendosur id e kokës së dokumentit.
    //         'LLOJVEPRIMI': 'Artikull',
    //         'KODI': 'SD13137',  //Duhet të vendoset kodi i artikullit. Fushë e detyrueshme.
    //         'NJESIA': 'cope', //Duhet të vendoset njësia matëse e artikullit. Fushë e detyrueshme.
    //         'SASIA': 1,  //Duhet të vendoset sasia e artikullit. Fushë e detyrueshme.
    //         'CMIMI': 23900,  //Nëse përdoren cmime pa TVSH për artikujt, duhet të vendoset cmimi pa tvsh. 
    //         // 'ZBRITJE': vlera,  //Nëse ka zbritje analitike duhet të vendoset përqindja e zbritjes. Fushë jo e detyrueshme.
    //         'VLEFTAPATVSH': 23900,  //Duhet të vendoset vlefta pa tvsh e artkullit. Fushë e detyrueshme.
    //         'VLEFTAMETVSH': 23900,  //Duhet të vendoset vlefta me tvsh e artkullit. Fushë e detyrueshme.
    //         'MAGAZINA ': 'qendra',  //Duhet të vendoset magazina nga po behet veprimi. Fushë e detyrueshme.
    //         'SHENIME': "test nga aplikacioni",
    //         // 'CMIMIMETVSH': vlera  //Nëse përdoren cmime me TVSH duhet të vendoset cmimi i artikullit te kjo fushë, fushë jo e detyrueshme.
  
    //                    };
    //     trupiEksport.push(trupNew);
    // }

            var trupNew = {
            'ID_DOKIMPORTKOKA': '99999999999999999999999999999999999999999', //Këtu duhet vendosur id e kokës së dokumentit.
            'LLOJVEPRIMI': 'Artikull',
            'KODI': 'SD13137',  //Duhet të vendoset kodi i artikullit. Fushë e detyrueshme.
            'NJESIA': 'cope', //Duhet të vendoset njësia matëse e artikullit. Fushë e detyrueshme.
            'SASIA': 1,  //Duhet të vendoset sasia e artikullit. Fushë e detyrueshme.
            'CMIMI': 23900,  //Nëse përdoren cmime pa TVSH për artikujt, duhet të vendoset cmimi pa tvsh. 
            //'ZBRITJE': vlera,  //Nëse ka zbritje analitike duhet të vendoset përqindja e zbritjes. Fushë jo e detyrueshme.
            'VLEFTAPATVSH': 23900,  //Duhet të vendoset vlefta pa tvsh e artkullit. Fushë e detyrueshme.
            'VLEFTAMETVSH': 23900,  //Duhet të vendoset vlefta me tvsh e artkullit. Fushë e detyrueshme.
            'MAGAZINA ': 'qendra',  //Duhet të vendoset magazina nga po behet veprimi. Fushë e detyrueshme.
            'SHENIME': "test nga aplikacioni",
            // 'CMIMIMETVSH': vlera  //Nëse përdoren cmime me TVSH duhet të vendoset cmimi i artikullit te kjo fushë, fushë jo e detyrueshme.
  
                       };
        trupiEksport.push(trupNew);


// }

var dokPerTeDerguar = {kokaEksport: kokaEksport, trupiEksport: trupiEksport};

var dataToSend = JSON.stringify({
    listEksportuar: dokPerTeDerguar,
    formatPerImport: 'ImportShitjeDEA',
    formatObjekti: "Shitje"
});

    jQuery('.perditeso2').click( function(){
      console.log("test success");



        $.ajax({
           beforeSend: function (xhr) {
            xhr.setRequestHeader("Authorization", "Basic " + btoa(username +":"+encrypted));
            },
            url: ip + "/importoEksportin",
            type: 'POST',
            contentType: 'application/json',
            data: dataToSend,
            dataType: 'json',
            headers: {
            'ndermarrjaserver': 'MAXOPTIKA',
            'eksportprefixid': 'Shitje'
           },
           success: function (res) {

            console.log('rezultati erdhi');
            console.log(res);



           },
            error: function (res) {
            console.error('Something went wrong!');
            console.log(res);
                            }   
        });

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
          console.log(res);
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
                  if(arrayItem.PERPESHORE==true){
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
                    console.log(res);

                    var newArrCmime = res.entiteteTeReja.cmimeReja;
                    //var newArr4 = [];

                    var newArrCmime=remove_duplicates(newArr1,newArrCmime);
                    // var newArr2 = removeDuplicates(newArrCmime, "KODARTIKULLI");
                    var newArrayC = [];



                    // Loop through all objects in the array
                    for (var i = 0; i < newArrCmime.length; i++) {

                      // Loop through all of the objects beyond i
                      // Don't increment automatically; we will do this later
                      for (var j = i+1; j < newArrCmime.length;j++ ) {

                        // Check if our x values are a match
                        if (newArrCmime[i].KODARTIKULLI == newArrCmime[j].KODARTIKULLI && newArrCmime[i].MONEDHAKOD=="LEK") {
                          newArrCmime[i].CMIMI_EUR=newArrCmime[j].CMIMI;
                          newArrCmime[i].MONEDHAKOD_EUR=newArrCmime[j].MONEDHAKOD;
                          newArrayC.push( newArrCmime[i]);
                        } else if(newArrCmime[i].KODARTIKULLI == newArrCmime[j].KODARTIKULLI && newArrCmime[i].MONEDHAKOD=="EUR"){
                          newArrCmime[j].CMIMI_EUR=newArrCmime[i].CMIMI;
                          newArrCmime[j].MONEDHAKOD_EUR=newArrCmime[i].MONEDHAKOD;
                          newArrayC.push( newArrCmime[j]);
                        }
                      }
                    }






                    var newArr2 = newArrayC;
                    console.log("array i ri");
                    console.log(newArrayC);
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
                          var newArrayM = [];
                          console.log(res);
                          var newArrMagGjendje = res.entiteteTeReja.artikujGjendjeRi;
                          var newArrMagGjendje=remove_duplicates(newArr1,newArrMagGjendje);
                          var tedhenatefundit=newArrMagGjendje
                          console.log(tedhenatefundit);

                          $.ajax({,
                            url: 'https://max-optika-server.herokuapp.com/syze-optike',
                            type: 'POST',
                            contentType: 'application/json',
                            data: JSON.stringify(newArrMagGjendje),
                            dataType: 'json',
                            success: function (res) {
                              console.log(res);
                              console.log('ky erdhi nga nodejs');
                            }
                          });




                          // var test= JSON.stringify(tedhenatefundit);
                          // console.log(test);
                          // var test1= JSON.parse(test);
                          // console.log(test1);

                          // let output = test1.reduce(function(res, el) {
                          //   if(res[el.KODARTIKULLI]) {
                          //     res[el.KODARTIKULLI].gjendje += el.gjendje;
                          //   } else {
                          //     res[el.KODARTIKULLI] = el;
                          //   }
                          //   return res;
                          // }, {});
                          // let outputArr = Object.values(output);

                          // console.log(outputArr);

                          // var ghj =removeDuplicatesNew2(newArrMagGjendje);
                          // console.log(ghj);


                          const dedupe = (group, current) => {
                          const index = group.findIndex(val => (val.KODI == current.KODI && val.KODARTIKULLI == current.KODARTIKULLI));
                          if (index === -1) {
                            group.push(current);
                          }
                          return group;
                        };
                        const totals = (group, current) => {
                          const index = group.findIndex(val => val.KODARTIKULLI == current.KODARTIKULLI);
                          if (index === -1) {
                            return [ ...group, current];
                          }

                          group[index].gjendje += current.gjendje;
                          return group;
                        };
                        const result = newArrMagGjendje.reduce(dedupe, []).reduce(totals, []);
                        console.log(result);
                        console.log('hopefully 1');


                          // var output = newArrMagGjendje.reduce(function(res, el) {
                          //     if(res[el.KODARTIKULLI]) {
                          //       res[el.KODARTIKULLI].gjendje += el.gjendje;
                          //     } else {
                          //       res[el.KODARTIKULLI] = el;
                          //     }
                          //     return res;
                          //   }, {});

                          //   console.log(output);
                          //   console.log('hopefully 1');

                          //   var mapObj = {};
                          //    for(var a of newArrMagGjendje){
                          //       if(mapObj[a["KODARTIKULLI"]]== undefined)
                          //         {mapObj[a["KODARTIKULLI"]] = 0;
                          //       }else{mapObj[a["KODARTIKULLI"]] += a["gjendje"]}
                          //    }
                          //    console.log('testgb');
                          //    console.log(mapObj);

                          //   var data2 = [];
                          //   for(var a of newArrMagGjendje){
                          //     if(mapObj[a["KODARTIKULLI"]] == undefined)
                          //        continue;
                          //     a["gjendje"] = mapObj[a["KODARTIKULLI"]];
                          //     data2.push(a)
                          //     delete mapObj[a["KODARTIKULLI"]];
                          //   }
                          //   console.log('hopefully 2');
                          //   console.log(data2);
                            


                          //var newArr3 = removeDuplicates(newArrayM, "KODARTIKULLI");
                          //console.log(newArr3);
                          //newArr3=JSON.stringify(newArr3);
                          $('.progress-bar').css("width", "100%");
                          $('.progress-bar').text("100%");
                          $('.progress').hide();
                          $('.progressSuccess').show();
                          setTimeout(function(){
                            $('.progressSuccess').hide();
                          }, 5000)
                          newArr1=JSON.stringify(newArr1);
                          newArr2=JSON.stringify(newArr2);
                          newArr3=JSON.stringify(newArr3);

                          // $.ajax({
                          //     url: "worker.php",
                          //     type: "post",
                          //     data: {dhena1:newArr1 ,dhena2:newArr2, dhena3:newArr3 },
                          //     success: function (response) {

                          //        // you will get response from your php page (what you echo or print) 
                          //        //console.log(typeof(response));
                          //        console.log(response);              

                          //     },
                          //     error: function(jqXHR, textStatus, errorThrown) {
                          //        console.log(textStatus, errorThrown);
                          //     }


                          // });



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