Nama                : Jonathan Rexy Andreas
NIM                 : C2257201029
Kelas/Semester      : SI-A / 6
Mata Kuliah         : Teknologi Web
Dosen Pembimbing    : Rommi Kaestria M.Kom.

UAS Teknologi Web Membuat Web Dinamis.

Pertama saya mengucapkan terima kasih kepada bapak Rommi yang telah membimbing kami dalam mata kuliah Teknologi Web, Beliau telah mengajarkan kepada kami banyak hal seputar teknologi website dan hal lainnya yang bermanfaat bagi kami anak didiknya.

Saya disini memberikan hasil pekerjaan UAS saya berupa aplikasi website yang menampilkan data dan informasi seputar Laptop yang dijual di kota Palangka Raya dengan nama "Aplikasi Info Laptop PKY".

Pertama-tama saya mohon maaf karena sebenarnya ada kekurangan dari pengerjaan UAS saya kali ini karena saya ada kebingungan aplikasi apa yang ingin saya buat sehingga terjadilah kekurangan tersebut. Kekurangan dari aplikasi saya berdasarkan apa yang standar penilaian UAS Matkul ini adalah:

(1) Tidak adanya Front-End aplikasi sehingga aplikasi langsung memasuki halaman Back-End yang isinya tempat untuk melakukan CRUD Data.

(2) Tidak adanya Protokol Keamanan dikarenakan tidak adanya Front-End di poin 1 sehingga bersambung ketidakadaan keamanan aplikasi contohnya halaman login sebelum masuk ke halaman Back-End.

(3) Proses CRUD harus diikuti dengan benar, karena program tidak akan berjalan dengan benar.

Deskripsi Aplikasi:

Jadi Aplikasi ini merupakan aplikasi sederhana yang menunjukkan informasi seputar laptop yang dijual di kota Palangka Raya. Saat ini informasi yang ditunjukkan di aplikasi web masih sedikit karena masih dalam tahap pengembangan. Rencana pada aplikasi dijelaskan di bawah ini:

1. Bagian Front-End memiliki dua file dimana file pertama menjadi bagian paling awal yang menunjukkan gambar-gambar laptop saja tetapi bila gambar tersebut di-klik maka pengguna dialihkan ke halaman selanjutnya yang berisikan deskripsi dari laptop tersebut mulai dari nama, lalu ke spesifikasi sampai ke harga.

2. Diantara Front-End dan Back-End ada halaman login yang berperan sebagai penjaga dan jalur yang menjembatani kedua End untuk melindungi data-data yang dikelola di halaman Back-End.

3. Pada bagian Back-End terdapat Halaman Home, Input Data Laptop Baru, Menampilkan Daftar Laptop yang diinput baik itu yang terbaru atau lama, dan terakhir halaman DocumentPDF dimana data laptop sebelumnya dalam bentuk yang ditampilkan di aplikasi, di halaman ini ditampilkan dalam bentuk dokumen dan memiliki fitur untuk mengunduhnya ke piranti User dan mencetak langsung tanpa mengunduhnya.

Teknologi yang digunakan untuk membuat aplikasi ini yaitu produk dari bahasa pemrograman PHP yaitu Framework CodeIgniter versi 4.4.5. Teknologi ini menggunakan Controller yang bertugas dalam menjalankan fungsi-fungsi aplikasi seperti Js.Script entah itu pergi ke halaman lain, menambah data, edit bahkan menghapus data.

Berikut beberapa penjelasan sedikit dari penulis:

1. Controller-controller pada folder controller berfungsi sebagai alat untuk menjalankan fungsi-fungsi aplikasi baik itu menampilkan atau fungsi CRUD lain.

2. Folder Views berisi file-file yang menampilkan tampilan halaman yang diarahkan oleh Controller ke view yang diinginkan.

3. $dml yang dilihat adalah model yang digunakan dalam melakukan CRUD yang berperan banyak. model $dml disimpan di folder Models dengan nama DML.

4. Cara penulis untuk membuat database adalah menggunakan adminer, yang merupakan salah satu produk PHP tetapi proses Export dilakukan melalui Laragon karena ada masalah dengan fungsi Export adminer. Database yang dibuat bernama laptop_pky dengan 2 tabel utama yang saling berelasi dan 1 tabel view.

5. Karena aplikasi hanya memiliki bagian Back-End saja maka fitur yang dimiliki adalah standar CRUD yaitu Create Data (Buat atau Masukkan Data), Read Data (Baca Data), Update Data (Perubahan atau Pembaruan Data), Delete Data (Penghapusan Data), dengan fitur tambahan yaitu menampilkan data dalam bentuk DocumentPDF dan mencetaknya.

Cara menjalankan Aplikasi adalah sebagai Berikut:

1. Masuk ke Folder master dengan nama aplikasi-info-laptop-pky.

2. Setelah itu masuk ke Subfolder dengan nama public, dari situ akan langsung diarahkan ke halaman aplikasi yaitu halaman Home.

3. Pada bagian kiri aplikasi ada sidebar untuk navigasi User ke halaman lain yaitu input data, daftar data laptop, dan cetak data dalam bentuk DocumentPDF.

4. Pada bagian input data, semua data wajib diisi bila tidak data tidak akan dimasukkan.

5. Bila ingin mengedit data pergi ke bagian Daftar laptop lalu ke Informasi Laptop lalu cari ikon pensil dengan kotak yang berwarna biru dan klik ikon tersebut sehingga diarahkan ke halaman edit. Pada bagian Edit bagian Sufiks dan Jenis Performa Laptop di kosongkan oleh sistem secara tersendiri, bila tidak diisi sistem akan mengalami error yang membuat data tidak bisa disimpan maka kedua bagian tersebut harus diisi ulang meski yang di edit hanyalah nama laptop.

6. Untuk hapus data laptop masuk ke tab halaman daftar laptop dan informasi laptop dan ketik bagian ikon sampah warna merah di bagian kanan setelah ikon edit. Setelah di klik pesan peringatan muncul sebagai penentu apakah data benar di hapus atau tidak.

-- Untuk Screenshot Aplikasi saya masukkan di bagian paling luar setelah folder master yaitu subfolder dengan nama tampilan aplikasi.--