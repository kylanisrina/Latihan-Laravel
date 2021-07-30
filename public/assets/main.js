console.log('connect');
// console.log('Harga 1 = ', $('.hargaclass1').html());
var harga1 = $('#harga1').html();
var harga2 = $('#harga2').html();
var harga3 = $('#harga3').html();

var jumlah1 = $('#jumlah1').html();
var jumlah2= $('#jumlah2').html();
var jumlah3 = $('#jumlah3').html();

var Hamba1 = $('#Hamba1').html();
var Hamba2 = $('#Hamba2').html();
var Hamba3 = $('#Hamba3').html();

var total = parseInt(harga1) + parseInt(harga2) + parseInt(harga3)
console.log('total = ', total)

var taik = parseInt(jumlah1) + parseInt(jumlah2) + parseInt(jumlah3)
console.log('taik = ', taik)

// var pintar = parseInt(lunas1) + parseInt(lunas2) + parseInt(lunas3)
// console.log('pintar = ', pintar)

$('#totalJumlah').html(taik);
$('#totalHarga').html(total);
// $('#Hamba').html(pintar);

var Hamba;
if (Hamba1 == 'Lunas' && Hamba2 == 'Lunas' && Hamba3 == 'Lunas') {
    Hamba='Lunas'
} else {
    Hamba = 'belum lunas'
}

$('#Hamba').html(Hamba);

var totalKeselurahan = total * taik;
$('#totalKeseluruhan').html(totalKeselurahan);






// var contohString = '1000000';
// var Integer = 1000000;

// var angka1 = 10;
// var angka2 = 10;

// var total = angka1 + angka2;
// console.log('versiVariable', total)

// var total = 10 + 10;
// console.log('versiBiasa', total)

// $('#idBox').fadeOut(3000);

// for (let i = 0; i < 100; i++) {
//     setWidth(i);
// }
// function setWidth(i) {
//     $('#idbox').css('width', i + 'px');
// }

