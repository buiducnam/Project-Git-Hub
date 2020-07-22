<?php 
class SinhVienModel extends DB{
	// public function getSV(){
		//connect db
		// return "OKE";
	// }

// 	public function TinhTong($a , $b){
// 		return $a+ $b;
// 	}

	public function getAllSinhVien(){
		$qr = "SELECT * FROM sinhvien";
		return mysqli_query($this->conn, $qr);
	}

	public function ThemSV($masv, $hotensv, $makhoa, $namsinh, $quequan){
		$qr = "INSERT INTO sinhvien('hotensv','makhoa', 'namsinh','quequan') VALUES ($hotensv, $makhoa, $namsinh, quequan)";
		return mysql_query($this->conn, $qr);
	}
}
 ?>
