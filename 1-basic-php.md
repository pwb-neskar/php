# PHP Dasar

1. Apa itu PHP?
   <div style='text-align: justify'>
   Sebuah web yang kita telusuri sehari-hari di internet dapat kita lihat sebagai penggabungan dua sisi yaitu sisi klien dan sisi server. Sisi klien adalah yang terlihat secara langsung oleh pengguna sehingga kaitannya erat dengan tampilan semisal HTML, CSS danJavascript. Sisi server merupakan bagian website yang tidak tampil ke pengguna, namun bagian ini lah yang mengolah logika bisnis dan data yang ditampilkan sehingga membuat website tersebut lebih dinamis.

   PHP adalah bahasa penulisan skrip sisi server yang memiliki berbagai kegunaan, tapi yang paling umum adalah untuk membuat konten website yang dinamis.   
   Selain itu, PHP sangat populer karena sifatnya yang open-source dan serbaguna. PHP mudah dipelajari oleh user pemula, sementara programer profesional juga bisa memanfaatkannya untuk fitur yang lebih canggih.
   </div>
2. Mempersiapkan PHP
   <div style='text-align: justify'>
      Sebelum mulai untuk menggunakan PHP kita persiapkan terlebih dahulu environment yang dibutuhkan di antaranya:
   </div>

      * apache : web server agar seolah-olah PC/laptop kita menjadi server lokal.
      * php : bahasa pemrograman yang akan dipakai untuk membangun web
      * perl : membantu agar server dapat menjalankan PHP
      * mysql : kan digunakan sebagai database

   <div style='text-align: justify'>
   Untuk menginstall semuanya tidak perlu diinstall terpisah satu per satu, kita dapat menginstall aplikasi yang all-in-one seperti <a href='https://www.apachefriends.org/download.html'>XAMPP</a>, <a href='https://www.wampserver.com/en/#download-wrapper'>WAMPP</a>, <a href='https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-22-04'>LEMP</a>,  <a href='https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-22-04'>LAMP</a> atau <a href='https://www.mamp.info/en/downloads/'>MAMP</a>.
   </div>

3. Installasi XAMPP
   <iframe width="560" height="315" src="https://www.youtube.com/embed/bSxf7Prh43I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
4. Menjalankan XAMPP
   Ketika sudah selesai menginstall XAMPP, buka aplikasi Xampp lalu akan tampil panel seperti berikut :
   !['xampp](https://lh3.googleusercontent.com/-zW57diGnmJ8/YWfq5Puc4wI/AAAAAAAAEiI/c-VEzmPEEz05eHVPhUyADgISh605aX-QACLcBGAsYHQ/w640-h387/image.png)
   Nyalakan module Apache dan Mysql dengan cara menge-klik tombol start pada panel. Jika tidak terdapat error, maka kita dapat mengecek ke browser lalu buka alamat url localhost . Tampilan localhost pertama kali akan menunjukkan seperti berikut:
   !['xampp dashboard'](https://kinsta.com/wp-content/uploads/2021/04/xampp-home-page.jpg)
5. Folder htdocs
   Pada folder instalasi XAMPP , WAMP atau MAMP terdapat folder htdocs. Lokasi nya biasanya dapat kita akses ke *C:/xampp/htdocs*.
   !['htdocs'](https://www.rumahweb.com/journal/wp-content/uploads/2022/12/folder-belajar.jpg)
6. Mulai Menulis PHP
   Sintaks PHP ditulis di dalam tag php seperti berikut:
   !['sintaks php'](https://kelasprogrammer.com/wp-content/uploads/2019/07/struktur-php.png)
7. sintaks [contoh](src/1-basic-php/1-sintaks.php)
8. komentar [contoh](src/1-basic-php/2-komentar.php)
9. Variabel dan titik koma
    Untuk menulis satu variabel di dalam PHP digunakan tanda **$** . Aturannya adalah
    - tidak boleh menggunakan angka di depan nama variabel tapi boleh menggunakan angka di tempat lain.
    - tidak boleh memuat spesial karakter (~!@#$%. dan lain lain)
    
    Setiap baris kode wajib menggunakan semikolon atau titik koma di akhir baris kode.
    [contoh](src/1-basic-php/3-variabel-dan-titik-koma.php)
10. Menampilkan Output Standar [contoh](src/1-basic-php/4-output-standar.php)
11. Tipe Data String [contoh](src/1-basic-php/5-string.php)
    Tipe data String yaitu tipe data yang berisi karakter-karakter dan biasa ditandai dengan pasangan tanda petik ganda (” “) atau tanda petik tunggal (‘ ‘).
12. Tipe Data Array [contoh](src/1-basic-php/6-array.php)
    tipe data array adalah tipe data yang mampu menampung lebih dari satu data. Elemen dari array ditandai dengan indeks agar dapat diakses. indeks array selalu diawali dengan indeks 0.

Dokumentasi PHP resmi
- Metode [string](https://www.php.net/manual/en/ref.strings.php)
- Metode [array](https://www.php.net/manual/en/ref.array.php)

Beberapa tutorial yang dapat kita ikuti bersama untuk belajar PHP:
- Playlist Sekolah Koding (Intro PHP, string dan Array) : <a href='https://www.youtube.com/playlist?list=PLdMopq3Lfhpdfgo91tsv3MfhXXbNLQBV3'>link video</a>
-  Playlist WPU Belajar PHP untuk Pemula: link video : <a href='https://www.youtube.com/playlist?list=PLFIM0718LjIUqXfmEIBE3-uzERZPh3vp6'>link video</a>

source :
- [Hostinger](https://www.hostinger.co.id/tutorial/apa-itu-php/)
- [Petanicode](https://www.petanikode.com/php-xampp-windows/)