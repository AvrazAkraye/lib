<?php
	require_once("easyCRUD.class.php");

	class dept  Extends Crud {
		
			# Your Table name 
			protected $table = 'dept';
			
			# Primary Key of the Table
			protected $pk	 = 'did';
	}

?>