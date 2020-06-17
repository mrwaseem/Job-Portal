<?php
    $con = mysqli_connect("localhost","root","","jobportal");
    $sql = "select * from job_post";
    $result = mysqli_query($con,$sql);
    $job=mysqli_num_rows($result);
    $sql = "select * from employee_signup";
    $result = mysqli_query($con,$sql);
    $employee=mysqli_num_rows($result);
     $sql = "select * from jobseeker_signup";
    $result = mysqli_query($con,$sql);
    $jobseeker=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <title>JobPortal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php 
include "Header.php"
?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>
                    <div class="ftco-search">
                        <div class="col-md-12 tab-wrap">
                            <div class="tab-content p-4" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                    <form action="#" class="search-job">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-briefcase"></span></div>
                                                        <input type="text" class="form-control" placeholder="eg. Garphic. Web Developer">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                            <select class="form-control" name="city" id="city">
                                                                <option value="">Select City</option>
                                                                <option value="Bangalore">Bangalore</option>
                                                                <option value="Chennai">Chennai</option>
                                                                <option value="Mumbai">Mumbai</option>
                                                                <option value="Delhi">Delhi</option>
                                                                <option value="Atal Nagar">Atal Nagar</option>
                                                                <option value="Bhopal">Bhopal</option>
                                                                <option value="Lucknow">Lucknow</option>
                                                                <option value="Hyderabad">Hyderabad</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<section class="ftco-section bg-light">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Recently Added Jobs</span>
            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
          </div>
        </div>
 <?php
        $sql = "select * from job_post";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result))
        {
            $cname=$row['cname'];
            $cperson=$row['cperson'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $title =$row['jtitle'];
            $location =$row['jloc'];
            $city =$row['jcity'];
            $state =$row['jstate'];
            $description =$row['jdesc'];
            $qualification =$row['quali'];
            $salary =$row['salary'];
    ?>        
<div class="row">
	<div class="col-md-12 ftco-animate">
            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $title;?></h2>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3">Company: <a href="#"><?php echo $cname;?></a></div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                  <div>Qualification: <?php echo $qualification;?></div>
                  </div>
                  <div class="job-post-item-body d-block d-md-flex">
                  <div>Salary: <?php echo $salary;?></div>
                </div>
                 <div class="job-post-item-body d-block d-md-flex">
                  <div>Mobile no: <?php echo $mobile;?></div>
                </div>
                 <div class="job-post-item-body d-block d-md-flex">
                  <div>Email: <?php echo $email;?></div>
                </div>
                  <div class="job-post-item-body d-block d-md-flex">
                  <div>Address: <?php echo $location;?>, <?php echo $city;?>, <?php echo $state;?></div>
                </div>
                
                <div class="job-post-item-body d-block d-md-flex">
                  <div>Job Description: <?php echo $description;?></div>
                </div>
                </div>
                <div class="ml-auto d-flex">
                <a href="JobSeeker/Signin_Signup.php" class="btn btn-primary py-2 mr-1">Apply Job</a>
              </div>
              
              
            </div>
     </div>
</div>
<?php
}
?>
</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $employee?>">0</strong>
		                <span>Employees</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $job?>">0</strong>
		                <span>Jobs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="<?php echo $jobseeker?>">0</strong>
		                <span>JobSeeker</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
</section>
			
<?php 
include "Footer.php"
?>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>