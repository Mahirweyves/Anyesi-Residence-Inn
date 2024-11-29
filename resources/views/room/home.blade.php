@include('room.navbar')

<!-- Start Hero Section -->
    <section class="cs_hero cs_style_2 position-relative">
      <div class="cs_hero_left_img cs_bg_filed" data-src="assets/img/hero_bg_3.jpg"></div>
      <div class="cs_hero_left_right cs_bg_filed" data-src="assets/img/hero_bg_4.png"></div>
      <div class="cs_hero_in">
        <div class="cs_hero_content cs_center">
          <div class="container">
            <div class="row">
              <div class="col-lg-6"></div>
              <div class="col-lg-6">
                <div class="cs_hero_text">
                  <p class="cs_hero_subtitle cs_mb_28 cs_primary_color">A Kivu View Oasis for Tranquility and Rejuvenation.</p>
                  <h1 class="cs_hero_title mb-0 cs_fs_69 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">Welcome to Our Luxurious Anyesi Residence Inn</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->
    
    <!-- Start Rooms Section -->
    <section>
    <div class="cs_height_60 cs_height_lg_35"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <!-- <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase cs_fs_50">Rooms & Suites</p> -->
          <h2 class="cs_fs_28 mb-0 wow fadeInUp text-uppercase" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Rooms & Suites Collection</h2>
        </div>
        <div class="cs_height_20 cs_height_lg_35"></div>
      </div>
      <div class="cs_slider cs_style_1 cs_slider_gap_24 cs_hover_show_arrows">
        <div class="container">
          <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="3">
            <div class="cs_slider_wrapper">
              @foreach($rooms as $room)
              <div class="cs_slide">
                <div class="cs_card cs_style_1 cs_type_1">
                  <a class='cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg' 
                    href="{{ route('room.show', ['id' => $room->id]) }}">
                    @if($room->firstImage())
                        <img src="{{ asset('uploaded_images/' . $room->firstImage()->image) }}" alt="{{ $room->name }}">
                        <img src="{{ asset('uploaded_images/' . $room->firstImage()->image) }}" alt="{{ $room->name }}">
                    @else
                        <img src="{{ asset('img/room_6.jpg') }}" class="card-img-top" alt="Room">
                    @endif
                  </a>
                  <div class="cs_card_info position-relative">
                    <h2 class="cs_card_title cs_fs_21 cs_mb_4"><a href="{{route('room.show',$room->id)}}">{{ $room->name }}</a></h2>
                    <div class="cs_card_price cs_mb_17">
                      <span class="cs_primary_color">From</span>
                      <span class="cs_accent_color cs_fs_16 cs_primary_font">{{ number_format($room->price) }} RWF/Night</span>
                    </div>
                    <ul class="cs_card_list cs_mp_0">
                      <li>{{ $room->capacity }} Sq</li>
                      <!-- <li>3-5 Guests</li> -->
                      <li>Free Wi-Fi</li>
                    </ul>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          
          <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
        </div>
        <div class="cs_slider_arrows cs_style_2 cs_mobile_hide">
          <div class="cs_left_arrow slick-arrow">
            <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z" fill="currentColor"/>
            </svg>                                             
          </div>
          <div class="cs_right_arrow slick-arrow">
            <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
            </svg>                                              
          </div>
        </div>
      </div>
      <div class="cs_height_60 cs_height_lg_35"></div>
    </section>
    <!-- End Rooms Section -->

    <!-- Start Facilities Section -->
    <section class="cs_primary_bg">
      <div class="col-lg-12 text-center">
        <div class="cs_section_heading cs_style_1">
          <p class="cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase cs_accent_color wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">ANYESI RESIDENCE INN LUXARIOUS FECILITIES</p>
          <h2 class="cs_fs_28 mb-0 cs_white_color">Explore Our Exclusive Resort Facilities</h2>
          </div>
      </div>
      <div class="cs_height_60 cs_height_lg_20"></div>
      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-1 cs_mobile_hide"></div> -->
          <div class="col-lg-4 col-md-4">
            <div class="cs_iconbox cs_style_1">
              <div class="cs_iconbox_icon cs_mb_29"><img src="assets/img/icons/swimmer.svg" alt="Icon"></div>
              <h3 class="cs_iconbox_title cs_white_color cs_fs_21 cs_mb_16">Lake Kivu view</h3>
              <p class="cs_iconbox_subtitle cs_ternary_color mb-0">Experience the serene beauty of Lake Kivu with its crystal-clear waters, lush surrounding landscapes, and breathtaking sunsets, perfect for relaxation.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="cs_iconbox cs_style_1">
              <div class="cs_iconbox_icon cs_mb_29"><img src="assets/img/icons/restaurant.svg" alt="Icon"></div>
              <h3 class="cs_iconbox_title cs_white_color cs_fs_21 cs_mb_16">Restaurant & Bar</h3>
              <p class="cs_iconbox_subtitle cs_ternary_color mb-0">Enjoy a delightful dining experience at our Restaurant & Bar, featuring a diverse menu, refreshing drinks, and a cozy atmosphere perfect for any occasion.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="cs_iconbox cs_style_1">
              <div class="cs_iconbox_icon cs_mb_29"><img src="assets/img/icons/suitcase.svg" alt="Icon"></div>
              <h3 class="cs_iconbox_title cs_white_color cs_fs_21 cs_mb_16">Meeting Hall</h3>
              <p class="cs_iconbox_subtitle cs_ternary_color mb-0">A cozy, well-lit meeting hall equipped with modern amenities, ideal for small to medium-sized gatherings, workshops, and large business meetings.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_60 cs_height_lg_35"></div>
    </section>
    <!-- End Facilities Section -->

    <!-- Start Gallery Section -->
    <section class="cs_gray_bg">
      <div class="cs_height_60 cs_height_lg_35"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <!-- <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">EXCITING GALLERY</p> -->
          <h2 class="cs_fs_28 mb-0 wow fadeInUp text-uppercase" data-wow-duration="0.8s" data-wow-delay="0.2s">Explore Unforgettable Experiences</h2>
        </div>
        <div class="cs_height_20 cs_height_lg_35"></div>
      </div>
      <div class="cs_custom_slide_container">
        <div class="container">
          <div class="cs_custom_slide_wrapper cs_lightgallery">
            <div class="cs_custom_slide">
              <a href="assets/img/gallery-19.jpg" class="cs_custom_slide_item cs_bg_filed cs_lightbox_item cs_custom_pointer_wrap" 
                  data-src="assets/img/gallery-19.jpg" style="background-image: url(&quot;assets/img/gallery-19.jpg&quot;);">
                <span class="cs_mouse_point cs_style_1">View Large</span>
                <img src="assets/img/gallery-19.jpg" alt="" class="d-none">
              </a>
            </div>
            <div class="cs_custom_slide next-1">
              <a href="assets/img/gallery-17.jpg" class="cs_custom_slide_item cs_bg_filed cs_lightbox_item cs_custom_pointer_wrap" 
                  data-src="assets/img/gallery-17.jpg" style="background-image: url(&quot;assets/img/gallery-17.jpg&quot;);">
                <span class="cs_mouse_point cs_style_1">View Large</span>
                <img src="assets/img/gallery-17.jpg" alt="" class="d-none">
              </a>
            </div>
            <div class="cs_custom_slide next-2">
              <a href="assets/img/gallery-21.jpg" class="cs_custom_slide_item cs_bg_filed cs_lightbox_item cs_custom_pointer_wrap" 
                  data-src="assets/img/gallery-21.jpg" style="background-image: url(&quot;assets/img/gallery-21.jpg&quot;);">
                <span class="cs_mouse_point cs_style_1">View Large</span>
                <img src="assets/img/gallery-21.jpg" alt="" class="d-none">
              </a>
            </div>
            <div class="cs_custom_slide active">
              <a href="assets/img/gallery-18.jpg" class="cs_custom_slide_item cs_bg_filed cs_lightbox_item cs_custom_pointer_wrap" 
                  data-src="assets/img/gallery-18.jpg" style="background-image: url(&quot;assets/img/gallery-18.jpg&quot;);">
                <span class="cs_mouse_point cs_style_1">View Large</span>
                <img src="assets/img/gallery-18.jpg" alt="" class="d-none">
              </a>
            </div>
            <div class="cs_custom_slide">
              <a href="assets/img/gallery-16.jpg" class="cs_custom_slide_item cs_bg_filed cs_lightbox_item cs_custom_pointer_wrap" 
                  data-src="assets/img/gallery-16.jpg" style="background-image: url(&quot;assets/img/gallery-16.jpg&quot;);">
                <span class="cs_mouse_point cs_style_1">View Large</span>
                <img src="assets/img/gallery-16.jpg" alt="" class="d-none">
              </a>
            </div>
            <div class="cs_custom_slide active">
              <a href="assets/img/gallery-20.jpg" class="cs_custom_slide_item cs_bg_filed cs_lightbox_item cs_custom_pointer_wrap" 
                  data-src="assets/img/gallery-20.jpg" style="background-image: url(&quot;assets/img/gallery-20.jpg&quot;);">
                <span class="cs_mouse_point cs_style_1">View Large</span>
                <img src="assets/img/gallery-20.jpg" alt="" class="d-none">
              </a>
            </div>
          </div>
        </div>
        <div class="cs_custom_slide_arrows">
          <span class="cs_custom_slide_arrow_left">
            <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.292892 7.29289C-0.0976295 7.68342 -0.0976295 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM56 7L1 7V9L56 9V7Z" fill="currentColor"></path>
            </svg>                
          </span>
          <span class="cs_custom_slide_arrow_right">
            <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"></path>
            </svg>                             
          </span>
        </div>
      </div>
      <div class="cs_height_70 cs_height_lg_35"></div>
    </section>
    <!-- End Gallery Section -->

    <!-- Start Features Section -->
    <section>
      <div class="cs_feature_box cs_style_2">
        <div class="container">
          <div class="row cs_gap_y_50">
            <div class="col-lg-6">
              <div class="cs_feature_box_thumb cs_mb_55 cs_mb_lg_50">
                <img src="assets/img/feature_img_5.jpg" alt="" class="cs_feature_thumb_1">
              </div>
            </div>
            <div class="col-lg-6 cs_mobile_reverse_sp">
              <div class="cs_height_20 cs_height_lg_35"></div>
              <div class="cs_pl_110">
                <p class="cs_feature_title cs_fs_28 cs_mb_20 text-uppercase">RESTAURANT & BAR</p>
                <h2 class="cs_fs_24 cs_mb_20">Our gourmet cuisine meets an inviting atmosphere.</h2>
                 
                <div class="cs_pr_110">
                <ul class="cs_feature_list cs_mp_0">
                  <li>
                    <span class="cs_feature_icon cs_accent_bg cs_center rounded-circle"><img src="assets/img/icons/feature_icon_1.svg" alt=""></span>
                    <h3 class="cs_feature_title cs_fs_21 cs_mb_20">Exquisite Dining</h3>
                    <p class="mb-0">Experience culinary excellence at Anyesi Residence Inn where each dish, from appetizers to desserts, is a masterpiece of flavor.</p>
                  </li>
                  <li>
                    <span class="cs_feature_icon cs_accent_bg cs_center rounded-circle"><img src="assets/img/icons/feature_icon_2.svg" alt=""></span>
                    <h3 class="cs_feature_title cs_fs_21 cs_mb_20">Signature Cocktails & Liquor</h3>
                    <p class="mb-0">Indulge in handcrafted  cocktails, premium spirits, and curated wines, enhancing your dining  experience in style.</p>
                  </li>
                  <li>
                    <span class="cs_feature_icon cs_accent_bg cs_center rounded-circle"><img src="assets/img/icons/feature_icon_3.svg" alt=""></span>
                    <h3 class="cs_feature_title cs_fs_21 cs_mb_20">Entertainment</h3>
                    <p class="mb-0">Enjoy your dining experience accompanied by relaxing music and entertainment on select evenings.</p>
                  </li>
                </ul>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_60 cs_height_lg_10"></div>
    </section>
    <!-- End Features Section -->

    <!-- Start Video Section -->
    <a href="///https://www.youtube.com/embed/UJEUwEJ6gH4" class="cs_video_block cs_style_1 cs_type_1 cs_video_open text-center cs_center position-relative">
      <div class="cs_video_block_bg h-100 w-100 position-absolute start-0 top-0 cs_bg_filed cs_primary_bg" data-src="assets/img/bg.jpg"></div>
      <span class="cs_play_btn_2 cs_center rounded-circle">
        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_249_587)">
          <path d="M29.8842 11.6214L15.9746 1.42181C14.8882 0.626264 13.6027 0.147096 12.2606 0.0374155C10.9185 -0.0722649 9.57229 0.191827 8.37111 0.800417C7.16994 1.40901 6.16075 2.33832 5.4554 3.48536C4.75006 4.63239 4.37611 5.95234 4.37501 7.29889V27.7083C4.37291 29.0561 4.74491 30.3781 5.44958 31.5271C6.15426 32.6761 7.16396 33.607 8.36631 34.2162C9.56866 34.8254 10.9165 35.089 12.2597 34.9776C13.603 34.8662 14.889 34.3843 15.9746 33.5854L29.8842 23.3858C30.8071 22.7084 31.5576 21.8233 32.0749 20.802C32.5922 19.7808 32.8618 18.652 32.8618 17.5072C32.8618 16.3624 32.5922 15.2337 32.0749 14.2124C31.5576 13.1911 30.8071 12.306 29.8842 11.6287V11.6214Z" fill="white"/>
          </g>
          <defs>
          <clipPath id="clip0_249_587">
          <rect width="35" height="35" fill="white"/>
          </clipPath>
          </defs>
        </svg>                   
      </span>
    </a>
    <!-- End Video Section -->

    @include('room.footer')

