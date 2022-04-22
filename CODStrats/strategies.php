	<!-- Start of head & navbar -->
	<?php include_once 'navbar.php'; ?>
	
	
	
	<!-- Start of body content after navbar is loaded -->
	<body>
		<div class="container-fluid">
			<div class="row align-items-start">
				<div class="col-lg-3">
				
				
					<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#SnD" aria-expanded="false" aria-controls="SnD" style="width:100%">
						Search & Destroy
					</button>
					<div class="collapse" id="SnD">
						<div class="card card-body">
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								Defence
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a onclick="playVidSDS1()" class="dropdown-item list-group-item" href="#">Defence Setup #1</a></li>
									<li><a onclick="playVidSDS2()" class="dropdown-item list-group-item" href="#">Defence Setup #2</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Defence Setup #3</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Defence Setup #4</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Defence Setup #5</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Defence Setup #6</a></li>
								</ul>
							</div>
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								Offence
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup #1</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup #2</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup #3</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup #4</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup #5</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup #6</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#HP" aria-expanded="false" aria-controls="HP" style="width:100%">
						Hardpoint
					</button>
					<div class="collapse" id="HP">
						<div class="card card-body">
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								P1
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Good Spawns Setup</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Bad Spawns Pushses</a></li>
								</ul>
							</div>
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								P2
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Good Spawns Setup</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Bad Spawns Pushses</a></li>
								</ul>
							</div>
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								P3
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Good Spawns Setup</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Bad Spawns Pushses</a></li>
								</ul>
							</div>
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								P4
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Good Spawns Setup</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Bad Spawns Pushses</a></li>
								</ul>
							</div>
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								P5
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Good Spawns Setup</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Bad Spawns Pushses</a></li>
								</ul>
							</div>
						</div>
					</div>
					<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Control" aria-expanded="false" aria-controls="Control" style="width:100%">
						Control
					</button>
					<div class="collapse" id="Control">
						<div class="card card-body">
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								Defence
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Defence Setup A</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Defence Setup B</a></li>
								</ul>
							</div>
							<div class="dropdown">
								<button class="btn list-group-item dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:100%">
								Offence
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup A</a></li>
									<li><a class="dropdown-item list-group-item" href="#">Offence Setup B</a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-9">
				
					<h3 id="Strategies" style="text-align:center">Bocage</h3><br>
					<img src="img/bocage-default.jpeg" width="100%" id="defaultimage">
					<video id="video" hidden>
						<source id="source" type="video/mp4">
					</video>
				
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
	</body>
	
	<!-- Start of footer content after body is loaded -->
	<?php include_once 'footer.php'; ?>
