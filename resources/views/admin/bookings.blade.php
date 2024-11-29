
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .pagination ul {
            list-style: none;
            padding: 0;
        }
        .pagination li {
            display: inline;
            margin: 0 5px;
        }
        .pagination a {
            text-decoration: none;
            color: #000;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .pagination .active a {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }
        .pagination .disabled a {
            color: #ccc;
            pointer-events: none;
        }
        .pagination-summary {
            color: #0d6efd;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
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
                            <th>ID</th>
                            <th>Room</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Check-in Date</th>
                            <th>Check-out Date</th>
                            <th>Number of Nights</th>
                            <th>Total Amount</th>
                            <th>Created at</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $booking)
                                @php
                                    $checkin = new \DateTime($booking->checkin);
                                    $checkout = new \DateTime($booking->checkout);
                                    $nights = $checkout->diff($checkin)->days;
                                    $totalAmount = $booking->room->price * $nights;
                                @endphp
                                <tr>
                                    <td class="text-white">{{ $booking->id }}</td>
                                    <td class="text-white">{{ $booking->room->name }}</td>
                                    <td class="text-white">{{ $booking->name }}</td>
                                    <td class="text-white">{{ $booking->email }}</td>
                                    <td class="text-white">{{ $booking->address }}</td>
                                    <td class="text-white">{{ $booking->phone }}</td>
                                    <td class="text-white">{{ $booking->checkin }}</td>
                                    <td class="text-white">{{ $booking->checkout }}</td>
                                    <td class="text-white">{{ $nights }}</td>
                                    <td class="text-white">{{ number_format($totalAmount) }} RWF</td>
                                    <td class="text-white">{{ $booking->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <!-- <div class="d-flex justify-content-end col-md-6 text-primary">
                      <div class="row pt-4 text-success">{{ $bookings->links() }}</div> 
                    </div> -->
                    <div class="pagination">
                        {{ $bookings->links('vendor.pagination.bootstrap-4') }}
                    </div>
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