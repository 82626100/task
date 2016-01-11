<?php
require_once 'db.php';
$sql = "SELECT * FROM 瑞芳景點 ORDER BY 瑞芳景點編號";
        $result = mysql_query($sql);
        $total = mysql_num_rows($result); 

        $videos = array();
        while ($row = mysql_fetch_assoc($result)) {
            //echo $row['title'] . '<BR>';
            array_push($videos, $row);
        }
        

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>屬於我們的遊玩</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">home page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">淡水 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="1.php">淡水玩樂</a>
                            </li>
                            <li>
                                <a href="2.php">淡水景點</a>
                            </li>
                            <li>
                                <a href="3.php">淡水活動</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">基隆 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="4.php">基隆玩樂</a>
                            </li>
                            <li>
                                <a href="5.php">基隆景點</a>
                            </li>
                            <li>
                                <a href="6.php">基隆活動</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">瑞芳 <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="7.php">瑞芳玩樂</a>
                            </li>
                            <li>
                                <a href="8.php">瑞芳景點</a>
                            </li>
                            <li>
                                <a href="9.php">瑞芳活動</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">瑞芳美麗景點
                    <small>風景</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
 
                   <?php
 // 匯入商品到網頁上 用i當一個變數 i=0代表第一件商品, count($video)表示所有產品 ,入果你只要跑一件商品 就 i=0; 或 i=1; i=2;等等 這樣就可跑只跑一件你指定的商品
for($i=0 ; $i<count($videos); $i++) {
?> <!-- Projects Row -->
     
            <div class="col-md-4 img-portfolio">
                <a href="index.php?page=<?=$current?>&mv=<?=$i?>">
                    <img class="img-responsive img-hover" src="<?=$videos[$i]['瑞芳景點圖片']?>" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html"><?= $row['瑞芳景點編號'] ?></a>
                </h3>
                <p><?=$videos[$i]['瑞芳景點名稱']?></p>
    <h3>
                    <a href="portfolio-item.html"><?= $row['瑞芳景點編號'] ?></a>
                </h3>
                <p><?=$videos[$i]['瑞芳景點介紹']?></p>
    

            </div>
       
        <!-- /.row -->
<?php }?>
       
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                   
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>新北景點</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
