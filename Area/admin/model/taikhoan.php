<?php 
	include('ketnoi.php');
	class taikhoan extends Ketnoi
	{
		public $MaTK=null;
		public $MaCB=null;
		public $TenDN=null;
		public $MatKhau=null;
		public $MaQ=null;
		public $TrangThai=null;
		public $resuft=null;

		public function select(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select MaTK,MaCB,TenDN,TenQuyen,TrangThai from taikhoan tk,quyenhan q where tk.MaQ=q.MaQuyen");
		}
		public function selectcanbo(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo where MaCB not in (select MaCB from taikhoan)");
		}
		public function selectq(){
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
		public function laydanhsachtaikhoan(){
			if(mysql_num_rows($this->resuft)>0){
				$row=mysql_fetch_array($this->resuft);
			}else{
				$row=null;
			}
			return $row;
		}
		public function lock(){
			$kn=new Ketnoi();
			$kq=$kn->conman("update taikhoan set TrangThai='$this->TrangThai' where MaTK='$this->MaTK'");
			return $kq;
		}
		public function themtk(){
			$kn=new Ketnoi();
			$kq=$kn->conman("INSERT INTO `taikhoan`(`MaCB`, `TenDN`, `MatKhau`, `MaQ`, `TrangThai`) VALUES ('$this->MaCB','$this->TenDN','$this->MatKhau','$this->MaQ','$this->TrangThai')");
			return $kq;
		}
		public function xoa(){
			$kn=new Ketnoi();
			$kq=$kn->conman("DELETE FROM `taikhoan` WHERE MaTK='$this->MaTK'");
			return $kq;
		}
		public function phanquyen(){
			$kn=new Ketnoi();
			$kq=$kn->conman("UPDATE `taikhoan` SET `MaQ`='$this->MaQ' WHERE MaTK='$this->MaTK'");
			return $kq;
		}
		public function doimatkhau($mkmoi){
			$kn=new Ketnoi();
			$kq=$kn->conman("UPDATE `taikhoan` SET `MatKhau`='$mkmoi' WHERE TenDN='$this->TenDN' and MatKhau='$this->MatKhau'");
			return $kq;
		}
		public function selectmk($tdn,$mk){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from taikhoan WHERE TenDN='$tdn' and MatKhau='$mk'");
		}
		public function kiemtra(){
			$kn=new Ketnoi();
			if(mysql_num_rows($this->resuft)>0)
				return 1;
			return 0;
		}
	}
?>