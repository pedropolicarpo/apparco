
var canvas = document.getElementById('myChart');

        $(document).ready(function(data){

        $.ajax({
            url: "includes/graph.inc.php",
            type: "GET",
        }).done(function(boa, ma){
datam = boa

        $.ajax({
            url: "includes/graph2.inc.php",
            type: "GET",
        }).done(function(ma){
datab = ma


var graph = {
  labels: ['Boa Postura', 'Má Postura'],
  datasets: [{
    label: "Capturadas",
    backgroundColor: ["#00cfe6", "#ff3345"],
    data: [datam , datab]
      }]
};

var options = {
  cutoutPercentage: 75,
  rotation: 1 * Math.PI,
  circumference: 1 * Math.PI,
  segmentShowStroke : false,
  animationSteps : 40,
  legend: {
    display: true,
    position: 'bottom',
    labels: {
      usePointStyle: true
    },
    generateLabels: function(data) {
      if (data.labels.length && data.datasets.length) {
        return data.labels.map(function(label, i) {
          return {
            text: label,
            fillStyle: data.datasets[0].backgroundColor[i],
            hidden: isNaN(data.datasets[0].data[i]),
            pointStyle: 'circle',
            // Extra data used for toggling the correct item
            index: i
          };
        });
      } else {
        return [];
      }
    }
  }
};

var myBarChart = Chart.Doughnut(canvas, {
  data: graph,
  options: options
});
});
      });
    });