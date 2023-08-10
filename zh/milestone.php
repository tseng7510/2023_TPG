<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/milestone.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper productsPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain milestoneBox yoo" aria-label="main" itemscope>
      <main class="siteMain innerPage contactBox" aria-label="main" itemscope>
        <div class="innerBanner">
          <div class="pic" style="background-image: url('../images/in/banner_about.jpg');"></div>
          <div class="unitTitleBox">
            <h2 class="title yoo fadeInUp" data-yoo-delay="0s">MILESTONE</h2>
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
                <span itemprop="name">關於我們</span>
                <meta itemprop="position" content="2">
              </li>
              <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                <span itemprop="name">歷史沿革</span>
                <meta itemprop="position" content="3">
              </li>
            </ul>
          </div>
        </div>

        <div class="mainBox">
          <div class="pageContent">
            <div class="milestone">
              <div class="container">
                <h1 class="pageTitle yoo fadeInUp" data-yoo-delay="0s">歷史沿革</h1>
              </div>

              <div class="infoBox">
                <div class="container">
                  <div class="activeBox">
                    <div class="listBox">
                      <div class="item">
                        <div class="pic"><img src="" alt=""></div>
                        <div class="info">
                          <time></time>
                          <div class="description"></div>
                        </div>
                      </div>

                    </div>
                  </div>

                  <div class="otherBox">
                    <div class="listBox">
                      <div class="item" data-src="../images/in/milestone.jpg">
                        <time>2023</time>
                        <div class="description">新廠完成</div>
                      </div>
                      <div class="item" data-src="../images/in/milestone.jpg">
                        <time>2007</time>
                        <div class="description">TPG公司成立初期即設定以齒輪加工零件為基礎，並研製成品為公司永續經營方向。</div>
                      </div>
                      <div class="item" data-src="../images/in/milestone.jpg">
                        <time>2006</time>
                        <div class="description">成立印度分公司於清奈並於孟買設立分公司</div>
                      </div>
                      <div class="item" data-src="../images/in/milestone.jpg">
                        <time>1987</time>
                        <div class="description">由 楊垂恭 先生創立臺灣精密齒輪工業股份有限公司成立。</div>
                      </div>
                    </div>
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
      const pic = document.querySelector('.activeBox .item img')
      const time = document.querySelector('.activeBox .item time')
      const description = document.querySelector('.activeBox .item .description')


      $('.otherBox').append('<div class="controlBox"></div>');
      $('.otherBox .listBox').slick({
        infinite: true,
        focusOnSelect: true,
        slidesToShow: 1,
        variableWidth: true,
        appendArrows: $('.otherBox .controlBox'),
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button" title="Previous"></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button" title="Next"></button>',
        responsive: [{
          breakpoint: 767,
          settings: {
            variableWidth: false,
          }
        }]
      })
      $('.otherBox .listBox').slick('slickNext')
      $('.otherBox .listBox').on('afterChange', function(event, slick, currentSlide) {
        const count = currentSlide - 1 < 0 ? slick.$slides.length - 1 : currentSlide - 1

        const firstPic = slick.$slides[count].childNodes[0].childNodes[0].dataset.src;
        const firstTime = slick.$slides[count].childNodes[0].childNodes[0].firstElementChild.innerHTML;
        const firstDescription = slick.$slides[count].childNodes[0].childNodes[0].children[1].innerHTML;

        pic.src = firstPic
        time.innerHTML = firstTime
        description.innerHTML = firstDescription
      });
    })
  </script>
</body>

</html>