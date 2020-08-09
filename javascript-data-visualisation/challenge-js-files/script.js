// premier tableau H1

let dataPoints = [];
let dataLabels = [];
let dataY = [];
$.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart=1&ystart=10&length=10&type=json", function (data) {
	$.each(data, function (key, value) {
		dataPoints.push({
			x: value[0],
			y: parseInt(value[1])
		});
	});

	for (i = 0; i < dataPoints.length; i++) {
		dataLabels[i] = dataPoints[i].x;
		dataY[i] = dataPoints[i].y;
	}
	

	document.getElementById("firstHeading").insertAdjacentHTML("afterend", '<canvas id="canvas3" height="400" width="400"></canvas>');
	updateChart();
});	


document.getElementById("table1").insertAdjacentHTML("beforebegin", '<canvas id="myChart1" height="400" width="400"></canvas>');


let table = document.getElementById("table1");

const arrayWithoutElementAtIndex = function (arr, index) {
    return arr.filter(function(value, arrIndex) {
      return index !== arrIndex;
    });
}
let randomColor = Math.floor(Math.random()*16777215).toString(16);
let color = "#"+ randomColor;


function tableToJson(table) {
    let data = [];
    for (i = 1; i < table.rows.length; i++) {
        let tableRow = table.rows[i];
        let rowData = [];
        for (j = 1; j < tableRow.cells.length; j++) {
            rowData.push(tableRow.cells[j].innerHTML);;
        }
        data.push(rowData);
    }
    return data;
}

function stringToArray(table) {
    let data =[];
    for (i=0 ; table.length ; i++){

    }
}

function FloatIndex(table) {
    let data = [];
    for (i = 0; i < table.length; i++) {
        table[i] = table[i].replace(',', '.');
        data.push(parseFloat(table[i]));
    }
    return data
  }
function Rcolor (){

  let red = Math.floor(Math.random() * 256);
  let green = Math.floor(Math.random() * 256);
  let blue = Math.floor(Math.random() * 256);
  return  'rgb(' + red + ',' + green + ',' + blue + ')' ;


};

function tableIndex0 (arr){
    let data = [];
    for(i=0 ; i < arr.length ; i++){
        data [i] = arr[i][0];
    }
    data[7]="England & Wales";
    return data;
}

function tableIndex1 (arr){
    let data = [];
    for(i=0 ; i < arr.length ; i++){
        data [i] = arr[i][1];
    }
    return data;
}

function tableIndex2 (arr){
    let data = [];
    for(i=0 ; i < arr.length ; i++){
        data [i] = arr[i][2];
    }
    return data;
}


function updateChart() {
	$.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart=" + (dataPoints.length + 1) + "&ystart=" + (dataPoints[dataPoints.length - 1].y) + "&length=1&type=json", function (data) {
		$.each(data, function (key, value) {
			dataPoints.push({
				x: parseInt(value[0]),
				y: parseInt(value[1])
			});
			for (i = 0; i < dataPoints.length; i++) {
				dataLabels[i] = dataPoints[i].x;
				dataY[i] = dataPoints[i].y;
			}
		});

		setTimeout(function () {
			let ctx3 = document.getElementById("canvas3");
			let myChart3 = new Chart(ctx3, {
				type: 'line',
				data: {
					labels: dataLabels,
					datasets: [{
						data: dataY,
						label: "AJAX",
						borderColor: "#000000",
						fill: false
					}]
				},
				options: {
					title: {
						display: true,
						text: "Live Chart with dataPoints from External JSON"
					}
				}
			});
			updateChart()
		}, 1000);
	});

}



table = tableToJson(table);



var ctx = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        // labels: [table[0]]
        labels : arrayWithoutElementAtIndex(table[0], 0),
        datasets: [{
            label: table[1][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[1], 0)),
            
        },
        {
            label: table[2][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[2], 0)),
            
        },
        {
            label: table[3][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[3], 0)),
            
        },
        {
            label: table[4][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[4], 0)),
            
        },
        {
            label: table[5][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[5], 0)),
            
        },
        {
            label: table[6][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[6], 0)),
            
        },
        {
            label: table[7][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[7], 0)),
            
        },
        {
            label: table[8][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[8], 0)),
            
        },
        {
            label: table[9][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[9], 0)),
            
        },
        {
            label: table[10][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[10], 0)),
            
        },
        {
            label: table[11][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[11], 0)),
            
        },
        {
            label: table[12][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[12], 0)),
            
        },
        {
            label: table[13][0],
            borderColor: Rcolor() ,
            data: FloatIndex(arrayWithoutElementAtIndex(table[13], 0)),
            
        },
        {
            label: table[14][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[14], 0)),
            
        },
        {
            label: table[15][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[15], 0)),
            
        },
        {
            label: table[16][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[16], 0)),
            
        },
        {
            label: table[17][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[17], 0)),
            
        },
        {
            label: table[18][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[18], 0)),
            
        },
        {
            label: table[19][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[19], 0)),
            
        },
        {
            label: table[20][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[20], 0)),
            
        },
        {
            label: table[21][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[21], 0)),
            
        },
        {
            label: table[22][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[22], 0)),
            
        },
        {
            label: table[23][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[23], 0)),
            
        },
        {
            label: table[24][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[24], 0)),
            
        },
        {
            label: table[25][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[25], 0)),
            
        },
        {
            label: table[26][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[26], 0)),
            
        },
        {
            label: table[27][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[27], 0)),
            
        },
        {
            label: table[28][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[28], 0)),
            
        },
        {
            label: table[29][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[29], 0)),
            
        },
        {
            label: table[30][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[30], 0)),
            
        },
        {
            label: table[31][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[31], 0)),
            
        },
        {
            label: table[32][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[32], 0)),
            
        },
        {
            label: table[33][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[33], 0)),
            
        },
        {
            label: table[34][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[34], 0)),
            
        },
        {
            label: table[35][0],
            borderColor: Rcolor(),
            data: FloatIndex(arrayWithoutElementAtIndex(table[35], 0)),
            
        }
    ]
      
    },

    // Configuration options go here
    options: {}
});

document.getElementById("table2").insertAdjacentHTML("beforebegin", '<canvas id="myChart2" height="400" width="400"></canvas>');

let table2 = document.getElementById("table2");

table2 = tableToJson(table2);



new Chart(document.getElementById("myChart2"), {
    type: 'bar',
    data: {
      labels: tableIndex0(table2),
      datasets: [
        {
          label: "2007-09",
          backgroundColor: "#3e95cd",
          data: tableIndex1(table2),
        }, {
          label: "2010-12",
          backgroundColor: "#8e5ea2",
          data: tableIndex2(table2),
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Prison population'
      }
    }
});

// document.getElementById("firstHeading").insertAdjacentHTML("afterend", '<canvas id="canvas3" height="400" width="400"></canvas>');



