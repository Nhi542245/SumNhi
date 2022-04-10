<?php
        session_start();
        include("../config/connect.php");
        
    
        $sql_nguon = "SELECT * FROM account_banking where username = '".$_SESSION['login']."' ";
        $query = mysqli_query($conn,$sql_nguon);
        
        $taikhoannguon = mysqli_fetch_array($query);
        //echo $taikhoannguon['account_balance'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/ruttien.css"> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //web-fonts -->
<style>
            table{
          
          width: 90%;
          height: auto;
          min-height: 300px;
          font-size: 30px;
          font-weight: bold;
          border-collapse: collapse;
          border-radius: 5px;
          margin-top: 20px;
          background: #a9a9a9;
          color: #fff;
          border: 2px solid black;
          border-radius:10px ;
          margin: 0 auto;
      }

      tr{
          border-bottom: 1px solid black;
      }
 
      td{
          padding-left: 10px;
          border: 1px dashed black;

      }
      .form-body{
        padding-top: 20px;

      }
</style>

</head>
<body>
	<?php
		include("component/header.php");
		?>
            <div class="wrapper">


    

             <div class="form-body">



                    
                        
                        <form class="requires-validation" novalidate method="POST">
                            <table class="fill2">
                                <tr>
                                    <td>Khách hàng: </td>
                                    <td><?=$taikhoannguon['name']?></td>
                                </tr>
                                <tr>
                                    <td>Số tài khoản: </td>
                                    <td><?= $taikhoannguon['code_card']?></td>
                                </tr>
                                <tr>
                                    <td>Số dư: </td>
                                    <td><?= $taikhoannguon['account_balance']?> VNĐ</td>
                                </tr>
                            </table>


    
                          

        </form>

    


        

        </div>
    </div>
  

    <?php
		
		include("component/footer.php");

	?>
		
</body>

</html>