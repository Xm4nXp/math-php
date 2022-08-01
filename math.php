<?php
function tambah(int $angka1,int $angka2){
  $total = $angka1 + $angka2;
  echo "$angka1 - $angka2 : $total".PHP_EOL;
}
function kali(int $angka1,int $angka2){
  $total = $angka1 * $angka2;
  echo "$angka1 - $angka2 : $total".PHP_EOL;
}
function bagi(int $angka1,int $angka2){
  $total = $angka1 / $angka2;
  echo "$angka1 / $angka2 : $total".PHP_EOL;
}
function kurang(int $angka1,int $angka2){
  $total = $angka1 - $angka2;
  echo "$angka1 - $angka2 : $total".PHP_EOL;
}
function sisa(int $angka1,int $angka2){
  $total = $angka1 % $angka2;
  echo "$angka1 % $angka2 : $total".PHP_EOL;
}
echo "Matematika Tools By Xm4nXp".PHP_EOL;
echo "1.Tambah (+)\n2.Kurang (-)\n3.Kali (×)\n4.Bagi (÷)\n5.Sisa Bagi (%)".PHP_EOL;
$tanya = (int)readline("Pilih : ");
if ($tanya == 1){
  $angka1 = (int)readline("Angka Pertama : ");
  $angka2 = (int)readline("Angka kedua : ");
  tambah($angka1,$angka2);
}
elseif ($tanya == 2) {
  $angka1 = (int)readline("Angka Pertama : ");
  $angka2 = (int)readline("Angka kedua : ");
  kurang($angka1,$angka2);
}
elseif ($tanya == 3) {
  $angka1 = (int)readline("Angka Pertama : ");
  $angka2 = (int)readline("Angka kedua : ");
  kali($angka1,$angka2);
}
elseif ($tanya == 4) {
  $angka1 = (int)readline("Angka Pertama : ");
  $angka2 = (int)readline("Angka kedua : ");
  bagi($angka1,$angka2);
}
elseif ($tanya == 5) {
  $angka1 = (int)readline("Angka Pertama : ");
  $angka2 = (int)readline("Angka kedua : ");
  sisa($angka1,$angka2);
}
else{
  echo "Kamu Memasukkan Input Yang Salah !".PHP_EOL;
}