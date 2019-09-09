<?php
	///mechanic controller
	include('../model/serviceRequest.php');
    $sr=new ServiceRequest();
    $ref_id= "Pending";
    $field_id = "status";
    
    $rows= $sr->getAllSr();
    // print_r($rows); die;
   
        
 

    ?>