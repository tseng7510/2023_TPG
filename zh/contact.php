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
        <div class="pageContent">
          <div class="contact">
            <div class="container">
              <h1 class="pageTitle yoo fadeInUp" data-yoo-delay="0s">聯絡諮詢</h1>
            </div>

            <div class="content">
              <div class="container">
                <form class="formBox yoo fadeInLeft" data-yoo-delay="0.2s">
                  <ul>
                    <li class="inputItem full yoo fadeInUp required">
                      <label for="company">公司名稱</label>
                      <input type="text" class="inputControl" id="name" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp required">
                      <label for="address">國家</label>
                      <input type="text" class="inputControl" id="title" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp required">
                      <label for="name">姓名</label>
                      <input type="text" class="inputControl" id="name" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp">
                      <label for="tel">連絡電話</label>
                      <input type="text" class="inputControl" id="tel" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp required">
                      <label for="email">E-mail</label>
                      <input type="text" class="inputControl" id="email" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp">
                      <label for="message">問題</label>
                      <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                    </li>

                    <li class="inputItem full yoo fadeInUp required">
                      <label for="password">驗證碼</label>
                      <input type="password" class="inputControl" id="password" required>
                      <span class="checkImg"><img src="../images/check_img.jpg"></span>
                      <button class="reBtn"></button>
                    </li>
                  </ul>
                  <div class="pageBtnBox yoo fadeInUp">
                    <button class="send">確認送出</button>
                  </div>
                </form>


                <div class="mapBox yoo fadeInRight" data-yoo-delay="0.4s">
                  <div class="pic"><a href="https://www.google.com/maps/place/420%E5%8F%B0%E4%B8%AD%E5%B8%82%E8%B1%90%E5%8E%9F%E5%8D%80%E6%B0%B4%E6%BA%90%E8%B7%AF473%E5%B7%B78%E8%99%9F/@24.2543733,120.7315532,17z/data=!3m1!4b1!4m6!3m5!1s0x34691a168170ddf7:0x704cc1bd3e770ed8!8m2!3d24.2543733!4d120.7315532!16s%2Fg%2F11qb8bx082?entry=ttu" target="_blank"><img src="../images/in/contact_map.jpg" alt=""></a></div>
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