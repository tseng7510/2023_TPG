<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage productsBox" aria-label="main" itemscope>
      <div class="innerBanner">
        <div class="pic" style="background-image: url('../images/in/banner_products.jpg');"></div>
        <div class="unitTitleBox">
          <h2 class="title yoo fadeInUp" data-yoo-delay="0s">PRODUCTS</h2>
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
        <div class="container">
          <div class="categoryTitle yoo fadeInUp" data-yoo-delay="0s">PRODUCTS CATEGORY</div>
          <div class="categoryList yoo fadeInUp" data-yoo-delay="0.2s">
            <div class="listBox">
              <div class="item active">
                <a href="#">
                  <div class="pic"><img src="../images/in/products_list.png" alt=""></div>
                  <div class="title">直交軸減速機</div>
                </a>
              </div>
              <? for ($i = 0; $i < 5; $i++) { ?>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/in/products_list.png" alt=""></div>
                    <div class="title">直交軸減速機</div>
                  </a>
                </div>
              <? } ?>
            </div>
          </div>
        </div>

        <div class="productInfoBox">
          <div class="container">
            <h1 class="pageTitle yoo fadeInUp" data-yoo-delay="0s">平行軸減速機</h1>
            <div class="description yoo fadeInUp" data-yoo-delay="0.2s">平行軸減速機是一種相對精密的機械特別是螺旋齒輪其採用目的是低噪音化以及高強度化，令平行軸減速機成為目前最被廣泛使用的減速機機構。</div>
            <div class="productSearch">產品快速搜尋</div>
          </div>
        </div>

        <div class="pageContent ">
          <div class="products">
            <div class="container">
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

    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(window).on('load resize', function() {
      let windowWidth = $(window).outerWidth();
      if (windowWidth > 1000) {
        $('.categoryList .listBox').slick('unslick')
      } else {
        $('.categoryList .listBox').slick({
          arrows: false,
          dots: false,
          infinite: false,
          slidesToScroll: 1,
          variableWidth: true,
        })
      }
    })
  </script>
</body>

</html>