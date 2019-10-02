<?php 
//#11 static 
class ContohStatic{
	public static $angka =1;
	public static function halo(){

		return "Hallo." . self::$angka++ ." Kali";
	}
}
echo ContohStatic::$angka;
echo "<hr>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();

 ?>