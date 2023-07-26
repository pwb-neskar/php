<?php
  // Tipe data String yaitu tipe data yang berisi karakter-karakter dan biasa ditandai dengan pasangan tanda petik ganda (” “) atau tanda petik tunggal (‘ ‘).
  $sapa = "Halo Guys!"
  $hello = 'Hello World!'

  /**
   * pada tipe data string terdapat metode yang melekat padanya. kita akan membahas beberapa di antara metode string.
   * 1. metode strlen dipakai untuk mengetahui panjang dari sebuah string
   * 2. metode strcmp digunakan untuk membandingkan kesamaan di antara dua variabel string. output dari metode ini yaitu berupa tipe data logika boolean (true atau false).
   * 3. metode strtoupper digunakan untuk membuat sebuah string menjadi ditulis ke dalam karakter kapital.
   * 4. metode strtolwer kebalikan dari strtoupper yaitu membuat suatu string ditulis menjadi karakter-karakter non-kapital.
   * 5. metode strpos untuk mengakses suatu karakter atau kumpulan karakter tertentu pada string. 
   * 6. metode substr untuk mengambil beberapa karakter pada string. menerima 3 parameter (<string yang ingin dipotong>, <indeks mulai potong>, <panjang yang ingin dipotong>).
   */

  // contoh strlen
    echo 'Contoh strlen:';
    $jargon = "Tetap Santai dan Berkualitas";
   // akan menampilkan panjang variabel $jargon yaitu 28 karakter
    echo strlen($jargon); 
   // akan menampilkan panjang string 11
    echo strlen("Halo semua!")

  // contoh strcmp
    $passwordasli = "belajarPHP";
    $passwordinput = "belajarPHP";
    $output = strcmp($passwordasli, $passwordinput);
    if ($output !== 0)
      {
        echo "Password anda salah!";
      }
    else
      {
        echo "Password anda benar.";
      }
    /*
      boolean di PHP
      booelan di PHP yaitu true dan false bisa juga ditulis dengan integer 1 untuk true, integer 0 untuk false
    */

  // contoh strtoupper
    $statement = "ini gak marah, cuman caps";
    // menampilkan INI GAK MARAH, CUMAN CAPS
    echo strtoupper($statement);

  // contoh strtolwer
    $marah = "INI MARAH";
    // menampilkan ini marah
    echo strtolower($marah);

  // contoh strpos
    $kalimat = "Saya sedang belajar PHP";
    $katayangdicari = "PHP";
    $posisi = strpos($kalimat, $katayangdicari);
    echo $posisi;

  // contoh substr
    $string = "Saya suka PHP";
    // akan menampilkan suka PHP
    echo substr($string, 5, 8);
    // akan menampilkan PH
    echo substr($string, -3, 2); 


?>