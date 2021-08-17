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
                <a href="{{url('/customer/create')}}">Thêm Khách Hàng</a>
                <h3 class="card-title">Danh sách  khách hàng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="col-sm-5">
                <form action="{{URL::to('/tim-kiem')}}" method="POST">
                    {{csrf_field()}}
                <div class="search_box pull-right">
                    <input type="text" name="keywords_submit" placeholder="Tìm kiếm khách hàng"/>
                    <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                </div>
                </form>
            </div>
              <table id="example1" class="table table-bordered table-striped" style="text-align: center ;" border="1">
    
                <br>
                <thead>
                  <tr>
                    <th width="150px">Mã Khách Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Giới Tính</th>
                    <th>Số Điện Thoại</th>
                    <th>Email</th>
                    <th>Ảnh</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($all_customer as $key => $customer)
                  <tr>
                    <td>{{$customer->customer_id}}</td>
                    <td>{{$customer->customer_name}}</td>
                      @if ($customer->gender == 1)
                        <td>Nam</td>
                    @else
                        <td>Nữ</td>
                    @endif
                
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->email}}</td>
                    <td><img src="public/backend/dist/img/{{ $customer->image }}" height="100" width="100"></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
