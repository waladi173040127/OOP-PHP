<?php 
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
 ?>