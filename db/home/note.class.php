<?php
	require_once("easyCRUD.class.php");

	class notes  Extends Crud {
		
			# Your Table name 
			protected $table = 'notes';

			# Primary Key of the Table
			protected $pk	 = 'nid';
	}

?>