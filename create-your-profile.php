<?php  
include "auth.php";
include "DB.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">

	<script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>

</head>

<body class="create-your-profile-body">


	<?php include "create_profile_nav.php"; ?>

	<!-- side navigation or off-canvas Menu -->

	<ul class="nav nav-tabs justify-content-center">
		<li class="nav-item">
			<a class="nav-link active" id="expertise-tab" data-toggle="tab" href="#Expertise" role="tab" aria-controls="expertise" aria-selected="true">Expertise</a>
		</li>
		<li class="nav-item">
			<a href="#Expertise-Level" class="nav-link" data-toggle="tab" role="tab" aria-controls="expertise-level" aria-selected="true">Expertise Level</a>
		</li>
		<li class="nav-item">
			<a href="#Education" class="nav-link" data-toggle="tab" role="tab" aria-controls="education" aria-selected="true">Education</a>
		</li>
		<li class="nav-item">
			<a href="#Employment" class="nav-link" data-toggle="tab" role="tab" aria-controls="employment" aria-selected="true">Employment</a>
		</li>
		<li class="nav-item">
			<a href="#Languages" class="nav-link" data-toggle="tab" role="tab" aria-controls="languages" aria-selected="true">Languages</a>
		</li>
		<li class="nav-item">
			<a href="#Hourly-Rate" class="nav-link" data-toggle="tab" role="tab" aria-controls="hourly-rate" aria-selected="true">Hourly Rate</a>
		</li>
		<li class="nav-item">
			<a href="#Title-Overview" class="nav-link" data-toggle="tab" role="tab" aria-controls="title-overview" aria-selected="true">Title & Overview</a>
		</li>
		<li class="nav-item">
			<a href="#Profile-Photo" class="nav-link" data-toggle="tab" role="tab" aria-controls="profile-photo" aria-selected="true">Profile Photo</a>
		</li>
		<li class="nav-item">
			<a href="#Location" class="nav-link" data-toggle="tab" role="tab" aria-controls="location" aria-selected="true">Location</a>
		</li>
		<li class="nav-item">
			<a href="#Phone" class="nav-link" data-toggle="tab" role="tab" aria-controls="phone" aria-selected="true">Phone</a>
		</li>
	</ul>

<div class="heading row justify-content-md-center">
		<div class="col-md-5">
			<h1>Profile Buildup</h1>
		</div>
	</div>
	<div class="tab-content row justify-content-md-center" id="myTabContent">



<?php include "profile_expertise.php"; ?>


<?php include "profile_expertise_level.php"; ?>
		
		
<?php include "profile_education.php"; ?>
		
		
		
		
		<!-- 4 -->
		<div class="tab-pane fade col-md-6" id="Employment" role="tabpanel" aria-labelledby="employment-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					4 of 10
				</div>
				<div class="card-body">
					<h5 class="card-title">Employment</h5>
					<p class="card-text">...</p>
					<div style="text-align: right; padding-top: 3%;">
						<a href="#" class="btn btn-primary">Next</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 5 -->
		<div class="tab-pane fade col-md-6" id="Languages" role="tabpanel" aria-labelledby="languages-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					5 of 10
				</div>
				<div class="card-body">
					<h5 class="card-title">Languages Known</h5>
					<p class="card-text">...</p>
					<div style="text-align: right; padding-top: 3%;">
						<a href="#" class="btn btn-primary">Next</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 6 -->
		<div class="tab-pane fade col-md-6" id="Hourly-Rate" role="tabpanel" aria-labelledby="hourly-rate-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					6 of 10
				</div>
				<div class="card-body">
					<h5 class="card-title">Hourly Rate</h5>
					<p class="card-text">...</p>
					<div style="text-align: right; padding-top: 3%;">
						<a href="#" class="btn btn-primary">Next</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 7 -->
		<div class="tab-pane fade col-md-6" id="Title-Overview" role="tabpanel" aria-labelledby="title-overview-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					7 of 10
				</div>
				<div class="card-body">
					<h5 class="card-title">Title Overview</h5>
					<p class="card-text">...</p>
					<div style="text-align: right; padding-top: 3%;">
						<a href="#" class="btn btn-primary">Next</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 8 -->
		<div class="tab-pane fade col-md-6" id="Profile-Photo" role="tabpanel" aria-labelledby="profile-photo-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					8 of 10
				</div>
				<div class="card-body">
					<h5 class="card-title">Profile Photo</h5>
					<p class="card-text">...</p>
					<div style="text-align: right; padding-top: 3%;">
						<a href="#" class="btn btn-primary">Next</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 9 -->
		<div class="tab-pane fade col-md-6" id="Location" role="tabpanel" aria-labelledby="location-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					9 of 10
				</div>
				<div class="card-body">
					<h5 class="card-title">Location</h5>
					<p class="card-text">...</p>
					<div style="text-align: right; padding-top: 3%;">
						<a href="#" class="btn btn-primary">Next</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 10 -->
		<div class="tab-pane fade col-md-6" id="Phone" role="tabpanel" aria-labelledby="phone-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					10 of 10
				</div>
				<div class="card-body">
					<h5 class="card-title">Phone</h5>
					<p class="card-text">...</p>
					<div style="text-align: right; padding-top: 3%;">
						<a href="#" class="btn btn-primary">Next</a>
					</div>
				</div>
			</div>
		</div>

	</div>

<script language="javascript" type="text/javascript">
window.history.forward();
	
</script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="create-your-profile.js"></script>
</body>

</html>