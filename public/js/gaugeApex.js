
// document.addEventListener("DOMContentLoaded", function() {
//     var screenWidth = window.innerWidth;
//     var screenHeight = window.innerHeight;
//     const widthHeight = screenWidth + 'x' + screenHeight;
//     let datas = document.getElementById("datas")
//     // datas.innerHTML = widthHeight
//     console.log("Screen Width: " + screenWidth + ", Screen Height: " + screenHeight);
//     if(screenWidth == 1222  && screenHeight == 604){
//          size = 175;
//          console.log("mini");
//     }
//     else{
//         size = 275;
//     }
//     function initializeGauge(idchart, color, value, realtime,size) {
//         var optionsGauge = {
//             series: [value],
//             chart: {
//                 width: size,
//                 height: size,
//                 type: 'radialBar',
//                 offsetY: -10,
//             },
//             plotOptions: {
//                 radialBar: {
//                     track: {
//                         background: '#00000000'
//                     },
//                     color: '#fff',
//                     startAngle: -135,
//                     endAngle: 135,
//                     dataLabels: {
//                         // Menggunakan operator ternary untuk menentukan apakah dataLabels harus ditampilkan atau tidak
//                         show: false,

//                     }
//                 }
//             },
//             fill: {
//                 type: 'solid',
//                 colors: [color], // Hex code for yellow
//             },
//             stroke: {
//                 dashArray: 4,
//             },
//             labels: ['Kwh Realtime']
//         };

//         var chartGauge = new ApexCharts(document.querySelector(idchart), optionsGauge);
//         chartGauge.render();

//         // Jika mode realtime diaktifkan, maka lakukan pembaruan nilai setiap 1 detik
//         if (realtime) {
//             function updateValue() {
//                 var newValue = Math.floor(Math.random() * 100);
//                 console.log(newValue);
//                  // Generate a random value
//                 chartGauge.updateSeries([newValue]);
//             }

//             setInterval(updateValue, 1000);
//         }
//     }


//     function initializeGauge2(idchart, color, value, realtime,size) {
//         var optionsGauge2 = {
//             series: [value],
//             chart: {
//                 width: size,
//                 height: size,
//                 type: 'radialBar',
//                 offsetY: -10,
//             },
//             plotOptions: {
//                 radialBar: {
//                     track: {
//                         background: '#00000000'
//                     },
//                     color: '#fff',
//                     startAngle: -135,
//                     endAngle: 135,
//                     dataLabels: {
//                         // Menggunakan operator ternary untuk menentukan apakah dataLabels harus ditampilkan atau tidak
//                         show: false,

//                     }
//                 }
//             },
//             fill: {
//                 type: 'solid',
//                 colors: [color], // Hex code for yellow
//             },
//             stroke: {
//                 dashArray: 4,
//             },
//             labels: ['Kwh Realtime']
//         };

//         var chartGauge2 = new ApexCharts(document.querySelector(idchart), optionsGauge2);
//         chartGauge2.render();

//         // Jika mode realtime diaktifkan, maka lakukan pembaruan nilai setiap 1 detik
//         if (realtime) {
//             function updateValue2() {
//                 var newValue2 = Math.floor(Math.random() * 100); // Generate a random value
//                 chartGauge2.updateSeries([newValue2]);
//             }

//             setInterval(updateValue2, 1000);
//         }
//     }

//     initializeGauge('#chartGauge', '#FFF', 100, false,size); // Contoh: ID chart, warna, dan nilai awal
//     initializeGauge('#chartGauge2', '#41C9E2', 50, true,size); // Contoh: ID chart, warna, dan nilai awal
//     initializeGauge('#chartGauge3', '#FFF', 100, false,size); // Contoh: ID chart, warna, dan nilai awal
//     initializeGauge('#chartGauge4', '#30E3CA', 50, true,size); // Contoh: ID chart, warna, dan nilai awal

// });







// // Panggil fungsi initializeGauge dengan parameter yang sesuai
