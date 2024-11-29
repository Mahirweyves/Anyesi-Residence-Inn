
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
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="icon" href="/assets/img/logo.jpg">
    <!-- <link href="/favicon.ico" rel="icon">
    <link rel="shortcut icon" href="/admin/assets/images/favicon.png" /> -->
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
        @include('admin.navbar');
        <!-- partial -->

        <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
                
        <div class="container-fluid page-body-wrapper">

            <div class="w-full justify-center px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">

                <div class="container">
                    <div class="card mt-5">
                        
                        @if(session('success'))
                          <div class="alert alert-dismissible alert-success">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <h3 class="alert-heading">{{session('success')}}</h3>
                          </div>
                        @endif
                        <h1 class="card-header bg-secondary" style="font-size: 25px;">Edit Room
                            <a href="{{ url('All_rooms') }}" class="btn btn-danger float-end">Back</a>
                        </h1>
                        <div class="card-body">
                            <form method="POST" action="{{ route('rooms.update', $room->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div>
                                    <x-label class="text-white" for="name" value="{{ __('Name:') }}" />
                                    <x-input id="name" for="name" class="block mt-1 w-full text-dark @error('name') is-invalid @enderror" 
                                    type="text" name="name" placeholder="Enter Name" value="{{ $room->name }}" autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div>
                                    <x-label class="text-white mt-3" for="description" value="{{ __('Description:') }}" />
                                    <x-input id="description" class="block mt-1 w-full text-dark @error('description') is-invalid @enderror" 
                                    type="text" name="description" placeholder="Enter Description" value="{{ $room->description }}" autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('description')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div>
                                    <x-label class="text-white mt-3" for="capacity" value="{{ __('Capacity:') }}" />
                                    <x-input id="capacity" class="block mt-1 w-full text-dark @error('capacity') is-invalid @enderror" 
                                    type="number" name="capacity" placeholder="Enter Capacity" value="{{ $room->capacity }}" autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('capacity')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div>
                                    <x-label class="text-white mt-3" for="price" value="{{ __('Price:') }}" />
                                    <x-input id="price" class="block mt-1 w-full text-dark @error('price') is-invalid @enderror" 
                                    type="number" name="price" placeholder="Enter Price" value="{{ $room->price }}" autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('price')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div>
                                        <x-label class="text-white mt-3" for="image" value="{{ __('Upload Room Images:') }}" />
                                        <x-input id="image" class="block mt-1 w-full text-dark form-control" accept="image/*" 
                                        type="file" name="images[]" style="padding: 10px; font-size: 14px; background-color:#fff;" 
                                        multiple value="" autofocus autocomplete="name" />
                                </div>

                                <div class="form-group">
                                    <label>Existing Images:</label>
                                    <div>
                                        @foreach($room->images as $image)
                                            <div class="image-wrapper" style="display: inline-block; margin: 5px;">
                                                <img src="{{ asset('uploaded_images/' . $image->image) }}" alt="{{ $room->name }}" width="100">
                                                <button type="button" class="btn btn-danger btn-sm delete-image" data-image-id="{{ $image->id }}">Delete</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <input type="submit" class="btn btn-gray px-2 py-2" style="background-color:#41a39f;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        
        <script>
            document.querySelectorAll('.delete-image').forEach(button => {
                button.addEventListener('click', function() {
                    const imageId = this.getAttribute('data-image-id');
                    fetch(`/images/${imageId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    }).then(response => {
                        if (response.ok) {
                            this.closest('.image-wrapper').remove();
                        }
                    });
                });
            });
        </script>

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