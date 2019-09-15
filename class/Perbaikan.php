<?php
var $IdPerbaikan, $TanggalPerbaikan, $AreaPerbaikan, $FotoPerbaikan, $KetaranganPerbaikan, $IdTemuan;
class Perbaikan{
	function setIdPerbaikan(Int IdPerbaikan){
		$this->IdPerbaikan = $IdPerbaikan;
	}
	function setTanggalPerbaikan(String TanggalPerbaikan){
		$this->TanggalPerbaikan = $TanggalPerbaikan;
	}
	function setAreaPerbaikan(String AreaPerbaikan){
		$this->AreaPerbaikan = $AreaPerbaikan;
	}
	function setFotoPerbaikan(String FotoPerbaikan){
		$this->FotoPerbaikan = $FotoPerbaikan;
	}
	function setKeteranganPerbaikan(String KeteranganPerbaikan){
		$this->KeteranganPerbaikan = $KeteranganPerbaikan;
	}
	//return
	function getIdPerbaikan(){
		return $this->IdPerbaikan;
	}
	function getTanggalPerbaikan(){
		return $this->TanggalPerbaikan;
	}
	function getAreaPerbaikan(){
		return $this->AreaPerbaikan;
	}
	function getFotoPerbaikan(){
		return $this->FotoPerbaikan;
	}
	function getKeteranganPerbaikan(){
		return $this->KeteranganPerbaikan;
	}
}
?>
