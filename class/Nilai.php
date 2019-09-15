<?php
var $IdNilai, $Tanggal, $Area, $Nilai, $IdKriteria;
class Nilai extends Kriteriapenilaian{
	function setIdNilai(Int IdNilai){
		$this->IdNilai = $IdNilai;
	}
	function setTanggal(String Tanggal){
		$this->Tanggal = $Tanggal;
	}
	function setArea(String Area){
		$this->Area = $Area;
	}
	function setNilai(Int Nilai){
		$this->Nilai = $Nilai;
	}
	// return
	function getIdNilai(){
		return $this->IdNilai;
	}
	function getTanggal(){
		return $this->Tanggal;
	}
	function getArea(){
		return $this->Area;
	}
	function getNilai(){
		return $this->Nilai;
	}
}
?>
