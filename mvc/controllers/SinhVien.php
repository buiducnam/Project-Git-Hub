<?php 
class SinhVien extends Controller{
	public function SayHi(){
		$teo = $this->model("SinhVienModel");
		echo $teo->getSV();
	}

	public function getDSSV(){
		//Model
		$sv = $this->model("SinhVienModel");
	 	// $tong = $teo->TinhTong($a, $b);

	 	//View
		$this->view("SinhVien", [
			"Page"=>"DSSV",
			// "number"=>$tong,
			// "color"=>"red",
			// "arr"=>["A", "B", "C"],
			// "SV"=> $teo->SinhVien()
			"SV" => $sv->getAllSinhVien()
		]);
		
	}

	public function ThemSV($masv, $hotensv, $makhoa, $namsinh, $quequan){
		$sv = $this->model("SinhVienModel");

		$this->view("SinhVien", [
			"Page" => "Them",
			"SV" => $sv->ThemSV()
		]);

		$sv->hotensv = $_POST[];
	}
}
 ?>
