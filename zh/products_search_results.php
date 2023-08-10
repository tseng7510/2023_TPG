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
        <div class="pageContent ">
          <div class="productsSearch">
            <div class="container">
              <h1 class="pageTitle yoo fadeInUp">Search Results</h1>
              <div class="subTitle yoo fadeInUp" data-yoo-delay="0.2s">齒輪減速機、Output Shaft Type、 Motor Power、Reduction Ratio </div>
            </div>
          </div>

          <div class="productsInfoBottomBox">
            <div class="container">
              <aside>
                <div class="sideBox">
                  <button class="title" disabled=""><span>Product Finder</span></button>
                  <form class="contentBox">
                    <div class="item">
                      <button class="subTitle" type="button">安裝方式</button>
                      <ul>
                        <li><input type="checkbox" name="check1" value="XXX" id="check1"><label for="check1">XXX</label></li>
                        <li><input type="checkbox" name="check2" value="XXX" id="check2"><label for="check2">XXX</label></li>
                      </ul>
                    </div>

                    <div class="item">
                      <button class="subTitle" type="button">馬達類型</button>
                      <ul>
                        <li><input type="checkbox" name="check3" value="XXX" id="check3"><label for="check3">XXX</label></li>
                        <li><input type="checkbox" name="check4" value="XXX" id="check4"><label for="check4">XXX</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <button class="subTitle" type="button">馬達類型</button>
                      <ul>
                        <li><input type="checkbox" name="check5" value="XXX" id="check5"><label for="check5">XXX</label></li>
                        <li><input type="checkbox" name="check6" value="XXX" id="check6"><label for="check6">XXX</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <button class="subTitle" type="button">出力軸軸徑</button>
                      <ul>
                        <li><input type="checkbox" name="check7" value="XXX" id="check7"><label for="check7">XXX</label></li>
                        <li><input type="checkbox" name="check8" value="XXX" id="check8"><label for="check8">XXX</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <button class="subTitle" type="button">馬力</button>
                      <ul>
                        <li><input type="checkbox" name="check9" value="XXX" id="check9"><label for="check9">XXX</label></li>
                        <li><input type="checkbox" name="check10" value="XXX" id="check10"><label for="check10">XXX</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <button class="subTitle" type="button">減速比</button>
                      <ul>
                        <li><input type="checkbox" name="check11" value="XXX" id="check11"><label for="check11">XXX</label></li>
                        <li><input type="checkbox" name="check12" value="XXX" id="check12"><label for="check12">XXX</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <button class="subTitle" type="button">相數</button>
                      <ul>
                        <li><input type="checkbox" name="check13" value="XXX" id="check13"><label for="check13">XXX</label></li>
                        <li><input type="checkbox" name="check14" value="XXX" id="check14"><label for="check14">XXX</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <button class="subTitle" type="button">輸入電壓</button>
                      <ul>
                        <li><input type="checkbox" name="check15" value="XXX" id="check15"><label for="check15">XXX</label></li>
                        <li><input type="checkbox" name="check16" value="XXX" id="check16"><label for="check16">XXX</label></li>
                      </ul>
                    </div>
                    <div class="item">
                      <button class="subTitle" type="button">煞車類型</button>
                      <ul>
                        <li><input type="checkbox" name="check17" value="XXX" id="check17"><label for="check17">XXX</label></li>
                        <li><input type="checkbox" name="check18" value="XXX" id="check18"><label for="check18">XXX</label></li>
                      </ul>
                    </div>
                  </form>
                </div>
              </aside>

              <div class="productsFilterList">
                <div class="tableBox">
                  <table>
                    <thead>
                      <tr>
                        <th></th>
                        <th>產品型號</th>
                        <th>出力軸軸徑</th>
                        <th>馬力</th>
                        <th>減速比</th>
                        <th>相數</th>
                        <th>煞車類型</th>
                        <th>重量(公斤)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <? for ($i = 0; $i < 10; $i++) { ?>
                        <tr>
                          <td>
                            <div class="pic"><img src="../images/in/products_list.png" alt=""></div>
                          </td>
                          <td>GHD-40-2200-5<a href="products_detail.php"></a></td>
                          <td>40</td>
                          <td>2.2 KW</td>
                          <td>5</td>
                          <td>-1</td>
                          <td>-1</td>
                          <td>20.00</td>
                        </tr>
                      <? } ?>
                    </tbody>
                  </table>
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