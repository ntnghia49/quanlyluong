<?php
	include('ketnoi.php'); 
	/**
	* 
	*/
	class BangLuong extends Ketnoi
	{
		public $MaBL=null;
		public $MaCB=null;
		public $TLuongThang=null;
		public $TruyLinhLuong=null;
		public $BDTheoGio=null;
		public $TienLuongTang=null;
		public $PCCNV=null;
		public $PCLD=null;
		public $TruyThuTienLuong=null;
		public $TongSoTien=null;
		public $KPCD=null;
		public $SoTienCL=null;
		public $Thang=null;
		public $Nam=null;
		public $resuft=null;
		public $resuft1=null;

		public function select(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("SELECT `MaBL`,`HoTen`,`SoTKATM`, `TLuongThang`, `TruyLinhLuong`, `BDTheoGio`, `TienLuongTang`, `PCCNV`, `PCLĐ`, `TruyThuTLuong`, `TongSoTien`, `KPCD`, `SoTienCL`,Email FROM bangluong bl,canbo cb WHERE bl.MaCB=cb.MaCB");
		}
		public function select2($thang,$nam){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("SELECT `MaBL`,`HoTen`,`SoTKATM`, `TLuongThang`, `TruyLinhLuong`, `BDTheoGio`, `TienLuongTang`, `PCCNV`, `PCLĐ`, `TruyThuTLuong`, `TongSoTien`, `KPCD`, `SoTienCL`,Email FROM bangluong bl,canbo cb WHERE bl.MaCB=cb.MaCB and Thang='$thang' and Nam='$nam'");
		}

		public function select3($thang,$nam,$macb){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("SELECT `MaBL`,`HoTen`,`SoTKATM`, `TLuongThang`, `TruyLinhLuong`, `BDTheoGio`, `TienLuongTang`, `PCCNV`, `PCLĐ`, `TruyThuTLuong`, `TongSoTien`, `KPCD`, `SoTienCL`,Email FROM bangluong bl,taikhoan tk,canbo cb WHERE bl.MaCB=tk.MaCB and bl.MaCB=cb.MaCB and Thang='$thang' and Nam='$nam' and TenDN='$macb'");
		}
		public function selectthangnam(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft1=mysql_query("select thang,nam from bangluong group by thang,nam");
		}
		public function selectnam(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft1=mysql_query("select nam from bangluong group by nam");
		}
		public function laybangluong(){
			if(mysql_num_rows($this->resuft)>0){
				$row=mysql_fetch_array($this->resuft);
			}else{
				$row=null;
			}
			return $row;
		}
		public function laythang(){
			if(mysql_num_rows($this->resuft1)>0){
				$row=mysql_fetch_array($this->resuft1);
			}else{
				$row=null;
			}
			return $row;
		}
		public function them(){
			$kn=new Ketnoi();
			$kq=$kn->conman("INSERT INTO `bangluong`(`MaCB`, `TLuongThang`, `TruyLinhLuong`, `BDTheoGio`, `TienLuongTang`, `PCCNV`, `PCLĐ`, `TruyThuTLuong`, `TongSoTien`, `KPCD`, `SoTienCL`, `Thang`, `Nam`) VALUES ('$this->MaCB','$this->TLuongThang','$this->TruyLinhLuong','$this->BDTheoGio','$this->TienLuongTang','$this->PCCNV','$this->PCLD','$this->TruyThuTienLuong','$this->TongSoTien','$this->KPCD','$this->SoTienCL','$this->Thang','$this->Nam')");
			return $kq;
		}
		public function laymacb($hoten){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select MaCB from canbo where HoTen LIKE '%$hoten%'");
			if(mysql_num_rows($this->resuft)>0){
				$row=mysql_fetch_array($this->resuft);
				return $row['MaCB'];
			}
			return 0;
		}
		public function kiemtra($macb){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from canbo where MaCB='$macb'");
			if(mysql_num_rows($this->resuft)>0){
				return 1;
			}
			return 0;
		}
		public function kiemtrathang($thang,$nam){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from bangluong where thang='$thang' and nam='$nam'");
			if(mysql_num_rows($this->resuft)>0){
				return 1;
			}
			return 0;
		}
		function rand_string($length) {
			$chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$size=strlen($chars);
			$str="";
			for( $i = 0; $i < $length; $i++ ) {
				$str .= $chars[rand(0, $size - 1)];
	 		}
			return $str;
		}
		public function capnhat(){
			$kn=new Ketnoi();
			$kq=$kn->conman("UPDATE `bangluong` SET `TLuongThang`='$this->TLuongThang',`TruyLinhLuong`='$this->TruyLinhLuong',`BDTheoGio`='$this->BDTheoGio',`TienLuongTang`='$this->TienLuongTang',`PCCNV`='$this->PCCNV',`PCLĐ`='$this->PCLD',`TruyThuTLuong`='$this->TruyThuTienLuong',`TongSoTien`='$this->TongSoTien',`KPCD`='$this->KPCD',`SoTienCL`='$this->SoTienCL' WHERE `MaBL`='$this->MaBL'");
			return $kq;
		}
		public function capnhattrangthai(){
			$kn=new Ketnoi();
			$kq=$kn->conman("UPDATE `bangluong` SET TrangThai='1' WHERE `MaBL`='$this->MaBL'");
			return $kq;
		}
		public function kiemtratrangthai($thang,$nam){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from bangluong where thang='$thang' and nam='$nam'");
			$row=mysql_fetch_array($this->resuft);
			return $row['TrangThai'];
		}
	}
?>