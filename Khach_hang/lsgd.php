<?php
        session_start();
        include("../config/connect.php");
        
    
        $sql_nguon = "SELECT * FROM account_banking where username = '".$_SESSION['login']."' ";
        $query = mysqli_query($conn,$sql_nguon);
        
        $taikhoannguon = mysqli_fetch_array($query);
        // echo $taikhoannguon['account_balance'];


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
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //web-fonts -->
<style>
        body{
            font-size: 25px;

        }
        .wrapper{
            border-radius: 20px;
          
            /* display: inline-block; */
            align-items: center;
            width: 60%;
            min-width: 900px;
         
             margin-top: 20px;
            margin-left: 300px;
            background-color: #01E1FF;
            align-items: center;
            height: auto;

        }
        table{
          
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
	<?php
		include("component/header.php");
		?>
            <div class="wrapper">
                <?php
                    if(isset($_SESSION['login'])){
                        $sql_nguon = "SELECT * FROM session where id_customer = '".$_SESSION['login']."' ";
                        $query = mysqli_query($conn,$sql_nguon);
                    }
                    $i=1;
                    ?>
                    <table>
                    <tr>
                        <td class="c">STT</td>
                        <td class="c">Tài khoản nguồn</td>
                        <td class="c">Dịch vụ</td>
                        <td class="c">Tài khoản đích</td>
                        <td class="c">Số tiền</td>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($query)){
                        
                ?>
  
                    <tr>
                        <td><?= $i?></td>
                        <td><?= $row['id_customer']?></td>
                        <td><?php
                            if($row['id_service']==1)    echo 'Rút tiền';
                            elseif($row['id_service']==2)    echo 'Nạp tiền';
                            else    echo 'Chuyển tiền';
                        
                        ?></td>
                        <td><?php
                            if($row['id_opponent']==NULL || $row['id_opponent']==""){
                                echo "";
                            }
                            else echo $row['id_opponent'];
                        ?></td>
                        <td><?=$row['money']." VNĐ"?></td>
                    </tr>
                    
                
                
            <?php $i++; }?>
            </table>
    </div>
    <div class="wrapper2">
    <?php

    


    
?>
    </div>

		
		<?php
		
		include("component/footer.php");

	?>
</body>