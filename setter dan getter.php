<?php 

  class produk {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga =0){
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    public function setJudul ($judul){
      $this->judul = $judul;
    }

    public function getJudul(){
      return $this->judul;
    }

    public function setpenulis


  }

?>