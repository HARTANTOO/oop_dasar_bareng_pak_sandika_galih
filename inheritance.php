<?php

//membuat produk $this berguna untuk memanggil property diluat dr method
class Produk
{
  //property
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktumain,
    $tipe;
  //method

  //constracor method
  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0,
    $jmlHalaman = 0,
    $waktuMain = 0,
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->$harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    //komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000)-100 halaman.
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}



class Komik extends Produk
{ //buat class chaild dari kelas produk (komik)
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

    return $str;
  }
}

class Game extends Produk
{ //buat class chaild dari kelas produk (game)
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain}";

    return $str;
  }
}



class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Produk("uncharted", "Neil Durkman", "Sony Computer", 25000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
