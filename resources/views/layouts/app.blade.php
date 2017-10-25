<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Baseball Store - Tum Vape</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/vendor.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" />
  </head>
  <body>
    <div class="overlay"></div>
    <div id="app">
      <header>
        <div class="wrapper-spread">
          <div class="clearfix">
            <div class="grid-1">
              <a href="#" class="header-logo">
                <img src="https://raw.githubusercontent.com/chatthana/baseballapp/master/public/images/Main-Logo.png" />
              </a>
            </div>
            <div class="grid-10">
              <div class="nav-container clearfix">
                <nav role="navigation">
                  <ul class="clearfix">
                    <li><a href="#">ติดต่อเรา</a></li>
                    <li><a href="#">แจ้งชำระเงิน</a></li>
                    <li><a href="#">ตรวจสอบสถานะสินค้า</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="grid-1">
              <div class="cart">
                <div class="cart-container">
                  <i class="fa fa-shopping-cart fa-lg"></i>
                </div>
              </div>
            </div>
          </div>


        </div>
      </header>
      @yield('content')

    </div>
    <footer>
      <div class="wrapper-spread">
        <div class="contact-information">
          <div class="icons">
            <img src="https://raw.githubusercontent.com/chatthana/baseballapp/master/public/images/Logo-Facebook.png" alt="" />
            <img src="https://raw.githubusercontent.com/chatthana/baseballapp/master/public/images/Logo-Line%40.png" alt="" />
          </div>
          <div class="telephone-numbers">
            <p>061-420-5320</p>
            <p>061-420-5320</p>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>
