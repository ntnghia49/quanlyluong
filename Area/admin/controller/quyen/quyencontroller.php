<?php
	include('model/quyen.php');
	$q=new Quyen();
	$q->select();
	//------
	include('view/quyen/index.php'); 
?>