# EAS PEMROGRAMAN INTEGRATIF

## SETUP PROGRAM

* Database yang saya gunakan di sini yaitu ```penyumbang.sql```
* Username dan Password untuk database yang saya gunakan yaitu ```App/Core/Constants.php```

## Controllers

Controllers yang saya gunakan ada 3 yaitu 
* ```BantuController```
* ```HomeController```
* ```RekapController```

Pada controller ```BantuController```fungsi ```index()``` berfungsi untuk menampilkan index dari view ```bantu```. Sementara untuk ```Show()``` berfungsi untuk menampilkan barang yang di berikan oleh orang yang memberi bantuan berdasarkan id.

Pada controller ```HomeController``` fungsi nya adalah menampilkan halaman home.

Pada Controller ```RekapController``` fungsi ```index()``` berfungsi untuk menampilkan index dari view ```rekap```.


## Models

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

Berikut adalah tampilan ```Bantu``` dari ```Website Bantuan Covid``` dimana fungsi nya adalah memasukkan nama orang yang memberi bantuan dan juga barang apa yang di sumbangkan beserta jumlah nya.   


![bantu](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/Bantu.png)

Berikut ini adalah tampilan modal dari view ```bantu``` dimana bisa dibilang ini adalah form untuk memasukkan donasi yang orang berikan

![modal](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/Modal.png)

Dan yang terakhir adalah tampilan ```Rekap``` dari ```Website Bantuan Covid``` dimana fungsi nya adalah menampilkan rekap barang yang sudah disumbangkan dan dibagi berdasarkan kategori yang ada. 

Setiap kategori menampilkan berapa jumlah barang yang ada.

![rekap](https://github.com/Alpha666/eas-pemrograman-integratif/blob/master/screenshot/Rekap.png)


# Permasalahan

* Pada menu bantu user jika ingin menginputkan lebih dari 1 barang maka harus memasukkan ulang nama.

* user yang sama tidak bisa hanya tampil 1 kali saja melainkan akan tampil 2 kali.

* Rekap 