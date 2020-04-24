<?php  
include "auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/18dd5346aa.js" crossorigin="anonymous"></script>

</head>

<body class="create-your-profile-body">
    
    
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

    <!-- side navigation or off-canvas Menu -->

    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" id="expertise-tab" data-toggle="tab" href="#Expertise" role="tab"
                aria-controls="expertise" aria-selected="true">Expertise</a>
        </li>
        <li class="nav-item">
            <a href="#Expertise-Level" class="nav-link" data-toggle="tab" role="tab" aria-controls="expertise-level"
                aria-selected="true">Expertise Level</a>
        </li>
        <li class="nav-item">
            <a href="#Education" class="nav-link" data-toggle="tab" role="tab" aria-controls="education"
                aria-selected="true">Education</a>
        </li>
        <li class="nav-item">
            <a href="#Employment" class="nav-link" data-toggle="tab" role="tab" aria-controls="employment"
                aria-selected="true">Employment</a>
        </li>
        <li class="nav-item">
            <a href="#Languages" class="nav-link" data-toggle="tab" role="tab" aria-controls="languages"
                aria-selected="true">Languages</a>
        </li>
        <li class="nav-item">
            <a href="#Hourly-Rate" class="nav-link" data-toggle="tab" role="tab" aria-controls="hourly-rate"
                aria-selected="true">Hourly Rate</a>
        </li>
        <li class="nav-item">
            <a href="#Title-Overview" class="nav-link" data-toggle="tab" role="tab" aria-controls="title-overview"
                aria-selected="true">Title & Overview</a>
        </li>
        <li class="nav-item">
            <a href="#Profile-Photo" class="nav-link" data-toggle="tab" role="tab" aria-controls="profile-photo"
                aria-selected="true">Profile Photo</a>
        </li>
        <li class="nav-item">
            <a href="#Location" class="nav-link" data-toggle="tab" role="tab" aria-controls="location"
                aria-selected="true">Location</a>
        </li>
        <li class="nav-item">
            <a href="#Phone" class="nav-link" data-toggle="tab" role="tab" aria-controls="phone"
                aria-selected="true">Phone</a>
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
                    <p class="card-text"><select class="custom-select" name="" id="">
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
                        <input type="text" class="form-control"
                            placeholder="Write all skills you offer separated by spaces">
                        <span>Enter atleast 1 skill</span>
                    </div>
                    <div style="text-align: right; padding-top: 3%;">
                        <a href="#" class="btn btn-primary">Next</a>
                    </div>
                </div>
            </div>
        </div>

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
                        <input type="radio" class="form-chech-input" name="level" id="beginner">
                        <label for="intermediate" class="form-check-label">Beginner &emsp;&emsp;⭐</label><br>
                        <input type="radio" class="form-chech-input" name="level" id="intermediate">
                        <label for="intermediate" class="form-check-label">Intermediate &nbsp;⭐⭐</label><br>
                        <input type="radio" class="form-chech-input" name="level" id="expert">
                        <label for="intermediate" class="form-check-label">Expert&emsp;&emsp;&emsp;&nbsp;⭐⭐⭐</label><br>
                    </div>
                    <div style="text-align: right; padding-top: 3%;">
                        <a href="#" class="btn btn-primary">Next</a>
                    </div>
                </div>
            </div>
        </div>
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
                        <input type="text" class="form-control" placeholder="Enter school name">
                    </p>

                    <p>
                        <b>Area of study</b><span> (optional)</span>
                        <input type="text" class="form-control" placeholder="Area of study">
                    </p>

                    <p>
                        <b>Degree</b><span> (optional)</span>
                        <input type="text" class="form-control" placeholder="Degree">
                    </p>
                    <p>
                        <b>Dates Attended</b><span>(optional)</span><br>
                        <span>From</span>
                        <input class="form-control" type="date" id="datepicker" placeholder="From">
                        <span>To</span>
                        <input class="form-control" type="date" id="datepicker" placeholder="To">
                    </p>
                    <div style="text-align: right; padding-top: 3%;">
                        <a href="#" class="btn btn-primary">Next</a>
                    </div>
                </div>
            </div>
        </div>
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


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="create-your-profile.js"></script>
</body>

</html>