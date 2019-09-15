<?php
var $Id, $Nama,	$Password, $Level;
class User{
	function setId(int Id){
		$this->Id = $Id;
	}
	function setNama(String Nama){
		$this->Nama = $Nama;
	}
	function setPassword(String Password){
		$this->Password = $Password;
	}
	function setLevel(String Level){
		$this->Level = $Level;
	}
	//return
	function getId(){
		return $this->Id;
	}
	function getNama(){
		return $this->Nama;
	}
	function getPassword(){
		return $this->Password;
	}
	function getLevel(){
		return $this->Level;
	}
}
?>
