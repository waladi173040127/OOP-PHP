<?php 
//class #7 -
	class Produk {
		public $judul,
			   $penulis ,
			   $penerbit,
			   $harga, 
			   $waktuMain;
			   
		//construtor
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $waktuMain=0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			
		
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
		public $jumHalaman;
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $jumHalaman = 0){
			//menjalan contrak si parent
			parent::__construct($judul , $penulis , $penerbit , $harga );
			$this->jumHalaman =$jumHalaman; 

		}

		public function getInfoProduk(){
			$str = "Komik : ". parent::getInfoProduk() . "- {$this->jumHalaman} Halaman.";
			return $str;	
		}
	}
	class Game extends Produk{
			public $waktuMain;
			public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $waktuMain = 0){
				parent::__construct($judul, $penulis , $penerbit , $harga );
				$this->$waktuMain=$waktuMain;
			}
			public function getInfoProduk(){
			$str = "Game :". parent::getInfoProduk()." ~ {$this->waktuMain} Jam.";
			return $str;
		}
	}
	class CetakInfoProduk{
		public function cetak( Produk $produk){
			$str = "{$produk->judul}|  (Rp. {$produk->getLabel()})";
			return $str;
		}
	}
//instansiasi object
	$produk1 = new Komik("Naruto", "Masaashi Kishimoto", "Shonen", 300000, 100);
	$produk2 = new Game("One Piece", "Ochiri Oda", "capCom", 250000, 50);
	

	//Menampilakan data
	echo $produk1->getInfoProduk();
	echo "<br>";
	echo $produk2->getInfoProduk();

	

 ?>