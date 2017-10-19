<?php
	include('ketnoi.php');
	class Quyen extends Ketnoi
	{
		private $resuft=null;
		public $MaQ=null;
		public $TenQuyen=null;

		public function select(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from quyenhan");
		}

		public function laydanhquyen(){
			if(mysql_num_rows($this->resuft)>0){
				$row=mysql_fetch_array($this->resuft);
			}else{
				$row=null;
			}
			return $row;
		}
		public function them(){
			$kn=new Ketnoi();
			$sql="INSERT INTO `quyenhan`(`TenQuyen`) VALUES ('$this->TenQuyen')";
			$kq=$kn->conman($sql);
			return $kq;
		}
		public function sua(){
			$kn=new Ketnoi();
			$sql="UPDATE `quyenhan` SET `TenQuyen`='$this->TenQuyen' WHERE MaQuyen='$this->MaQ'";
			$kq=$kn->conman($sql);
			return $kq;
		}
		public function xoa(){
			$kn=new Ketnoi();
			$sql="DELETE FROM `quyenhan` WHERE MaQuyen='$this->MaQ'";
			$kq=$kn->conman($sql);
			return $kq;
		}
	}
?>