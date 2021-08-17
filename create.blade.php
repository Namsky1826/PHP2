<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thêm khách hàng</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <a href="{{url('/customer')}}">Danh Sách Khách Hàng</a>
                <h3 class="card-title">Thêm khách hàng</h3>
                @if(session()->has('message'))
                <div class="alert alert-success"style="color: green">
                    {!! session()->get('message') !!}
                </div>
            @elseif(session()->has('error'))
                 <div class="alert alert-danger" style="color: red">
                    {!! session()->get('error') !!}
                </div>
            @endif
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/add-customer')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên Khách Hàng</label>
                    <input type="text" name='customer_name' class="form-control" id="exampleInputEmail1" placeholder="name">
                  </div>
                  <div class="alert alert-danger" style="color: red">
                    {{$errors->first('customer_name')}}
                 </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Giới Tính</label>
                    <br>
                    <input type="radio" id="radioPrimary3" value="1" name="gender" > Nam   
                    <input type="radio" style="margin-left:200px;" value="0" id="radioPrimary3" name="gender" >  Nữ
                    <input type="radio" style="margin-left:200px;" value="2" id="radioPrimary3" name="gender" >  Khác
                    
                </div>
                <div class="alert alert-danger" style="color: red">
                    {{$errors->first('gender')}}
                 </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                  </div>
                  <div class="alert alert-danger" style="color: red">
                    {{$errors->first('phone')}}
                 </div>
                  <div class="form-group">
                <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
                      </div>
                      <div class="alert alert-danger" style="color: red">
                        {{$errors->first('email')}}
                     </div>
                      <div class="form-group">
                    <label for="exampleInputFile">Ảnh Đại Diện</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <div class="alert alert-danger" style="color: red">
                        {{$errors->first('image')}}
                     </div>
                  </div>
                  {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div> --}}
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      {{-- <b>Version</b> 3.1.0 --}}
    </div>
    {{-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --}}
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('public/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
