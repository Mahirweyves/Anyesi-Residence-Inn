<!DOCTYPE html>
<html lang="en">
    <head>
      @include('admin.css');
    </head>

    <body>
        <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar');
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
                                <h5 class="mb-0">New room was added successfully!</h5>
                            </div>
                        @endif
                        <h1 class="card-header bg-secondary" style="font-size: 25px;">New Room
                            <a href="{{ url('home') }}" class="btn btn-danger float-end">Back</a>
                        </h1>
                        <div class="card-body">
                            <form method="POST" action="{{ url('upload_room') }}" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <x-label class="text-white" for="name" value="{{ __('Name:') }}" />
                                    <x-input id="name" for="name" class="block mt-1 w-full text-dark @error('name') is-invalid @enderror" 
                                    type="text" name="name" placeholder="Enter Name" value="" autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div>
                                    <x-label class="text-white mt-3" for="description" value="{{ __('Description:') }}" />
                                    <x-input id="description" class="block mt-1 w-full text-dark @error('description') is-invalid @enderror" 
                                    type="text" name="description" placeholder="Enter Description" value="" required autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('description')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div>
                                    <x-label class="text-white mt-3" for="capacity" value="{{ __('Capacity:') }}" />
                                    <x-input id="capacity" class="block mt-1 w-full text-dark @error('capacity') is-invalid @enderror" 
                                    type="number" name="capacity" placeholder="Enter Capacity in Sq" value="" required autofocus autocomplete="name" />
                                    <span class="text-danger">
                                        @error('capacity')
                                            {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div>
                                    <x-label class="text-white mt-3" for="price" value="{{ __('Price:') }}" />
                                    <x-input id="price" class="block mt-1 w-full text-dark @error('price') is-invalid @enderror" 
                                    type="number" name="price" placeholder="Enter Price" value="" required autofocus autocomplete="name" />
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
                                    multiple value="" required autofocus autocomplete="name" />
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
    @include('admin.script')
    </body>
</html>