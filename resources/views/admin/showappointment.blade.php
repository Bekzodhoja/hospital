

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding-top: 100px">
                <table>
                    <tr style="background-color:black;">
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Costumer Name</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Email</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Phone</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Doctor Name</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Data</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Message</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Status</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Approved</th>
                        <th style="padding: 10px; border:1px solid white; font-size:25px; color:white">Canceled</th>
                    </tr>

                    @foreach ($data as $appoint)
                        
                    <tr style=" background-color:black; border:1px solid white;" align="center">
                        <td style="padding: 10px; border:1px solid white; color:white">{{ $appoint->name }}</td>
                        <td style="padding: 10px; border:1px solid white; color:white">{{ $appoint->email }}</td>
                        <td style="padding: 10px; border:1px solid white; color:white">{{ $appoint->phone }}</td>
                        <td style="padding: 10px; border:1px solid white; color:white">{{ $appoint->doctor }}</td>
                        <td style="padding: 10px; border:1px solid white; color:white">{{ $appoint->data }}</td>
                        <td style="padding: 10px; border:1px solid white; color:white">{{ $appoint->message }}</td>
                        <td style="padding: 10px; border:1px solid white; color:white">{{ $appoint->status }}</td>

                        <td style="border:1px solid white;">
                            <a class="btn btn-success " href="{{ url('approved',$appoint->id) }}">Approved</a>
                        </td>
                        <td  style="border:1px solid white;">
                            <a class="btn btn-danger " href="{{ url('canceled', $appoint->id) }}">Canceled</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
            
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>