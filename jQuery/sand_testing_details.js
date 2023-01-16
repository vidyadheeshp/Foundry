$(document).on('click','#sand_testing',function(){
	//	alert('Clilcked');
	var moisture = $('#moisture').val();
	var clay = $('#clay').val();
	var o_additives = $('#o_additives').val();
	var shear_strength = $('#shear_strength').val();
	var Permiability = $('#Permiability').val();
	var active_clay = $('#active_clay').val();
	var dead_clay = $('#dead_clay').val();
	var gfn = $('#gfn').val();
	var gcs = $('#gcs').val();
	var Compactability = $('#Compactability').val();
	var mould_hardness = $('#mould_hardness').val();

	var melting_details_url = "Ajax/sand_testing_details.ajax.php";

	//alert(product_id+'-'+quantity+'['+defect+']'+location);
	if(moisture == '' || clay == 0 || o_additives == '' || shear_strength == '' || Permiability == '' ||  active_clay == '' || dead_clay == '' || gfn =='' || gcs == '' || Compactability == '' || mould_hardness == ''){
		alert('Fill all the details');
	}else{
		$.post(
			melting_details_url,{
				e1 : moisture, e2 : clay, e3 : o_additives, e4 : shear_strength, e5 : Permiability, e6 : active_clay, e7 : dead_clay, e8 : gfn, e9 : gcs, e10 : Compactability, e11 : mould_hardness
			},
			function(data,status){
				$('.sand_testing_added_notification').html(data);
						setTimeout(function () {
							window.location.reload();
							}, 5000);
					  //$('#loader').hide();
			});
	}
	
	
});