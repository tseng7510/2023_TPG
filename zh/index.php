<!doctype html>
<html lang="zh-TW">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css" async>
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">

        <div class="banner yoo fadeInUp" data-yoo-delay="0s">
          <div class="listBox">
            <div class="item">
              <div class="pic"><img src="../images/index/banner.jpg" alt=""></div>
              <div class="infoBox">
                <div class="title"><img src="../images/index/about_title.svg" alt=""></div>
                <div class="description">建立“研發創新，行銷全球，全面品管，品質至上，快速供應，永續經營＂之公司理念。<br />
                  提供最豐富的產品及最佳的品質快速供應全球。</div>
                <a href="#" class="more">VIEW MORE</a>
              </div>
            </div>
            <div class="item">
              <div class="pic"><img src="../images/index/banner.jpg" alt=""></div>
              <div class="infoBox">
                <div class="title"><img src="../images/index/about_title.svg" alt=""></div>
                <div class="description">建立“研發創新，行銷全球，全面品管，品質至上，快速供應，永續經營＂之公司理念。<br />
                  提供最豐富的產品及最佳的品質快速供應全球。</div>
                <a href="#" class="more">VIEW MORE</a>
              </div>
            </div>
          </div>
        </div>

        <section class="aboutBox">
          <div class="container">
            <div class="topBox">
              <div class="picBox yoo fadeInLeft" data-yoo-delay="0.2s">
                <div class="pic"><img alt="台灣精密齒輪工業股份有限公司" src="../images/index/about_pic.jpg" /></div>
              </div>
              <div class="titleBlock yoo fadeInUp" data-yoo-delay="0.2s">
                <div class="title">
                  <h2>ABOUT</h2>
                  <span>TPG MOTORS & DRIVES.</span>
                  <div class="description">關於台灣精密齒輪</div>
                </div>
                <div class="black">
                  <div class="title">
                    <h2>ABOUT</h2>
                    <span>TPG MOTORS & DRIVES.</span>
                    <div class="description">關於台灣精密齒輪</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="infoBox yoo fadeInUp" data-yoo-delay="0.4s">
              <div class="description">
                <p>由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</p>
              </div>
              <ul>
                <li class="technology yoo fadeInLeft" data-yoo-delay="0.6s">
                  <a href="#">
                    <i></i>
                    <div class="title">
                      <div class="en">Technology</div>
                      <div class="zh">信賴的製品</div>
                    </div>
                  </a>
                </li>
                <li class="perfection yoo fadeInLeft" data-yoo-delay="0.8s">
                  <a href="#">
                    <i></i>
                    <div class="title">
                      <div class="en">Perfection</div>
                      <div class="zh">卓越的性能</div>
                    </div>
                  </a>
                </li>
                <li class="guarantee yoo fadeInLeft" data-yoo-delay="1s">
                  <a href="#">
                    <i></i>
                    <div class="title">
                      <div class="en">Guarantee</div>
                      <div class="zh">品質的保證</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>

        <section class="productsBox">
          <div class="container">
            <h2 class="unitTitle">PRODUCTS <span>CATEGORY</span></h2>
            <div class="infoBox yoo fadeInUp" data-yoo-delay="0.2s">
              <div class="title">系列產品</div>
              <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利。</div>
              <a href="#" class="indexMore">VIEW MORE</a>
            </div>
          </div>
          <div class="productList yoo fadeInUp" data-yoo-delay="0.4s">
            <div class="listBox">
              <? for ($i = 0; $i < 5; $i++) { ?>
                <div class="item">
                  <a href="#">
                    <div class="pic"><img src="../images/index/product.jpg" alt=""></div>
                    <h3 class="title">平行軸減速機</h3>
                    <p>TPG 阪神電機無刷系列包含無刷減速機，無刷馬達，無刷控制器與配件。</p>
                  </a>
                </div>
              <? } ?>
            </div>
          </div>
        </section>

        <section class="applicationBox">
          <div class="container">
            <div class="infoSwiper yoo fadeInLeft" data-yoo-delay="0.4s">
              <h2 class="unitTitle">OUR MARKETS<div class="zh">產品應用</div>
              </h2>
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon1.svg" alt=""></i>
                      <div class="title">食品</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon1.svg" alt=""></i>
                      <div class="title">食品</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon2.svg" alt=""></i>
                      <div class="title">製藥</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon2.svg" alt=""></i>
                      <div class="title">製藥</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon3.svg" alt=""></i>
                      <div class="title">包裝</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon3.svg" alt=""></i>
                      <div class="title">包裝</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon4.svg" alt=""></i>
                      <div class="title">物流</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon4.svg" alt=""></i>
                      <div class="title">物流</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon5.svg" alt=""></i>
                      <div class="title">半導體</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon5.svg" alt=""></i>
                      <div class="title">半導體</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon6.svg" alt=""></i>
                      <div class="title">工具機</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon6.svg" alt=""></i>
                      <div class="title">工具機</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon7.svg" alt=""></i>
                      <div class="title">農業</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon7.svg" alt=""></i>
                      <div class="title">農業</div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <i><img src="../images/index/application_icon8.svg" alt=""></i>
                      <div class="title">輔具</div>
                    </div>
                    <div class="item back">
                      <i><img src="../images/index/application_icon8.svg" alt=""></i>
                      <div class="title">輔具</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-next"></div>
                <div class="swiper-prev"></div>
              </div>
            </div>
            <div class="picSwiper yoo fadeInRight" data-yoo-delay="0.4s">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">食品</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon1.svg" alt=""></i>
                      </div>
                      <a href="application.php" class="indexMore yoo fadeInLeft" data-yoo-delay="0.2s">VIEW MORE</a>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">製藥</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon2.svg" alt=""></i>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">包裝</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon3.svg" alt=""></i>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">物流</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon4.svg" alt=""></i>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">半導體</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon5.svg" alt=""></i>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">工具機</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon6.svg" alt=""></i>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">農業</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon7.svg" alt=""></i>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <div class="pic"><img src="../images/index/application.jpg" alt=""></div>
                      <div class="infoBox">
                        <div class="textBox">
                          <div class="title">輔具</div>
                          <div class="description">由TPG全球科研人員參與設計並委由台灣精密齒輪工業股份有限公司製造生產，台灣精密公司以原有的中日合作技術背景下，研製傳動元件並掌握關鍵技術及專利，默默耕耘數十年。當中，產品已通過國際知名檢驗認證機構，並不斷致力於開發各式高效率精密傳動電機...</div>
                        </div>
                        <i><img src="../images/index/application_icon8.svg" alt=""></i>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="newsBox">
          <div class="titleBox yoo fadeInUp" data-yoo-delay="0.2s">
            <h2 class="unitTitle">News & Exhibition<div class="zh">最新消息 & 展覽訊息</div>
            </h2>
          </div>
          <div class="listBox yoo fadeInUp" data-yoo-delay="0.4s">

            <? for ($i = 0; $i < 2; $i++) { ?>
              <div class="item">
                <a href="news_detail.php">
                  <div class="picN"><img src="../images/index/news.jpg" alt=""></div>
                  <div class="infoBox">
                    <time>
                      <div class="day">10</div>
                      <div class="date">Jun 2022</div>
                    </time>
                    <div class="tag">展覽訊息</div>
                    <div class="title">本公司通過ISO9001：2015國際品質認證！</div>
                    <div class="description">在如此嚴峻的疫情下，TPG仍持續地為客戶服務且在原物料充足情況下提供最佳的品質，TPG也期待疫情可以盡快結束。...</div>
                    <div class="more"></div>
                  </div>
                </a>
              </div>
            <? } ?>

          </div>
        </section>

      </div>
    </main>
    <?php include('include_footer.php'); ?>

  </div>
  <?php include('include_body_bottom.php'); ?>
  <script>
    $(function() {
      $('.banner .listBox').slick({
        draggable: true,
        arrows: false,
        dots: true,
        fade: true,
        speed: 900,
        infinite: true,
        autoplay: true,
        loop: true,
        autoplaySpeed: 5000,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        touchThreshold: 100
      })
      $('.productList .listBox').slick({
        arrows: true,
        dots: false,
        speed: 900,
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button" title="Previous"></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button" title="Next"></button>',
        responsive: [{
          breakpoint: 1300,
          settings: {
            slidesToShow: 3,
          }
        }, {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
          }
        }]
      })
    })

    let swiper = new Swiper('.applicationBox .infoSwiper .swiper', {
      slidesPerView: 8,
      navigation: {
        nextEl: '.applicationBox .swiper-next',
        prevEl: '.applicationBox .swiper-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 'auto',
        },
        768: {
          slidesPerView: 8,
        },
      }
    });

    let swiper2 = new Swiper('.applicationBox .picSwiper .swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      effect: 'fade',
      thumbs: {
        swiper: swiper,
      },
    });
  </script>

</body>

</html>