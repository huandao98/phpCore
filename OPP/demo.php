<?php
	class CongDan{
		public $name;
		public $year;
		public function __construct($input_name, $input_year){
			$this->name = $input_name;
			$this->year = $input_year;
		}
		public function intro(){
			echo "Tôi tên là {$this->name}, sinh năm {$this->year}";
		}
	}
	class SinhVien extends CongDan{
		public function message(){
			echo "Chào các bạn!<br>";
		}
	}
	$nhan = new SinhVien("Nguyễn Thành Nhân",1993);
	$nhan->message();
	$nhan->intro();
?>