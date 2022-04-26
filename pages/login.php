<?php
$template="depan";
$konten= "
		<div class='container mt-5'>
			<div class='row justify-content-center'>
				<div class='col-md-7 col-lg-5'>
					<div class='wrap'>
						<div class='img' style='background-image: url(assets/depan/images/bg-1.jpg);'></div>
						<div class='login-wrap p-4 p-md-5'>
			      	<div class='d-flex'>
			      		<div class='w-100'>
			      			<h3 class='mb-4'>Sign In</h3>
			      		</div>
			      	</div>
							<form action='#' class='signin-form'>
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
		            	<button type='submit' class='form-control btn btn-primary rounded submit px-3'>Sign In</button>
		            </div>
		            <div class='form-group d-md-flex'>
		            	<div class='w-50 text-left'>
			            	<label class='checkbox-wrap checkbox-primary mb-0'>Remember Me
									  <input type='checkbox' checked>
									  <span class='checkmark'></span>
										</label>
									</div>
		            </div>
		          </form>
		          <p class='text-center'>Not a member? <a href='?page=register'>Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
";
?>