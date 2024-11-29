<!DOCTYPE html>
<html class="no-js" lang="en">

  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <!-- <link href="/favicon.ico" rel="icon">
    <link rel="icon" href="/assets/img/favicon.png"> -->
    <link rel="icon" href="/assets/img/logo.jpg">
    <!-- Site Title -->
    <title>Anyesi Residence Inn</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/slick.min.css">
    <link rel="stylesheet" href="/assets/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="/assets/css/lightgallery.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>

  <style>
    #scrollTopButton {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 99;
            /* border: none;
            outline: none; */
            /* background-color: #aa8453;
            color: white;
            cursor: pointer; */
            padding: 10px;
            border-radius: 10px;
            font-size: 18px;
        }
    .cs_date_input {
    border: none;
    background-color: transparent;
    color: inherit;
    font: inherit;
    cursor: pointer;
    padding: 0;
    outline: none;
    width: 100%; /* Ensures the input takes up the full width of the container */
    height: 100%; /* Ensures the input takes up the full height of the container */
}

.cs_date_input::placeholder {
    color: inherit;
}

.cs_date_input::-webkit-calendar-picker-indicator {
    filter: invert(1); /* Adjust if needed for design */
    cursor: pointer;
}

.cs_form_item {
    display: flex;
    align-items: center;
    cursor: pointer;
    position: relative;
}

.cs_form_item label {
    margin-right: 10px;
    pointer-events: none; /* Ensures clicking the label does not prevent the input from focusing */
}

.cs_date_items {
    display: flex;
    flex-direction: column;
}

