<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/catalog.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper catalogPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage catalogBox" aria-label="main" itemscope>
      <div class="innerBanner">
        <div class="pic" style="background-image: url('../images/in/banner_catalog.jpg');"></div>
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
              <span itemprop="name">系列產品</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">平行軸減速機</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="pageContent">
          <div class="catalog">
            <div class="categoryTitleBox yoo fadeInUp" data-yoo-delay="0s">
              <div class="container">
                <div class="categoryTitle">CATALOG CATEGORY</div>
                <a href="https://www.ezb2b.com/ebook/machinetools/2023/index_tch.html#page/2" target="_blank" class="onLine">綜合版電子型錄線上看</a>
              </div>
            </div>
            <div class="categoryList yoo fadeInUp" data-yoo-delay="0.2s">
              <div class="container">
                <div class="listBox">
                  <div class="item active">
                    <a href="#">
                      <div class="title">傳動系列</div>
                    </a>
                  </div>
                  <? for ($i = 0; $i < 10; $i++) { ?>
                    <div class="item">
                      <a href="#">
                        <div class="title">動力系列</div>
                      </a>
                    </div>
                  <? } ?>
                </div>
              </div>
            </div>

            <div class="catalogInfoBox">
              <div class="titleBox">
                <div class="container">
                  <h1 class="pageTitle yoo fadeInUp" data-yoo-delay="0s">動力系列</h1>
                </div>
              </div>

              <div class="infoBox">
                <div class="container">
                  <div class="description yoo fadeInUp" data-yoo-delay="0.2s">TPG 阪神電機電力系列包含交流馬達及直流馬達。<br />
                    交流馬達內含轉矩馬達、振動馬達、小金剛馬達、交流鋁殼馬達和煞車馬達。<br />
                    直流馬達則為TPG 代理之NEWPOWER 馬達。</div>
                  <div class="catalogPic">
                    <div class="pic"><img src="../images/in/catalog.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>


            <div class="catalogBottom">
              <div class="container">
                <div class="btnBox">
                  <button type="button">交流馬達</button>
                  <button type="button">直流馬達</button>
                </div>
                <div class="listBox yoo fadeInUp" data-yoo-delay="0.4s">

                  <? for ($i = 0; $i < 11; $i++) { ?>
                    <div class="item">
                      <a href="products_list.php">
                        <div class="pic"><img src="../images/in/catalog.jpg" alt=""></div>
                        <div class="info">
                          <div class="title">齒輪減速機</div>
                        </div>
                      </a>
                    </div>
                  <? } ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $('.categoryList .listBox').slick({
      arrows: false,
      dots: false,
      slidesToScroll: 8,
      variableWidth: true,
      infinite: false,
    })
  </script>
</body>

</html>