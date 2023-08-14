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
        <div class="pageContent">
          <div class="inquiry">
            <div class="container">
              <h1 class="pageTitle yoo fadeInUp" data-yoo-delay="0s">線上詢價</h1>
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
                      <label for="name">聯絡姓名</label>
                      <input type="text" class="inputControl" id="name" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp">
                      <label for="tel">聯絡電話</label>
                      <input type="text" class="inputControl" id="tel" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp required">
                      <label for="email">E-mail</label>
                      <input type="text" class="inputControl" id="email" required>
                    </li>
                    <li class="inputItem full yoo fadeInUp">
                      <label for="message">訊息內容</label>
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


                <div class="inquiryList yoo fadeInRight" data-yoo-delay="0.4s">
                  <table>
                    <thead>
                      <tr>
                        <th>產品名稱</th>
                        <th>產品數量</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <? for ($i = 0; $i < 3; $i++) { ?>
                        <tr>
                          <td>
                            <a class="box" href="products_detail.php">
                              <div class="pic"><img src="../images/in/products_list.png" alt=""></div>
                              <div class="title">Flexible</div>
                            </a>
                          </td>
                          <td>
                            <div class="qtyBox">
                              <button class="btn less"></button>
                              <input type="text" class="qty form-control" value="1">
                              <button class="btn add"></button>
                            </div>
                          </td>
                          <td>
                            <button class="del"></button>
                          </td>
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