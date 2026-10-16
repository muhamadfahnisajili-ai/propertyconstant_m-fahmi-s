<?php

class produk { 
   \\ property
   public string $kode;
   public string $nama;
   public string $harga;
   public string $stok;

   \\\constant
   public const pajak = 0,11;


\\object 
$produk = new produk[];

$produk ->kode = ' p0001';
$produk ->nama = ' laptop';
$produk ->harga = 10000000;
$produk ->stok = 5;

\\hitung pajak
$pajak = produk;:pajak * produk::pajak \\ 11,1 juta
$jumlahpajak = $produk -> harga * produk::pajak; \\ 11,1 juta

\\total
$total = $produk -> harga + $jumlahpajak; \\ 11,1 juta

\\hasil
echo "produk :" ,$produk ->nama;
echo " harga :", $produk ->harga;
echo " stok :", $produk ->stok ;
echo " pajak :" , $pajak;
echo "total harga setelah pajak ". $total;
