

function modClick(){
	var page = $("form").attr("page");
	          	
	$("#dialogModifiko").dialog({
		autoOpen: false,
	      show: {
	        effect: "blind",
	        duration: 500
	      },
	      hide: {
	        effect: "explode",
	        duration: 500
	      },
	      
	      width: 700,
	      modal: true,
	      buttons: {
	        "Update": function() {
	          	var data = {};
	          	var fields = $("form").serializeArray();
	          	jQuery.each( fields, function( i, field ) {
			      data[field.name] = field.value;
			    });
	          	//console.log(page);
	          	//console.log(data["aprovo"]);
	          	if(page=="manage_reservations"){
	          		//console.log(page);
	          		ajaxCall(data,page,'updateReservations');
	          	}else if (page=="manage_clients"){
	          		//console.log(page);
	          		ajaxCall(data,page,'update');
	          	}
	          	

			},
	        "Cancel": function() {
	          $( this ).dialog( "close" );
	        }
	    },

	      draggable: false,
	      resizable: false
	});

	$("[name=mod]").click(function(){
		var userId = $(this).attr('id');
		var data = {
			"id" : userId
		};
		ajaxCall(data,page,'getData');
	});

	$("[name=del]").click(function(){
		var userId = $(this).attr('id');
		//alert(userId);
		swal({
		  title: 'Deshironi te fshini perdoruesin?',
		  text: "Kujdes! Ky veprim nuk mund te kthehet mbrapsht.",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Po, fshije!'
		}).then(function () {
		  
		  var data = {
			"id" : userId
			};
		  ajaxCall(data,page,'delUser');
		})
		
	});

	$("[name=modReservation]").click(function(){
		var userId = $(this).attr('id');
		var data = {
			"id" : userId
		};
		ajaxCall(data,page,'getDataReservation');
	});

	$("[name=delReservation]").click(function(){
		var userId = $(this).attr('id');
		//alert(userId);
		swal({
		  title: 'Deshironi te fshini rezervimin?',
		  text: "Kujdes! Ky veprim nuk mund te kthehet mbrapsht.",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Po, fshije!'
		}).then(function () {
		  
		  var data = {
			"id" : userId
			};
		  ajaxCall(data,page,'delReservation');
		})
		
	});
	
};

function ajaxCall(param,page,action){
	$.ajax({
		url: "functions.php", // Url to which the request is send
		type: "POST",             // Type of request to be send, called as method
		data: {param:param,action:action,page:page}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		error: function(res){
			console.log(res);
		},
		success: function(res){
			if(action == 'getData'){
				res = JSON.parse(res);
				setFieldVals(res,param);
			}else if(action == 'update'){
				location.reload(true);
				
			}else if(action == 'updateReservations'){
				location.reload(true);
				//console.log(res);
				
			}
			else if(action == 'update_db_on_cron'){
				//res  = JSON.parse(res);
				console.log(res); 
			}
			else if(action == 'delUser'){
				swal({
				  title: 'Deleted!',
				  text: "Perdoruesi u fshi me sukses.",
				  type: 'success',
				}).then(function () {
				  location.reload(true);
				})
				//alert(res);
				
			}else if(action == 'delReservation'){
				swal({
				  title: 'Deleted!',
				  text: "Rezervimi u fshi me sukses.",
				  type: 'success',
				}).then(function () {
				  location.reload(true);
				})
				//alert(res);
				
			}else if(action == 'getDataReservation'){
				res = JSON.parse(res);
				setFieldValsReservations(res,param);
			}
			
		}   // A function to be called if request succeeds
	});
}

function setFieldVals(data,param){
	var id = param.id;
	$("[name=username]").val(data.username);
	$("[name=password]").val(data.password);
	$("[name=emer]").val(data.emer);
	$("[name=mbiemer]").val(data.mbiemer);
	$("[name=mosha]").val(data.mosha);
	var $gjinia = $('input:radio[name=gjinia]');
	if($gjinia.is(':checked') === false) {
        $gjinia.filter('[value='+data.gjinia+']').prop('checked', true);
    }
    $("[name=vendlindja]").val(data.vendlindja);
	$("[name=celular]").val(data.celular);
	$("[name=email]").val(data.email);
	$("[name=id]").val(id);
	$("[name=user_id]").val(data.user_id);
	
	$("#dialogModifiko").dialog("open");
}

function setFieldValsReservations(data,param){
	var id = param.id;
	$("[name=klienti]").val(data.emer+" "+data.mbiemer);
	$("[name=data]").val(data.data);
	$("[name=ora]").val(data.ora);
	$("[name=dyqani]").val(data.dyqani);
	$("[name=shenime]").val(data.shenime);
	//console.log(data.aprovuar);
	$('#' + data.aprovuar).prop('checked',true);
	$("[name=id]").val(id);
	$("[name=id_klienti]").val(data.id_klienti);
	
	$("#dialogModifiko").dialog("open");
}

function setFieldValsClinicCard(data){
	$("#clientsSelect").val(data.id_client);
	$('#datazgjedhur').val(data.data_vizites);
	$("[name=sdlsph]").val(data.djathte_larg_sph);
	$("[name=sdlcyl]").val(data.djathte_larg_cyl);
	$("[name=sdlaxe]").val(data.djathte_larg_axe);
	$("[name=sdasph]").val(data.djathte_afer_sph);
	$("[name=sdacyl]").val(data.djathte_afer_cyl);
	$("[name=sdaaxe]").val(data.djathte_afer_axe);
	$("[name=smlsph]").val(data.majte_larg_sph);
	$("[name=smlcyl]").val(data.majte_larg_cyl);
	$("[name=smlaxe]").val(data.majte_larg_axe);
	$("[name=smasph]").val(data.majte_afer_sph);
	$("[name=smacyl]").val(data.majte_afer_cyl);
	$("[name=smaaxe]").val(data.majte_afer_axe);
	$("[name=dpl]").val(data.distanca_pupilare_larg);
	$("[name=dpa]").val(data.distanca_pupilare_afer);
	$("[name=shenime]").val(data.shenime);
}

function updateDashboard(data){
	$(".numberOfReservations").html(data.reservations);
	$(".numberOfClients").html(data.clients);
	$(".numberOfClinicCards").html(data.clinic_cards);
}



