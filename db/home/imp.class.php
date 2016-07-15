<?php
	require_once("easyCRUD.class.php");

	class Imports  Extends Crud {
		
			# Your Table name 
			protected $table = 'imports';
			
			# Primary Key of the Table
			protected $pk	 = 'iid';
	}

?>