<?php
	require_once("easyCRUD.class.php");

	class product  Extends Crud {
		
			# Your Table name 
			protected $table = 'product';
			
			# Primary Key of the Table
			protected $pk	 = 'pid';
	}

?>