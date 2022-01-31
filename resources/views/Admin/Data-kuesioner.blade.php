<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('Layout.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('Layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('Layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">kUESIONER MUTU TENAGA PENDIDIK</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">SURVEY KEPUASAN TENAGA KEPENDIDIKAN TERHADAP FAKULTAS TEKNIK UM BANJARMASIN TAHUN 2022</h3>
                        </div>
                    </div>

                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Masa Kerja</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Masa Kerja">
                            </div>

                            <h5>Home Base</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox1">
                                <label class="custom-control-label" for="ContohCheckbox1">Bag.Umum</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox2">
                                <label class="custom-control-label" for="ContohCheckbox2">Bag. Akademik/Kemahasiswaan</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox3">
                                <label class="custom-control-label" for="ContohCheckbox3">Bag. Keuangan</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox4">
                                <label class="custom-control-label" for="ContohCheckbox4">Rumah Tangga</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox5">
                                <label class="custom-control-label" for="ContohCheckbox5">yang lainnya</label>
                            </div>

                            <br>

                            <h5>Jenis Kelamin </h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox6">
                                <label class="custom-control-label" for="ContohCheckbox6">Laki-Laki</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox7">
                                <label class="custom-control-label" for="ContohCheckbox7">Perempuan</label>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('Layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Layout.script')
</body>
</html>
