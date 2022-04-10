<?php
        session_start();
        include("../config/connect.php");
        
    
        $sql_nguon = "SELECT * FROM account_banking where username = '".$_SESSION['login']."' ";
        $query = mysqli_query($conn,$sql_nguon);
        
        $taikhoannguon = mysqli_fetch_array($query);
        // echo $taikhoannguon['account_balance'];
        
        $sumit = false;
        if(isset($_POST['ruttien']) && isset($_POST['so_tien'])) {
        
            $username_nguon = $_SESSION['login'];
            $sotienrut = $_POST['so_tien'];
    
            if($sotienrut%10000!=0){
                echo "<script>alert('Số tiền rút phải là bội số của 10.000!');</script>";
                header("refresh:0.1;url=ruttien.php");
            }
            elseif($taikhoannguon['account_balance']<$sotienrut+50000){
                echo "<script>alert('Số dư không đủ!');</script>";
                header("refresh:0.1;url=ruttien.php");
            }
            else{
            $sodunguon = $taikhoannguon['account_balance'] - $sotienrut;
            
            $sql_update_nguon = "UPDATE account_banking set account_balance = '".$sodunguon."' where username = '".$_SESSION['login']."'";
            $query = mysqli_query($conn,$sql_update_nguon);
            

            $sql_insert_sesion = "INSERT into session(id_customer,id_service,id_opponent,money) values('".$username_nguon."',1,null,'".$sotienrut."')";
            $query = mysqli_query($conn,$sql_insert_sesion);
            echo "<script>alert('rút tiền thanh công');</script>";
            
            
            //header("refresh:0.1;url=index.php");
            $sumit = true;
            }
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
        .fill2{
          
          width: 100%;
          height: auto;
          font-size: 20px;
          font-weight: bold;
          border-collapse: collapse;
          border-radius: 5px;
          margin-top: 20px;
          background: #a9a9a9;
          color: #fff;
          border: 2px solid black;
      }

      tr{
          border: 1px solid black;
      }
 
      td{
          padding-left: 10px;
          border: 1px dashed black;

      }

      .c{
          color: #0000ff;

      }

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

</head>
<body>
	<?php
		include("component/header.php");
		?>
            <div class="wrapper">
                 <div class="clear"></div>
       







<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        
                        <form class="requires-validation" novalidate method="POST">

                            <div class="col-md-12">
                                <h3>Tài khoản nguồn: </h3>
                               <input disabled  type="text" name="username_nguon" value="<?= $_SESSION['login'];?>">

                               <input  type="text" name="so_tien" value="" placeholder="Nhập số tiền cần rútxam">
                              
                            </div>

    
                            <div class="form-button mt-3">
                               
                                <button id="submit" type="submit" name="ruttien" class="btn btn-primary">Rút tiền</button>
                            </div>
                       <?php
                if($sumit == true){
                    $tam = $_POST['so_tien'];
                    $to_tien = [500000,200000,100000,50000,20000,10000];
                    $ket_qua = [0,0,0,0,0,0];
                    for($i = 0; $i < 6; $i++){
                        $ket_qua[$i] = (int)($tam/$to_tien[$i]);
                        $tam%=$to_tien[$i];
                    }
                    echo '
                    <table class="fill2">
                    <tr>
                        <td>Mệnh giá</td>
                        <td>Số lượng</td>
                    </tr>';
    
                    for($i = 0; $i < 6; $i++){
                        echo '
                        <tr>
                            <td>'.$to_tien[$i].'</td>
                            <td>'.$ket_qua[$i].'</td>
                        </tr>';
                    }
                    echo '
                    <tr>
                        <td>Tổng tiền</td>
                        <td>'.$_POST['so_tien'].'</td>
                    </tr>';
                        echo'</table>';
                    
                }
    
    
        ?>
        </div>


        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>












            <div class="wrapper2">
        

        
    </div>


		
		<?php
		
		include("component/footer.php");

	?>
</body>