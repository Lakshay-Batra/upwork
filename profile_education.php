<?php include "DB.php"; ?>
	

	<?php 
		if(isset($_POST['education']))
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
				<form action="create-your-profile.php" method="post" enctype="multipart/form-data">
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
						<button class="btn btn-primary" type="submit" name="education">Next</button>
					</div>
					</form>
				</div>
			</div>
		</div>
		
		