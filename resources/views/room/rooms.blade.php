@include('room.navbar')
<!-- Start Page Heading Section -->
    <section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="assets/img/room.jpg">
      <div class="container">
        <h1 class="cs_white_color text-center mb-0 cs_fs_38">Choose Your Suite</h1>
      </div>
    </section>
    <!-- End Page Heading Section -->

    <!-- Start Rooms Section -->
    <section>
      <div class="cs_height_60 cs_height_lg_20"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <h2 class="cs_fs_28 mb-0">Our Exquisite Rooms & Suites Collection</h2>
        </div>
        <div class="cs_height_35 cs_height_lg_10"></div>
      </div>
      <div class="container">
        <div class="row cs_gap_y_80">
          @foreach($rooms as $room)
          <div class="col-xl-6 col-md-6">
            <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
              <a class='cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg' href="{{ route('room.show', ['id' => $room->id]) }}">
                @if($room->firstImage())
                  <img src="{{ asset('uploaded_images/' . $room->firstImage()->image) }}" alt="{{ $room->name }}">
                @else
                  <img src="{{ asset('img/room_6.jpg') }}" class="card-img-top" alt="Room">
                @endif
                <!-- <img src="assets/img/room_6.jpg" alt="Room"> -->
                <span class="cs_card_btn position-absolute cs_zindex_2">
                  <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                    <b>View Details</b>
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
                  </span>
                </span>
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
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Rooms Section -->

    <!-- Start Search Form Section -->
    <section class="cs_bg_filed" data-src="assets/img/form_bg_1.jpg">
      <div class="cs_height_135 cs_height_lg_70"></div>
      <div class="container">
        <h2 class="text-center cs_white_color cs_fs_50 mb-0 cs_form_heading_1">Secure Your Spot: Reserve Your <br>Stay at Anyesi Residence Inn</h2>
        <div class="cs_height_76 cs_height_lg_55"></div>
      </div>
      <div class="cs_height_150 cs_height_lg_80"></div>
    </section>
    <!-- End Search Form Section -->

    <!-- Start Rooms Section -->
    <!-- <section>
      <div class="cs_height_141 cs_height_lg_75"></div>
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
          <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">EVENTS SPACE</p>
          <h2 class="cs_fs_67 mb-0">Event Accommodation: Elevate Your <br>Experience with Us</h2>
        </div>
        <div class="cs_height_80 cs_height_lg_50"></div>
      </div>
      <div class="container">
        <div class="row cs_gap_y_80">
          <div class="col-lg-6">
            <div class="cs_card cs_style_2 text-center">
              <div class="cs_card_thumb d-block position-relative cs_primary_bg">
                <img src="assets/img/room_25.jpg" alt="Room">
                <div class="cs_card_hover cs_center position-absolute">
                  <div class="cs_card_btn position-relative cs_zindex_2">
                    <a class='cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15' href='room-details.html'>
                      <b>View Details</b>
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
                    </a>
                  </div>
                </div>
                <div class="cs_card_hover_overlay position-absolute h-100 w-100 start-0 top-0"></div>
              </div>
              <div class="cs_card_info position-relative">
                <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href='room-details.html'>Corporate Center</a></h2>
                <div class="cs_card_price cs_mb_17">
                  <span class="cs_primary_color">From</span>
                  <span class="cs_accent_color cs_fs_38 cs_primary_font">$900/Day</span>
                </div>
                <ul class="cs_card_list cs_mp_0">
                  <li>1200 Sq</li>
                  <li>250-300 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_card cs_style_2 text-center">
              <div class="cs_card_thumb d-block position-relative cs_primary_bg">
                <img src="assets/img/room_26.jpg" alt="Room">
                <div class="cs_card_hover cs_center position-absolute">
                  <div class="cs_card_btn position-relative cs_zindex_2">
                    <a class='cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15' href='room-details.html'>
                      <b>View Details</b>
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
                    </a>
                  </div>
                </div>
                <div class="cs_card_hover_overlay position-absolute h-100 w-100 start-0 top-0"></div>
              </div>
              <div class="cs_card_info position-relative">
                <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href='room-details.html'>Party Center</a></h2>
                <div class="cs_card_price cs_mb_17">
                  <span class="cs_primary_color">From</span>
                  <span class="cs_accent_color cs_fs_38 cs_primary_font">$1000/Day</span>
                </div>
                <ul class="cs_card_list cs_mp_0">
                  <li>1500 Sq</li>
                  <li>300-350 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_140 cs_height_lg_70"></div>
    </section> -->
    <!-- End Rooms Section -->

    @include('room.footer')