

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
	          	console.log(page);
	          	ajaxCall(data,page,'update');

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
	$("[name=id]").val(id);
	$("[name=id_klienti]").val(data.id_klienti);
	
	$("#dialogModifiko").dialog("open");
}



