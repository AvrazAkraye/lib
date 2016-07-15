<?php
	require_once("easyCRUD.class.php");

	class user  Extends Crud {
		
			# Your Table name 
			protected $table = 'user';
			
			# Primary Key of the Table
			protected $pk	 = 'id';
	}

?>