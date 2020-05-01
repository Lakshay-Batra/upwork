<?php include "DB.php"; ?>
<?php  
session_start();
$profile_id = $_SESSION['id']; ?>

<?php
global $count;
$expertise_skills = '' ;
$expertise = '' ;
$display = True;
if(isset($_POST['submit']))
{
	$count++;
	$profile_id = $_SESSION['id'];
	$expertise = $_POST['select'];
	$expertise_skills = $_POST['skills'];
	$display = False;
	
	
	
	$query = "INSERT INTO profilee(profile_id, expertise, skills) ";
	$query .="VALUES({$profile_id},'{$expertise}','{$expertise_skills}') ";
	
	
	$result = mysqli_query($connection,$query);

}
		
		
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
	


	<!-- side navigation or off-canvas Menu -->
	<form action="" method="post">
		
		<?php include "create_profile_nav.php"?>

		<ul id="myTab" class="nav nav-tabs justify-content-center">
			<li class="nav-item">
				<a class="nav-link active" id="expertise-tab" data-toggle="tab" href="#Expertise" role="tab" aria-controls="expertise" aria-selected="true">Expertise</a>
			</li>
			<li class="nav-item">
				<a id="1a" href="#Expertise-Level" class="nav-link" data-toggle="tab" role="tab" aria-controls="expertise-level" aria-selected="true">Expertise Level</a>
			</li>
			<li class="nav-item">
				<a id="2a" href="#Education" class="nav-link" data-toggle="tab" role="tab" aria-controls="education" aria-selected="true">Education</a>
			</li>
			<li class="nav-item">
				<a id="3a" href="#Employment" class="nav-link" data-toggle="tab" role="tab" aria-controls="employment" aria-selected="true">Employment</a>
			</li>
			<li class="nav-item">
				<a id="4a" href="#Languages" class="nav-link" data-toggle="tab" role="tab" aria-controls="languages" aria-selected="true">Languages</a>
			</li>
			<li class="nav-item">
				<a id="5a" href="#Hourly-Rate" class="nav-link" data-toggle="tab" role="tab" aria-controls="hourly-rate" aria-selected="true">Hourly Rate</a>
			</li>
			<li class="nav-item">
				<a id="6a" href="#Title-Overview" class="nav-link" data-toggle="tab" role="tab" aria-controls="title-overview" aria-selected="true">Title & Overview</a>
			</li>
			<li class="nav-item">
				<a id="7a" href="#Profile-Photo" class="nav-link" data-toggle="tab" role="tab" aria-controls="profile-photo" aria-selected="true">Profile Photo</a>
			</li>
			<li class="nav-item">
				<a id="8a" href="#Location" class="nav-link" data-toggle="tab" role="tab" aria-controls="location" aria-selected="true">Location</a>
			</li>
			<li class="nav-item">
				<a id="9a" href="#Phone" class="nav-link" data-toggle="tab" role="tab" aria-controls="phone" aria-selected="true">Phone</a>
			</li>
		</ul>

		

		<div class="heading row justify-content-md-center">
			<div class="col-md-5">
				<h1>Profile Buildup</h1>
			</div>
		</div>
		<div class="tab-content row justify-content-md-center" id="myTabContent">
			<!-- 1 -->
			<div class="tab-pane fade show active col-md-6" id="Expertise" role="tabpanel" aria-labelledby="expertise-tab">
				<div class="card" style="text-align: left;">
					<div class="card-header">
						1 of 10
					</div>
					<div class="card-body">
						<h5 class="card-title">Expertise</h5>
						<p class="card-text">Tell us about the work you do</p>
						<p class="card-text"><b>What is the main service you offer?</b></p>
						<p class="card-text"><select class="custom-select" name="select" id="">
								<option value="">Please Select</option>
								<option value="Accounting & Consulting">Accounting & Consulting</option>
								<option value="Admin Support">Admin Support</option>
								<option value="Customer Service">Customer Service</option>
								<option value="Data Science and Analytics">Data Science and Analytics</option>
								<option value="Design & Creative">Design & Creative</option>
								<option value="Engineering & Architecture">Engineering & Architecture</option>
								<option value="IT & Networking">IT & Networking</option>
								<option value="Legal">Legal</option>
								<option value="Sales & Marketing">Sales & Marketing</option>
								<option value="Transiation">Transiation</option>
								<option value="Web & Mobile Development">Web & Mobile Development</option>
								<option value="Writing">Writing</option>
							</select></p>
						<p><b>What skills do you offer clients?</b></p>
						<div style="text-align: right;">
						
							<input type="text"  id="txt" class="form-control auto-save" placeholder="Write all skills you offer separated by spaces" name="skills" required>
							
							<span>Enter atleast 1 skill</span>
						</div>


						<div style="text-align: right; padding-top: 3%;">
						
					
							<a id="1" href="#Expertise-Level" data-toggle="tab" role="tab" aria-controls="expertise-level" aria-selected="true" class="btn btn-primary">Next</a>
						</div>
					</div>
				</div>
			</div>
			
	
			


			<?php
		