button[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #000;
    color: #fff;
    border: none;
    cursor: pointer;
}
  </style>

  <body>
    <!-- Start Preloader -->
    <div class="cs_preloader cs_accent_color cs_primary_font">
      <div class="cs_preloader_in">A</div>
    </div>
    <!-- End Preloader -->
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_2 cs_primary_color cs_sticky_header">
      <div class="cs_main_header">
        <div class="container">
          <div class="cs_main_header_in">
            <div class="cs_main_header_left">
              <button class="cs_hamburger_btn">
                <span class="cs_hamburger_btn_in">
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>
              <a class='cs_site_branding' href='/'>
                <img src="/assets/img/logo.png" style="height:100px; width: 200px;"alt="Hamburger" class="cs_hamburger_header_img">
              </a>
            </div>
            <div class="cs_main_header_right">
              <div class="cs_header_info_box">
                <div class="cs_header_number">
                  <span class="cs_header_number_icon">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_249_395)">
                      <path d="M13.5415 1.04168C13.5415 0.765415 13.6512 0.500463 13.8466 0.305113C14.0419 0.109762 14.3069 1.55587e-05 14.5832 1.55587e-05C17.3449 0.00304847 19.9927 1.10149 21.9455 3.05434C23.8983 5.00718 24.9968 7.65494 24.9998 10.4167C24.9998 10.6929 24.8901 10.9579 24.6947 11.1533C24.4994 11.3486 24.2344 11.4583 23.9582 11.4583C23.6819 11.4583 23.4169 11.3486 23.2216 11.1533C23.0262 10.9579 22.9165 10.6929 22.9165 10.4167C22.914 8.20731 22.0352 6.08913 20.473 4.52687C18.9107 2.9646 16.7925 2.08583 14.5832 2.08335C14.3069 2.08335 14.0419 1.9736 13.8466 1.77825C13.6512 1.5829 13.5415 1.31795 13.5415 1.04168ZM14.5832 6.25002C15.6882 6.25002 16.748 6.689 17.5294 7.4704C18.3108 8.25181 18.7498 9.31161 18.7498 10.4167C18.7498 10.6929 18.8596 10.9579 19.0549 11.1533C19.2503 11.3486 19.5152 11.4583 19.7915 11.4583C20.0678 11.4583 20.3327 11.3486 20.5281 11.1533C20.7234 10.9579 20.8332 10.6929 20.8332 10.4167C20.8315 8.75959 20.1725 7.17084 19.0007 5.99909C17.829 4.82735 16.2402 4.16834 14.5832 4.16668C14.3069 4.16668 14.0419 4.27643 13.8466 4.47178C13.6512 4.66713 13.5415 4.93208 13.5415 5.20835C13.5415 5.48462 13.6512 5.74957 13.8466 5.94492C14.0419 6.14027 14.3069 6.25002 14.5832 6.25002ZM24.055 17.4365C24.6587 18.0418 24.9977 18.8618 24.9977 19.7167C24.9977 20.5716 24.6587 21.3916 24.055 21.9969L23.1071 23.0896C14.5759 31.2573 -6.18455 10.5021 1.85711 1.94377L3.05503 0.902099C3.66104 0.315304 4.47371 -0.00930832 5.31722 -0.00151065C6.16074 0.00628702 6.96726 0.345868 7.56232 0.943766C7.59461 0.976057 9.52482 3.48335 9.52482 3.48335C10.0976 4.08504 10.4164 4.88432 10.415 5.71502C10.4137 6.54572 10.0922 7.34395 9.51753 7.94377L8.31128 9.46043C8.97883 11.0824 9.9603 12.5565 11.1993 13.798C12.4383 15.0395 13.9104 16.024 15.5311 16.6948L17.0571 15.4813C17.657 14.907 18.4551 14.5859 19.2855 14.5848C20.116 14.5836 20.915 14.9024 21.5165 15.475C21.5165 15.475 24.0227 17.4042 24.055 17.4365ZM22.6217 18.9511C22.6217 18.9511 20.129 17.0333 20.0967 17.0011C19.8821 16.7883 19.5921 16.6689 19.2899 16.6689C18.9877 16.6689 18.6978 16.7883 18.4832 17.0011C18.455 17.0302 16.354 18.7042 16.354 18.7042C16.2124 18.8169 16.0439 18.8908 15.8651 18.9185C15.6863 18.9463 15.5033 18.927 15.3342 18.8625C13.2347 18.0808 11.3277 16.857 9.74236 15.2741C8.15704 13.6911 6.93045 11.7859 6.14566 9.68752C6.07607 9.51612 6.05338 9.32927 6.07993 9.1462C6.10648 8.96313 6.18129 8.79043 6.2967 8.64585C6.2967 8.64585 7.97066 6.54377 7.99878 6.51668C8.21156 6.30208 8.33095 6.01212 8.33095 5.70991C8.33095 5.40771 8.21156 5.11774 7.99878 4.90314C7.96649 4.87189 6.04878 2.3771 6.04878 2.3771C5.83097 2.18179 5.5467 2.0772 5.25425 2.08475C4.96179 2.09231 4.6833 2.21144 4.47586 2.41772L3.27795 3.45939C-2.59914 10.5261 15.3915 27.5188 21.5842 21.6667L22.5332 20.5729C22.7555 20.367 22.8891 20.0826 22.9056 19.7799C22.9221 19.4772 22.8203 19.18 22.6217 18.9511Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_249_395">
                      <rect width="25" height="25" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>   
                  </span>  
                  <a href="tel:+250738307490">+250-738-307-490</a>            
                </div>
                <a class='cs_btn cs_style_2 cs_medium cs_radius_5 cs_fs_15' href='/rooms'>
                  Reservation
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="cs_hamburger_header">
      <div class="container-fluid cs_plr_100">
        <div class="cs_hamburger_header_top">
          <div class="cs_hamburger_brand">
            <a class='cs_site_branding' href='index.html'>
              <!-- <img src="assets/img/logo.jpg" style="height:65px; width: 40px;" alt="Logo"> -->
            </a>
          </div>
          <button class="cs_close_hamburger">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.8175 11.0675L15.885 15L19.8175 18.9325C20.0613 19.1763 20.0613 19.5725 19.8175 19.8162C19.695 19.9387 19.535 19.9987 19.375 19.9987C19.215 19.9987 19.055 19.9375 18.9325 19.8162L15 15.8837L11.0675 19.8162C10.945 19.9387 10.785 19.9987 10.625 19.9987C10.465 19.9987 10.305 19.9375 10.1825 19.8162C9.93875 19.5725 9.93875 19.1763 10.1825 18.9325L14.115 15L10.1825 11.0675C9.93875 10.8238 9.93875 10.4275 10.1825 10.1838C10.4262 9.94 10.8225 9.94 11.0662 10.1838L14.9987 14.1163L18.9313 10.1838C19.175 9.94 19.5713 9.94 19.815 10.1838C20.0588 10.4275 20.0588 10.8238 19.815 11.0675H19.8175ZM30 15C30 23.2712 23.2712 30 15 30C6.72875 30 0 23.2712 0 15C0 6.72875 6.72875 0 15 0C23.2712 0 30 6.72875 30 15ZM28.75 15C28.75 7.41875 22.5812 1.25 15 1.25C7.41875 1.25 1.25 7.41875 1.25 15C1.25 22.5812 7.41875 28.75 15 28.75C22.5812 28.75 28.75 22.5812 28.75 15Z" fill="white"/>
            </svg>            
          </button>
        </div>
      </div>
      <div class="cs_hamburger_header_in">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <nav class="cs_hamburger_menu cs_fs_38 cs_primary_font cs_white_color">
                <ul class="cs_nav_list">
                  <li><a href="/">Home</a></li>
                  <!-- <li><a href="{{url('/about')}}">About Us</a></li> -->
                  <li><a href="{{url('/rooms')}}">Rooms</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                  <a class='cs_btn cs_style_2 cs_medium cs_radius_5' style="background-color:#aa8453;" href="{{url('/rooms')}}">
                  Reservation
                </a>
                </ul>
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="cs_hamburger_header_info">
                <div class="cs_hamburger_header_info_in">
                  <img src="/assets/img/logo.jpg" style="height:200px; width: 400px;"alt="Hamburger" class="cs_hamburger_header_img cs_mb_80">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="cs_hamburger_contact_info">
                        <h3 class="cs_fs_28 cs_white_color cs_mb_14">Contact</h3>
                        <p class="cs_ternary_color cs_mb_19">Call : +250-738-307-490 <br>
                          Email : anyesiresidenceinn@gmail.com
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="cs_hamburger_contact_info">
                        <h3 class="cs_fs_28 cs_white_color cs_mb_14">Location</h3>
                        <p class="cs_ternary_color cs_mb_16">77CF+278, Kigufi, Rubavu, RWANDA</p>
                        <!-- <a href="#" class="cs_text_btn cs_accent_color cs_fs_15 cs_medium">Map Direction</a> -->
                        <div class="cs_social_btns cs_style_1">
                          <!-- <a href="#" class="cs_center">
                            <i class="fa-brands fa-youtube"></i>
                          </a> -->
                          <a href="https://www.airbnb.com" class="cs_center" target="_blank">
                            <i class="fa-brands fa-airbnb"></i>
                          </a>
                          <a href="https://www.booking.com" class="cs_center" target="_blank">
                            <i class="fa-solid fa-b">.</i>
                          </a>                         
                          <a href="https://www.tripadvisor.com" class="cs_center" target="_blank">
                            <i class="fa fa-tripadvisor"></i>
                          </a>
                          <!-- <a href="https://www.tripadvisor.com" class="cs_center" target="_blank">
                            <img src="https://commons.wikimedia.org/wiki/File:Wikipedia%27s_W.svg" alt="TripAdvisor" style="width:24px; height:24px;">
                          </a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Section -->



    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">


    <!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_size_1 cs_primary_bg cs_bg_filed cs_center" data-src="/assets/img/room1.jpg">
      <div class="container">
        <h1 class="cs_white_color text-center mb-0 cs_fs_28">Complete Your Reservation
          <a href="{{route('room.show',$room->id)}}" class="btn btn-primary float-end">Back</a>
        </h1>
      </div>
    </section>
    <!-- End Page Heading Section -->
     
    <h1 class="cs_black_color text-center mt-3 cs_fs_38">Confirm Booking for {{ $room->name }}</h1>

    @if(session('totalAmount'))
      <p>Total Amount: ${{ session('totalAmount') }}</p>
    @endif
    <!-- Start Payment Section -->
    <section>
      <div class="cs_height_35 cs_height_lg_10"></div>
      <div class="container">
        <div class="row cs_gap_y_50">
          <div class="col-lg-4">
            <div class="cs_booking_card cs_radius_5">
              <div class="cs_mb_20">
                <span class="cs_primary_font cs_semibold cs_fs_15 cs_primary_color">Check-In Date :</span>
                <div class="cs_booking_time">
                  <span class="cs_primary_font cs_fs_15 cs_primary_color">{{ $checkinDay }}, {{ $checkin }}</span>
                  <!-- <span>(From 11:00 AM)</span> -->
                </div>
              </div>
              <div class="cs_mb_30">
                <span class="cs_primary_font cs_semibold cs_fs_15 cs_primary_color">Check-Out Date :</span>
                <div class="cs_booking_time">
                  <span class="cs_primary_font cs_fs_15 cs_primary_color">{{ $checkoutDay }}, {{ $checkout }}</span>
                  <!-- <span>(Until 10:00 PM)</span> -->
                </div>
              </div>
                @php
                    $checkinDate = new DateTime($checkin);
                    $checkoutDate = new DateTime($checkout);
                    $nights = $checkoutDate->diff($checkinDate)->days;
                    $totalAmount = $nights * $room->price;
                @endphp
              <ul class="cs_booking_info_list cs_mp_0">
              <!-- <p class="cs_mb_5">Room :</p>  -->
                <li> 
                  <span class="cs_primary_font cs_semibold cs_fs_15 cs_primary_color">Room: </span>
                  <span class="cs_primary_font cs_fs_15 cs_primary_color">{{ $room->name }}</span>
                </li>
                <li> 
                  <span class="cs_primary_font cs_semibold cs_fs_15 cs_primary_color">Price per Night: </span>
                  <span  id="room-price" class="cs_primary_font cs_fs_15 cs_primary_color">{{ number_format($room->price) }} RWF</span>
                </li>
                <li>
                  <span class="cs_primary_font cs_semibold cs_fs_15 cs_primary_color">Number of Nights:</span>
                  <span class="cs_primary_font cs_fs_15 cs_primary_color">{{ $nights }} Night(s)</span>
                </li>
                <li>
                  <span class="cs_primary_color cs_semibold cs_fs_15">Total Amount:</span>
                  <span class="cs_bold cs_fs_16 cs_primary_color">{{ $formattedTotalAmount }} RWF</span>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="cs_pl_60">
            <form action="{{ route('room.book', $room->id) }}" method="POST">
              @csrf
                <input type="hidden" name="checkin" value="{{ $checkin }}">
                <input type="hidden" name="checkout" value="{{ $checkout }}">
                <input type="hidden" name="nights" value="{{ $formattedPrice }}">
                <input type="hidden" name="totalAmount" value="{{ $formattedTotalAmount }}">
                
              
              <h2 class="cs_fs_38 cs_mb_20">Fill Your Information</h2>
                <div class="row cs_gap_y_20">
                    <div class="col-sm-6">
                      <label for="name" value="{{ __('Name:') }}">Full Name: <a style="color:#cc0000">*</a></label>
                      <input type="text" id="name" name="name" class="cs_form_field_2 cs_radius_20 @error('name') is-invalid @enderror"
                      value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                
                    <div class="col-sm-6">
                      <label for="email" value="{{ __('Email:') }}">Email: <a style="color:#cc0000">*</a></label>
                      <input type="email" id="email" name="email" class="cs_form_field_2 cs_radius_20 @error('email') is-invalid @enderror" 
                      value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="text-danger">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    
                    <div class="col-sm-6">
                      <label for="phone" value="{{ __('Phone:') }}">Phone: <a style="color:#cc0000">*</a></label>
                      <input type="phone" id="phone" name="phone" class="cs_form_field_2 cs_radius_20 @error('phone') is-invalid @enderror" 
                      value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        <span class="text-danger">
                            @error('phone')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                
                    <div class="col-sm-6 cs_mb_25">
                      <label for="address" value="{{ __('Address:') }}">Address: <a style="color:#cc0000">*</a></label>
                      <input type="text" id="address" name="address" class="cs_form_field_2 cs_radius_20 @error('address') is-invalid @enderror" 
                      value="{{ old('address') }}" required autocomplete="address" autofocus>
                        @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
                    <b>Confirm Booking</b>
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
        </div>
      </div>
      <div class="cs_height_60 cs_height_lg_35"></div>
    </section>
    <!-- End Payment Section -->

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
        (function () {
            var options = {
                whatsapp: "+250788000000", // WhatsApp number without spaces
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

    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </Script>

    <!-- Script -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.slick.min.js"></script>
    <script src="/assets/js/swiper.min.js"></script>
    <script src="/assets/js/moment.min.js"></script>
    <script src="/assets/js/daterangepicker.min.js"></script>
    <script src="/assets/js/lightgallery.min.js"></script>
    <script src="/assets/js/YTPlayer.min.js"></script>
    <script src="/assets/js/main.js"></script>
  </body>
 
</html>