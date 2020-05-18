# EAS PEMROGRAMAN INTEGRATIF

## Nama : Christian Andrew
## NRP : 05311840000017

# SETUP PROGRAM

* Database yang saya gunakan di sini yaitu ```penyumbang.sql```
* Username dan Password untuk database yang saya gunakan yaitu ```App/Core/Constants.php```

# Controllers

Controllers yang saya gunakan ada 3 yaitu 
* ```BantuController```
* ```HomeController```
* ```RekapController```

Pada controller ```BantuController```fungsi ```index()``` berfungsi untuk menampilkan index dari view ```bantu```. Sementara untuk ```Show()``` berfungsi untuk menampilkan barang yang di berikan oleh orang yang memberi bantuan berdasarkan id.

Pada controller ```HomeController``` fungsi nya adalah menampilkan halaman home.

Pada Controller ```RekapController``` fungsi ```index()``` berfungsi untuk menampilkan index dari view ```rekap```.


# Models

Model yang saya gunakan ada 2 yaitu 
* ```Bantu```
* ```Rekap```

Pada model ```Bantu``` terdapat fungsi ```findAll()``` dimana berfungsi untuk mengambil semua data yang ada pada tabel penyumbang. 

Fungsi lain yang ada yaitu ```findBantuById()``` dimana fungsi nya adalah memilih data yang cocok dengan id yang dipilih untuk di show dan yang terakhir ada fungsi ```insert()``` berfungsi untuk memasukkan data yang di input ke dalam database. 

### Struktur dari ```Bantu``` sendiri adalah :

```nama``` dimana akan menyimpan nama yang dimasukkan oleh user.

```nama_bantuan``` dimana akan menyimpan nama bantuan yang dimasukkan oleh user.

```jenis_bantuan``` dimana akan menyimpan jenis bantuan yang di pilih oleh user melalui menu.

```jumlah_bantuan``` dimana akan menyimpan jumlah bantuan yang diberikan.

Pada model ```Rekap``` terdapat fungsi ```findAll()``` dimana berfungsi untuk mengambil semua data yang ada pada tabel penyumbang dan menjumlah seluruh kolom ```jumlah_bantuan``` dan di group berdasarkan kategori yang ada. 

Fungsi lain yang ada yaitu ```findRekapById()``` dimana fungsi nya adalah memilih data yang cocok dengan id yang dipilih untuk di show dan yang terakhir ada fungsi ```insert()``` berfungsi untuk memasukkan data yang di input ke dalam database. 

## Views

Views yang saya gunakan ada 3 yaitu 
* ```Home```
* ```Bantu```
* ```Rekap```

### Home

Berikut adalah tampilan home dari ```Website Bantuan Covid```


![home](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/Home.png)

### Bantu

Berikut adalah tampilan ```Bantu``` dari ```Website Bantuan Covid``` dimana fungsi nya adalah memasukkan nama orang yang memberi bantuan dan juga barang apa yang di sumbangkan beserta jumlah nya.   


![bantu](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/Bantu.png)

Berikut ini adalah tampilan modal dari view ```bantu``` dimana bisa dibilang ini adalah form untuk memasukkan donasi yang orang berikan

![modal](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/Modal.png)

### Rekap

Dan yang terakhir adalah tampilan ```Rekap``` dari ```Website Bantuan Covid``` dimana fungsi nya adalah menampilkan rekap barang yang sudah disumbangkan dan dibagi berdasarkan kategori yang ada. Selain itu, setiap kategori akan menampilkan berapa jumlah barang yang ada.

![rekap](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/Rekap.png)


# Contoh Input dan Output

## Input View Bantu

Pada contoh input kita akan memasukkan nama ```Andrew``` dan kita akan menyumbang ```Obat``` dengan nama obat ```Bodrex``` dengna jumlah ```10``` dan setelah itu kita tekan tombol ```Tambah Data```.
![input](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/input.png)

## Ouput View Bantu

Setelah kita masukkan ke database maka akan menambah sebuah list baru paling bawah dengan nama ```Andrew```.

![output](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/output.png)


ketika di tekan ```Show``` maka akan menampilkan data terperinci sesuai dengan nama yang di tekan. Data yang di tampilkan pada show adalah ```nama```, ```nama bantuan``` yang diberikan dan juga ``` jumlah bantuan``` yang diberikan.

![output2](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/output2.png)



# Permasalahan

* Pada menu bantu user jika ingin menginputkan lebih dari 1 barang maka harus memasukkan ulang nama.

* User yang sama tidak bisa hanya tampil 1 kali saja melainkan akan tampil 2 kali sehingga jika user di tekan akan menampilkan 1 item saja sementara user bisa memasukkan beberapa item sekaligus.

* Rekap belum ada fungsi show dikarenakan belum sempat ditambah dimana fungsi nya akan sama seperti show pada ```Bantu``` akan menampilkan detail dari bantuan yang diberikan.

# Konklusi

Setelah melakukan pencarian mengenai masalah yang ada di atas maka jawaban yang saya dapat adalah sebagai berikut.

* Jika ingin menginput lebih dari 1 barang maka ada dua pilihan dimana pilihan pertama adalah kita bisa menggunakan session yang harus merombak semua program yang sudah ada. Solusi ke-dua adalah menggunakan ajax namun saya masih belum begitu paham bagaimana menggunakan ajax pada pemrograman MVC.

* User yang sama bisa ditampilkan 1 kali saja kita bisa menggunakan query pada database menggunakan command ```GROUP BY``` dimana akan melakukan select pada database dan di group berdasarkan nama. Untuk solusi ini sama seperti sebelumnya dimana kita harus merombak total aplikasi yang ada dan membangun ulang.

* Rekap bisa di copy command dari model ```Bantu``` dimana bisa menampilkan apa saja yang ada dalam kategori tersebut menggunakan beberapa parameter pada SQL seperti ```GROUP BY``` dan melakukan seleksi berdasarkan kategori yang ada.