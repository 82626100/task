<?php
require_once 'db.php';
$sql = "SELECT * FROM 地點 ORDER BY 地點編號";
        $result = mysql_query($sql);
        $total = mysql_num_rows($result); 

        $videos = array();
        while ($row = mysql_fetch_assoc($result)) {
            //echo $row['title'] . '<BR>';
            array_push($videos, $row);
        }

?>
<?php
$sql = "SELECT * FROM 合照 ORDER BY 使用者照片";
        $result = mysql_query($sql); 
        $total = mysql_num_rows($result);

 $images = array();
  while ($row = mysql_fetch_assoc($result)) {
            //echo $row['title'] . '<BR>';
            array_push($images, $row);
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

    <title>新北吃喝玩樂</title>

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
    <style type="text/css">



    </style>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('地點/九份/九份封面.jpg');"></div>
                <div class="carousel-caption">
                    <h2>瑞芳</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('地點/淡水/淡水封面.jpg');"></div>
                <div class="carousel-caption">
                    <h2>淡水</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('地點/基隆/基隆封面.jpg');"></div>
                <div class="carousel-caption">
                    <h2>基隆</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Taiwan Trip
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> 淡水</h4>
                    </div>
                    <div class="panel-body">
                      <font color="crimson">淡水港周邊是北部最早開發的地區之一，淡水地區自古以來，就是一個工商活動繁榮，文化昌盛的區域，但是，淡水港在日據時代以後漸漸淤塞，基隆港的興起更讓淡水港相形失色，於是沒落成為一座地方小漁港；可是，卻沒有影響到淡水的發展，反而掀起了一股觀光旅遊熱潮，雖然在現今科技商業發達的社會，新式樓房林立，卻依然可在淡水老街上見到許多的古早式磚造店舖，座落期間的數座老廟宇，更反映出本地的開發史：最古老的福佑宮相傳始建於18世紀清雍正年間；文昌祠、龍山寺、興建宮等紛紛於19世紀落成；祖師廟亦相繼於20世紀初落成。漫步在坡道間，造訪淡水老街體驗先民的生活點滴猶躍然眼前。</font>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> 基隆</h4>
                    </div>
                    <div class="panel-body">
                        <font color="dimgray">基隆市原名「雞籠」，位於台灣本島北端，舊時係取「基地昌隆」之義定名「基隆」。 

全市總面積為132.7589平方公里，百分之九十五為丘嶺地，東、西、南三面環山與鄰近縣市相鄰，僅北面一處有少量的平原迎向大海，自古即為深水谷灣之良港。 

由於三面環山，在過去交通不便時代，使得基隆與其他縣市交流不甚頻繁，反到有機會接受來自海洋文化的薰陶，而造就特有之海洋文化。 

在水氣氤氳的迷濛景致背後，潛藏了數百年來風雨戰火洗鍊下獨有的魅力：巨舶輻輳的國際港市、熱鬧豐美的中元祭典、多樣精緻的廟口小吃以及砲台與隧道、岬角與灣澳、漁港和魚市……，走訪徜徉其間，在在令人流連。</font>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> 瑞芳</h4>
                    </div>
                    <div class="panel-body">
                        <font color="skyblue">瑞芳區在早期由於金瓜石及九份山區陸續發現金礦，因此湧入大批採礦者湧入此地，當時有一商家鋪號名為『瑞芳』，是由陳登、賴世所經營的，商舖中販賣的商品相當齊全，成為前往山區採金與往返噶瑪蘭(宜蘭)的中途補給站以及休息所在，在當時往來兩地的旅客或採礦者相當多，因此會把瑞芳商舖當成目的地，說『去瑞芳』或『從瑞芳回來』，久而久之瑞芳一詞就成為當地的名稱。</font>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <?php
 // 匯入商品到網頁上 用i當一個變數 i=0代表第一件商品, count($video)表示所有產品 ,入果你只要跑一件商品 就 i=0; 或 i=1; i=2;等等 這樣就可跑只跑一件你指定的商品
for($i=0 ; $i<count($videos); $i++) {
?>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html=<?=$current?>&mv=<?=$i?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?=$videos[$i]['預覽圖片']?>" alt="">
                </a>
            
        </div>
        </div?
        <!-- /.row -->
<?php
}
?>
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">關於我們</h2>
            </div>
            <div class="col-md-6">
                <p>歡迎來到我們的網頁，這是一個屬於介紹旅遊的網頁。
                    <br>製作團隊分別有2位型男和2位美女</br>
                    接下來他們將會帶領各位進入到不同的地點來體驗不同的玩樂。
                <br>就讓我們跟隨著柏軒，吉祥，懿萱，姝伶的腳步來趟不一樣的旅行吧</br>
            </p>
             
               
            </div>


           <?php
     // 匯入商品到網頁上 用i當一個變數 i=0代表第一件商品, count($video)表示所有產品 ,入果你只要跑一件商品 就 i=0; 或 i=1; i=2;等等 這樣就可跑只跑一件你指定的商品
$i=0 ;
?>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html=<?=$current?>&mv=<?=$i?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?=$images[$i]['使用者照片']?>" alt="">
                </a>
            
            </div>
        </div>
        <!-- /.row -->
<?php

?>
       

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
