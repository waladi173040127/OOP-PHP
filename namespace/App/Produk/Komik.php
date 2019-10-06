<?php 
//kelas komik
	class Komik extends Produk implements InfoProduk{
		public $jumHalaman;
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0,  $jumHalaman = 0){
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->jumHalaman = $jumHalaman;
		}

		public function getInfo(){
			$str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";	
			return $str;
		}
		public function getInfoProduk(){
			//overriding
			$str = "Komik :". $this->getInfo() ."- {$this->jumHalaman} Halaman.";
			return $str;	
		}
	}
 ?>