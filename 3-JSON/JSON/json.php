<?php

/*
      "Javascript Object Notation (JSON) adalah sebuah
      file format standar yang menggunakan tulisan yang
      dapat dibaca oleh manusia untuk pertukaran data, yang
      di dalamnya berisi pasangan antara key dan value."


      JSON

      - Format pertukaran data tekstual yang sangat ringan
      - Sintaksnya sangat sederhana dan jelas (dibanding XML)
      - Dapat digunakan pada beragam bahasa pemrograman
      - Tiap bahasa pemrograman memiliki cara tersendiri 
      untuk berinteraksi dengan JSON


      JSON
        
      - Dibuat berdasarkan format Object pada javascript
      - Selain pertukaran data Json juga digunakan untuk file konfigurasi  
           | Menurut beberapa orang (tidak disarankan) karena tidak ada sintaks komentar

      - Tipe file JSON memilki ekstensi .json 
      - Format JSON dibuat dan diusulkan oleh Douglas Crockford   

      - JSON tidak memiliki Method




      Format JSON
      { "key" : "value" }  Key selalu dibungkus dengan kutip 2 ( "" )



      Tipe Data dari Value pada JSON :

            B     - Boolean - true /false
            A     - Array - ["value1", "value2", ...] 
            S     - String - teks / unicode, dibungkus dengan " "
            O     - Object - {"key" : "value"}
            N     - Number - integer / float
            N     - Null - null


    //  Biasanya Jarang membuat JSON manual, Biasanya DI generate di aplikasi kita

       Rest Client = Mengambil JSON / consume lalu di ubah menjadi Array assoc di php / Object di Javascript
       Rest Server = Men-Generate data / array menjadi JSON
    
*/

/*
     Di PHP ada 2 Method

     - json_encode() - Mengubah Array menjadi JSON
     - json_decode() - Json menjadi Array

     Mengakses JSON / Mengambil JSON dari tempat lain di PHP
     salah satu caranya adalah :

      - file_get_contents()
*/ 

// json_encode()
$data = [
  "a" => 1,
  "b" => 2,
  "c" => 3
];

echo json_encode($data); // parsing / mengubah formatnya
// hasil
// {"a":1,"b":2,"c":3}

echo PHP_EOL;
// ==============================================================
// json_decode()

// ambil data json dari file
$contents = file_get_contents('coba.json');

// ubah standar encodingnya
$contents = utf8_encode($contents);

// ubah json menjadi array associative
$results = json_decode($contents, true); // Jika menggunakan True makan berubah jadi array assoc
                                         // Jika tidak menggunakan true maka menjadi Object  
var_dump($results); 
// echo $results[0]['nama'];
// echo $results[0]['hobby'][0];
// echo $results[0]['pembimbing']['pembimbing1'];