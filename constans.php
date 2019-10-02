<?php 

//tidak bisa di akses di dalam kelas
define('NAMA', 'Waladi Widarno');

echo NAMA;
echo "<hr>";
//hanya bisa di akses di dalam kelas
const UMUR = 20;
echo UMUR;

echo "<hr>";
// class Coba {
// 	const NAMA = 'Waladi';
// }

// echo Coba::NAMA;

echo __LINE__;

 ?>