<?php
  // Kita akan sering menampilkan output dari kode yang kita buat ke halaman browser. Terdapat beberapa pilihan sintaks untuk menampilkan output yaitu echo, print, print_r, dan var_dump.
  $hello ="Hello World!";
  // echo
  echo $hello;
  
  // print
  print $hello;
  
  // print_r
  print_r($hello);

  // var_dump
  var_dump($hello);
  
  /*
    untuk menampilkan output berupa tipe data string biasanya digunakan echo atau print . Sedangkan print_r dapat juga digunakan untuk 
    menampilkan tipe data array. var_dump akan menampilkan output berupa nilai dari yang ingin ditampilkan dilengkapi dengan informasi berupa 
    tipe data dan panjang data
  */
?>