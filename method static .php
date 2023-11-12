<!--method static gunanya untuk mengakses sebuah class tanpa membuat modifier/ dibuat objek trlebih dahulu
cara membuatnya

class contohStatic{
  public Static (nama property)$angka=1;

  public Static (nama method)bilanganBulat(){
     aksi
  }
}
 
//cara panggilnya ksh titik :: 

contohStatic::$angka   *property

contohStatic::bulanganBulat();    *method

self::$angka    *menggabungkan string



-->


<?php

class ContohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "Halo." . self::$angka . "kali.";
  }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();



?>