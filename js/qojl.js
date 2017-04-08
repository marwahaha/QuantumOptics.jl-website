// Config
var qojl_data = "QuantumOptics.jl-ae69320f5c";
var qutip_data = "QuTiP-3.1.0";
var toolbox_data = "QuantumOpticsToolbox";

// Rearrange dat structure
function rearrange (jsondata) {
		d = [];
	
	for (var i in jsondata) {
		xval = jsondata[i].N;
		yval = jsondata[i].t;
		d.push({x: xval, y: yval});
	}
	
	return d;
}

// Dynamically object with all the plot parameters and settings
function chartconfig (data, charttitle) {
	return {
	    type: 'line',
	    data: {
	        datasets: [{
		       label: 'QuantumOptics.jl',
		       data: rearrange(data[qojl_data]),
		       fill: false,
		       borderWidth: 3.0,
		       borderColor: '#d66761',
		       backgroundColor: '#d66761'
	        }, {
	            label: 'QuTiP 3.1.0',
	            data: rearrange(data[qutip_data]),
	            fill: false,
	            borderWidth: 3.0,
	            borderColor: '#a87db6',
	            backgroundColor: '#a87db6'
	        }, {
		       label: 'QO Toolbox',
		       data: rearrange(data[toolbox_data]),
		       fill: false,
		       borderWidth: 3.0,
		       borderColor: '#6cac5b',
		       backgroundColor: '#6cac5b'
	        }]
	    },
	    options: {
		    title: {
			    display: true,
				text: charttitle,
				},
	        scales: {
	            xAxes: [{
		            type: 'linear',
		            position: 'bottom',
	                scaleLabel: {
		                display: true,
		                labelString: 'Hilbert-Space Dimension'
	                }      
	            }],
	            yAxes: [{
	                scaleLabel: {
		                display: true,
		                labelString: 'Ellapsed Time'
	                }
	                
	            }]
	        }
	    }
	};
}


// Function to create Plot from JSON
function createplot (file, htmlid, title) {
	$.getJSON('js/plots/'+file, function (data) {
	var ctx = $(htmlid);
	var scatterChart = new Chart(ctx, chartconfig(data, title));
	});
}

// Now, create the plots
createplot('timeevolution_master.json', '#plot-timeevolution-master', 'Time Evolution (Master Equation)');
createplot('timeevolution_particle.json', '#plot-timeevolution-particle', 'Time Evolution (Particle)');
createplot('multiplication.json', '#plot-multiplication', 'Multiplication');
createplot('expect_state.json', '#plot-expect-state', 'Expectation Value (State Vector)');
createplot('expect_operator.json', '#plot-expect-operator', 'Expectation Value (Density Operator)');
createplot('coherentstate.json', '#plot-coherentstate', 'Coherent State Performance');
createplot('ptrace.json', '#plot-ptrace', 'Partial Trace Performance');
createplot('qfunc_state.json', '#plot-qfunc-state', 'Q-Function for State Vectors');
createplot('qfunc_operator.json', '#plot-qfunc-operator', 'Q-Function for Density Operators');
createplot('variance_operator.json', '#plot-variance-operator', 'Variance (Density Operator)');
createplot('variance_state.json', '#plot-variance-state', 'Variance (State Vector)');
