// Obejct Menjadi JSON
let mahasiswa = {
    nama : "Rifqi Ammar Ramadhan",
    nrp  : 25115971,
    email : "rifqiammarkontak@gmail.com"
}

// console.log(JSON.stringify(mahasiswa));
// ========================================================



// JSON menjadi Object
// ambil object ajax
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText); // Parsing responya menjadi object literal
//         console.log(mahasiswa);
//     }
// }

// xhr.open("GET", '../coba.json', true); // jika menggunakan true maka Asynchronus
// xhr.send();


// Menggunakan Jquery
$.getJSON('coba.json', function (data) {
    console.log(data);
});