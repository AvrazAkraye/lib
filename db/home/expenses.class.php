<?php
	require_once("easyCRUD.class.php");

	class Expenses  Extends Crud {
		
			# Your Table name 
			protected $table = 'expenses';
			
			# Primary Key of the Table
			protected $pk	 = 'eid';
	}

?>