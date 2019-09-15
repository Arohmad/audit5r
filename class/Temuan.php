<?php
var $IdTemuan, $TanggalTemuan, $Area, $Leader, $Foto, $Keterangan;
class Temuan{
	function setIdTemuan(Int IdTemuan){
		$this->IdTemuan = $IdTemuan;
	}
	function setTanggalTemuan(String TanggalTemuan){
		$this->TanggalTemuan = $TanggalTemuan;
	}
	function setArea(String Area){
		$this->Area = $Area;
	}
	function setLeader(String Leader){
		$this->Leader = $Leader;
	}
	function setFoto(String Foto){
		$this->Foto = $Foto;
	}
	function setKeterangan(String Keterangan){
		$this->Keterangan = $Keterangan;
	}
	// return
	function getIdTemuan(){
		return $this->IdTemuan;
	}
	function getTanggalTemuan(){
		return $this->TanggalTemuan;
	}
	function getArea(){
		return $this->Area;
	}
	function getLeader(){
		return $this->Leader;
	}
	function getFoto(){
		return $this->Foto;
	}
	function getKeterangan(){
		return $this->Keterangan;
	}
}
?>
