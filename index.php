<?php include('header.html'); ?>

    <!-- Header -->
    <header class="jumbotron">
	    <div class="container text-center">
	   	 <div class="row">
		   	 <div class="col-md-6 col-md-offset-3">
	   	 <img src="images/logo.png" class="img-responsive">
		   	 </div>
	   	 </div>
	   	 <h2>A Julia Framework for Open Quantum Dynamics</h2>
	    </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            
            <div class="col-md-12">
	                <h2 class="page-header"><i class="fa fa-fw fa-cube"></i> About the Framework</h3>
                <p>QuantumOptics.jl is a numerical framework written in Julia that makes it easy to simulate various kinds of quantum systems. It is similar to the <a>Quantum Optics Toolbox for MATLAB</a> and its Python equivalent <a>QuTiP</a>.</p>
                <p>QuantumOptics.jl is developed in the <a>group of Prof. Helmut Ritsch</a> at the Institute for Theoretical Physics of the University of Innsbruck, Austria. Development is lead by <a>Sebastian Krämer</a>.</p>
            </div>
        </div>
        
        <div class="row text-center" id="features">
	        <div class="col-md-4">
		        <span class="fa-stack fa-lg" id="feature1">
					<i class="fa fa-square fa-stack-2x"></i>
					<i class="fa fa-inverse fa-line-chart fa-stack-1x"></i>
				</span>
				<h3>Performance</h3>
				<p class="text-left text-muted">QuantumOptics.jl optimizes processor and memory usage by intelligently using different ways to store and work with operators</p>
	        </div>
	        <div class="col-md-4">
		        <span class="fa-stack fa-lg" id="feature2">
					<i class="fa fa-square fa-stack-2x"></i>
					<i class="fa fa-inverse fa-cubes fa-stack-1x"></i>
				</span>
				<h3>Usability</h3>
				<p class="text-left text-muted">The framework comes with a plethora of pre-defined systems and interactions making it very easy to focus on the physics, not on the numerics.</p>
	        </div>
	        <div class="col-md-4">
		        <span class="fa-stack fa-lg"  id="feature3">
					<i class="fa fa-square fa-stack-2x"></i>
					<i class="fa fa-inverse fa-cogs fa-stack-1x"></i>
				</span>
				<h3>Reliability</h3>
				<p class="text-left text-muted">Every function in the framework has been severely tested with all tests and their code coverage presented on the framework's GitHub page.</p>
	        </div>
	        
	        
        </div>
        
        <div class="row">
	        <div class="col-lg-12">
		        <h2 class="page-header"><i class="fa fa-file-code-o"></i> Code Example</h2>
	        </div>
        </div>
        <div class="row">
	        <div class="col-md-6">
		        <pre>Pkg.add("QuantumOptics")

using QuantumOptics

b = SpinBasis(1//2)
H = sigmap(b) + sigmam(b)
psi0 = spindown(b)

T = [0:0.1:1;]
tout, psit = timeevolution.schroedinger(T, psi0, H)</pre>
	        </div>
	        <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/800x450" alt="">
            </div>
        </div>


        <!-- Open Source Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"><i class="fa fa-github-alt"></i> Open Source and Community Driven</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>QuantumOptics.jl is open source and <a>hosted on GitHub</a>. All community contributions are very welcome and coordinated by the head developer, Sebastian Krämer. If you want to join our effort, fork the repository and send us your pull requets! or, even better, <a>get in touch</a> directly.</p>
            </div>
            
        </div>
    </div>

 <?php include('footer.html'); ?>
