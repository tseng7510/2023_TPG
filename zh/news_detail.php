<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper newsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage newsDetailBox" aria-label="main" itemscope>
      <div class="innerBanner">
        <div class="pic" style="background-image: url('../images/in/banner_news.jpg');"></div>
        <div class="unitTitleBox">
          <h2 class="title yoo fadeInUp" data-yoo-delay="0s">MEDIA</h2>
        </div>
      </div>

      <div class="breadcrumbBox">
        <div class="container">
          <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <a href="index.php" title="index" itemprop="item">
                <span itemprop="name">首頁</span>
              </a>
              <meta itemprop="position" content="1">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">媒體專區</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">最新消息</span>
              <meta itemprop="position" content="3">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">本公司通過ISO9001：2015國際品</span>
              <meta itemprop="position" content="4">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="pageContent">
          <div class="newsDetail">
            <div class="titleBox yoo fadeInUp">
              <div class="container">
                <h1 class="pageTitle">本公司通過ISO9001：2015國際品</h1>
                <time>2022. 10.15</time>
              </div>
            </div>
            <div class="container yoo fadeInUp">
              <div class="newsPic">
                <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
                <div class="pic"><img src="../images/in/news.jpg" alt=""></div>
              </div>
              <div class="newsInfo">
                <div class="description yoo fadeInUp">第二十一屆中國國際工業博覽會（簡稱”中國工博會”）已於2019年9月21日在上海圓滿落下帷幕。本屆中國工博會以“智能、互聯——賦能產業新發展”為最新主題，以展示、推廣信息化與工業化深度融合的數字化、網絡化、智能化為主線，鏈接中國智能製造重點推進的新興產業，凸顯國家“一帶一路”倡議，凸顯智能製造、綠色製造，服務製造強國戰略。本屆中國工博會展覽總面積280,011平方米，吸引了來自全球32個國家和地區的2,610家參展商同台競技,境內外專業觀眾18.3萬人次，較去年同期增長5.23%。成為海內外觀眾了解世界製造業發展的窗口和引領智能製造發展的風向標。<br /><br />
                  隨著第二十一屆中國工博會圓滿閉幕，第二十二屆中國工博會招展招商工作緊鑼密鼓展開。第二十二屆中國工博會將於2020年9月15日-19日在國家會展中心（上海）舉辦，規劃展示面積30萬平方米，9大專業展分別是數控機床與金屬加工展，工業自動化展，節能環保技術與設備展、新一代信息技術與應用展（工業互聯網展）、能源技術與設備展、新能源與智能網聯汽車展、機器人展、科技創新展和新材料產業展，屆時將有數10場高質量的高峰論壇及活動同期舉行。<br /><br />
                  作為中國最具影響力、規模和水平的國際工業品牌展，智能製造解決方案、人工智能技術應用最集中的展示、交易平台，我們真誠歡迎廣大海內外企業積極參與、同場競技，如您有意參展可直接聯繫我們，亦可網上報名申請展位。</div>
              </div>
            </div>
            <div class="container">
              <div class="pageBtnBox wow fadeInUp" data-wow-delay="0s">
                <a class="back" href="news.php">回列表頁</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </main>



    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.newsPic').slick({
        slidesToShow: 1,
        arrows: false,
        fade: true,
        dots: true,
      });
    })
  </script>
</body>

</html>