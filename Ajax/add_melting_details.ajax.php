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
	$heat_no = $_POST['e1'];
	$melting_type = $_POST['e2']; 
	$rr_quantiry = $_POST['e3'];
	$Pigiran_quantiry = $_POST['e4'];
	$crc_Scrap_quantiry = $_POST['e5'];
	$Rejected_Castings_quantiry = $_POST['e6'];
	$FerroSilicon_quantiry = $_POST['e7'];
	$tap_temp = $_POST['e8'];


//modified data
	//$string_defects = implode('-', $defects);
	
	date_default_timezone_set('Asia/Kolkata');
	$created_at = date('Y-m-d h:i:s');
	$updated_at = date('0000-00-00 00:00:00');
	$status = 1;
	
	$table_no = 2;
	$table_name = 'melting_details_master';
	$insert_values = "NULL,'".$heat_no."',".$melting_type.",".$rr_quantiry.",".$Pigiran_quantiry.",".$crc_Scrap_quantiry.",".$Rejected_Castings_quantiry.",".$FerroSilicon_quantiry.",".$tap_temp.",'".$created_at."','".$updated_at."',".$status;

	//echo $insert_values; 
	$melting_details_insert_result = db_insert($table_no,$table_name,$insert_values);

	//echo $melting_deyails_insert_result;

	if($melting_details_insert_result == 1){
	
	?>
	<div class="callout callout-success">
				<h4>Successful</h4>
				<?php //echo "The file ". htmlspecialchars( basename($res_doc)). " has been uploaded.";?>
				<p>Melting Details Added</p>
	</div>
	<?php }else{?>
		<div class="callout callout-danger">
								<h4>Unable to add melting details</h4>

								<p>Check Out.</p>
							  </div>
	<?php }?>						  