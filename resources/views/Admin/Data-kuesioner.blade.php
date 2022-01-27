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

                            <h5>Aspek Pekerjaan  </h5>
                            <h5>penempatan tenaga kependidikan di Fakultas teknik sesuai dengan kompetensi dan kemampuan  </h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox8">
                                <label class="custom-control-label" for="ContohCheckbox8">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox9">
                                <label class="custom-control-label" for="ContohCheckbox9">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox10">
                                <label class="custom-control-label" for="ContohCheckbox10">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox11">
                                <label class="custom-control-label" for="ContohCheckbox11">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Penempatan tenaga kependidikan sesuai dengan latar belakang pendidikan </h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox12">
                                <label class="custom-control-label" for="ContohCheckbox12">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox13">
                                <label class="custom-control-label" for="ContohCheckbox13">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox14">
                                <label class="custom-control-label" for="ContohCheckbox14">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox15">
                                <label class="custom-control-label" for="ContohCheckbox15">Kurang Baik</label>
                            </div>

                            <br>
                            <h5>Kelengkapan kerja (komputer,printer,ATK) disediakan sebagai penunjang kinerja tenaga kependidikan </h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox16">
                                <label class="custom-control-label" for="ContohCheckbox16">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox17">
                                <label class="custom-control-label" for="ContohCheckbox17">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox18">
                                <label class="custom-control-label" for="ContohCheckbox18">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox19">
                                <label class="custom-control-label" for="ContohCheckbox19">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Sistem informasi (telepon,nternet,email,faximili) tersedia untuk melancarkan kinerja tenaga kependidikan</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox20">
                                <label class="custom-control-label" for="ContohCheckbox20">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox21">
                                <label class="custom-control-label" for="ContohCheckbox21">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox22">
                                <label class="custom-control-label" for="ContohCheckbox22">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox23">
                                <label class="custom-control-label" for="ContohCheckbox23">Kurang Baik</label>
                            </div>


                            <br>

                            <h5>Prosedur dan sistem kerja membantu kelancaran kinerja tenaga kependidikan</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox24">
                                <label class="custom-control-label" for="ContohCheckbox24">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox25">
                                <label class="custom-control-label" for="ContohCheckbox25">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox26">
                                <label class="custom-control-label" for="ContohCheckbox26">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox27">
                                <label class="custom-control-label" for="ContohCheckbox27">Kurang Baik</label>
                            </div>


                            <br>

                            <h5>Beban kerja dan tanggung jawab yang diberikan sesuai dengan jabatan/unit kerja tenaga kependidikan</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox28">
                                <label class="custom-control-label" for="ContohCheckbox28">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox29">
                                <label class="custom-control-label" for="ContohCheckbox29">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox30">
                                <label class="custom-control-label" for="ContohCheckbox30">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox31">
                                <label class="custom-control-label" for="ContohCheckbox31">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Aspek Relasi Dengan Pimpinan</h5>
                            <h5>Pimpinan membagi pekerjaan kepada tenaga kependidikan secara proposional</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox32">
                                <label class="custom-control-label" for="ContohCheckbox32">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox33">
                                <label class="custom-control-label" for="ContohCheckbox33">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox34">
                                <label class="custom-control-label" for="ContohCheckbox34">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox35">
                                <label class="custom-control-label" for="ContohCheckbox35">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Pimpinan memberikan wewenang kepada tenaga kependidikan untuk melakukan tugas dan membuat laporan pekerjaan</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox36">
                                <label class="custom-control-label" for="ContohCheckbox36">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox37">
                                <label class="custom-control-label" for="ContohCheckbox37">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox38">
                                <label class="custom-control-label" for="ContohCheckbox38">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox39">
                                <label class="custom-control-label" for="ContohCheckbox39">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Pimpinan memberikan pengarahan secara jelas tujuan dan target pekerjaan kepada tenaga kependidikan</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox40">
                                <label class="custom-control-label" for="ContohCheckbox40">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox41">
                                <label class="custom-control-label" for="ContohCheckbox41">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox42">
                                <label class="custom-control-label" for="ContohCheckbox42">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox43">
                                <label class="custom-control-label" for="ContohCheckbox43">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Pimpinan melakukan pengawasan terhadap kinerja tenaga kependidikan </h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
                            </div>

                            <br>

                            <h5> Pimpinan memberikan penghargaan dan sanksi terhadap kinerja tenaga kependidikan secara adil </h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Pimpinan memperhatikan ide,gagasan,kritik,dan saran dari tenaga kependidikan</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Aspek Suasana Kerja</h5>
                            <h5>Hubungan kerja antara sesama tenaga kependidikan (beda unit/bidang) terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
                            </div>

                            <h5>Kerjasama tim antar tenaga kependidikan dalam setiap unit/bidang terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Rekan kerja memberikan bantuan dan dukungan positif dalam menyelasaikan pekerjaan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Hubungan kerja antara sesama tenaga kependidikan (beda unit/bidang) terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Kerjasama tim antar tenaga kependidikan dalam setiap unit/bidang terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox44">
                                <label class="custom-control-label" for="ContohCheckbox44">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox45">
                                <label class="custom-control-label" for="ContohCheckbox45">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox46">
                                <label class="custom-control-label" for="ContohCheckbox46">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox47">
                                <label class="custom-control-label" for="ContohCheckbox47">Kurang Baik</label>
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
