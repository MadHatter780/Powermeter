
var dailyBar = document.getElementById('dailyBar').getContext('2d');
var dailyBarChart = new Chart(dailyBar, {
    type: 'bar',
    data: {
        labels: [1, 2, 3, 4, 5, 6, 78, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30],

        datasets: [{
            label: 'Kwh Meter',
            data: [20, 30, 30, 25, 28, 29, 40, 50, 40, 50, 50],
            backgroundColor: '#378CE7',

        }]
    },
    options: {
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
