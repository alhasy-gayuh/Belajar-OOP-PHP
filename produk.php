<?php
class Produk{ // >> ini namanya class
    public $nama, $penjual, $pembeli, $harga; // >> ini property

    public function getLabel(){ // >> ini adalah method
        return "$this->penjual $this->pembeli"; // >> Memanggil property di luar method menggunakan this
        // jika this ada di dalam class maka akan mengacu ke pada class, jika di luar class maka akan mengacu kepada property global
    }

    public function __construct($nama, $penjual, $pembeli, $harga)
    {
        $this->nama = $nama;
        $this->penjual = $penjual;
        $this->pembeli = $pembeli;
        $this->harga = $harga;

    }

}
$produk2 = new Produk("Sampoerna","Alhasy","Anisa",3452); // menggunakan construct lebih sederhana
echo $produk2->getLabel();

// $produk1 = new Produk(); // >> ini disebut object
// $produk1->nama = 'Surya'; // >> mengisi nilai dalam property
// $produk1->penjual = 'Gayuh'; // memasukkan nilai ke dalam property lalu property di masukkan ke dalam object
// $produk1->pembeli = 'Anisa';
// $produk1->harga = 40000;

// echo "Data Penjualan : Nama Produk $produk1->nama, Nama Pembeli $produk1->penjual";
// echo "<br>";
// echo "<br>";
// echo $produk2->getLabel();


// Membuat Class baru lebih bagus dengan file yang berbeda
// membuat class khusus untuk mencetak info produk
class CetakInfoProduk{
    public function cetak( Produk $produk ){ // agar lebih spesifik di sebelah $produk dapat di tambah Parameter
        $str = "Nama Barang : {$produk->nama} Penjual dan Pembeli : {$produk->getLabel()} Rp. {$produk->harga}";
        return $str;
    }
}
$produk3 = new Produk("Rokok Surya","Fajar","Taufik",20000);
$infoProduk = new CetakInfoProduk();
echo "<br>";
echo $infoProduk->cetak($produk3);