<?php

/* 
   - API (Aplication Programming Interface)

    adalah sekumpulan fungsi, subroutine,
    protokol komikasi, atau kakas/tools
    untuk membuat prangkat lunak.


   - Interface / Antarmuka

    Dalam komputasi, antarmuka adalah batas bersama 
    di mana dua atau lebih komponen terpisah dari 
    sistem komputer bertukar informasi. 
    Pertukaran dapat antara perangkat lunak, 
    perangkat keras komputer, perangkat periferal, 
    manusia, dan lain lain.
    Contoh pada Mother board ada slot HDMI, untuk menghubungkan Monitor dengan komputer/motherboard


API 

 - Antarmuka yang berupa kumpulan fungsi yang dapat
   di-'panggil' atau dijalan kan oleh program lain

 - Penerapanya sangat luas
    - Bahasa Pemrograman
    - Framework & Library
    - Sistem Operasi
    - Web Api / Web Service
        - Rest Api (REpresentational State Transfer)
        - Soap (Simple Object Access Protokol)

*/

//  Api dalam Bahasa pemrograman
/*
    Koneksi ke database MYsql Menggunakan API mysqli  di bahasa pemrograman PHP
    Menghubungkan Program PHP dengan Database Mysql
*/
$mysqli = new mysqli('localhost','root', 'root', 'mahasiswa', );
$result = $mysqli->query('SELECT * FROM mahasiswa');
$row    = $result->fetch_assoc();

// Api dalam frameWork Codiginter
    $this->db->get('mahasiswa');


/*
    Web Api / Web Service 
     Adalah Sebuah sistem perangkat lunak 
     yang dibuat untuk mendukung
     interoperabilitas / interaksi
     antar 2 aplikasi yang berbeda melalui jaringan (HTTP protokol)
*/    



 
