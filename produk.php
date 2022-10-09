<?php
class Produk{ // >> ini namanya class
    public $nama, $penjual, $pembeli, $harga; // >> ini property

    public function getLabel(){ // >> ini adalah method
        return "$this->nama $this->penjual"; // >> Memanggil property di luar method menggunakan this
        // jika this ada di dalam class maka akan mengacu ke pada class, jika di luar class maka akan mengacu kepada property global
    }

}
$produk1 = new Produk(); // >> ini disebut object
$produk2 = new Produk();

$produk1->nama = 'Surya'; // >> mengisi nilai dalam property
$produk1->penjual = 'Gayuh'; // memasukkan nilai ke dalam property lalu property di masukkan ke dalam object
$produk1->pembeli = 'Anisa';
$produk1->harga = 40000;

$produk2->nama = 'Kopi'; // >> mengisi nilai dalam property
$produk2->penjual = 'Fajar'; // memasukkan nilai ke dalam property lalu property di masukkan ke dalam object
$produk2->pembeli = 'Taufik';
$produk2->harga = 34220;

echo "Data Penjualan : Nama Produk $produk1->nama, Nama Pembeli $produk1->penjual";
echo "<br>";
echo "<br>";
echo $produk2->getLabel();