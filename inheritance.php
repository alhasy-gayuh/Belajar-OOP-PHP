<?php

class Produk
{
    public $nama, $penjual, $pembeli, $harga, $jmlhbtg, $jmngopi;

    public function getLabel()
    {
        return "$this->penjual $this->pembeli";
    }

    public function __construct($nama, $penjual, $pembeli, $harga, $jmlhbtg, $jmngopi)
    {
        $this->nama = $nama;
        $this->penjual = $penjual;
        $this->pembeli = $pembeli;
        $this->harga = $harga;
        $this->jmlhbtg = $jmlhbtg;
        $this->jmngopi = $jmngopi;

    }
    public function getInfo(){
        $str = "{$this->nama} Penjual dan Pembeli : {$this->getLabel()} Rp. {$this->harga}";
        return $str;
    }
}
$produk2 = new rokok("Sampoerna", "Alhasy", "Anisa", 30500, 12, 0);
$produk3 = new kopi("Kopi Susu", "Fajar", "Taufik", 20000, 0, 20);

class rokok extends Produk{
    public function getInfo(){
        $str = "Nama Rokok : {$this->nama} Penjual dan Pembeli : {$this->getLabel()} Rp. {$this->harga} {$this->jmlhbtg} | Jumlah Batang.";
        return $str;
    }
}

class kopi extends Produk{
    public function getInfo()
    {
        $str = "Nama Kopi : {$this->nama} Penjual dan Pembeli : {$this->getLabel()} Rp. {$this->harga} {$this->jmngopi} | Jam Ngopi.";
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