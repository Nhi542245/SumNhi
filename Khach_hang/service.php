
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
        .wrapper{
            /* display: inline-block; */
            align-items: center;
            width: 60%;
            min-width: 900px;
            min-height: 500px;
            
            margin: 0 auto;
            background: linear-gradient(135deg, #fe2929, #ffb3c5);
            border-radius: 30px;
        }
        .nutchucnang{
            padding-top: 15px;
            display: inline-block;
           
            margin: 30px 50px;
            border-radius: 20px;
            height: 100px;
            width: 450px;
            font-size: 40px;
            font-weight: 700;
            
            text-align: center;
            text-decoration: none;
            background-color: #ffffff ;
            

        }
        a:hover .nutchucnang{ 
            background: #d9d4d9;
            font-size: 41px;
        }
        .wait{
            height: 20px;
        }
    </style>
</head>
<body>
    <div class="wait"></div>
    <div class="wrapper">
        <div class="menu">
            
            <a href="ruttien.php"><div class="nutchucnang" class="bi-terminal-dash"> Rút tiền</div></a>
            <a href="naptien.php"><div class="nutchucnang"class="bi-terminal-plus"> Nạp tiền</div></a>
            <a href="chuyentien.php"><div class="nutchucnang" class="bi-arrow-up-right-circle"> Chuyển tiền</div></a>
            <a href="xemsodu.php"><div class="nutchucnang" class="bi-cash-coin"> Xem số dư</div></a>
            <a href="lsgd.php"><div class="nutchucnang" class="bi-clock-history">  Lịch sử giao dịch</div></a>
            <a href="index.php?logout=1"><div class="nutchucnang" class="bi-box-arrow-in-right"> Đăng xuất</div></a>


                
             
        </div>
    </div>
</body>
</html>