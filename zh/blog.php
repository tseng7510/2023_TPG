<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/faq.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper technicalPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain innerPage faqBox" aria-label="main" itemscope>
      <div class="innerBanner">
        <div class="pic" style="background-image: url('../images/in/banner_blog.jpg');"></div>
        <div class="unitTitleBox">
          <h2 class="title yoo fadeInUp" data-yoo-delay="0s">TECHNOLOGY</h2>
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
              <span itemprop="name">技術支援</span>
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
          <div class="faq">
            <div class="container">
              <h1 class="pageTitle yoo fadeInUp">部落格</h1>

              <div class="listBox">

                <? for ($i = 0; $i < 6; $i++) { ?>
                  <div class="item">
                    <button class="title qBox" role="button">PG阪神齒輪減速機出線盒安裝方向 <i></i></button>
                    <div class="txtBox aBox">
                      <div class="txt">Circular saw grinding machine can be applied on many filed, such as auto car, sports equipment, bicycle, tube manufacture, tube and other processing plant, grinding shop or others who want to increase production capacity.</div>
                    </div>
                  </div>
                <? } ?>

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
    qa('.qBox', '.aBox')
  </script>
</body>

</html>