global $level; 
if(isset($_POST['submit']))
{
	$profile_id = $_SESSION['id'];
	if($_POST['level'] == 'beginner')
	 {
		 $level = "beginner";
	 }
	else if($_POST['level'] == 'expert')
	{
		$level = "Expert";
	}
	else
	{
		$level = "Not to Say";
	}
	

	$query = "INSERT INTO e_leveltb(expertise_level_id, expertise_level) ";
	$query .="VALUES({$profile_id}, '{$level}')";
	
	$result = mysqli_query($connection,$query);
	if(!$result)
	{
		die("Connection Failed!".mysqli_error($connection));
	}

}
?>




			<!-- 2 -->
			<div class="tab-pane fade col-md-6" id="Expertise-Level" role="tabpanel" aria-labelledby="expertise-level-tab">
				<div class="card" style="text-align: left;">
					<div class="card-header">
						2 of 10
					</div>
					<div class="card-body">
						<h5 class="card-title">Expertise Level</h5>
						<p class="card-text"><b>What is your level of expertise in this field out of 3 stars?</b></p>
						<div class="form-check">
							<input type="radio" class="form-chech-input" name="level" id="beginner" value="begineer">
							<label for="intermediate" class="form-check-label">Beginner &emsp;&emsp;⭐</label><br>
							<input type="radio" class="form-chech-input" name="level" id="intermediate">
							<label for="intermediate" class="form-check-label">Intermediate &nbsp;⭐⭐</label><br>
							<input type="radio" class="form-chech-input" name="level" id="expert" value="expert">
							<label for="intermediate" class="form-check-label">Expert&emsp;&emsp;&emsp;&nbsp;⭐⭐⭐</label><br>
						</div>
						<div style="text-align: right; padding-top: 3%;">
							<a id="2" class="btn btn-primary" href="#Education" data-toggle="tab" role="tab" aria-controls="education" aria-selected="true">Next</a>
						</div>
					</div>
				</div>
			</div>


			<?php 
		if(isset($_POST['submit']))
		{
			$profile_id = $_SESSION['id'];
			$firstname = $_SESSION['firstname'];
			$school = $_POST['school'];
			$areaofstudy = $_POST['areaofstudy'];
			$degree = $_POST['degree'];
			$form = $_POST['from'];
			$to = $_POST['to'];
			
			$query = "INSERT INTO eduactiontb(education_id, firstname, college_name, area_study, degree, from_date, to_date) ";
			$query .="VALUES({$profile_id}, '{$firstname}', '{$school}', '{$areaofstudy}', '{$degree}', '{$form}', '{$to}')";
			
			$result_query = mysqli_query($connection,$query);
			if(!$result_query)
			{
				die("Connection Failed ".mysqli_error($connection));
			}
		
		}
		
		?>


			<!-- 3 -->
			<div class="tab-pane fade col-md-6" id="Education" role="tabpanel" aria-labelledby="education-tab">
				<div class="card" style="text-align: left;">
					<div class="card-header">
						3 of 10
					</div>
					<div class="card-body">
						<h5 class="card-title">Education</h5>
						<p class="card-text">
							<b>School</b>
							<input type="text" class="form-control" placeholder="Enter school name" name="school">
						</p>

						<p>
							<b>Area of study</b><span> (optional)</span>
							<input type="text" class="form-control" placeholder="Area of study" name="areaofstudy">
						</p>

						<p>
							<b>Degree</b><span> (optional)</span>
							<input type="text" class="form-control" placeholder="Degree" name="degree">
						</p>
						<p>
							<b>Dates Attended</b><span>(optional)</span><br>
							<span>From</span>
							<input class="form-control" type="date" id="datepicker" placeholder="From" name="from">
							<span>To</span>
							<input class="form-control" type="date" id="datepicker" placeholder="To" name="to">
						</p>
						<div style="text-align: right; padding-top: 3%;">
							<a id="3" href="#Employment" data-toggle="tab" role="tab" aria-controls="employment" aria-selected="true" class="btn btn-primary">Next</a>
						</div>
					</div>
				</div>
			</div>







			<?php 
		if(isset($_POST['submit']))
		{
			$profile_id = $_SESSION['id'];
			$company = $_POST['companyname'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$country = $_POST['country'];
			$title = $_POST['jobtitle'];
			$description = $_POST['description'];
			
			$query = "INSERT INTO employmenttb(employment_id, employ_company, employ_city, employ_state, employ_country, employ_job_title, employ_description) ";
			$query .="VALUES({$profile_id}, '{$company}', '{$city}', '{$state}', '{$country}', '{$title}', '{$description}')";
			
			$result_query = mysqli_query($connection,$query);
			if(!$result_query)
			{
				die("Connection Failed ".mysqli_error($connection));
			}
		
		}
		
		?>


			<!-- 4 -->
			<div class="tab-pane fade col-md-6" id="Employment" role="tabpanel" aria-labelledby="employment-tab">
				<div class="card" style="text-align: left;">
					<div class="card-header">
						4 of 10
					</div>
					<div class="card-body">
						<h5 class="card-title">Employment</h5>
						<p class="card-text"><b>Add your past work experience</b></p>
						<p>Build your credebility by showcasing your the projects or jobs you have completed.</p>
						<div id="past-experience">

						</div><br>
						<p>
							<button type="button" id="add" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalLong">
								+ Add Employment
							</button>
						</p>
						<!-- Modal -->

						<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header modal-header-success">
										<h5 class="modal-title" id="exampleModalLongTitle">Employment</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>
											<b>Company</b>
											<input id="company" type="text" class="form-control" placeholder="name of company" name="companyname">
										</p>
										<p>
											<b>Location</b>
											<input type="text" class="form-control" placeholder="city" name="city">
											<input type="text" class="form-control" placeholder="state" name="state">
											<input type="text" class="form-control" placeholder="country" name="country">
										</p>
										<p>
											<b>Title</b>
											<input type="text" name="jobtitle" id="past-title" class="form-control" placeholder="job title">
										</p>
										<p>
											<b>Description</b>
											<textarea class="form-control" name="description" id="" cols="60" rows="5"></textarea>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button id="save-btn-past-experience" type="submit" class="btn btn-primary" name="employment">Save</button>
									</div>

								</div>
							</div>
						</div>
						<div style="text-align: right; padding-top: 3%;">
							<a id="4" href="#Languages" data-toggle="tab" role="tab" aria-controls="languages" aria-selected="true" class="btn btn-primary">Next</a>

						</div>
					</div>
				</div>
			</div>




			<?php 
		if(isset($_POST['submit']))
		{
			$profile_id = $_SESSION['id'];
			$firstname = $_SESSION['firstname'];
			$lang_prof = $_POST['lang_prof'];
			$other_lang = $_POST['other_lang'];
			$other_lang_prof = $_POST['other_lang_prof'];
			
			$query = "INSERT INTO languagetb(language_id, firstname, lang_profiency, other_lang, other_lang_prof) ";
			$query .="VALUES({$profile_id}, '{$firstname}', '{$lang_prof}', '{$other_lang}', '{$other_lang_prof}')";
			
			$result_query = mysqli_query($connection,$query);
			if(!$result_query)
			{
				die("Connection Failed ".mysqli_error($connection));
			}
		
		}
		
?>





			<!-- ********5       -->



			<!-- 5 -->
			<div class="tab-pane fade col-md-6" id="Languages" role="tabpanel" aria-labelledby="languages-tab">
				<div class="card" style="text-align: left;">
					<div class="card-header">
						5 of 10
					</div>
					<div class="card-body">

						<h5 class="card-title">Languages Known</h5>
						<p class="card-text"><b>Whay is your English profiency?</b>
							<select name="lang_prof" id="" class="form-control">
								<option value=''>Select Proficiency</option>
								<option value="basic">Basic</option>
								<option value="conversational">Converstaionsal</option>
								<option value="fluent">Fluent</option>
							</select></p>
						<p><b>What other languages do you speak?</b></p>
						<div id="languages-column">
							<div class='input-group'>
								<select class='form-control' name="other_lang">
									<option value=''>Select Language</option>
									<option value='hindi'>Hindi</option>
									<option value='punjabi'>Punjabi</option>
									<option value='bengoli'>Bengoli</option>
								</select>
								<select class='form-control' name="other_lang_prof">
									<option value=''>Select Proficiency</option>
									<option value='basic'>Basic</option>
									<option value='conversational'>Converstaionsal</option>
									<option value='fluent'>Fluent</option>
								</select>
							</div>

						</div><br>
						<button id="add-language" class="btn btn-secondary btn-block btn-lg" type="button">+ Add language</button>

						<script>
							$("#add-language").on("click", () => {
								$("#languages-column").append("<div class='input-group'><select class='form-control'><option value=''>Select Language</option><option value='hindi'>Hindi</option><option value='punjabi'>Punjabi</option><option value='bengoli'>Bengoli</option></select><select class='form-control'><option value=''>Select Proficiency</option><option value='basic'>Basic</option><option value='conversational'>Converstaionsal</option><option value='fluent'>Fluent</option></select></div>")
							});
						</script>

						<div style="text-align: right; padding-top: 3%;">
							<!--	<button type="submit" class="btn btn-success" name="language">Submit</button>-->
							<a id="5" href="#Hourly-Rate" data-toggle="tab" role="tab" aria-controls="hourly-rate" aria-selected="true" class="btn btn-primary">Next</a>
						</div>

					</div>
				</div>
			</div>


			<?php 
include "DB.php";
if(isset($_POST['submit']))
{
	$profile_id = $_SESSION['id'];
	$firstname = $_SESSION['firstname'];
	$rate = $_POST['rate'];
	
	$query = "INSERT INTO hourlytb(profile_id, firstname, hourly_rate) ";
	$query .="VALUES({$profile_id},'{$firstname}',{$rate})";
	
	$result_query = mysqli_query($connection,$query);
	
	if(!$result_query)
	{
		die("Connection Failed!".mysqli_error($connection));
	}
	
}

?>






			<div class="tab-pane fade col-md-6" id="Hourly-Rate" role="tabpanel" aria-labelledby="hourly-rate-tab">
				<div class="card" style="text-align: left;">
					<div class="card-header">
						6 of 10
					</div>
					<div class="card-body">

						<h5 class="card-title">Hourly Rate</h5>
						<p class="card-text"><b>Clients wil see this rate on your profile and search once you publish your
								profile.</b>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="basic-addon1">₹ / hour</span>
								</div>
								<input type="text" name="rate" class="form-control" aria-label="Username" aria-describedby="basic-addon1" required>
							</div>

					</div>

					<p><b>Iniesta Service fee</b><br>
						Iniesta will charge 20% when you begin a contract with a new client</p>
					<div style="text-align: right; padding-top: 3%;">
						<!--						<button class="btn btn-success" type="submit" name="hourrate"> Submit</button>-->
						<a id="6" href="#Title-Overview" data-toggle="tab" role="tab" aria-controls="title-overview" aria-selected="true" class="btn btn-primary">Next</a>
					</div>

				</div>
			</div>


			<?php 


if(isset($_POST['submit']))
{
	$profile_id = $_SESSION['id'];
	$firstname = $_SESSION['firstname'];
	$title = $_POST['title'];
	$professional_overview = $_POST['professional'];
	
	$query = "INSERT INTO titletb(profile_id, firstname, title, professional_overview) ";
	$query .="VALUES({$profile_id},'{$firstname}','{$title}','{$professional_overview}')";
	
	$result_query = mysqli_query($connection,$query);
	
	if(!$result_query)
	{
		die("Connection Failed!".mysqli_error($connection));
	}
	
}

?>


			<div class="tab-pane fade col-md-6" id="Title-Overview" role="tabpanel" aria-labelledby="title-overview-tab">
				<div class="card" style="text-align: left;">
					<div class="card-header">
						7 of 10
					</div>
					<div class="card-body">
						<h5 class="card-title">Title Overview</h5>
						<p class="card-text"><b>Title</b>
							<input type="text" class="form-control" name="title" id="" placeholder="example: IT & Networking"></p>
						<p><b>Professional Overview</b>
							<textarea name="professional" id="" cols="50" rows="5" class="form-control"></textarea></p>


						<div style="text-align: right; padding-top: 3%;">
							<button class="btn btn-success" type="submit" name="submit"> Submit </button>
							
							<a id="7" href="#Profile-Photo" data-toggle="tab" role="tab" aria-controls="profile-photo" aria-selected="true" class="btn btn-primary">Next</a>
						</div>
					</div>
				</div>
			</div>



			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="create-your-profile.js"></script>
		</div>
	</form>
</body>

</html>