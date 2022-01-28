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
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox48">
                                <label class="custom-control-label" for="ContohCheckbox84">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox49">
                                <label class="custom-control-label" for="ContohCheckbox49">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox50">
                                <label class="custom-control-label" for="ContohCheckbox50">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox51">
                                <label class="custom-control-label" for="ContohCheckbox51">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Pimpinan memperhatikan ide,gagasan,kritik,dan saran dari tenaga kependidikan</h5>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox52">
                                <label class="custom-control-label" for="ContohCheckbox52">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox53">
                                <label class="custom-control-label" for="ContohCheckbox53">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox54">
                                <label class="custom-control-label" for="ContohCheckbox54">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox55">
                                <label class="custom-control-label" for="ContohCheckbox55">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Aspek Suasana Kerja</h5>
                            <h5>Hubungan kerja antara sesama tenaga kependidikan (beda unit/bidang) terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox56">
                                <label class="custom-control-label" for="ContohCheckbox56">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox57">
                                <label class="custom-control-label" for="ContohCheckbox57">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox58">
                                <label class="custom-control-label" for="ContohCheckbox58">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox59">
                                <label class="custom-control-label" for="ContohCheckbox59">Kurang Baik</label>
                            </div>

                            <h5>Kerjasama tim antar tenaga kependidikan dalam setiap unit/bidang terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox60">
                                <label class="custom-control-label" for="ContohCheckbox60">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox61">
                                <label class="custom-control-label" for="ContohCheckbox61">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox62">
                                <label class="custom-control-label" for="ContohCheckbox62">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox63">
                                <label class="custom-control-label" for="ContohCheckbox63">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Rekan kerja memberikan bantuan dan dukungan positif dalam menyelasaikan pekerjaan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox64">
                                <label class="custom-control-label" for="ContohCheckbox64">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox65">
                                <label class="custom-control-label" for="ContohCheckbox65">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox66">
                                <label class="custom-control-label" for="ContohCheckbox66">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox67">
                                <label class="custom-control-label" for="ContohCheckbox67">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Hubungan kerja antara sesama tenaga kependidikan (beda unit/bidang) terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox68">
                                <label class="custom-control-label" for="ContohCheckbox68">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox69">
                                <label class="custom-control-label" for="ContohCheckbox69">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox70">
                                <label class="custom-control-label" for="ContohCheckbox70">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox71">
                                <label class="custom-control-label" for="ContohCheckbox71">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Kerjasama tim antar tenaga kependidikan dalam setiap unit/bidang terjalin dengan baik</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox72">
                                <label class="custom-control-label" for="ContohCheckbox72">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox73">
                                <label class="custom-control-label" for="ContohCheckbox73">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox74">
                                <label class="custom-control-label" for="ContohCheckbox74">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox75">
                                <label class="custom-control-label" for="ContohCheckbox75">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Rekan kerja memberikan bantuan dan dukungan positif dalam menyelesaikan pekerjaan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox76">
                                <label class="custom-control-label" for="ContohCheckbox76">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox77">
                                <label class="custom-control-label" for="ContohCheckbox77">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox78">
                                <label class="custom-control-label" for="ContohCheckbox78">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox79">
                                <label class="custom-control-label" for="ContohCheckbox79">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Jika ada tenaga kependidikan yang berhalangan hadir , maka rekan kerja yang lain siap mengambil alih pekerjaannya </h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox80">
                                <label class="custom-control-label" for="ContohCheckbox80">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox81">
                                <label class="custom-control-label" for="ContohCheckbox81">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox82">
                                <label class="custom-control-label" for="ContohCheckbox82">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox83">
                                <label class="custom-control-label" for="ContohCheckbox83">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Aspek Sarana Dan Prasarana</h5>
                            <h5>Lingkungan fisik tempat kerja bersih, nyaman, dan menunjang kelancaran pekerjaan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox84">
                                <label class="custom-control-label" for="ContohCheckbox84">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox85">
                                <label class="custom-control-label" for="ContohCheckbox85">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox86">
                                <label class="custom-control-label" for="ContohCheckbox86">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox87">
                                <label class="custom-control-label" for="ContohCheckbox87">Kurang Baik</label>
                            </div>

                            <br>

                            <h5> Toilet/kamar kecil bersih dan memadai</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox88">
                                <label class="custom-control-label" for="ContohCheckbox88">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox89">
                                <label class="custom-control-label" for="ContohCheckbox89">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox90">
                                <label class="custom-control-label" for="ContohCheckbox90">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox91">
                                <label class="custom-control-label" for="ContohCheckbox91">Kurang Baik</label>
                            </div>

                            <br>


                            <h5>Tersedia tempat wudhu dan musholla yang bersih dan nyaman untuk beribadah</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox92">
                                <label class="custom-control-label" for="ContohCheckbox92">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox93">
                                <label class="custom-control-label" for="ContohCheckbox93">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox94">
                                <label class="custom-control-label" for="ContohCheckbox95">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox96">
                                <label class="custom-control-label" for="ContohCheckbox96">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Tersedia lahan parkir yang memadai dan aman</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox97">
                                <label class="custom-control-label" for="ContohCheckbox97">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox98">
                                <label class="custom-control-label" for="ContohCheckbox98">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox99">
                                <label class="custom-control-label" for="ContohCheckbox99">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox100">
                                <label class="custom-control-label" for="ContohCheckbox100">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Tersedia sarana dan fasilitas kesehatan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox101">
                                <label class="custom-control-label" for="ContohCheckbox101">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox102">
                                <label class="custom-control-label" for="ContohCheckbox102">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox103">
                                <label class="custom-control-label" for="ContohCheckbox103">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox104">
                                <label class="custom-control-label" for="ContohCheckbox104">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Tersedia kantinn dan cafetaria yang memadai</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox105">
                                <label class="custom-control-label" for="ContohCheckbox105">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox106">
                                <label class="custom-control-label" for="ContohCheckbox106">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox107">
                                <label class="custom-control-label" for="ContohCheckbox107">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox108">
                                <label class="custom-control-label" for="ContohCheckbox108">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>Aspek pengembangan dan Promosi</h5>
                            <h5>Fakultas Teknik menerapkan sistem pengembangan karir tenaga kependidikan dengan memberikan kesempatan studi lanjut</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox109">
                                <label class="custom-control-label" for="ContohCheckbox109">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox110">
                                <label class="custom-control-label" for="ContohCheckbox110">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox111">
                                <label class="custom-control-label" for="ContohCheckbox111">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox112">
                                <label class="custom-control-label" for="ContohCheckbox112">Kurang Baik</label>
                            </div>

                            <br>
                            <h5>Fakultas Teknik mengembangkan tenaga kependidikan melalui seminar/pelatihan/workshop/studi banding</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox113">
                                <label class="custom-control-label" for="ContohCheckbox113">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox114">
                                <label class="custom-control-label" for="ContohCheckbox114">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox115">
                                <label class="custom-control-label" for="ContohCheckbox115">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox116">
                                <label class="custom-control-label" for="ContohCheckbox116">Kurang Baik</label>
                            </div>


                            <br>
                            <h5>Menerapkan sistem pengembangan tenaga kependidikan dengan jenjang karir </h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox117">
                                <label class="custom-control-label" for="ContohCheckbox117">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox118">
                                <label class="custom-control-label" for="ContohCheckbox118">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox119">
                                <label class="custom-control-label" for="ContohCheckbox119">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox120">
                                <label class="custom-control-label" for="ContohCheckbox120">Kurang Baik</label>
                            </div>

                            <br>
                            <h5>Fakultas Teknik menerapkan sistem pengembangan tenaga kependidikan dengan mutasi atau rotasi</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox121">
                                <label class="custom-control-label" for="ContohCheckbox121">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox122">
                                <label class="custom-control-label" for="ContohCheckbox122">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox123">
                                <label class="custom-control-label" for="ContohCheckbox123">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox124">
                                <label class="custom-control-label" for="ContohCheckbox124">Kurang Baik</label>
                            </div>

                            <br>
                            <h5>Fakultas Teknik memfasilitasi pengembangan karir tenaga kependidikan dengan membantu peningkatan kesejahteraan yang memadai</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox125">
                                <label class="custom-control-label" for="ContohCheckbox125">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox126">
                                <label class="custom-control-label" for="ContohCheckbox126">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox127">
                                <label class="custom-control-label" for="ContohCheckbox127">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox128">
                                <label class="custom-control-label" for="ContohCheckbox128">Kurang Baik</label>
                            </div>

                            <br>
                            <h5>Aspek Pendapatan dan Kesejahteraan</h5>
                            <h5>Pendapatan yang diberikan sesuai dengan besarnya tanggung jawab dan beban kerja tenaga kependidikan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox129">
                                <label class="custom-control-label" for="ContohCheckbox129">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox130">
                                <label class="custom-control-label" for="ContohCheckbox130">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox131">
                                <label class="custom-control-label" for="ContohCheckbox131">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox132">
                                <label class="custom-control-label" for="ContohCheckbox132">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>UMB Fakultas Teknik memberikan jaminan kesehatan </h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox133">
                                <label class="custom-control-label" for="ContohCheckbox133">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox134">
                                <label class="custom-control-label" for="ContohCheckbox134">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox135">
                                <label class="custom-control-label" for="ContohCheckbox135">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox136">
                                <label class="custom-control-label" for="ContohCheckbox136">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>UMB Fakultas Teknik memberikan tunjangan hari raya dan tunjangan lainnya yang memadai</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox137">
                                <label class="custom-control-label" for="ContohCheckbox137">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox138">
                                <label class="custom-control-label" for="ContohCheckbox138">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox139">
                                <label class="custom-control-label" for="ContohCheckbox139">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox140">
                                <label class="custom-control-label" for="ContohCheckbox140">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>UMB Fakultas Teknik memberikan hak cuti bagi tenaga kependidikan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox141">
                                <label class="custom-control-label" for="ContohCheckbox141">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox142">
                                <label class="custom-control-label" for="ContohCheckbox142">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox143">
                                <label class="custom-control-label" for="ContohCheckbox143">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox144">
                                <label class="custom-control-label" for="ContohCheckbox144">Kurang Baik</label>
                            </div>

                            <br>

                            <h5>UMB menyediakan fasilitas fasilitas koperasi bagu tenaga kependidikan</h5>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox145">
                                <label class="custom-control-label" for="ContohCheckbox145">Sangat Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox146">
                                <label class="custom-control-label" for="ContohCheckbox146">Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox147">
                                <label class="custom-control-label" for="ContohCheckbox147">Cukup Baik</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ContohCheckbox148">
                                <label class="custom-control-label" for="ContohCheckbox148">Kurang Baik</label>
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
