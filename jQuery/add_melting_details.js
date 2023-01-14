$(document).on('click','#add_melting',function(){
	//	alert('Clilcked');
	var heat_no = $('#heat_no').val();
	var melting_type = $('#melting_type').val();
	var rr_quantiry = $('#rr_quantiry').val();
	var Pigiran_quantiry = $('#Pigiran_quantiry').val();
	var crc_Scrap_quantiry = $('#crc_Scrap_quantiry').val();
	var Rejected_Castings_quantiry = $('#Rejected_Castings_quantiry').val();
	var FerroSilicon_quantiry = $('#FerroSilicon_quantiry').val();
	var tap_temp = $('#tap_temp').val();

	var melting_details_url = "Ajax/add_melting_details.ajax.php";

	//alert(product_id+'-'+quantity+'['+defect+']'+location);
	if(heat_no == '' || melting_type == 0 || rr_quantiry == '' || Pigiran_quantiry == '' || crc_Scrap_quantiry == '' ||  Rejected_Castings_quantiry == '' || FerroSilicon_quantiry == '' ){
		alert('Fill all the details');
	}else{
		$.post(
			melting_details_url,{
				e1 : heat_no, e2 : melting_type, e3 : rr_quantiry, e4 : Pigiran_quantiry, e5 : crc_Scrap_quantiry, e6 : Rejected_Castings_quantiry, e7 : FerroSilicon_quantiry, e8 : tap_temp
			},
			function(data,status){
				$('.melting_details_added_notification').html(data);
						setTimeout(function () {
							window.location.reload();
							}, 5000);
					  //$('#loader').hide();
			});
	}
	
	
});