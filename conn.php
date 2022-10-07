  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<style>
 @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');
 *, *:before, *:after {
   box-sizing: border-box;
}
 body {
   min-height: 100vh;
   font-family: 'Raleway', sans-serif;
}
 .container {
   position: absolute;
   width: 100%;
   height: 100%;
   overflow: hidden;
}
 .container:hover .top:before, .container:active .top:before, .container:hover .bottom:before, .container:active .bottom:before, .container:hover .top:after, .container:active .top:after, .container:hover .bottom:after, .container:active .bottom:after {
   margin-left: 200px;
   transform-origin: -200px 50%;
   transition-delay: 0s;
}
 .container:hover .center, .container:active .center {
   opacity: 1;
   transition-delay: 0.2s;
}
 .top:before, .bottom:before, .top:after, .bottom:after {
   content: '';
   display: block;
   position: absolute;
   width: 200vmax;
   height: 200vmax;
   top: 50%;
   left: 50%;
   margin-top: -100vmax;
   transform-origin: 0 50%;
   transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
   z-index: 10;
   opacity: 0.65;
   transition-delay: 0.2s;
}
 .top:before {
   transform: rotate(45deg);
   background: #e46569;
}
 .top:after {
   transform: rotate(135deg);
   background: #ecaf81;
}
 .bottom:before {
   transform: rotate(-45deg);
   background: #60b8d4;
}
 .bottom:after {
   transform: rotate(-135deg);
   background: #3745b5;
}
 .center {
   position: absolute;
   width: 400px;
   height: 400px;
   top: 50%;
   left: 50%;
   margin-left: -200px;
   margin-top: -200px;
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   padding: 30px;
   opacity: 0;
   transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
   transition-delay: 0s;
   color: #333;
}
 .center input {
   width: 100%;
   padding: 15px;
   margin: 5px;
   border-radius: 1px;
   border: 1px solid #ccc;
   font-family: inherit;

}
.login100-form-btn {
  font-family: Montserrat-Bold;
  font-size: 15px;
  line-height: 1.5;
  color: #fff;
  text-transform: uppercase;

  width: 100%;
  height: 50px;
  border-radius: 25px;
  background: #6595e0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 25px;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

  
</style>
<?php include('header.php'); ?>


<div class="container" >
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">

        <form class="login100-form validate-form" id="login_form3"  method="post">
    <h2>Please Sign In</h2>
    <input type="text" id="username" name="username" placeholder="Username" required/>
    <input type="password" id="password" name="password" placeholder="Password" required/>

    <br><br>
    <div class="container-login100-form-btn">
            <button class="login100-form-btn" id="signin" name="login" type="submit">
              Login
            </button>
          </div>
  <script type="text/javascript">
                            $(document).ready(function(){
                              $('#signin').tooltip('show');
                              $('#signin').tooltip('hide');
                            });
                            </script>

  </div>
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
  <?php include('script.php'); ?>