<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>غرفة المحامين</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon 
        <link rel="shortcut icon" href="assets/images/favicon.ico">-->
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="assets/jquery.min.js"></script>
    </head>
    <body class="authentication-bg authentication-bg-pattern" style="background-color: #363b62;">
        <div class="account-pages mt-5 mb-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <a href="index">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="80"></span>
                                    </a>
                                    <p class="text-muted  mt-3">قم بإدخال البريد الخاص بك و الرقم السري لتسجيل الدخول إذا كنت لا تمتلك حساب يمكنك</p>
                                </div>
                                <h4 class="auth-title"><a href="signup.php">إنشاء عضوية جديدة</a></h4>
								<form  method="post" id="login_form" >

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">البريد الالكتروني</label>
                               <input class="form-control" type="email"  name="email" id="email" autocomplete="off" required autofocus   placeholder="Enter your email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">الباسورد</label>
                                        <input class="form-control" type="password" id="password" required="" name="password" id="password"  placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox checkbox-info">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                           
										<!--   <label class="custom-control-label" for="checkbox-signin">تذكرني</label>-->
                                       
									   </div>
                                    </div>
									<label class="form-check-label">
                                     <span class="text-danger align-middle" id="errorMsg"></span>
                                    </label>
                                    <div class="form-group mb-0 text-center">
	                                 <button type="submit" value="Login" class="btn btn-dark btn-block">دخول</button>
                                    </div>
					            </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <!-- end row -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
		 <!-- Footer Start -->
          <footer class="footer footer-alt">
            2022 &copy;<a style="color:#fff!important;" href="https://www.facebook.com/eslam.saeed.9809672" target="_blank"> ESLAM SAEED</a>
        </footer>
                <!-- end Footer -->
		
<script>

$(document).ready(function() {                 
    $("#login_form").submit(function(e){
      e.preventDefault();
      $.ajax({
      url:'check_authentication.php',
      type:'POST',
      data: {email:$("#email").val(), password:$("#password").val()},
      success: function(resp) {
         if(resp == "invalid") {
          $("#errorMsg").html("Invalid email and password!");  
         } else {
          window.location.href= resp;
         }
      }
     });
  });
});


</script>
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>