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

    <main class="siteMain innerPage contactBox" aria-label="main" itemscope>
      <div class="innerBanner">
        <div class="pic" style="background-image: url('../images/in/banner_contact.jpg');"></div>
        <div class="unitTitleBox">
          <h2 class="title yoo fadeInUp" data-yoo-delay="0s">CONTACT</h2>
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
              <span itemprop="name">聯絡諮詢</span>
              <meta itemprop="position" content="2">
            </li>
            <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
              <span itemprop="name">聯絡諮詢</span>
              <meta itemprop="position" content="3">
            </li>
          </ul>
        </div>
      </div>

      <div class="mainBox">
        <div class="contactOk">
          <div class="container">
            <div class="txt">
              <h2 class="title">THANK YOU<br />
                FOR YOUR MESSAGE</h2>
              <div class="info">
                <span class="fz36">您已成功送出訊息</span>
                感謝您的建議與疑問！<br />
                收到您的留言後，我們會在最快的時間內儘速處理您的需求。<br />
                若有需即時回覆處理問題，請聯絡我們，謝謝您！
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