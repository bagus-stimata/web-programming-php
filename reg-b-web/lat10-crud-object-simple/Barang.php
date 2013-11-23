<?php 

	class Barang{
		var $kodeBarang;
		var $namaBarang;
		var $tipe;
		var $hrgBeli;
		var $hrgJual;
		var $stok;	
		
		function setKodeBarang($kode){
			$this->kodeBarang = $kode;
		}
		function getKodeBarang(){
			return $this->kodeBarang;
		}
		function setNamaBarang($nama){
			$this->namaBarang=$nama;
		}
		function getNamaBarang(){
			return $this->namaBarang;
		}
		function setTipe($tipe){
			$this->tipe = $tipe;
		}
		function getTipe() {
			return $this->tipe;
		}
		function setHrgBeli($hrgBeli) {
			$this->hrgBeli = $hrgBeli;
		}
		function getHrgBeli(){
			return $this->hrgBeli;
		}
		function setHrgJual($hrgJual){
			$this->hrgJual = $hrgJual;
		}
		function getHrgJual() {
			return $this->hrgJual;
		}
		function setStok($stok){
			$this->stok = $stok;
		}
		function getStok() {
			return $this->stok;
		}
		
		

	}	

	
?>
