<?php
	include('dbconnect.php');

	if(isset($_REQUEST['submit'])){

		$sql="SELECT u_email FROM useraccount WHERE u_email='".$_REQUEST['email']."'";
		$res=$conn->query($sql);
		if ($res->num_rows == 1) {
			
			$msg='<div class="alert alert-danger mt-2" role="alert">Already registerd</div>';
		}
		
		else{
		$u_name=$_REQUEST['user'];
		$u_email=$_REQUEST['email'];
		$u_pass=$_REQUEST['pass'];

		$sql="INSERT into useraccount(u_name,u_email,u_pass) VALUES('$u_name','$u_email','$u_pass')";

		if($conn->query($sql)==TRUE){
			$msg = '<div class="alert alert-success mt-2" role="alert">Account Successfully Created</div>';
		}
		else{
			$msg = '<div class="alert alert-danger mt-2" role="alert">Unable to create</div>';
		}
	}
}

?>

<form class="form-group border border-info p-4 " method="POST" action="" id="accbox">
				
				<h4 class="text-center">Create an Account</h4>

				<div class="text-secondary">

				<label for="user" class="mt-3"><i class="far fa-user pr-2"></i>User</label>
				<input type="user" name="user" class="form-control" required>

				<label for="email" class="mt-3"><i class="far fa-envelope pr-2"></i>Email</label>
				<input type="email" name="email" class="form-control" required>

				<!-- <label for="phone" class="mt-3"><i class="fas fa-phone pr-2"></i>Phone</label>  
				<input type="phone" name="phone" class="form-control" > -->

				<label for="loc" class="mt-3"><i class="fas fa-search-location pr-2"></i>Location</label> 
				<input type="text" name="loc" class="form-control" >

				
				<label for="pass" class="mt-3"><i class="fas fa-key pr-2"></i>Password</label>
				<input type="password" name="pass" class="form-control" required>

				<button class="form-control btn btn-primary mt-2" name="submit">Create account</button>
				<small style="text-align: center;">Already have an account? <a href="login.php">Click here!</a></small>

				<?php if(isset($msg))
				{
					echo $msg;
				} ?>

				</div>
			</form>