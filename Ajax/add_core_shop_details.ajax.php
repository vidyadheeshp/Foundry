<?php 
	if (session_id() == '') {
    session_start();
	//$_SESSION['first_name']=$result[0];
	$login_id = $_SESSION['s_id'];
}
	include('../pages/required/db_connection.php');
	include('../pages/required/tables.php');
	require('../pages/required/functions.php');
	
	//data retrieval
	$core_type = $_POST['e1'];
	$product_name = $_POST['e2']; //casting_weight
	$core_weight = $_POST['e3'];
	$date_of_core_details = db_date($_POST['e4']);
	$core_produced = $_POST['e5'];
	$core_defective = $_POST['e6'];
	$shift = $_POST['e7'];

	
	//echo $defects[1];
	date_default_timezone_set('Asia/Kolkata');
	$created_at = date('Y-m-d h:i:s');
	$updated_at = date('0000-00-00 00:00:00');
	$status = 1;
	
	$table_no = 4;
	$table_name = 'core_shop_details';

		$insert_values = "NULL,".$core_type.",'".$product_name."',".$core_weight.",".$core_produced.",".$core_defective.",'".$date_of_core_details."',".$shift.",'".$created_at."','".$updated_at."',".$status;

		//echo $insert_values;
		$core_shop_insert_result = db_insert($table_no,$table_name,$insert_values);
	

	if($core_shop_insert_result == 1){
	
	?>
	<div class="callout callout-success">
				<h4>Successful</h4>
				<?php //echo "The file ". htmlspecialchars( basename($res_doc)). " has been uploaded.";?>
				<p>Core Shop details Added</p>
	</div>
	<?php }else{?>
		<div class="callout callout-danger">
								<h4>Unable to add Core Shop details</h4>

								<p>Check Out.</p>
							  </div>
	<?php }?>						  