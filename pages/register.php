<?php
$template="depan";
$konten= "
		<div class='container mt-3'>
			<div class='row justify-content-center'>
				<div class='col-md-7 col-lg-5'>
					<div class='wrap'>
						<div class='img' style='background-image: url(assets/depan/images/bg-1.jpg);'></div>
						<div class='login-wrap p-4 p-md-5'>
			      	<div class='d-flex'>
			      		<div class='w-100'>
			      			<h3 class='mb-4'>Sign Up</h3>
			      		</div>
			      	</div>
							<form action='#' class='signin-form'>
			      		<div class='form-group mt-3'>
			      			<input type='text' class='form-control' required>
			      			<label class='form-control-placeholder' for='username'>First Name</label>
			      		</div>
			      		<div class='form-group mt-3'>
			      			<input type='text' class='form-control' required>
			      			<label class='form-control-placeholder' for='username'>Last Name</label>
			      		</div>
			      		<div class='form-group mt-3'>
			      			<input type='text' class='form-control' required>
			      			<label class='form-control-placeholder' for='username'>Username</label>
			      		</div>
		            <div class='form-group'>
		              <input id='password-field' type='password' class='form-control' required>
		              <label class='form-control-placeholder' for='password'>Password</label>
		              <span toggle='#password-field' class='fa fa-fw fa-eye field-icon toggle-password'></span>
		            </div>
		            <div class='form-group'>
		            	<button type='submit' class='form-control btn btn-primary rounded submit px-3'>Register</button>
		            </div>
		          </form>
		          <p class='text-center'>Already a member? <a ' href='?page=login'>Sign In</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
";
?>