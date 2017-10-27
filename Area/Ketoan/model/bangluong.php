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

		public function select(){
			$kn=new Ketnoi();
			$kn->connect();
			$this->resuft=mysql_query("select * from bangluong");
		}
		public funtion
		public function laybangluong(){
			if(mysql_num_rows($this->resuft)>0){
				$row=mysql_fetch_array($this->resuft);
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
	}
?>