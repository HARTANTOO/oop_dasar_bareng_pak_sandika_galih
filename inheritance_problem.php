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
    $tipe
  ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->$harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

public function getInfoLengkap(){
  //komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 30000)-100 halaman.
  $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  if($this->tipe == "Komik"){
    $str .= " - {$this->jmlHalaman} Halaman.";
  } else if( $this->tipe == "Game"){
    $str .= "~ {$this->waktuMain} Jam.";
  }

  return $str;
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("uncharted", "Neil Durkman", "Sony Computer", 25000);


//cara kerjanya ambil dari fungsi get label isi dari instansiasi klo tdk ada akan diisi dari difault
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
