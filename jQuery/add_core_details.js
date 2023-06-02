$(document).on('click','#add_core_details',function(){
	//alert('Clilcked');
	var core_type = $('#core_type').val();
	var product_name = $('#product_name').val();
	var core_weight = $('#core_weight').val();
	var date_of_core_details = $('.date_of_core_details').val();
	var core_produced = $('#core_produced').val();
	var core_defective = $('#core_defective').val();
	var shift = $('#shift').val();

	var core_shop_details_url = "Ajax/add_core_shop_details.ajax.php";

	//alert(product_id+'-'+quantity+'['+defect+']'+location);
	if(core_type == 0 || product_name == '' || core_weight == '' || date_of_core_details == '' || core_produced == '' ||  core_defective == '' || shift == 0 ){
		alert('Fill all the details');
	}else{
		$.post(
			core_shop_details_url,{
				e1 : core_type, e2 : product_name, e3 : core_weight, e4 : date_of_core_details, e5 : core_produced, e6 : core_defective, e7 : shift
			},
			function(data,status){
				$('.core_shop_details_added_notification').html(data);
						setTimeout(function () {
							window.location.reload();
							}, 3000);
					  //$('#loader').hide();
			});
	}
	
	
});