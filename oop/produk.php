<?php
// Nama : Nina Rosita
// NRP : 203040082
?>

<?php

// Jualan Produk
// Komik
// buku
class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  // public function sayHello()
  // {
  //   return "Hello World!";
  // }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Dillan";
$produk4->penulis = "Piddi baiq";
$produk4->penerbit = "mediacetak";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "buku : "  . $produk4->getLabel();
