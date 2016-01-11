<?php
require_once 'db.php';
$sql = "SELECT * FROM 基隆玩樂 ORDER BY 基隆玩樂編號";
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
                <h1 class="page-header">基隆另類玩樂
                    <small>私密景點</small>
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
?> 
        <!-- Project One -->
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="<?=$videos[$i]['基隆玩樂圖片']?>" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html"><?= $row['基隆玩樂編號'] ?></a>
                </h3>
                <p><?=$videos[$i]['基隆玩樂名稱']?></p>



            </div>
       
        <!-- /.row -->
<?php }?>

           

        <hr>

        <!-- Project Four -->
        <div class="">
               
                <font color="dimgray">文章來源：玩全台灣旅遊網 


遠近馳名的卞家牛肉麵就位在山洞巖附近，因攤位設在防空洞中，因此有「山洞牛肉麵」的別稱，夏季中午天氣炎熱，防空洞中依然涼爽。卞家牛肉麵以紅糟蕃茄牛肉麵為最大的特色，第二代老闆的主廚推薦還有小魚乾辣椒，是嗜辣者的最愛。
交通資訊
自仙洞巖出來後，右轉直行，不久便可抵這家麵店。

http://okgo.tw/butyview.html?id=2709

</font>
<br> 
    </br>
    <br> 
    </br>
    <br> 
    </br>
    <br> 
    </br>
    <br> 
    </br>
      <br> 
    </br>
     <br> 
    </br>
     <br> 
    </br>
      <br> 
    </br>
     <br> 
    </br>
     <br> 
    </br>

<font color="red">電話：02-24563975
地址：基隆市七堵區大成街51號
文章來源：玩全台灣旅遊網 

位於七堵區瑪陵坑的芳裕農場養殖放山土雞三十餘年，現在已經轉型成為休閒庭園餐廳，並且積極栽種多種的有機蔬果，符合現代人養生食材的觀念。

農場餐廳是以自家飼養的放山土雞為主，土雞都是以五穀雜糧餵食，肉質鮮美彈牙，加上農場自行栽種的山蘇、香椿、山藥與紫蘇等有機山菜，搭配出多款的美味料理，吃過正餐也別錯過了自製的甜點，像是蜂蜜、山藥冰淇淋與山藥湯圓，都讓您甜蜜在心頭喔！

擁有豐富蕨類生態的農場也積極規劃休閒步道，讓農場成為全方位的生態休閒園區，不只是植物生態的展現，在春季時會有蝌蚪悠游在水中，六七月份還有螢火蟲等著您前來探索，八九月時還可以帶著小朋友前來體驗撿拾土雞蛋的農家樂唷！ 
交通資訊
基隆市七堵區大成街51號
開放時間
11:00AM~19:00PM
http://okgo.tw/butyview.html?id=2637

</font>
<br> 
    </br>
    <br> 
    </br>
    <br> 
    </br>
    <br> 
    </br>
    <br> 
    </br>
     <br> 
    </br>
     <br> 
    </br>
     <br> 
    </br>

 <font color="blue">地址：基隆市中正區北寧路
文章來源：玩全台灣旅遊網 


碧砂漁港為基隆新興的漁港，是著名的觀光漁市，兩棟長形的建築物，分別是「漁市場」和「飲食街」。漁市場內更有許多生鮮海產店供應各式生鮮漁產，飲食街如同廟口小吃整齊的規劃，遊客可在海產店內點菜，也可選購海產交給店家代為烹調料理，碧砂漁港是目前政府極力發展海上觀光業的港口，未來會以休閒觀光為主要發展方向，遊客到了這裡除了可品嚐各色各樣現撈的漁獲之外，亦可搭乘觀光遊艇，一覽基隆的海上風光。
交通資訊
搭車：可搭103號公車於碧砂港下車。

開車：
1.沿中正路東行接二號省道近麥當勞店後左轉即抵。
2.到碧砂漁港的交通路線，是沿著中山高速公路交流道進入基隆市區後便往基隆港務局大樓前方的中正路方向前進，順著基隆港東岸碼頭直走，經過海洋大學到北寧路即可到達。
開放時間
08:00~22:00
http://okgo.tw/butyview.html?id=450


</font>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
     
   
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
     
            
        <!-- /.row -->


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
