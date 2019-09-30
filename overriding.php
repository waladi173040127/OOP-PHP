<?php 
//class #7 -
	class Produk {
		public $judul,
			   $penulis ,
			   $penerbit,
			   $harga,
			   $jumHalaman,
			   $waktuMain;
			   
		//construtor
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $jumHalaman =0, $waktuMain = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jumHalaman = $jumHalaman;
			$this->waktuMain = $waktuMain;
		
		}

			   //sama seperti Ovaride
		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
		//method
		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";	
			return $str;
		}
	}

//kelas baru
	class Komik extends Produk{
		public function getInfoProduk(){
			$str = "Komik : ". parent::getInfoProduk() . "- {$this->jumHalaman} Halaman.";
			return $str;	
		}
	}
	class Game extends Produk{
			public function getInfoProduk(){
			$str = "Game :". parent::getInfoProduk()." ~ (RP. {$this->harga})~
		 {$this->waktuMain} Jam.";
			return $str;
		}
	}
	class CetakInfoProduk{
		public function cetak( Produk $produk){
			$str = "{$produk->judul}| {$produk->getLabel()} (Rp. {$produk->harga})";
			return $str;
		}
	}
//instansiasi object
	$produk1 = new Komik("Naruto", "Masaashi Kishimoto", "Shonen", 300000, 100, 0);
	$produk2 = new Game("One Piece", "Ochiri Oda", "capCom", 250000, 0, 50);
	

	//Menampilakan data
	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();

	

 ?>