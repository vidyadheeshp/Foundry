$(document).on('click','#add_product_defect',function(){
	//alert('Clilcked');
	var product_id = $('#product_id').val();
	var quantity = $('#quantity').val();
	var defect = $('#defect').val();
	var location = $('#location').val();
	var product_url = "Ajax/add_product_defect.ajax.php";

	//alert(product_id+'-'+quantity+'['+defect+']'+location);
	if(product_id == '' || quantity == '' || defect == '' || location == ''){
		alert('Fill all the details');
	}else{
		$.post(
			product_url,{
				e1 : product_id, e2 : quantity, e3 : defect, e4 : location
			},
			function(data,status){
				$('.product_defect_added_notification').html(data);
						setTimeout(function () {
							window.location.reload();
							}, 5000);
					  //$('#loader').hide();
			});
	}
	
	
});