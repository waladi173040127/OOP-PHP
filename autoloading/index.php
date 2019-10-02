<?php 
require_once 'App/init.php';

//instansiasi object
	$produk1 = new Komik("Naruto", "Masaashi Kishimoto", "Shonen", 300000, 100);
	$produk2 = new Game("One Piece", "Ochiri Oda", "capCom", 250000,50);
	
	$cetakProduk = new CetakInfoProduk();
	$cetakProduk->tambahProduk( $produk1);
	$cetakProduk->tambahProduk( $produk2);
	echo $cetakProduk->cetak();

 ?>