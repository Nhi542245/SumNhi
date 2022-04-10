<?php
    ob_start();
    session_start();
    include("../config/connect.php");
    if(isset($_POST['login'])){
        $username = $_POST['txtusername'];
        $password = md5($_POST['txtpassword']);
        
        $sql = "SELECT * FROM account_banking where username = '".$username."' AND password = '".$password."' LIMIT 1";
        $row = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($row);
        
		if($count>0){
			$_SESSION['login'] = $username;
            echo '<script>alert("Đăng nhập thành công");</script>';
            
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			//header("Location:login.php");
		}
        mysqli_close($conn);
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>



<body>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/lotus.png" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Welcome to NDT BANK</h4>
                </div>

                <form method="POST">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Username</label>
                    <input type="text" id="form2Example11" class="form-control" placeholder="Phone number or email address" value="" required name="txtusername"/>
                    
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22" class="form-control" value="" required name="txtpassword" />
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" name="login" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" value="Đăng nhập">
                    
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>


                 

                </form>


              </div>
            </div>



       <!--  ghi gi cũng dc -->


       


           <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
</body>

</html>