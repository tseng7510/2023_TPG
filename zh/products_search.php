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

    <main class="siteMain innerPage productsSearchBox" aria-label="main" itemscope>
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
              <span itemprop="name">產品篩選器</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="pageContent">
          <div class="productsSearch">
            <div class="container">
              <h1 class="pageTitle yoo fadeInUp">選擇篩選條件</h1>

              <div class="searchBoxOut yoo fadeInUp" data-yoo-delay="0.2">
                <div class="searchBox">
                  <div class="title">產品名稱搜尋</div>
                  <form action="" class="formBox">
                    <div class="inputItem">
                      <input type="text" name="" id="" class="inputControl">
                    </div>
                    <button type="submit">Search</button>
                  </form>
                  <div class="title">點擊這裡進行減速機選擇</div>
                  <form action="" class="formBox">
                    <div class="inputItem full">
                      <label for=""><span>產品類型</span>
                        <div class="select">
                          <select class="selectControl">
                            <option value="">--</option>
                            <option value="">產品類型</option>
                          </select>
                        </div>
                      </label>
                      <label for=""><span>電機功率 </span>
                        <div class="select">
                          <select class="selectControl">
                            <option value="">--</option>
                          </select>
                        </div>
                      </label>
                      <label for=""><span>減速比</span>
                        <div class="select">
                          <select class="selectControl">
                            <option value="">--</option>
                          </select>
                        </div>
                      </label>
                    </div>
                    <button type="submit">Search</button>
                  </form>
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