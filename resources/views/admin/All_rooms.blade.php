<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class=" page-body-wrapper">
          
          <div class="container">            
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="">
                    <h4 class="card-title" style="font-weight: 500; font-size: 22px; text-align: center;">All Rooms</h4>
                    <hr>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Capacity</th>
                            <th>Description</th>
                            <th>Actions</th>
                            <!-- <th>View Images</th> -->
                          </tr>
                        </thead>
                        <tbody>
                            @if(!empty($rooms) && $rooms->count())
                                @foreach($rooms as $room)
                                <tr>
                                    <td class="text-white">{{ $room->id }}</td>
                                    <td class="text-white">{{ $room->name }}</td> 
                                    <td class="text-white">{{ number_format($room->price) }} RWF</td>  
                                    <td class="text-white">{{ $room->capacity }} Sq</td> 
                                    <td class="text-white">{{ $room->description }}</td>   
                                    <td>
                                      <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                      <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this room?')">Delete</button>
                                      </form>
                                    </td>
                                    <td>
                                      <!-- <a class="btn btn-success" href="{{route('room.images',$room->id)}}">View</a> -->
                                    </td>                     
                                </tr>
                                @endforeach
                            @else
                              <tr>
                                <td colspan="6">There are no data.</td>
                              </tr>
                            @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-end col-md-6">
              <div class="row">{{ $rooms->links() }}</div> 
            </div>
          </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    @include('admin.script')
  </body>
</html>