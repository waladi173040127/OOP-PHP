<?php 
//class #15-
	interface InfoProduk{
		//INTERFACE
		public function getInfoProduk();
	}
	Abstract class Produk {
		protected $judul,
			   $penulis ,
			   $penerbit,
			   $harga,
			   $diskon =0;
		

		//construtor
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		
		}
		//Visibility
		public function setHarga($harga){
			$this->harga = $harga;
		}
		public function getHarga(){
				return $this->harga - ($this->harga * $this->diskon /100);
			}
		//setter & getter
		public function setJudul( $judul){
			$this->judul = $judul;
		}
		public function getJudul(){
			return $this->judul;
		}
		public function setPenulis($penulis){
			$this->penulis = $penulis;
		}
		public function getPenulis(){
			return $this->penulis;
		}
		public function setPenerbit($penerbit){
			$this->penerbit= $penerbit;
		}
		public function getPenerbit(){
			return $this->penerbit;
		}
			   //sama seperti Ovaride
		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
		//method

		abstract public function getInfo();
		
	}

//kelas baru
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
	//kelas cetakInfoProduk
	class CetakInfoProduk{
		public $daftarProduk = array();

		public function tambahProduk( Produk $produk){
			$this->daftarProduk[] = $produk;
		}
		public function cetak( ){
			$str = "DAFTAR PRODUK : <br>";
			foreach($this->daftarProduk as $p){
				$str .= "- {$p->getInfoProduk()} <br>";
			}
			return $str;
		}
	}
//instansiasi object
	$produk1 = new Komik("Naruto", "Masaashi Kishimoto", "Shonen", 300000, 100);
	$produk2 = new Game("One Piece", "Ochiri Oda", "capCom", 250000,50);
	
	$cetakProduk = new CetakInfoProduk();
	$cetakProduk->tambahProduk( $produk1);
	$cetakProduk->tambahProduk( $produk2);
	echo $cetakProduk->cetak();
	

 ?>