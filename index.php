<?php

//panggil file properttyconstant
require('./propertyconstant.php');

use Pbo\Marketplace\produk;

//object 
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


