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
        <div class=" page-body-wrapper">
          
          <div class="container">            
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="">
                    <h4 class="card-title" style="font-weight: 500; font-size: 22px; text-align: center;">All Contact Us Messages</h4>
                    <hr>
                    <div class="table-responsive pt-5">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Received at</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($contacts as $contact)
                               <tr>
                                   <td class="text-white">{{ $contact->id }}</td>
                                   <td class="text-white">{{ $contact->name }}</td>
                                   <td class="text-white">{{ $contact->email }}</td>
                                   <td class="text-white">{{ $contact->phone }}</td>
                                   <td class="text-white">{{ $contact->message }}</td>
                                   <td class="text-white">{{ $contact->created_at }}</td>
                               </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                    <div class="pagination">
                      {{ $contacts->links('vendor.pagination.bootstrap-4') }}
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