$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url: "includes/graph.inc.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var score = {
				boa : [],
			};

			var len = data.length;

			for (var i = 0; i < len; i++) {
				if (data[i].team == "boa") {
					score.boa.push(data[i].score);
				}
				else if (data[i].team == "TeamB") {
					score.TeamB.push(data[i].score);
				}
			}

			//get canvas
			var canvas = document.getElementById('myChart');

			var data = {
				labels: ['Boa Postura', 'Má Postura'],
				datasets : [
					{
						label : "boa score",
						data : [score.boa],
						backgroundColor: ["#5BC96D", "#ef4353"],
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					}
				]
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
  data: data,
  options: options
});

		},
		error : function(data) {
			console.log(data);
		}
	});

});