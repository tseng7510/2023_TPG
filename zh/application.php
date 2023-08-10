<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/application.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage applicationBox yoo" aria-label="main" itemscope>
      <div class="innerBanner">
        <div class="pic" style="background-image: url('../images/in/banner_application.jpg');"></div>
        <div class="unitTitleBox">
          <h2 class="title yoo fadeInUp" data-yoo-delay="0s">OUR MARKETS</h2>
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
              <span itemprop="name">產品應用</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">食品</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="pageContent">
          <div class="application">
            <div class="container">
              <h1 class="pageTitle yoo fadeInUp">食品</h1>
              <div class="applicationTopBox">
                <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                <div class="infoBox">
                  <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機</div>
                  <i><img src="../images/index/application_icon1.svg" alt=""></i>
                </div>
              </div>
            </div>

            <div class="products">
              <div class="container">
                <div class="productTitle">相關產品推薦</div>
                <div class="listBox yoo fadeInUp" data-yoo-delay="0.4s">

                  <? for ($i = 0; $i < 11; $i++) { ?>
                    <div class="item">
                      <a href="products_list.php">
                        <div class="pic"><img src="../images/in/products.jpg" alt=""></div>
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
</body>

</html>