<?php 
	session_start();
	// print_r($_SESSION);
	include 'include/header.php'; 
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

	// print_r($_SESSION);


	if(isset($_GET['date'])){
		$showForm =
		'
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Are you sure to update your record?</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>     
		<a href="../user/index.php?update_date=true&id='.$_SESSION['user_id'].'"><button type="submit" name="updateSave" class="btn btn-danger">Yes</button></a>
		<a href="../user/index.php"><button type="button" class="btn btn-info" data-dismiss="alert">No</button></a>
		</div>
		  ';

	}


	if(isset($_GET['update_date']) && $_GET['update_date']=="true")
	{
		// print_r('passed');
		$userID= $_GET['id'];
		$crntdate = date_create();
		$crntdate = date_format($crntdate,'Y-m-d');

		$sql = "UPDATE donor SET save_life_date = '$crntdate' WHERE id ='$userID' ";

		if(mysqli_query($connection,$sql)){

			$_SESSION['save_life_date'] = $crntdate;
			header("Location: ../user/index.php ");

		}else{

            $submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Data not inserted,Try again!</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>' ;

		}
	}
}
?>


<style>
h1,
h3 {
    display: inline-block;
    padding: 10px;
}

.name {
    color: #e74c3c;
    font-size: 22px;
    font-weight: 700;
}

.donors_data {
    background-color: white;
    border-radius: 5px;
    margin: 20px 5px 0px 5px;
    -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
    -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
    box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
    padding: 20px;
}
</style>

<div class="container" style="padding: 60px 0;">
    <div class="row">
        <div class="col-md-12 col-md-push-1">
            <div class="panel panel-default" style="padding: 20px;">
                <div class="panel-body">

                    <?php   if(isset($submitError)) {echo $submitError ;} ?>
                    <div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">

                        <strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will
                        not be able to show before 3 months.

                        <div class="buttons" style="padding: 20px 10px;">
                            <input type="text" value="" hidden="true" name="today">
                            <button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
                            <button class="btn btn-info" id="no" name="no">No</button>
                        </div>
                    </div>
                    <div class="heading text-center">
                        <!-- Donor Name -->

                        <h3>Welcome </h3>
                        <h1> <?php if(isset($_SESSION['name'])){ echo $_SESSION['name']  ;}  ?> </h1> <!-- Donor Name -->

                    </div>
                    <p class="text-center">Here you can manage & update your profile</p>

                    <div class="test-success text-center" id="data" style="margin-top: 20px;">
                        <?php if(isset($showForm)) echo $showForm ; ?>
                        <!-- Display Message here-->
                    </div>

                    <?php 
							 
							 $safeDate =$_SESSION['save_life_date'];

							
							 $start = date_create("$safeDate");
							 if($safeDate==0)
							 {
								 $start = date_create("2000-00-00");
							 }
							 $end = date_create();
							 $diff = date_diff($start,$end);

						 
							 $diffMonth = $diff->m;

							 if($safeDate=='0' || $diff->m>=3){

                              echo '
								<a href="../user/index.php?date=true">
								<button style="margin-top: 20px;" name="date" id="save_the_life" type ="submit" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
								</a>
								';
   

							 }
							 else
							 {						

									echo '
									<div class = " donors_data">
						<span class="name">Congratulations!</span>
						<span > You already save the life.You will donate the blood after 3 months. We are very thankful to you.</span>
						</div>' ;



					
							 }
							 ?>






                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('include/footer.php'); 
?>