<?php 

	$tables = array(
		1 => 
			array (
				'quality_inspection_master' => 'sno, product_id, casting_weight, defects, location, created_at, updated_at, status'
				),
		2 => 
			array (
				'melting_details_master' => 'sno, heat_no, type_of_melting, rr, pigiran, crc_scrap, rejected_castings, ferrosilicon, tap_temp, created_at, updated_at, status'
			),
		3 => 
			array (
				'sand_testing_details_master' => 'sno, per_moisture, per_clay, other_additives, shear_strength, permiability, active_clay, dead_clay, GFN, GCS, compatibility, mould_hardness, created_at, updated_at, status'
			),
		4 => 
			array (
				'core_shop_details' => 'sno, core_type, product_name, core_weight, no_of_core_produced, no_of_defect_cores, Date, shift, created_at, updated_at, status'
			),
		5 => 
			array (
				'calender_event' => 'id, title, booked_by, equip_id, start, end, url, allDay, doc_uploaded, description, is_confirmed, status'
			),
		6 => 
			array (
				'equipment_details' => 'sno, equipment_master_id, equipment_code, status'
			),
			
		7 => 
			array (
				'article_master' => 'sno, article_by, article_title, article_text, added_date, status'
			),
		8 => 
			array (
				'project_master' => 'sno, project_name, project_description, added_by, added_date, is_completed, status'
			),
		9 => 
			array (
				'project_members' => 'sno, project_id, member_id, task_id, status'
			),
		10=> 
			array (
				'task_master' => 'sno, task_name, task_description, added_by, added_date, for_the_project, is_completed, status'
			),
		11=> 
			array (
				'task_comments' => 'sno, task_id, comment_by, comment, commented_date, status'
			),
		12=> 
			array (
				'notification_master' => 'sno, notify_type, notification_desc, notify_to, added_date, added_time, is_viewed, status'
			),
		13=> 
			array (
				'leave_master' => 'sno, leave_by, leave_date, added_date, brief_note, is_approved, status'
			)
		);
		
		// foreach($tables AS $row){
			// echo $row[$key => $value]."<br/>";
			
		// }
		//print_r($tables[3]['patient_register']);
?>