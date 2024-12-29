<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
    label{
      display: inline-block;
      width: 150px;
    }

    </style>



  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
            <div class="ps-lg-3">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white"></i>
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
      
        <div class="container" style="padding-top: 100px" >
          <form action="{{url('upload_doctor')}}" method="POST">
            
            @csrf

            <div style="padding: 15px">
              <label style="color: black">Doctor Name</label>
              <input type="text" style="color: black" name="name" placeholder="write name" required>
            </div>

            <div style="padding: 15px">
              <label style="color: black">Phone</label>
              <input type="number" style="color: black" name="number" placeholder="write number" required>
            </div>

            <div style="padding: 15px">
              <label style="color: black">Speciality</label>
              <select name="speciality" required>
                <option>eyes</option>
                <option>skin</option>
                <option>heart</option>
                <option>surgen</option>
              </select>
            </div>

            <div style="padding: 15px">
              <input type="submit" class="btn btn-success">
            </div>

          </form>

        </div>

        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>