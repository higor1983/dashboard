var ctx = document.getElementById('line-chart');

var chartGraph = new Chart (ctx, {
    type: 'line',
    data:{
        labels:['Abril', 'Maio', 'Junho', 'Agosto'],
        datasets:[{
            label: "Impressões",
            data:['20', '40', '70', '90'],
            borderWidth: '3.5',
            borderColor: 'rgb(0, 0, 212)',
            fill: true,
            backgroundColor: 'rgba(0, 0, 212, 0.300)',
        }]
    }
});

const ctxPizza = document.getElementById('pizza-chart');
const myChartPizza = new Chart(ctxPizza, {
    type: 'doughnut',
    data: {
        labels: [
            'Concluido',
            'A concluir'
          ],
          datasets: [{
            label: 'My First Dataset',
            data: [20, 80],
            backgroundColor: [
              'rgb(0, 0, 212)',
              '#12192c'
            ],
            hoverOffset: 4
          }]
    },
});


const ctxBar = document.getElementById('bar-chart');
const myChartBar = new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: ['Março', 'Abril', 'Dezembro'],
        datasets: [{
            label: 'Seguidores',
            data: [269, 320, 400],
            backgroundColor: [
                '#12192c',
                'rgb(0, 0, 212)',
                '#12192c'
            ],
            borderColor: [
                '#12192c',
                'rgb(0, 0, 212)',
                '#12192c'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
