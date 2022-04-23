	<!-- Start of head & navbar -->
	<?php include_once 'navbar.php'; ?>
	
	
	
	<!-- Start of body content after navbar is loaded -->
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<h3>Live</h3>
						<!-- Add a placeholder for the Twitch embed -->
						<div id="twitch-embed" width="100%" height="480px"></div>

							<!-- Load the Twitch embed script -->
							<script src="https://player.twitch.tv/js/embed/v1.js"></script>

							<!-- Create a Twitch.Player object. This will render within the placeholder div -->
							<script type="text/javascript">
							  new Twitch.Player("twitch-embed", {
								channel: "valorant",
								width: "100%",
								height: "480px"

							  });
							</script>				
				</div>
				<div class="col-lg-3">
				<h3>Upcoming</h3>
				</div>
			</div>
		</div>
	</body>
	
	<!-- Start of footer content after body is loaded -->
	<?php include_once 'footer.php'; ?>