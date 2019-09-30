<?php 
//class #4
	class Produk {
		public $judul,
			   $penulis ,
			   $penerbit,
			   $harga;

		//construtor
		public function __construct($judul ="judul", $penulis ="penulis", $penerbit ="penerbit", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
		}

			   //sama seperti Ovaride
		public function getLabel(){
			return "$this->penulis, $this->penerbit";
		}
	}
//instansiasi object
	$produk1 = new Produk("Naruto", "Masaashi Kishimoto", "Shonen", 300000);
	$produk2 = new Produk("One Piece", "Ochiri Oda", "capCom", 250000);
	$Produk3 = new produk("Call of Duty");

	echo "Komik : $produk1->penulis, $produk1->penerbit ";
	echo "<br>";
	echo "Komik : ". $produk1->getLabel();
	echo "<br>";
	echo "Game : ". $produk2->getLabel();
	echo "<br>";
	echo "Game :". $Produk3->getLabel();

 ?>