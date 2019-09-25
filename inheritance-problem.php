<?php 
//class
	class Produk {
		public $judul,
			   $penulis ,
			   $penerbit,
			   $harga,
			   $jumHalaman,
			   $waktuMain,
			   $type;

		//construtor
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0, $jumHalaman =0, $waktuMain = 0, $type){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jumHalaman = $jumHalaman;
			$this->waktuMain = $waktuMain;
			$this->type = $type;
		}

			   //sama seperti Ovaride
		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}

		public function getInfoLengkap(){
			$str = "{$this->type} : {$this->judul} | {$this->getLabel()} (RP. {$this->harga})";	
			if ($this->type == "KOMIK") {
				$str .= " {$this->jumHalaman} Halaman.";
			} else if($this->type == "GAME"){
				$str .= " {$this->waktuMain} Jam.";
			}
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
	$produk1 = new Produk("Naruto", "Masaashi Kishimoto", "Shonen", 300000, 100, 0, "KOMIK");
	$produk2 = new Produk("One Piece", "Ochiri Oda", "capCom", 250000, 0, 50, "GAME");
	
	echo $produk1->getInfoLengkap();
	echo "<br>";
	echo $produk2->getInfoLengkap();

	

 ?>