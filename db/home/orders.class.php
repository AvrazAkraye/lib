<?php
	require_once("easyCRUD.class.php");

	class orders  Extends Crud {
		
			# Your Table name 
			protected $table = 'orders';
			
			# Primary Key of the Table
			protected $pk	 = 'oid';
	}

?>