<?php
	include('ketnoi.php');
	class CanBo extends Ketnoi{

		private $resuft=null;
		public $MaCB=null;
		public $HoTen=null;
		public $NgaySinh=null;
		public $GioiTinh=null;
		public $DiaChi=null;
		public $Email=null;
		public $SoTKATM=null;

		public function select(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo");
		}
		
		public function selectcanhan($tendn){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo where MaCB=(select MaCB from taikhoan where TenDN='$tendn')");
		}
		public function laydanhsachcanbo(){
			if(mysql_num_rows($this->resuft)>0){
				$row=mysql_fetch_array($this->resuft);
			}else{
				$row=null;
			}
			return $row;
		}
		public function kiemtra(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo where MaCB='$this->MaCB'");
			if(mysql_num_rows($this->resuft)>0){
				return 1;
			}else{
				return 0;
			}
		}
		public function kiemtra1(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo where Email='$this->Email'");
			if(mysql_num_rows($this->resuft)>0){
				return 1;
			}else{
				return 0;
			}
		}
		public function kiemtra2(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo where SoTKATM='$this->SoTKATM'");
			if(mysql_num_rows($this->resuft)>0){
				return 1;
			}else{
				return 0;
			}
		}
		public function them(){
			$kn=new Ketnoi();
			$sql="INSERT INTO `canbo`(`MaCB`, `HoTen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Email`, `SoTKATM`) VALUES ('$this->MaCB','$this->HoTen','$this->NgaySinh','$this->GioiTinh','$this->DiaChi','$this->Email','$this->SoTKATM')";
			$kq=$kn->conman($sql);
			return $kq;
		}
		public function xoa(){
			$kn=new Ketnoi();
			$sql="delete from canbo where MaCB='$this->MaCB'";
			$kq=$kn->conman($sql);
			return $kq;
		}
		public function capnhat(){
			$kn=new Ketnoi();
			$sql="UPDATE `canbo` SET `HoTen`='$this->HoTen',`NgaySinh`='$this->NgaySinh',`GioiTinh`='$this->GioiTinh',`DiaChi`='$this->DiaChi',`Email`='$this->Email',`SoTKATM`='$this->SoTKATM' WHERE MaCB='$this->MaCB'";
			$kq=$kn->conman($sql);
			return $kq;
		}
	}
?>