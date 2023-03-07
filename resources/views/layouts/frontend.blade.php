<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== BOXICONS ===============-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/homepage.css')}}" />

      @stack('style-alt')

    <title>Damcon</title>
  </head>
  <body>
    @yield('header')

    <main class="main">
        @yield('content')
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
      <div class="footer__container container grid">
        <div>
          <a href="#" class="footer__logo">
            <img src="{{ asset('frontend/assets/images/Damcon-Png.png')}}" alt="logo" />
          </a>
          <p class="footer__description">
            Our vision is to make all people <br />
            the bist place to live for them.
          </p>
          <br/>
          <p class="footer__description">
            <i class='bx bx-map-pin'></i>
            Ground floor, 129 Elmostaqbal Elfath st. <br />
            Elsheikh Zayed
          </p>
          <br/>
          <p class="footer__description">
            <i class='bx bx-envelope'></i> Info@damcon.build
          </p>
        </div>

        <div class="footer__content">
          <div>
            <h3 class="footer__title">About</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li>
                <a href="#" class="footer__link">Features</a>
              </li>
              <li>
                <a href="#" class="footer__link">New & Blog</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="footer__title">Company</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">How we Work</a>
              </li>
              <li>
                <a href="#" class="footer__link">Capital</a>
              </li>
              <li>
                <a href="#" class="footer__link">Security</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="footer__title">Support</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">FAQs</a>
              </li>
              <li>
                <a href="#" class="footer__link">Support Center</a>
              </li>
              <li>
                <a href="#" class="footer__link">Contact Us</a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="footer__title">Follow Us</h3>
            <ul class="footer__social">
              <a href="https://www.facebook.com/profile.php?id=100086393406218&mibextid=ZbWKwL" class="footer__social-link">
                <i class="bx bxl-facebook-circle"></i>
              </a>
              <a href="https://www.instagram.com/damcon_cons/" class="footer__social-link">
                <i class="bx bxl-instagram-alt"></i>
              </a>
              <a href="" class="footer__social-link">
                <i class="bx bxl-youtube"></i>
              </a>
              <a href="" class="footer__social-link">
                <i class="bx bxl-linkedin-square"></i>
              </a>
              <a href="" class="footer__social-link">
                <i class="bx bxl-whatsapp-square"></i>
              </a>
              <a href="" class="footer__social-link">
                <i class="bx bxl-twitter"></i>
              </a>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer__info container">
        <span class="footer__copy"> &#169; Damcon. All rights reserved </span>
        <div class="footer__privacy">
          <a href="#">Terms & conditions</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
    </footer>

        <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bxs-chevrons-up"></i>
    </a>

    @stack('script-alt')
  </body>
</html>
