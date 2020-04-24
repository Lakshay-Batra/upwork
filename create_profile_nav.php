<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #292b2c;">
		<a class="navbar-brand" style="font-size:x-large; color: limegreen;" href="#"><i class="fas fa-level-up-alt"></i> work</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item dropdown">
					<a href="#" class="nav-link">Solutions</a>
				</li>
				<li class="nav-item dropdown trainings">
					<a href="#" class="nav-link">Post a job</a>
				</li>

				<li class="nav-item dropdown">
					<a type="button" class="nav-link">
						Login as <?php echo $_SESSION['firstname']; ?>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a href="logout.php" type="button" class="nav-link">
						Logout
					</a>
				</li>
			</ul>
		</div>
	</nav>