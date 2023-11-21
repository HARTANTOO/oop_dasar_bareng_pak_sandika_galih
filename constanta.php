<!--constanta dlm oop adl sebuah nilai yg tidak dapat diubah nilainya
cara aksesnya dengan memberi tanda laptop(::)Dolar
dalam propertynya dengan keyword const Dolar ='';

-->

<?php

class Kambingbabon
{
  const Etawa = 25;

  public function kambing_etawa($harga)
  {
    return "jumlah kambing sebelah adalah :" . $harga * self::Etawa;
  }
}

$ternak = new kambingbabon();


echo $ternak->kambing_etawa(3);



?>