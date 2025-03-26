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


    <main class="siteMain innerPage newsListBox" aria-label="main" itemscope>
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
              <span itemprop="name">部落格</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="pageContent">
          <div class="newsList">
            <div class="container">
              <h1 class="pageTitle yoo fadeInUp">BLOG</h1>

              <div class="listBox yoo fadeInUp" data-yoo-delay="0.4s">

                <? for ($i = 0; $i < 9; $i++) { ?>
                  <div class="item">
                    <a href="blog_detail.php">
                      <div class="pic"><img src="../images/index/news.jpg" alt=""></div>
                      <div class="infoBox">
                        <time>2022. 10.15</time>
                        <h2 class="title">本公司通過ISO9001：2015國際品質認證！</h2>
                        <div class="description">在如此嚴峻的疫情下，TPG仍持續地為客戶服務且在原物料充足情況下提供最佳的品質，TPG也期待疫情可以盡快結束。...</div>
                        <div class="more"></div>
                      </div>
                    </a>
                  </div>
                <? } ?>

              </div>
            </div>
          </div>
        </div>

        <div class="pageBox yoo fadeInUp" data-yoo-delay="0.2s">
          <div class="container">
            <ul class="pagination">
              <li class="controls"><a class="prev" href="#" title="Previous"></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li class="controls"><a class="next" href="#" title="Next"></a></li>
            </ul>
          </div>
        </div>

      </div>

    </main>



    <?php include('include_login.php'); ?>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>