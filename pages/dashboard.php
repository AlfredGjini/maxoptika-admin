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


                          let input = [
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX83",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX74",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13137",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4097 5574 71 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-02T16:06:53.206Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12171",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5017 T3 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:41.563Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12171",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5017 T3 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:41.563Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12171",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5017 T3 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:41.563Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12171",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5017 T3 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:41.563Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12171",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5017 T3 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:41.563Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12171",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5017 T3 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:41.563Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12172",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5556 8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-08T12:57:12.416Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12172",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5556 8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T12:57:12.416Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12172",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5556 8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T12:57:12.416Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12172",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5556 8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-08T12:57:12.416Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12172",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4085 5556 8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T12:57:12.416Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12177",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4087 5562 73 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-24T17:24:43.873Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12177",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4087 5562 73 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-24T17:24:43.873Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12177",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4087 5562 73 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-24T17:24:43.873Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12177",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4087 5562 73 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-24T17:24:43.873Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12177",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4087 5562 73 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-24T17:24:43.873Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12177",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4087 5562 73 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-24T17:24:43.873Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12177",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4087 5562 73 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-24T17:24:43.873Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12178",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4091 5026 13 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-08-23T14:31:19.230Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12178",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4091 5026 13 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-23T14:31:19.230Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12178",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4091 5026 13 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-23T14:31:19.230Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12178",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4091 5026 13 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-23T14:31:19.230Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12178",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 4091 5026 13 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-23T14:31:19.230Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12229",
    "PERSHKRIMARTIKULLI": "RAY BAN 3545 186/9A 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX75",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-10-28T14:05:02.566Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12229",
    "PERSHKRIMARTIKULLI": "RAY BAN 3545 186/9A 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.566Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12229",
    "PERSHKRIMARTIKULLI": "RAY BAN 3545 186/9A 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.566Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12229",
    "PERSHKRIMARTIKULLI": "RAY BAN 3545 186/9A 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX83",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:02.566Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12229",
    "PERSHKRIMARTIKULLI": "RAY BAN 3545 186/9A 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX04",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:02.566Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12229",
    "PERSHKRIMARTIKULLI": "RAY BAN 3545 186/9A 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.566Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 8,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX74",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX04",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12275",
    "PERSHKRIMARTIKULLI": "VERSACE 4330 GB1/ 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-15T10:30:46.483Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12281",
    "PERSHKRIMARTIKULLI": "VOGUE 4002S 5025 4L 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX74",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-07-08T01:25:01.630Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12281",
    "PERSHKRIMARTIKULLI": "VOGUE 4002S 5025 4L 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-08T01:25:01.630Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12281",
    "PERSHKRIMARTIKULLI": "VOGUE 4002S 5025 4L 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-07-08T01:25:01.630Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12281",
    "PERSHKRIMARTIKULLI": "VOGUE 4002S 5025 4L 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-08T01:25:01.630Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12281",
    "PERSHKRIMARTIKULLI": "VOGUE 4002S 5025 4L 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-08T01:25:01.630Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 6,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12292",
    "PERSHKRIMARTIKULLI": "VOGUE 4023S 5025 4L 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:05:38.910Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12313",
    "PERSHKRIMARTIKULLI": "VOGUE 5105S W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T14:54:01.520Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12313",
    "PERSHKRIMARTIKULLI": "VOGUE 5105S W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T14:54:01.520Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12313",
    "PERSHKRIMARTIKULLI": "VOGUE 5105S W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T14:54:01.520Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12313",
    "PERSHKRIMARTIKULLI": "VOGUE 5105S W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T14:54:01.520Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13116",
    "PERSHKRIMARTIKULLI": "Ray Ban 2132 601S 78 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-13T17:17:39.323Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13116",
    "PERSHKRIMARTIKULLI": "Ray Ban 2132 601S 78 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-13T17:17:39.323Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13116",
    "PERSHKRIMARTIKULLI": "Ray Ban 2132 601S 78 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-13T17:17:39.323Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 9,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX74",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13128",
    "PERSHKRIMARTIKULLI": "Versace 4314 5184 13 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-11T10:33:34.050Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 6,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX74",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13132",
    "PERSHKRIMARTIKULLI": "Versace 4329 GB1/8753",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-14T15:40:02.080Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 5,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX14",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13134",
    "PERSHKRIMARTIKULLI": "Versace 2174 1001 87 59",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T15:48:33.046Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 18,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX04",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX17",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13139",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 001 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX74",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-20T21:55:03.623Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 5,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX08",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13144",
    "PERSHKRIMARTIKULLI": "Ray Ban 4278 6282 9A 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T21:55:05.670Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 6,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13148",
    "PERSHKRIMARTIKULLI": "Ray Ban 3029 197/71 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-25T12:19:31.973Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 7,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13209",
    "PERSHKRIMARTIKULLI": "Emporio Armani 4093 5574 87 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T13:56:43.256Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13218",
    "PERSHKRIMARTIKULLI": "Ray Ban 3025 112/69 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-10-18T10:47:49.430Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13218",
    "PERSHKRIMARTIKULLI": "Ray Ban 3025 112/69 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T10:47:49.430Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13218",
    "PERSHKRIMARTIKULLI": "Ray Ban 3025 112/69 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T10:47:49.430Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13218",
    "PERSHKRIMARTIKULLI": "Ray Ban 3025 112/69 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T10:47:49.430Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 15,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX12",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX04",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13223",
    "PERSHKRIMARTIKULLI": "Ray Ban 3561 9002 A6 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T13:41:07.490Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 7,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX14",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13227",
    "PERSHKRIMARTIKULLI": "Versace 4320 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-21T19:01:43.453Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13230",
    "PERSHKRIMARTIKULLI": "Vogue 5155 W44/87 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-02T15:26:56.083Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11938",
    "PERSHKRIMARTIKULLI": "Vogue 5151 W44 51",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-13T17:05:04.113Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 252,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MD",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 36,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX16",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 16,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 33,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 17,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 68,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 26,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 11,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX04",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "LN00068",
    "PERSHKRIMARTIKULLI": "SOFLENS DITORE NR -4",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 25,
    "DTMODIFIKIM": "2017-10-28T10:33:06.500Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11902",
    "PERSHKRIMARTIKULLI": "Versace 3229 5188 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-06-29T11:30:04.996Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11902",
    "PERSHKRIMARTIKULLI": "Versace 3229 5188 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-06-29T11:30:04.996Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11902",
    "PERSHKRIMARTIKULLI": "Versace 3229 5188 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-06-29T11:30:04.996Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11103",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1052 3094 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:06:09.310Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11103",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1052 3094 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:06:09.310Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11103",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1052 3094 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:06:09.310Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11103",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1052 3094 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:06:09.310Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11114",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1055 3164 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-07-03T10:30:39.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11114",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1055 3164 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-03T10:30:39.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11114",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1055 3164 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-03T10:30:39.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11114",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1055 3164 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-07-03T10:30:39.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11114",
    "PERSHKRIMARTIKULLI": "EMPORIO ARMANI 1055 3164 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-07-03T10:30:39.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13053",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4269 501/8G 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-18T10:00:14.940Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13053",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4269 501/8G 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:14.940Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13053",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4269 501/8G 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:14.940Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13053",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4269 501/8G 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:14.940Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13053",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4269 501/8G 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:14.940Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13053",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4269 501/8G 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:14.940Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13053",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4269 501/8G 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-18T10:00:14.940Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13067",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4288 501/87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-08-26T10:10:02.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13067",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4288 501/87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-26T10:10:02.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13067",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4288 501/87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-26T10:10:02.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13067",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4288 501/87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-26T10:10:02.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13067",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4288 501/87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-26T10:10:02.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13067",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4288 501/87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-26T10:10:02.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 4,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13070",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4295 501/8G 57",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-14T15:11:05.646Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX83",
    "gjendje": 5,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13076",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4302 501/8G 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX75",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10684",
    "PERSHKRIMARTIKULLI": "DOLCE & GABBANA 4270 3033 19 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-19T15:31:23.023Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13073",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4296 30908G 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13073",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4296 30908G 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13073",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4296 30908G 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13073",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4296 30908G 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX83",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:02.376Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11059",
    "PERSHKRIMARTIKULLI": "BURBERRY 2231 3001 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11059",
    "PERSHKRIMARTIKULLI": "BURBERRY 2231 3001 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11059",
    "PERSHKRIMARTIKULLI": "BURBERRY 2231 3001 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11059",
    "PERSHKRIMARTIKULLI": "BURBERRY 2231 3001 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11059",
    "PERSHKRIMARTIKULLI": "BURBERRY 2231 3001 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11059",
    "PERSHKRIMARTIKULLI": "BURBERRY 2231 3001 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11064",
    "PERSHKRIMARTIKULLI": "BURBERRY 2239 3616 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 3,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11064",
    "PERSHKRIMARTIKULLI": "BURBERRY 2239 3616 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11064",
    "PERSHKRIMARTIKULLI": "BURBERRY 2239 3616 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11064",
    "PERSHKRIMARTIKULLI": "BURBERRY 2239 3616 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11064",
    "PERSHKRIMARTIKULLI": "BURBERRY 2239 3616 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11064",
    "PERSHKRIMARTIKULLI": "BURBERRY 2239 3616 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11064",
    "PERSHKRIMARTIKULLI": "BURBERRY 2239 3616 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 6,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX83",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11790",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1008 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:05:03.250Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11798",
    "PERSHKRIMARTIKULLI": "Burberry 2241 3002 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 4,
    "DTMODIFIKIM": "2017-10-04T17:06:24.293Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11798",
    "PERSHKRIMARTIKULLI": "Burberry 2241 3002 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-04T17:06:24.293Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11798",
    "PERSHKRIMARTIKULLI": "Burberry 2241 3002 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-04T17:06:24.293Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11798",
    "PERSHKRIMARTIKULLI": "Burberry 2241 3002 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-04T17:06:24.293Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11798",
    "PERSHKRIMARTIKULLI": "Burberry 2241 3002 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-04T17:06:24.293Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11798",
    "PERSHKRIMARTIKULLI": "Burberry 2241 3002 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-04T17:06:24.293Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11798",
    "PERSHKRIMARTIKULLI": "Burberry 2241 3002 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-04T17:06:24.293Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11817",
    "PERSHKRIMARTIKULLI": "Burberry 2244 3553 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-29T10:51:07.570Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11817",
    "PERSHKRIMARTIKULLI": "Burberry 2244 3553 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-29T10:51:07.570Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11817",
    "PERSHKRIMARTIKULLI": "Burberry 2244 3553 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-29T10:51:07.570Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11817",
    "PERSHKRIMARTIKULLI": "Burberry 2244 3553 50",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-29T10:51:07.570Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 3,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX74",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO09830",
    "PERSHKRIMARTIKULLI": "BURBERRY 1297 1144 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11791",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1212 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 5,
    "DTMODIFIKIM": "2017-06-27T13:32:49.420Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11791",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1212 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-06-27T13:32:49.420Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11791",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1212 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-06-27T13:32:49.420Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11791",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1212 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-06-27T13:32:49.420Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11791",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1212 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-06-27T13:32:49.420Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11791",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1212 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-06-27T13:32:49.420Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11791",
    "PERSHKRIMARTIKULLI": "Burberry 1309 1212 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-06-27T13:32:49.420Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11803",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3623 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-08-10T13:59:59.600Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11803",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3623 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-10T13:59:59.600Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11803",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3623 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-10T13:59:59.600Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11803",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3623 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX17",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-10T13:59:59.600Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11803",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3623 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-10T13:59:59.600Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11805",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3608 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11805",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3608 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11805",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3608 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11805",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3608 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11805",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3608 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11805",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3608 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11805",
    "PERSHKRIMARTIKULLI": "Burberry 2242 3608 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 5,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11808",
    "PERSHKRIMARTIKULLI": "Burberry 2243 3001 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-05T09:32:27.660Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13031",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2155 12945R 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13031",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2155 12945R 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13031",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2155 12945R 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13031",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2155 12945R 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13031",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2155 12945R 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13031",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2155 12945R 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13042",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2162 05/88 37",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 6,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13042",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2162 05/88 37",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13042",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2162 05/88 37",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13042",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2162 05/88 37",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX83",
    "gjendje": 3,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13042",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2162 05/88 37",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13042",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2162 05/88 37",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13046",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2164 05/8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13046",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2164 05/8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13046",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2164 05/8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13046",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2164 05/8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13046",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2164 05/8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13046",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 2164 05/8G 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-12T15:53:52.613Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 11,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX83",
    "gjendje": 5,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD13056",
    "PERSHKRIMARTIKULLI": "Dolce & Gabbana 4284 675/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-28T14:07:32.780Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX86",
    "gjendje": 1032,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 62,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 37,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 43,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 44,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 38,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX75",
    "gjendje": 45,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 59,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 58,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX08",
    "gjendje": 48,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 60,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 96,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 48,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 66,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX04",
    "gjendje": 61,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 50,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 51,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 15,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 49,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "AS00090",
    "PERSHKRIMARTIKULLI": "Centrostyle Spray Clean 25",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 56,
    "DTMODIFIKIM": "2017-11-01T15:21:51.526Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD07888",
    "PERSHKRIMARTIKULLI": "RAY BAN 9052S 177 87 47",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-04-25T10:01:42.486Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD07888",
    "PERSHKRIMARTIKULLI": "RAY BAN 9052S 177 87 47",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-04-25T10:01:42.486Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 11,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 5,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX81",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12632",
    "PERSHKRIMARTIKULLI": "Ray Ban 5291 2477 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-16T10:26:16.523Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12633",
    "PERSHKRIMARTIKULLI": "Ray Ban 5360 2034 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12633",
    "PERSHKRIMARTIKULLI": "Ray Ban 5360 2034 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12633",
    "PERSHKRIMARTIKULLI": "Ray Ban 5360 2034 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12634",
    "PERSHKRIMARTIKULLI": "Ray Ban 5360 5713 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12634",
    "PERSHKRIMARTIKULLI": "Ray Ban 5360 5713 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12634",
    "PERSHKRIMARTIKULLI": "Ray Ban 5360 5713 52",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12638",
    "PERSHKRIMARTIKULLI": "Ray Ban 6350 2503 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12638",
    "PERSHKRIMARTIKULLI": "Ray Ban 6350 2503 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12638",
    "PERSHKRIMARTIKULLI": "Ray Ban 6350 2503 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12640",
    "PERSHKRIMARTIKULLI": "Ray Ban 6362 2890 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12640",
    "PERSHKRIMARTIKULLI": "Ray Ban 6362 2890 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12640",
    "PERSHKRIMARTIKULLI": "Ray Ban 6362 2890 55",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12644",
    "PERSHKRIMARTIKULLI": "Ray Ban 1531 3592 46",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12644",
    "PERSHKRIMARTIKULLI": "Ray Ban 1531 3592 46",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12644",
    "PERSHKRIMARTIKULLI": "Ray Ban 1531 3592 46",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12645",
    "PERSHKRIMARTIKULLI": "Ray Ban 1531 3648 46",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12645",
    "PERSHKRIMARTIKULLI": "Ray Ban 1531 3648 46",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12645",
    "PERSHKRIMARTIKULLI": "Ray Ban 1531 3648 46",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-27T10:10:07.450Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12741",
    "PERSHKRIMARTIKULLI": "Ray Ban 6350 2730 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T14:06:15.013Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12741",
    "PERSHKRIMARTIKULLI": "Ray Ban 6350 2730 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-18T14:06:15.013Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12741",
    "PERSHKRIMARTIKULLI": "Ray Ban 6350 2730 53",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-18T14:06:15.013Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12746",
    "PERSHKRIMARTIKULLI": "Ray Ban 6267 2502 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-23T10:12:38.096Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12746",
    "PERSHKRIMARTIKULLI": "Ray Ban 6267 2502 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-23T10:12:38.096Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12746",
    "PERSHKRIMARTIKULLI": "Ray Ban 6267 2502 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-23T10:12:38.096Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12747",
    "PERSHKRIMARTIKULLI": "Ray Ban 6304 2502 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-10-23T10:13:28.970Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12747",
    "PERSHKRIMARTIKULLI": "Ray Ban 6304 2502 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-23T10:13:28.970Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12747",
    "PERSHKRIMARTIKULLI": "Ray Ban 6304 2502 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-23T10:13:28.970Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12747",
    "PERSHKRIMARTIKULLI": "Ray Ban 6304 2502 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-23T10:13:28.970Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10274",
    "PERSHKRIMARTIKULLI": "VERSACE 4305Q 5066 4Q 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-03-25T10:40:25.760Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10274",
    "PERSHKRIMARTIKULLI": "VERSACE 4305Q 5066 4Q 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-03-25T10:40:25.760Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10274",
    "PERSHKRIMARTIKULLI": "VERSACE 4305Q 5066 4Q 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX14",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-03-25T10:40:25.760Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10274",
    "PERSHKRIMARTIKULLI": "VERSACE 4305Q 5066 4Q 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-03-25T10:40:25.760Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 7,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD12103",
    "PERSHKRIMARTIKULLI": "VERSACE 4325 GB1/87 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-31T11:56:33.370Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 14,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX75",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 6,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO11936",
    "PERSHKRIMARTIKULLI": "Versace 1241 1252 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T10:55:22.633Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX78",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX70",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD09302",
    "PERSHKRIMARTIKULLI": "VERSACE 2150Q 1002 87 62",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-11-01T11:36:04.060Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX18",
    "gjendje": 4,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MP-ShowRoom",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MD",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX21",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX25",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX02",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX17",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX20",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX23",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX04",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10271",
    "PERSHKRIMARTIKULLI": "VERSACE 4311 GB1 87 56",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX19",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-09-08T21:30:18.456Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX06",
    "gjendje": 2,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX22",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX24",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX26",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SD10779",
    "PERSHKRIMARTIKULLI": "VERSACE 4303 5161 68 58",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-08-31T13:28:03.666Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12580",
    "PERSHKRIMARTIKULLI": "Versace 3229 GB1 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX13",
    "gjendje": 4,
    "DTMODIFIKIM": "2017-10-24T16:54:55.480Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12580",
    "PERSHKRIMARTIKULLI": "Versace 3229 GB1 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX01",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T16:54:55.480Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12580",
    "PERSHKRIMARTIKULLI": "Versace 3229 GB1 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX10",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-24T16:54:55.480Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12580",
    "PERSHKRIMARTIKULLI": "Versace 3229 GB1 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MDG",
    "gjendje": 0,
    "DTMODIFIKIM": "2017-10-24T16:54:55.480Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12580",
    "PERSHKRIMARTIKULLI": "Versace 3229 GB1 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MQ",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T16:54:55.480Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  },
  {
    "KODARTIKULLI": "SO12580",
    "PERSHKRIMARTIKULLI": "Versace 3229 GB1 54",
    "BARKOD": "Pa Detatime",
    "KODNJESIA1": "cope",
    "KODI": "MX05",
    "gjendje": 1,
    "DTMODIFIKIM": "2017-10-24T16:54:55.480Z",
    "cmimibaze": 0,
    "DETAJIM1": "",
    "DETAJIM2": ""
  }
];



                          // var test= JSON.stringify(tedhenatefundit);
                          // console.log(test);
                          // var test1= JSON.parse(test);
                          // console.log(test1);

                          let output = input.reduce(function(res, el) {
                            if(res[el.KODARTIKULLI]) {
                              res[el.KODARTIKULLI].gjendje += el.gjendje;
                            } else {
                              res[el.KODARTIKULLI] = el;
                            }
                            return res;
                          }, {});
                          let outputArr = Object.values(output);

                          console.log(outputArr);
                          console.log('me te dhena te gatshme');

                          // var ghj =removeDuplicatesNew2(newArrMagGjendje);
                          // console.log(ghj);


                        //   const dedupe = (group, current) => {
                        //   const index = group.findIndex(val => (val.KODI == current.KODI && val.KODARTIKULLI == current.KODARTIKULLI));
                        //   if (index === -1) {
                        //     group.push(current);
                        //   }
                        //   return group;
                        // };
                        // const totals = (group, current) => {
                        //   const index = group.findIndex(val => val.KODARTIKULLI == current.KODARTIKULLI);
                        //   if (index === -1) {
                        //     return [ ...group, current];
                        //   }

                        //   group[index].gjendje += current.gjendje;
                        //   return group;
                        // };

                        // const result = newArrMagGjendje.reduce(totals, []);
                        // console.log(result);
                        // console.log('hopefully 1');


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