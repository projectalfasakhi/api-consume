<!DOCTYPE html>
<html lang="en">
<head>
<style>body{background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');height: 100vh"
    }</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Pengambilan Sampah|| Create</title>
</head>
<body>
{{-- <div class="card-footer text-center">
                     <button class="btn btn-secondary" onclick="goBack()">Kembali</button>
                     --}}
                     <div class="container">
    <a class="btn btn-outline-secondary" href="/"  style="margin-right:200px;">Kembali</a>
    <ol>
@if (Session::get('errors'))
        <p style="color: red">{{Session::get('errors')}}</p>
    @endif
    <form action="{{route('send')}}" method="POST">
        @csrf
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Data Sampah</h3>
        
            <div class="form-outline mb-4">
                <p>Kepala Keluarga:</p>
              <input type="text"  class="form-control form-control-lg" name="kepala_keluarga" id="kepala_keluarga" />
              <label class="form-label" for="kepala_keluarga" placeholder="Kepala Keluarga"></label>
            <div class="form-outline mb-4">
                <p>Nomor Rumah:</p>
              <input type="number"  class="form-control form-control-lg" name="no_rumah" id="no_rumah" />
              <label class="form-label" for="no_rumah" placeholder="Nomor Rumah"></label>
            <div class="form-outline mb-4">
                <p>RT/RW:</p>
              <input type="text"  class="form-control form-control-lg" name="rt_rw" id="rt_rw" />
              <label class="form-label" for="rt_rw" placeholder="RT/RW"></label>
            <div class="form-outline mb-4">
                <p>Total Karung Sampah:</p>
              <input type="text"  class="form-control form-control-lg" name="total_karung_sampah" id="total_karung_sampah" />
              <label class="form-label" for="total_karung_sampah" placeholder="Total Karung Sampah"></label>
            </div>
            <div class="form-outline mb-4">
                <p>Tanggal Pengangkutan:</p>
              <input type="date"  class="form-control form-control-lg" name="tanggal_pengangkutan" id="tanggal_pengangkutan" />
              <label class="form-label" for="tanggal_pengangkutan" placeholder="Tanggal Pengangkutanh"></label>
            </div>

            <button type="submit">Kirim</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- <h2>Tambah Data</h2>
    @if (Session::get('errors'))
        <p style="color: red">{{Session::get('errors')}}</p>
    @endif
    <form action="{{route('send')}}" method="POST">
        @csrf
        <div style="display: flex; margin-bottom: 15px">
            <label for="kepala_keluarga">Kepala Keluarga</label>
            <input type="text" name="kepala_keluarga" id="kepala_keluarga" placeholder="Kepala Keluarga...">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="no_rumah">Nomor Rumah</label>
            <input type="number" name="no_rumah" id="no_rumah" placeholder="no_rumah...">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="rt_rw">Rt/Rw</label>
            <input type="text" name="rt_rw" id="rt_rw" placeholder="rt_rw">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="total_karung_sampah">Total Karung Sampah</label>
            <input type="number" name="total_karung_sampah" id="total_karung_sampah" placeholder="Total Karung Sampah">
        </div>
        <div style="display: flex; margin-bottom: 15px">
            <label for="tanggal_pengangkutan">Tanggal Pengangkutan</label>
            <input type="date" name="tanggal_pengangkutan" id="tanggal_pengangkutan">
        </div>
        
        <button type="submit">Kirim</button>
    </form> -->
</body>
</html>