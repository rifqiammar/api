// JSON
//  - JSON.stringify() - mengubah object js menjadi JSON
//  - JSON.parse() - mengubah JSON menjadi object js


/*
     Mengakses Json di JS :
       - ajax
          - XMLHttpRequest    | Vanilla Javascript
          - JQUERY
*/ 

// JSON.stringify() | Mengubah object javascript menjadi JSON

 let data = {
    a : '1',
    b : '2',
    c : '3'
 }

 console.log(JSON.stringify(data));
// hasil
// {"a":"1","b":"2","c":"3"}



// Menggunakan AJAX menggunakan JSON.parse()
// Me-request file JSON lalu mengubahnya menjadi object (menggunakan XMLHttpRequest)

let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if( xhr.readyState === 4 && xhr.status === 200 ){
        let data = JSON.parse(this.responseText);
        console.log(data);
    }
}
xhr.open('GET', 'data.json', true);
xhr.send();