<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain innerPage inquiryBox" aria-label="main" itemscope>
      <div class="innerBanner">
        <div class="pic" style="background-image: url('../images/in/banner_inquiry.jpg');"></div>
        <div class="unitTitleBox">
          <h2 class="title yoo fadeInUp" data-yoo-delay="0s">INQUIRY CART</h2>
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
              <span itemprop="name">線上詢價</span>
              <meta itemprop="position" content="2">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="contactOk">
          <div class="container">
            <div class="txt">
              <h2 class="title">THANK YOU<br />
                FOR YOUR INQUIRY</h2>
              <div class="info">
                <span class="fz36">您已成功送出詢價</span>
                感謝您的詢問<br />
                如有任何疑問，請使用<a href="contact.php">聯繫我們</a>。<br />
                一旦我們收到您的留言，我們將盡快與您聯繫。
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
    $(function() {
      $('.formControl').focus(function() {
        $(this).addClass('focus')
      });
      $('.formControl').blur(function() {
        $(this).removeClass('focus')
      });
    });
  </script>
</body>

</html>