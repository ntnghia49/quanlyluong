<?php 
	include('ketnoi.php');
	class taikhoan extends Ketnoi
	{
		public $MaTK=null;
		public $MaCB=null;
		public $TenDN=null;
		public $MatKhau=null;
		public $MaQ=null;
		public $resuft=null;

		public function select(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select MaTK,MaCB,TenDN,TenQuyen from taikhoan tk,quyenhan q where tk.MaQ=q.MaQuyen");
		}
		public function selectcanbo(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo where MaCB not in (select MaCB from taikhoan)");
		}
		public function laydanhsachtaikhoan(){
			if(mysql_num_rows($this->resuft)>0){
				$row=mysql_fetch_array($this->resuft);
			}else{
				$row=null;
			}
			return $row;
		}
	}
?>