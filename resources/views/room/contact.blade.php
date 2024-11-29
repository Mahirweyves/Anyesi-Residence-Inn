@include('room.navbar')
  
  <style>
    .map{
      width: 100%;
      height: 300px;
    }
  </style>
</head>
    <head>
        <title>Leaflet</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    </head>
    <body>  
        <script src="https://unpkg.com/leaflet/dist/leaflet-src.js"></script>
    </body>

    
<!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="assets/img/room1.jpg">
      <div class="container">
        <h1 class="cs_white_color text-center mb-0 cs_fs_50">Contact Us</h1>
      </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Contact Info -->
    <section>
      <div class="cs_height_20 cs_height_lg_20"></div>
      <div class="container">
        <div class="cs_contact_info_boxes">
          <div class="cs_contact_info_box">
            <div class="cs_iconbox cs_style_4">
              <div class="cs_iconbox_icon cs_center rounded-circle">
                <img src="assets/img/icons/contact_icon_1.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h3 class="cs_fs_21 cs_mb_5">Anyesi Residence Inn</h3>
                <p class="mb-0">77CF+278, Kigufi,Rubavu, RWANDA</p>
              </div>
            </div>
          </div>
          <div class="cs_contact_info_box">
            <div class="cs_iconbox cs_style_4">
              <div class="cs_iconbox_icon cs_center rounded-circle">
                <img src="assets/img/icons/contact_icon_2.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h3 class="cs_fs_21 cs_mb_5">Email address</h3>
                <p class="mb-0"><a href="mailto:anyesiresidenceinn@gmail.com">anyesiresidenceinn@gmail.com</a></p>
              </div>
            </div>
          </div>
          <div class="cs_contact_info_box">
            <div class="cs_iconbox cs_style_4">
              <div class="cs_iconbox_icon cs_center rounded-circle">
                <img src="assets/img/icons/contact_icon_3.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_right">
                <h3 class="cs_fs_21 cs_mb_5">For Reservation</h3>
                <p class="mb-0"><a href="tel:+250738307490">+250 738 307 490</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_30 cs_height_lg_10"></div>
    </section>
    <!-- End Contact Info -->

    <!-- Start Contact Section -->
    <section>
      <div class="cs_height_50 cs_height_lg_50"></div>
      <div class="container">
        <div class="row cs_gap_y_50">
          <div class="col-lg-6">
            <div class="cs_pr_100">
              <div class="cs_section_heading cs_style_1">
                <!--<span class="cs_primary_font cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">GETTING TOUCH</span>-->
                <h2 class="cs_fs_23 cs_mb_18">Contact Anyesi Residence Inn</h2>
                <p class="mb-0">Reach out to us via phone, email, or through our convenient online form.  We look forward to hearing from you and helping you plan your  unforgettable experience at Anyesi Residence Inn.</p>
              </div>
              @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
              @endif
              <div class="cs_height_37 cs_height_lg_37"></div>
              <form method="POST" action="{{ route('contact.store') }}" class="cs_form cs_style_2">
                 @csrf

                <div class="col-sm-12 mb-3">
                  <label for="name" value="{{ __('name:') }}">Full Name: <a style="color:#cc0000">*</a></label>
                  <input type="text" id="name" name="name" class="cs_form_field_2 cs_radius_20 @error('name') is-invalid @enderror" 
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <span class="text-danger">
                      @error('name')
                        {{$message}}
                      @enderror
                    </span>
                </div>

                <div class="col-sm-12 mb-3">
                  <label for="email" value="{{ __('email:') }}">Email: <a style="color:#cc0000">*</a></label>
                  <input type="email" id="email" name="email" class="cs_form_field_2 cs_radius_20 @error('email') is-invalid @enderror" 
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="text-danger">
                      @error('email')
                        {{$message}}
                      @enderror
                    </span>
                </div>

                <div class="col-sm-12 mb-3">
                  <label for="phone" value="{{ __('Phone:') }}">Phone: <a style="color:#cc0000">*</a></label>
                  <input type="phone" id="phone" name="phone" class="cs_form_field_2 cs_radius_20 @error('phone') is-invalid @enderror" 
                    value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                    <span class="text-danger">
                      @error('phone')
                        {{$message}}
                      @enderror
                    </span>
                </div>

                <div class="col-sm-12 mb-5">
                  <label for="message" value="{{ __('message:') }}">Write Your Comment: <a style="color:#cc0000">*</a></label>
                  <textarea type="text" id="message" name="message" cols="20" rows="4"  class="cs_form_field_2 cs_radius_20 @error('message') is-invalid @enderror" 
                    value="{{ old('message') }}" required autocomplete="message" autofocus></textarea>
                    <span class="text-danger">
                      @error('message')
                        {{$message}}
                      @enderror
                    </span>
                </div>

                <button type="submit" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15 mb-4">
                  <b>Send Message</b>
                  <span>
                    <i>
                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                      </svg>                                        
                    </i>
                    <i>
                      <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                      </svg>                   
                    </i>
                  </span>
                </button>
              </form>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="cs_image_layer cs_style_3 position-relative">
              <img src="assets/img/contact_img.jpg" alt="Contact" class="cs_radius_5">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Google Map Section -->
      <div class="cs_google_map cs_style_1 pb-5">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe> -->
        <section class="w3l-contact-1">
          <div class="col-lg-12" data-wow-delay="0.6s">
            <div id="map" style="width: 100%; height: 380px;"></div>
              <script>
                var map = L.map('map').setView([-1.730179, 29.273862], 13);
                var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                var marker = new L.Marker([-1.730179, 29.273862]);
                marker.addTo(map);
                marker.bindPopup('Anyesi').openPopup();
                marker.addTo(map);
                popupContent = document.createElement("images");
                popupContent.onload = function () {
                marker.openPopup();
                };
                popupContent.src = "../assets/images/slide1.png";
             </script>
            </div>
          </div>
        </section>
      </div>
    
    <!-- End Google Map Section -->
    
    @include('room.footer')
    