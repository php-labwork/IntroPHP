<?php 
// Ini syntax pembukan php

/**
 * PENJELASAN KONSTANTA
 * Konstanta merupakan suatu tempat dimemory yang digunakan oleh bahasa pemograman
 * untuk menyimpan data sementara selama runtime suatu program berjalan.
 * Konstanta sendiri bersifat sementara, dan tetap sehingga nilainya tidak dapat
 * berubah ubah.
 * 
 * Dalam PHP konstanta disimbolkan dengan tanda berawalan define() yang disertai nama dari 
 * konstanta yang akan dibuat, dan juga nilai dari konstanta tersebut.
 * Sama seperi bahasa pemograman lain, di PHP konstanta memiliki 1 siklus sebelum dapat digunakan
 * yaitu deklarasi sekaligus inisialisasi.
 * 
 * Dalam PHP terdapat aturan dalam menggunakan konstanta yaitu sebagai berikut
 * 1. Konstanta harus selalu diawali dengan tanda define(nama, nilai, case-sensitive);
 * 2. Nama konstanta harus diawali dengan huruf atau karakter underscore _
 * 3. Nama konstanta tidak boleh diawali dengan nomor
 * 4. Nama konstanta dapat bersifat case-sensitive dan tidak, tergantung pada saat inisialisasi, kita mau menggunakan fiturnya atau tidak.
 * 5. Default dari penamaan konstanta adalah case-sensitive yang disimbolkan dengan false, dan untuk
 * membuatnya tidak case-sensitive, dapat diganti menjadi true.
 * 
 * Deklarasi sekaligus Inisialisasi merupakan suatu siklus dimana suatu konstanta itu ditentukan nilainya
 * sebagai contoh define('DATA_TEXT', 'Example Text', false);
 * yang artinya konstanta $text telah dibuat, dan berisikan "Example Text".
 * 
 * untuk lebih lengkapnya silahkan lihat contoh dibawah ini.
 * 
 * sumber: https://www.w3schools.com/php7/php7_variables.asp
 */

// Contoh Konstanta Case-Sensitive
define("NUMBER", 10, false);
define("BOOLEAN", true, false);
define("TEXT", "EXAMPLE TEXT", false);

// Contoh Konstanta Tidak Case-Sensitive
define("NUMBER", 10, true);
define("BOOLEAN", true, true);
define("TEXT", "EXAMPLE TEXT", true);

// Ini syntax penutup php
?>