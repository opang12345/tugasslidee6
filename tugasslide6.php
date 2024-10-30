<?php 
// // Pembuatan function
// function tampilkan_nama() {
//     echo "nauval al ghazali";
// }
// // pemanggilan function
// tampilkan_nama();


// echo '<br/><br/><h2>STRING FUNCTION</h2>';
// $nama = "nopal";
// echo $nama;
// echo '<br/>';
// echo strtoupper($nama);
// echo ' [strtoupper] <br/>';
// echo ucwords($nama);
// echo ' [ucwords] <br/>';
// echo lcfirst($nama);
// echo ' [lcfirst] <br/>';
// echo strtolower($nama);
// echo ' [strtolower] <br/>';


// echo "<br/><br/><h2>STRING FUNCTION</h2>";
// // Fungsi Void
// function salam($nama=""){
//     echo "<h2>Assalamualaikum ".strtoupper($nama)."</h2>";
// }

// salam("ali");
// salam("fadil");
// salam();


// echo "<br/><br/><h2>STRING FUNCTION</h2>";
// // Fungsi return value
// function jumlah($a , $b) {
//     return $a + $b;
// }

// echo '$a + $b = '.jumlah(2,8)."<br/>";

// $a = 2; $b=8;
// $c = jumlah($a,$b);

// echo "$a + $b = $c ";


// echo "<br/><br/><h2>FUNCTION DEFINE BY USER ::VOID (TANPA ARGUMEN)</h2>";
// // Membuat fungsi TANPA Argumen
// function perkenalkan(){
//     echo "Assalamu'alaikum, ";
//     echo " Perkenalkan, nama saya asep<br/>";
//     echo " Senang berkenalan dengan Anda<br/> ";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalkan();

// echo "<hr/>";

// $saya = "Bedu";
// $ucapanSalam = "Selamat Pagi";

// // memanggil lagi
// perkenalkan();


// echo "<br/><br/><h2>FUNCTION DEFINE BY USER ::VOID (DENGAN ARGUMEN)</h2>";
// // Membuat fungsi DENGAN Argumen
// function perkenalan($nama, $salam){
//     echo $salam.",";
//     echo " Perkenalkan, nama saya ".$nama."<br/>";
//     echo " Senang berkenalan dengan Anda<br/> ";
// }

// // memanggil fungsi yang sudah dibuat
// perkenalan("shogir", "Hai");

// echo "<hr/>";

// $saya = "dapi";
// $ucapanSalam = "Selamat Pagi";

// // memanggil lagi
// perkenalan($saya, $ucapanSalam);


// echo "<br/><br/><h2>FUNCTION DEFINE BY USER ::VOID (NILAI DEFAULT)</h2>";
// // Membuat fungsi DENGAN Argumen
// function kenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.",";
//     echo " Perkenalkan, nama saya ".$nama."<br/>";
//     echo " Senang berkenalan dengan Anda<br/> ";
// }

// // memanggil fungsi yang sudah dibuat
// kenalan("dani", "Hi");

// echo "<hr/>";

// $saya = "hanif";
// $ucapanSalam = "Selamat Pagi";

// // memanggil lagi
// kenalan($saya);


// echo '<br/><br/><h2>RETURN VALUE</h2>'; 
// // Pembuatan function
// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah ". hitungUmur(2003, 2024). " tahun";


// echo '<br/><br/><h2>FUNCTION DEFINE BY USER ::VOID (DENGAN ARGUMEN LAIN)</h2>'; 
// // Pembuatan function
// function htngUmur($thn_lhr, $thn_skrng) {
//     $usia = $thn_skrng - $thn_lhr;
//     return $usia;
// }

// function kenal($name, $salm="Assalamualaikum"){
//     echo $salm.", ";
//     echo "perkenalkan, nama Saya ".$name."<br/>";
//     // memanggil fungsi lain
//     echo "Saya berusia ". htngUmur(2001, 2023). " tahun<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// // memnaggil fungsi kenal
// kenal("diana");


// echo '<br/><br/><h2> FUNCTION::VOID (CONTOH LAIN) </h2>'; 
// function faktorial($angka) {
//     if ($angka < 2) {
//         return 1;
//     } else {
//         //memanggil dirinya sendiri
//         return ($angka * faktorial($angka-1));
//     }
// }
//     //memanggil fungsi
//     echo "Faktorial 5 adalah ". faktorial(5);


//     function pangkatDua ($a){
//         $a = @a * $a;
//     }
//     $a = 20;
//     echo 'Sebelum Nilai $a : ' .$a;
//     pangkatDua($a);
//     echo '<br/>Sesudah Nilai $a :' .$a;

//     function pangkatDua($a){
//         global $a;
//         $a = $a * $a;
//     }
//     $a + 20;
//     echo 'Sebelum Nilai $a : '.$a;
//     pangkatDua($a);
//     echo '<be/>Sesudah Nilai $a : '
?>