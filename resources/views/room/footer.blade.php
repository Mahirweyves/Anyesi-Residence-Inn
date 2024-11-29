<!-- Start Footer -->
    <footer class="cs_footer cs_primary_bg cs_ternary_color">
      <div class="cs_bottom_footer_wrap">
        <div class="container">
          <div class="cs_bottom_footer position-relative">
            <div class="cs_bottom_footer_right">
              <ul class="cs_footer_links cs_mp_0">
                <div class="cs_social_btns cs_style_1">
                  <a href="https://www.airbnb.com" class="cs_center" target="_blank">
                    <i class="fa-brands fa-airbnb"></i>
                  </a>
                  <a href="https://www.booking.com" class="cs_center" target="_blank">
                    <i class="fa-solid fa-b">.</i>
                  </a>                         
                  <!-- <a href="https://www.tripadvisor.com" class="cs_center" target="_blank">
                    <i class="fa fa-tripadvisor"></i>
                  </a> -->
                  <!-- <a href="#" class="cs_center">
                    <i class="fa-brands fa-youtube"></i>
                  </a> -->
                  <!-- <a href="#" class="cs_center">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a> -->
                </div>
              </ul>
            </div>
            <p class="cs_copyright cs_white_color">Copyright &copy; Anyesi Residence Inn <span id="year"></span></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </Script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.slick.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.min.js"></script>
    <script src="assets/js/lightgallery.min.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        (function () {
            var options = {
                whatsapp: "+250738307490", // WhatsApp number without spaces
                call_to_action: "Anyesi Residence Inn", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { 
                WhWidgetSendButton.init(host, proto, options); 
            };
            document.getElementsByTagName('head')[0].appendChild(s);
        })();
    </script>
    <!-- <button onclick="topFunction()" id="scrollTopButton" title="Go to top">Top</button> -->
    <!-- <button onclick="topFunction()" id="scrollTopButton" fill="white" title="Go to top">Top</button>             -->
    <button onclick="topFunction()" id="scrollTopButton" title="Go to top">
      <span class="cs_scrollup">              
        <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15 6.18793L14.1169 7L7.93687 1.31723C7.81958 1.20941 7.66053 1.14885 7.49468 1.14885C7.32884 1.14885 7.16978 1.20941 7.0525 1.31723L0.884376 6.99022L0 6.177L6.16812 0.505163C6.51998 0.181708 6.99715 0 7.49468 0C7.99222 0 8.46938 0.181708 8.82125 0.505163L15 6.18793Z" fill="white"/>
        </svg>  
        <span class="cs_scrollup_bg_dotted cs_accent_color">
          <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="28" cy="28" r="27.5" stroke="currentColor" stroke-dasharray="5 5"/>
          </svg>  
        </span>              
      </span>
    </button>

        <!-- Scroll to Top Script -->
    <script>
      // Get the button
      let mybutton = document.getElementById("scrollTopButton");
        // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
              mybutton.style.display = "none";
          }
        }
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
    </script>
  </body>
 
</html>