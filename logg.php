<?php include('header.php'); ?>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="login_form3"  method="post">
          <br><br><br>
					<span class="login100-form-title">
						Member Login
					</span>
<br><br>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="username" name="username" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password"id="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="signin" name="login" class="btn btn-info" type="submit">
							Login
						</button>
					</div>

					<script type="text/javascript">
                            $(document).ready(function(){
                              $('#signin').tooltip('show');
                              $('#signin').tooltip('hide');
                            });
                            </script>

					
				</form>


				<script>
            jQuery(document).ready(function(){
            jQuery("#login_form3").submit(function(e){
                e.preventDefault();
                var formData = jQuery(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "login.php",
                  data: formData,
                  success: function(html){
                  if(html=='true')
                  {
                  $.jGrowl("Loading File Please Wait......", { sticky: true });
                  $.jGrowl("Welcome to CHMSC Learning Management System", { header: 'Access Granted' });
                  var delay = 1000;
                    setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
                  }else if (html == 'true_student'){
                    $.jGrowl("Welcome to CHMSC Learning Management System", { header: 'Access Granted' });
                  var delay = 1000;
                    setTimeout(function(){ window.location = 'student_notification.php'  }, delay);  
                  }else
                  {
                  $.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
                  }
                  }
                });
                return false;
              });
            });
            </script>


            <script type="text/javascript">
                            $(document).ready(function(){
                              $('#signin_student').tooltip('show'); $('#signin_student').tooltip('hide');
                            });
            </script> 

            

            <script type="text/javascript">
                            $(document).ready(function(){
                              $('#signin_teacher').tooltip('show'); $('#signin_teacher').tooltip('hide');
                            });
            </script>


			</div>
		</div>
	</div>
	
	<?php include('script.php'); ?>

	


