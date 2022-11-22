<?php

/*
    Rest Api:
    Adalah Gaya arsitektur perangkat lunak yang didalamnya
    mendefinisikan aturan aturan untuk membuat web service


    Ilustrasi :

    Seperti Pelayan Memberikan Menu Makanan kepada customer, Lalu menu pesanan tersebut dikirim
    kan kepada Ahli Masak atau chef di dapurnya.

    - Api | Adalah Penghubung (Pelayan)
    - Rest Api | Adalah aturanya (Menu Makanan)
    - Request dan Response | Kita Meriquest lalu dapur meresponse melalui perantara Api
    - data yang dikirimn / diterima berupa JSON



    Rest Api

    - REpresentational State Transfer
    - Gaya Perancangan / Architectural Syle
    - Stateless
    - Protokolnya hampir selalu menggunakan HTTP
    - Memungkinkan interaksi antar mesin


    HTTP
    Hypertext Transfer Protokol

    Methode request          URL
        GET             localhost/ci-app/mahasiswa/
        GET             localhost/ci-app/mahasiswa/detail/12 
        POST            localhost/ci-app/mahasiswa/tambah
        GET             localhost/ci-app/mahasiswa/hapus/3
        POST            localhost/ci-app/mahasiswa/ubah/8



          Mengirimkan Request Dan               Mengirimkan Request dan
          mengirimkan Data jika ada             Merubah data menjadi JSON
    USER ---------------------------->Server  -------------------------> Rest Server
      ^--------------------------------|  ^-----------------------------------| 
             Merubah Response                            Menerima Response
             Menjadi HTML                         Beserta JSON dan Mengirimlan
             Agar mudah Dilihat Oleh User                    Kode Status         
             
        -----------REST CLIENT------------|---------------REST SERVER---------------
        
        
  Kode Status :
   Adalah Status yang dikirimkan oleh Server Apinya 
   ke Rest Client

   - 200  Success
   - 404  Not Found
   - 500  Server Error
   - ... 

   Kode Status 
   digunakan untuk memberitahu ke mesin sama mesin kalau status suksess / error





                          Minta data kpd aplikasi
                          Pengelolaan data mahasiwa
                             pada Rest Server  
   Rest Client------------------------------------------------Rest Server
       GET           localhost/ci-app/mahasiswa/
       GET           localhost/ci-app/mahasiswa/detail/12 
       POST          localhost/ci-app/mahasiswa/tambah
       GET           localhost/ci-app/mahasiswa/hapus/3           Arsitektur ini belum Restful
       POST          localhost/ci-app/mahasiswa/ubah/8                 Hanya Rest


                    Pertukaran datanya menggunakan JSON



    HTTP Method
    
    - Get
        Mengambil Data
    - POST 
        Mengirim / menambah data
    - PUT                              PUT 
        Mengubah Data                  dan 
    - Delete                         Delete  Tidak Bisa dipakai di Browser
        Menghapus Data
    dll    
        

       GET           localhost/ci-app/mahasiswa/
       GET           localhost/ci-app/mahasiswa/detail/12 
       POST          localhost/ci-app/mahasiswa/tambah
       DELET         localhost/ci-app/mahasiswa/hapus/3           Restful Api
       PUT           localhost/ci-app/mahasiswa/ubah/8  
                           
  
       localhost/ci-app/mahasiswa/ = endpoints

    
       
    STATELESS
      - Setiap Request HTTP di lakukan
        Secara terisolasi

      - Server tidak menyimpan state apapun
        mengenai sesi dari client | Tidak Memiliki Session  | Seperti mengetahui siapa yang login
        
      - Setiap request dari client harus berisi
        semua informasi yang dibutuhkan server,
        termasuk informasi otentikasi    | Setiap mengirim harus mengirimkan otentikasinya dan siapa yang mengirimnya



    RESTful  API   - kesimpulan    
     - Menggunakan HTTP method yang benar

     - URl / endpoints-nya menggunakan kata
       benda, bukan kata kerja | localhost/ci-app/mahasiswa/ 
     - Harus Stateless  

     Restful api adalah menggunakan REST secara benar
*/
