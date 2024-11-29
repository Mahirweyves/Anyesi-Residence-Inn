
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anyesi Residence Inn</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">    
        <ul class="nav">
          <div class="nav-item nav-category sidebar-brand-wrapper fixed-top">
            <a href="/" class="mt-2"><img src="{{ asset('/assets/img/logo.jpg') }}" href="{{url('/')}}" style="height:60px; width:120px;"></a>
          </div>

          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/')}}">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/bookings')}}">
              <span class="menu-icon">
                <i class="mdi mdi-clock"></i>
              </span>
              <span class="menu-title">Bookings</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('All_rooms')}}">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-marked"></i>
              </span>
              <span class="menu-title">Rooms</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/contacts')}}">
              <span class="menu-icon">
                <i class="mdi mdi-cellphone-android"></i>
              </span>
              <span class="menu-title">Contact</span>
            </a>
          </li>
          
          <!--<#x-app-layout>
                
          <#/x-app-layout>-->
          
          <div class="nav-item menu-items">
            <form method="POST" action="{{ route('logout') }}" x-data>
              @csrf

              <x-button class="nav-link" style="color:#41a39f;" href="{{ route('logout') }}"
                  @click.prevent="$root.submit();">
                    <span class="menu-icon">
                      <i class="mdi mdi-logout"></i>
                    </span>
                  {{ __('Log Out') }}
              </x-button>
            </form>
          </div>
        </ul>
      </nav>
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class="page-body-wrapper">
          
          <div class="container">            
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="">
                    <h4 class="card-title" style="font-weight: 500; font-size: 22px; text-align: center;">All Bookings</h4>
                    <hr>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr class="text-white">
                            <th>Images for room: <span class="text-primary">{{$room->name}}</span> </th>
                            <a href="/" class="btn btn.primary">Go Back</a>
                            <row class="mt-4">
                                @foreach ($images as $image)
                                <div class="card text-white bg-secondary mb-3" style="max-width: 20em;">
                                    <div class="card-body">
                                        <img src="/room_images/{{$image->images}}" class="card-img-top">
                                    </div>
                                </div>
                                @endforeach
                            </row>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin/assets/js/off-canvas.js"></script>
    <script src="/admin/assets/js/hoverable-collapse.js"></script>
    <script src="/admin/assets/js/misc.js"></script>
    <script src="/admin/assets/js/settings.js"></script>
    <script src="/admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>