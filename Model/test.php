<?php 
	class Ketnoi
	{
		private $maychu="localhost";
		private $taikhoan="root";
		private $pass=null;
		private $csdl="thinghiem";
		private $conn=null;
		private $result=null;

		public function connect()
		{
			$this->conn=mysql_connect($this->maychu,$this->taikhoan,$this->pass,$this->csdl) or die("Kết nối thất bại");
			mysql_select_db($this->csdl,$this->conn);
			mysql_query("SET NAMES UTF8");
		}

		public function select($sql)
		{
			$this->connect();
			$this->result=mysql_query($sql);
		}
		public function laydulieu()
		{
			if(mysql_num_rows($this->result)>0){
				$row=mysql_fetch_array($this->result);
			}else{
				$row=0;
			}
			return $row;
		}
		public function conman($sql)
		{
			$this->connect();
			if(mysql_query($sql)==true){
				return 1;
			}else{
				return 0;
			}
		}
	}
?>