<?php 

//kelas Game
	class Game extends Produk implements InfoProduk{
			public $waktuMain;
			public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0,  $waktuMain = 0){
				parent:: __construct($judul, $penulis, $penerbit, $harga);
				$this->waktuMain=$waktuMain;
			}
			//Visibility
			public function setDiskon($diskon){
				$this->diskon = $diskon;
			}
			public function getInfo(){
			$str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";	
			return $str;
		}
			public function getInfoProduk(){
				//overriding
			$str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam.";
			return $str;
		}

	}
 ?>