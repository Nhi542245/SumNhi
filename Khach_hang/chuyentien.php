<?php
    session_start();
    include("../config/connect.php");
    echo $_SESSION['login']." muon rut tien";
    


    $sql_nguon = "SELECT * FROM account_banking where username = '".$_SESSION['login']."' ";
    $query = mysqli_query($conn,$sql_nguon);
    $taikhoannguon = mysqli_fetch_array($query);
    
    
    // echo $taikhoannguon['account_balance'];
    

    if(isset($_POST['chuyentien']) && isset($_POST['so_tien'])  && isset($_POST['username_dich'])) {
        
        $username_nguon = $_SESSION['login'];
        $username_dich = $_POST['username_dich'];
        $sotienchuyen = $_POST['so_tien'];
        $sql_dich = "SELECT * FROM account_banking where username = '".$username_dich."' ";
        $query1 = mysqli_query($conn,$sql_dich);
        $taikhoandich = mysqli_fetch_array($query1);
        $count = mysqli_num_rows($query1);
        
        
        if($count==0){
            echo "<script>alert('Vui lòng kiểm tra tài khoản thụ hưởng!');</script>";
            header("refresh:0.1;url=chuyentien.php");
        }
        elseif($sotienchuyen%10000!=0){
            echo "<script>alert('Số tiền chuyển phải là bội số của 10.000!');</script>";
            header("refresh:0.1;url=chuyentien.php");
        }
        elseif($taikhoannguon['account_balance']<$sotienchuyen+50000){
            echo "<script>alert('Số dư không đủ!');</script>";
            header("refresh:0.1;url=chuyentien.php");
        }
        else{
        $sodunguon = $taikhoannguon['account_balance'] - $sotienchuyen;
        $sodudich = $taikhoandich['account_balance'] + $sotienchuyen;
        echo $sodudich;
        $sql_update_nguon = "UPDATE account_banking set account_balance = '".$sodunguon."' where username = '".$_SESSION['login']."'";
        $query = mysqli_query($conn,$sql_update_nguon);
        
        $sql_update_dich = "UPDATE account_banking set account_balance = '".$sodudich."' where username = '".$username_dich."'";
        $query = mysqli_query($conn,$sql_update_dich);
        

        $sql_insert_sesion = "INSERT into session(id_customer,id_service,id_opponent,money) values('".$username_nguon."',3,'".$username_dich."','".$sotienchuyen."')";
        $query = mysqli_query($conn,$sql_insert_sesion);
        
        

        echo "<script>alert('chuyen tien thanh cong');</script>";
        
        header("refresh:0.1;url=index.php");
        }
    }
?>


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
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" type="text/css" href="css/ruttien.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
                                <h3>Tài khoản đích: </h3>
                                <input  type="text" name="username_dich" value="">
                                <h3>Số tiền: </h3>

                               <input  type="text" name="so_tien" value="">
                              
                            </div>

    
                            <div class="form-button mt-3">
                               
                                <button id="submit" type="submit" name="chuyentien" class="btn btn-primary">Chuyển tiền</button>
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