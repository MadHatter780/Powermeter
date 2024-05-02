import axios from 'axios';
import updateChartData from '../../public/js/realtimeLine';
window.axios = axios;

// resources/js/mqtt_client.js

import mqtt from 'mqtt';

// Alamat broker MQTT WebSocket dari .env
const brokerUrl =import.meta.env.VITE_MQTT_BROKER_URL;

// Buat koneksi ke broker MQTT melalui WebSocket
const client = mqtt.connect(brokerUrl);

// Tangani ketika koneksi berhasil
client.on('connect', () => {
    console.log('Connected to MQTT broker via WebSocket');
    let topic = "testTopic/vol"
    client.subscribe(topic, (err) => {
        if (!err) {
            console.log(`Subscribed to topic: ${topic}`);
        }
    });
});

client.on('message', (topic, message) => {
    console.log('Received message:', message.toString());
});
// console.log(brokerUrl);



document.addEventListener("DOMContentLoaded", function() {
    var screenWidth = window.innerWidth;
    var screenHeight = window.innerHeight;
    const widthHeight = screenWidth + 'x' + screenHeight;
    let datas = document.getElementById("datas")
    // datas.innerHTML = widthHeight
    let size;
    console.log("Screen Width: " + screenWidth + ", Screen Height: " + screenHeight);
    if(screenWidth == 1222  && screenHeight == 604){
         size = 175;
         console.log("mini");
    }
    else{
        size = 275;
    }
    function initializeGauge(idchart, color, value, realtime,size) {
        var optionsGauge = {
            series: [value],
            chart: {
                width: size,
                height: size,
                type: 'radialBar',
                offsetY: -10,
            },
            plotOptions: {
                radialBar: {
                    track: {
                        background: '#00000000'
                    },
                    color: '#fff',
                    startAngle: -135,
                    endAngle: 135,
                    dataLabels: {
                        // Menggunakan operator ternary untuk menentukan apakah dataLabels harus ditampilkan atau tidak
                        show: false,

                    }
                }
            },
            fill: {
                type: 'solid',
                colors: [color], // Hex code for yellow
            },
            stroke: {
                dashArray: 4,
            },
            labels: ['Kwh Realtime']
        };

        var chartGauge = new ApexCharts(document.querySelector(idchart), optionsGauge);
        chartGauge.render();

        // Jika mode realtime diaktifkan, maka lakukan pembaruan nilai setiap 1 detik
        if (realtime) {
            function updateValue() {

                var newValue = Math.floor(Math.random() * 100); // Generate a random value
                chartGauge.updateSeries([newValue]);
            }
             if (realtime) {
            function updateValue(value) {
                 var newValue = Math.floor(value); // Generate a random value

            }
            client.on('message', (topic, message) => {

                if (topic === 'testTopic/vol') {
                    let obj = Math.round(JSON.parse(message)*10);
                    let value2 = document.getElementById("value2");
                    value2.innerHTML = obj;
                    updateValue(obj);
                    updateChartData(obj);
                    console.log(obj);
                    chartGauge.updateSeries([obj]);

                }
            });
            // setInterval(updateValue, 1000);



         }
         }
    }


    function initializeGauge2(idchart, color, value, realtime,size) {
        var optionsGauge2 = {
            series: [value],
            chart: {
                width: size,
                height: size,
                type: 'radialBar',
                offsetY: -10,
            },
            plotOptions: {
                radialBar: {
                    track: {
                        background: '#00000000'
                    },
                    color: '#fff',
                    startAngle: -135,
                    endAngle: 135,
                    dataLabels: {
                        // Menggunakan operator ternary untuk menentukan apakah dataLabels harus ditampilkan atau tidak
                        show: false,

                    }
                }
            },
            fill: {
                type: 'solid',
                colors: [color], // Hex code for yellow
            },
            stroke: {
                dashArray: 4,
            },
            labels: ['Kwh Realtime']
        };

        var chartGauge2 = new ApexCharts(document.querySelector(idchart), optionsGauge2);
        chartGauge2.render();

        // Jika mode realtime diaktifkan, maka lakukan pembaruan nilai setiap 1 detik
        if (realtime) {
            function updateValue2() {
                var newValue2 = Math.floor(Math.random() * 100); // Generate a random value
                chartGauge2.updateSeries([newValue2]);
            }

            setInterval(updateValue2, 1000);
        }
    }

    initializeGauge('#chartGauge', '#FFF', 100, false,size); // Contoh: ID chart, warna, dan nilai awal
    initializeGauge('#chartGauge2', '#41C9E2', 50, true,size); // Contoh: ID chart, warna, dan nilai awal
    initializeGauge('#chartGauge3', '#FFF', 100, false,size); // Contoh: ID chart, warna, dan nilai awal
    initializeGauge('#chartGauge4', '#30E3CA', 50, true,size); // Contoh: ID chart, warna, dan nilai awal

});


