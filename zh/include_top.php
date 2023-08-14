<div class="headerBox">
  <div class="container">
    <div class="logo" itemprop="headline"><a href="index.php" itemprop="url"><img class="lazyLoad" data-src="../images/logo.svg" alt="台灣精密齒輪工業股份有限公司" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" /></a>
    </div>


    <div class="menuBox">
      <?php include('include_menu.php'); ?>
    </div>
    <div class="topNav">
      <div class="language">
        <button class="btn" type="button" title="Language"><span>ENGLISH</span></button>
        <ul>
          <li><a href="#">EN</a></li>
          <li><a href="#">繁</a></li>
          <li><a href="#">簡</a></li>
        </ul>
      </div>
      <div class="inquiryCar"><a class="hasItem" href="inquiry.php"><span>線上詢價</span></a></div>
    </div>
  </div>
</div>

<div class="menuSearch">
  <button class="titleBtn">減速機選擇</button>

  <form action="" class="formBox">
    <div class="inputItem full">
      <div class="select">
        <select class="selectControl">
          <option value="">產品類型</option>
        </select>
      </div>
      <div class="select">
        <select class="selectControl">
          <option value="">電機功率</option>
        </select>
      </div>
      <div class="select">
        <select class="selectControl">
          <option value="">減速比</option>
        </select>
      </div>
      <div class="input">
        <input type="text" name="" id="" class="inputControl" placeholder="輸入型號或關鍵字">
      </div>
    </div>
    <button type="submit" onclick="location.href='products_search_results.php'">Search</button>
    <button type="reset">清除搜尋條件</button>
  </form>
</div>