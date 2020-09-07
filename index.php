<?php 

	//include header file
	include ('include/header.php');
	if(isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
		
		header("Location: ../donatetheblood/index.php ");

	}else{


	}

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="District">-- Select --</option><optgroup title="District" label="&raquo; District"></optgroup><option value="Dhaka" >Dhaka</option><option value="Mymensingh" >Mymensingh</option><option value="Rajshahi" >Rajshahi</option><option value="Khulna" >khulna</option><option value="Barisal" >Barisal</option><option value="syllhet" >syllhet</option><option value="Barguna" >Barguna</option><option value="Patuakhali" >Patuakhali</option><option value="Bhola" >Bhola</option><option value="chittagong" >Chittagong</option><option value="Manikganj" >Manikganj</option><option value="Narayanganj" >Narayanganj</option><option value="Narshingdi" >Narshingdi</option><option value="Jassore" >Jassore</option><option value="Jamalpur" >Jamalpur</option><option value="Jaidebpur" >Jaidebpur</option><option value="Comilla" >Comilla</option><option value="Noakhali" >Noakhali</option><option value="Feni" >Feni</option><option value="Faridpur" >Faridpur</option><option value="Gazipur" >Gazipur</option><option value="Gopalganj" >Gopajganj</option><option value="Natore" >Natore</option><option value="Sirajganj" >Sirajganj</option><option value="Munshiganj" >Munshiganj</option><option value="Tangail" >Tangail</option><option value="Sherpur" >Sherpur</option><option value="Rangpur" >Rangpur</option><option value="Bagura" >Bagura</option><option value="Habiganj" >Habiganj</option><option value="Panchagar" >Panchagar</option><option value="chapainababganj" >chapainababganj</option><option value="Kushtiya" >Kushtiya</option><option value="Naogaon" >Naogaon</option><option value="Nilphamary" >Nilphamary</option><option value="Jhenaidaw" >Jhenaidaw</option><option value="Magura" >Magura</option><option value=" Satkhira" >Satkhira</option><option value="Magura" >Magura</option><option value="Pabna" >Pabna</option><option value="Bagerhat" >Bagerhat</option><option value="Manikganj" >Manikganj</option><option value="Chadpur" >Chadpur</option><option value="Netrokona" >Netrokona</option><option value="Barguna" >Barguna</option><option value="Bandarban" >Bandarban</option><option value="Brahmanbaria" >Brahmanbaria</option><option value="Gopalganj" >Gopalganj</option><option value="Naogaon" >Naogaon</option><option value="Lalmonirhat" >Lalmonirhat</option><option value="Thakurgaon" >Thakurgaon</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood </h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						   Make blood donation your responsibility !!!!
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red"> Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To provide the high quality and safe blood to the people free of cost!
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To provide the high quality and safe blood to the people free of cost!
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red"> Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To make blood donation 100% free!
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>