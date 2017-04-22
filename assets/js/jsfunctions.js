

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
		alert(userId);
		var data = {
			"id" : userId
		};
		ajaxCall(data,page,'delUser');
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
				alert(res);
				location.reload(true);
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



