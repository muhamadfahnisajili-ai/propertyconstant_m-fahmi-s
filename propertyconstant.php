<?php

class produk { 

   //property
   public string $kode;
   public string $nama;
   public string $harga;
   public string $stok;

   
   //constant
   public const PAJAK = 0.11;

   public function pajak() {
      return self::PAJAK * 100; //11
   }

   public function total() {
      return $this->harga + ($this->harga * self::PAJAK);
   }
}
$produk=new produk();
$produk->kode = "P001";
$produk->nama = ' laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hasil
echo "produk :".$produk ->nama;
echo "<br/>";

echo " harga :".$produk ->harga;
echo "<br/>";

echo " stok :".$produk ->stok;
echo "<br/>";

echo " pajak :".$produk->pajak();
echo "<br/>";
echo "<br/>";
echo "total harga setelah pajak ". $produk->total();