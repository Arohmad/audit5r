<?php
var $Idkriteria, $Item5r, $Kriteria, $Pertanyaan;
class Kriteriapenilaian{
	function setIdKriteria(Int IdKriteria){
		$this->IdKriteria = $IdKriteria;
	}
	function setItem5r(String Item5r){
		$this->Item5r = $Item5r;
	}
	function setKtriteria(String Kriteria){
		$this->Kriteria = $Kriteria;
	}
	function setPertanyaan(String Pertanyaan){
		$this->Pertanyaan = $Pertanyaan;
	}
	// return
	function getIdKriteria(){
		return $this->IdKriteria;
	}
	function getItem5r(){
		return $this->Item5r;
	}
	function getKriteria(){
		return $this->Kriteria;
	}
	function getPertanyaan(){
		return $this->Pertanyaan;
	}
}
?>
