<?php
        session_start();
        include("../config/connect.php");
        
    
        $sql_nguon = "SELECT * FROM account_banking where username = '".$_SESSION['login']."' ";
        $query = mysqli_query($conn,$sql_nguon);
        
        $taikhoannguon = mysqli_fetch_array($query);
        // echo $taikhoannguon['account_balance'];

        if(isset($_POST['naptien']) && isset($_POST['so_tien'])) {
        
            $username_nguon = $_SESSION['login'];
            $sotiennap = $_POST['so_tien'];
    
    
    
            $sodunguon = $taikhoannguon['account_balance'] + $sotiennap;
            $sql_update_nguon = "UPDATE account_banking set account_balance = '".$sodunguon."' where username = '".$_SESSION['login']."'";
            $query = mysqli_query($conn,$sql_update_nguon);
            
            $sql_insert_sesion = "INSERT into session(id_customer,id_service,id_opponent,money) values('".$username_nguon."',2,null,'".$sotiennap."')";
            $query = mysqli_query($conn,$sql_insert_sesion);
           
            
            echo "<script>alert('Nạp tiền thanh công');</script>";
            
            header("refresh:0.1;url=index.php");
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <title>Document</title>
    <style>

    </style>
</head>
<body>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>BANK_NDT</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bank_lock  web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web Designs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/ruttien.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //web-fonts -->

</head>
<body>
	<?php
		include("component/header.php");
		?>
            <div class="wrapper">
        <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        
                        <form class="requires-validation" novalidate method="POST">

                            <div class="col-md-12">
                                <h3>Tài khoản nguồn: </h3>
                               <input disabled  type="text" name="username_nguon" value="<?= $_SESSION['login'];?>">

                               <input  type="text" name="so_tien" value="">
                              
                            </div>

    
                            <div class="form-button mt-3">
                               
                                <button id="submit" type="submit" name="naptien" class="btn btn-primary">Nạp tiền</button>
                            </div>


        </form>
    </div>
    </div>
                </div>
            </div>
        </div>
    </div>


		
		<?php
		
		include("component/footer.php");

	?>
</body>