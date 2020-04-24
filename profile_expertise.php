<?php include "DB.php"; ?>


<?php
if(isset($_POST['submit']))
{
	
	$profile_id = $_SESSION['id'];
	$expertise = $_POST['expertise'];
	$expertise_skills = $_POST['skills'];
	
	
	
	
	$query = "INSERT INTO profile(profile_id, expertise, skills) ";
	$query .="VALUES({$profile_id},'{$expertise}','{$expertise_skills}')";
	
	$result = mysqli_query($connection,$query);
	if(!$result)
	{
		die("Connection Failed!".mysqli_error($connection));
	}
}
		
		
		
?>
<script language="javascript" type="text/javascript">
window.history.forward();
	
</script>
		<!-- 1 -->
		<div class="tab-pane fade show active col-md-6" id="Expertise" role="tabpanel" aria-labelledby="expertise-tab">
			<div class="card" style="text-align: left;">
				<div class="card-header">
					1 of 10
				</div>
				<div class="card-body">
					<form action="create-your-profile.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<h5 class="card-title">Expertise</h5>
							<p class="card-text">Tell us about the work you do</p>
							<p class="card-text"><b>What is the main service you offer?</b></p>

							<p class="card-text"><select class="custom-select" name="expertise" id="">
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

							<input type="text" class="form-control" placeholder="Write all skills you offer separated by spaces" name="skills">
							<span>Enter atleast 1 skill</span>

							<div style="text-align: right; padding-top: 3%;">
								<button class="btn btn-primary" type="submit" name="submit">Next</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
