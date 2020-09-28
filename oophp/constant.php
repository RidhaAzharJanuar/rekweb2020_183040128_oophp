<?php

// //define(name(kapital), value)

// //kalau diphp ga bsa disimpan dikelas

// define('NAMA', 'Sandhika Galih');
// echo NAMA; 

// echo "<br>";


// //bisa dimasukin di kelas
// const UMUR = 32;
// echo UMUR;


// class Coba {
// 	const NAMA = 'Sandhika Galih';

// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba() {
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;










?>