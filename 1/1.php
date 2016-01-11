<?php
require_once 'db.php';
$sql = "SELECT * FROM 淡水玩樂 ORDER BY 淡水玩樂編號";
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
                <h1 class="page-header">淡水另類玩樂
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
                    <img class="img-responsive img-hover" src="<?=$videos[$i]['淡水玩樂圖片']?>" alt="">
                </a>
                <h3>
                    <a href="portfolio-item.html"><?= $row['淡水玩樂編號'] ?></a>
                </h3>
                <p><?=$videos[$i]['淡水玩樂名稱']?></p>



            </div>
       
        <!-- /.row -->
<?php }?>

           

        <hr>

        <!-- Project Four -->
        <div class="">
               
                <font color="dimgray">「工研食品工場」創立於民國三十年，專營釀造研究，堅持「天然純釀造」的品質，不但研發出烏酢、健康酢、味噌、咖哩、各式醬料及冬蟲夏草等產品，更推出將釀造技術應用在生活中，研發出工研酢洗手及酢處清。2010年正式通過觀光工廠評鑑，成立「工研酢益壽多文化館」，希望透過參觀工廠、導覽解說以及烹飪教學的方式，引領民眾了解生活中常見的醬料來源、製造過程及相關應用知識。
【參觀方式】
對象：開放年滿6歲，15-80人團體預約參觀。（未滿6歲者須由家長陪同，未滿15人另行安排併團參觀）
線上報名：http://www.kongyen.com.tw/參觀工廠暨生態之旅
※另備有多種參觀行程，歡迎來電洽詢。
【費用說明】
大安廠參觀：一般民眾100元，學生及65歲以上長者50元（含專人導覽、DIY課程、貼心伴手禮）
大安廠＋大醇廠參觀：一般民眾200元，學生及65歲以上長者100元（含專人導覽、DIY課程、貼心伴手禮），另做味噌DIY加收100元。
※中午提供美味套餐，每份加收費用50元。
交通資訊
【大眾運輸】
※客運：搭乘往三芝方向之客運，至「林子站」下車後右轉行忠堂牌坊(北6線道)，往上步行800公尺即可到達。
 【自行開車】
往三芝方向行駛，至淡金公路三段與北6縣道交叉路口，右轉繼續行駛800公尺到達。離紅樹林捷運站約10分鐘車程，距離淡水捷運站約15分鐘車程。

http://danshuei.okgo.tw/scenic/2983.html
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

<font color="red">淡水老街
淡水老街泛指中正路一帶，於民國八十八年間實施道路拓寬，並且鋪設花崗岩人行道，商店皆配合整建，並懸掛上統一規格的招牌，塑造良好的淡水老街形象。淡水老街上店面林立，不論是懷舊或是現代店鋪皆有，還有許多淡水著名的傳統美食，像是魚丸、魚酥、阿給、酸梅湯、石花凍、鐵蛋及多樣化的海鮮加工製品等，讓您來到淡水不僅可以賞美景，還可享受眾多新鮮美食。
交通資訊
淡水捷運站下，西行至中正路上即抵。

http://danshuei.okgo.tw/scenic/62.html
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

 <font color="blue">位於淡水地區的登峰，從民國39年迄今，從事魚丸行業將近有六十年之久。其研發製作的淡水魚丸為台灣四大代表性魚丸之一；更首創淡水魚酥，成為高人氣的淡水名產，深深影響淡水的飲食文化。
 
除了2004在淡水老街上的媽祖廟前，創立全國第一座以魚丸為主題的「登峰魚丸博物館老街一館」外，2010在觀光工廠計畫的輔導下，將原有的生產區改造成「登峰魚丸博物館工廠二館」，提供各式魚漿製品DIY實作活動，主要介紹魚丸、魚酥類製品，並提供各式魚漿製品DIY實作，藉以推廣漁業及海洋知識，歡迎蒞臨體驗這趟新奇有趣的魚丸、魚酥之旅。
 
 
【參觀方式】
皆採團體(20人以上)來電預約制，請至少於一星期前預約。
洽詢專線：02-26253312（電話）、02-26263312（傳真）
＊生產線開放參觀需配合工廠生產排班表，若有不便之處敬請見諒。
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
