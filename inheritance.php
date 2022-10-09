<?php

// pada tahap ini semua fungsionalitas dari setiap lebih terlihat jelas
// class produk fokus kepada property yang general
// class child seperti kopi dan rokok berfokus kepada spesifikasi masing-masing class.

class Produk
{
    public $nama, $penjual, $pembeli, $harga, $jmlhbtg, $jmngopi;

    public function getLabel()
    {
        return "$this->penjual $this->pembeli";
    }

    public function __construct($nama, $penjual, $pembeli, $harga)
    {
        $this->nama = $nama;
        $this->penjual = $penjual;
        $this->pembeli = $pembeli;
        $this->harga = $harga;

    }
    public function getInfo(){
        $str = "{$this->nama} | Penjual dan Pembeli : {$this->getLabel()} Rp. {$this->harga}";
        return $str;
    }
}
$produk2 = new rokok("Sampoerna", "Alhasy", "Anisa", 30500, 12, 0);
$produk3 = new kopi("Kopi Susu", "Fajar", "Taufik", 20000, 0, 20);

class rokok extends Produk{
    public $jmlhbtg;

    public function __construct($nama, $penjual, $pembeli, $harga, $jmlhbtg)
    {
        parent::__construct($nama, $penjual, $pembeli, $harga);
        $this->jmlhbtg = $jmlhbtg;
    }

    public function getInfo(){
        $str = "Nama Rokok : ".parent::getInfo()." {$this->jmlhbtg} | Jumlah Batang.";
        return $str;
    }
}

class kopi extends Produk{
    public $jmngopi;

    public function __construct($nama, $penjual, $pembeli, $harga, $jmngopi)
    {
        parent::__construct($nama, $penjual, $pembeli, $harga);
        $this->jmlhbtg = $jmngopi;
    }

    public function getInfo()
    {
        $str = "Nama Kopi : ".parent::getInfo()." {$this->jmngopi} | Jam Ngopi.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "Nama Barang : {$produk->nama} Penjual dan Pembeli : {$produk->getLabel()} Rp. {$produk->harga} Ngopi.";
        return $str;
    }
}
$infoProduk = new CetakInfoProduk();

echo $produk2->getInfo();
echo "<br>";
echo $produk3->getInfo();