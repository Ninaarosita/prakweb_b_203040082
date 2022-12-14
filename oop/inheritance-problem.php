<?php
// Nama : Nina Rosita
// NRP : 203040082
?>

<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
  {
    // echo "Hello World!";
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    // Komik : Naruto | Masashi Kishimoto, Shonen Jump, (Rp. 30000) - 100 Halaman.
    // $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";

    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "buku") {
      $str .= " - {$this->waktuMain} Jam.";
    }

    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    // $str = "Naruto | Masashi Kishimoto, Shonen Jump, (Rp. 30000)";
    $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Dillan", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "buku");

// Komik : Naruto | Masashi Kishimoto, Shonen Jump, (Rp. 30000) - 100 Halaman.
// Game : Dillan | Neil Druckmann, Sony Computer, (Rp. 250000) - 50 Jam.

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
