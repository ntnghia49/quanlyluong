<?php
	include('test.php');
	class QuyenHan extends Ketnoi
	{
		private $resuft=null;
		public $MaQuyen=null;
		public $TenQuyen=null;

		public function LayQuyen(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->result=mysql_query("select TenQuyen from quyenhan where MaQuyen='$this->MaQuyen'");
			return $this->result;
		}
	} 
?>