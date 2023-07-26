<?php
  // 1. Deklarasi Array
    // membuat array baru dengan cara seperti berikut:
    $siswa = array("regi", "bobby", "ahmad");
    print_r($siswa);

    $trainer = ["abduh", "aghnat", "yoga"];
    print_r($trainer);
    // ingat! untuk menampilkan array ke output gunakan sintaks print_r.


  // 2. Mengakses Elemen Array
    // untuk mengakses elemen pada array kita dapat arahkan dengan menunjuk indeks elemen yang kita inginkan:
    $nilai = [12, 14, 19];
    // akan menampilkan 12 yang merupakan elemen array indeks ke 0
    echo $nilai[0];


  // 3. Menambahkan elemen baru pada array
    // Terkadang kita ingin menambahkan isi dari array dengan suatu data. caranya adalah dengan $array[] = <data yang ingin ditambahkan>
      $siswa = array("regi", "bobby", "ahmad");
      // siswa awal sebelum ditambah
      print_r($siswa);
      $siswa[] = "putri";
      // menampilkan siswa setelah ditambah data baru "putri"
      print_r($siswa);

    // jika data yang ingin ditambahkan lebih dari satu data, kita bisa gunakan metode array_push(). berikut ini
      $stack = array("orange", "banana");
      array_push($stack, "apple", "raspberry");
      print_r($stack);


  // 4. count() untuk menghitung panjang array
    // metode count digunakan untuk menghitung panjang dari sebuah array.
      $keranjang = ["pisang", "apel", "mangga"];
      // menampilkan panjang array $keranjang
      echo count($keranjang);

  // 5. Array Asosiatif
    /**
     * Array Asosiatif adalah tipe array yang dapat menyimpan banyak data sebagai pasangan key dan value. Berbeda dengan array biasa yang menggunakan angka untuk menandai indeks, array asosiatif menggunakan key sebagai indeks yang dapat kita set sendiri.
     * penulisan array asosiatif yaitu dengan memasangkan key dan value dengan pemisah tanda panah => .
     * Contohnya sebagai berikut :
     */
      $siswa1 = [ "nama" => "abduh"
              "kelas" => "laravel"
              "nilai" => 70
            ];
      print_r($siswa1);

      // menambahkan key value baru ke array $siswa1
      $siswa1["email"] = "abduh@mail.com";

      print_r($siswa1);
  // 6. Array Multidimentional
    /**
     * Array Multidimentional adalah tipe array yang dapat menyimpan array dalam sebuah array 
     * Contohnya sebagai berikut:
     */
      $trainer = array (
        array("Rezky","Laravel"),
        array("Abduh","Adonis"),
        array("Iqbal","VueJs"),
      );
      
      echo "<pre>";
      print_r($trainer);
      echo "</pre>";
      ?>
      
      //output
      
      Array
      (
          [0] => Array
              (
                  [0] => Rezky
                  [1] => Laravel
              )
      
          [1] => Array
              (
                  [0] => Abduh
                  [1] => Adonis
              )
      
          [2] => Array
              (
                  [0] => Iqbal
                  [1] => VueJs
              )
      
      )
?>