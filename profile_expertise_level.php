<?php
		
global $level; 
if(isset($_POST['sub']))
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
				<form action="create-your-profile.php" method="post" enctype="multipart/form-data">
					<p class="card-text"><b>What is your level of expertise in this field out of 3 stars?</b></p>
					<div class="form-check">
						<input type="radio" class="form-chech-input" name="level" id="beginner" value="beginner">
						<label for="intermediate" class="form-check-label">Beginner &emsp;&emsp;⭐</label><br>
						<input type="radio" class="form-chech-input" name="level" id="intermediate" value="inter">
						<label for="intermediate" class="form-check-label">Intermediate &nbsp;⭐⭐</label><br>
						<input type="radio" class="form-chech-input" name="level" id="expert" value="expert">
						<label for="intermediate" class="form-check-label">Expert&emsp;&emsp;&emsp;&nbsp;⭐⭐⭐</label><br>
					</div>
					<div style="text-align: right; padding-top: 3%;">
						<button class="btn btn-primary" type="submit" name="sub">Next</button>
					</div>
				</form>
			</div>
		</div>
	</div>