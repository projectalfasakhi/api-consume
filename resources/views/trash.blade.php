<!DOCTYPE html>
<html lang="en">
<head>
<style>body{background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');height: 100vh"
    }</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Pengambilan Sampah || trash</title>
    
</head>
<body>
{{-- <div class="card-footer text-center">
                     <button class="btn btn-secondary" onclick="goBack()">Kembali</button>
                     --}}
                     <div class="container">
    <a class="btn btn-outline-secondary" href="/"  style="margin-right:200px;">Kembali</a>
    <ol>

    
@if (Session::get('errors'))
    <p>{{Session::get('errors')}}</p>
    @endif
    @if (Session::get('success'))
    <p style="color: green;">{{Session::get('success')}}</p>
    @endif
    
  

    <p> <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kepala Keluarga</th>
                    <th scope="col">No Rumah</th>
                    <th scope="col">RT/RW</th>
                    <th scope="col">Total Karung Sampah</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Tanggal Pengangkutan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($sampahTrash as $sampah)
                <tr>
                    <td>{{ $sampah['kepala_keluarga'] }}</td>
                    <td>{{ $sampah['no_rumah'] }}</td>
                    <td>{{ $sampah['rt_rw'] }}</td>
                    <td>{{ $sampah['total_karung_sampah'] }}</td>
                    <td>{{ $sampah['kriteria'] }}</td>
                    <td>{{ $sampah['tanggal_pengangkutan'] }}</td>
                    <td>
                      <p> <a class="btn btn-primary" href="{{ route('restore', $sampah['id'])}}">Kembalikan data</a><br></p> 
                        <a class="btn btn-danger delete" href="{{ route('permanent', $sampah['id'])}}">Hapus Data permanent</a>
                    </td>
            
                </tr>
                @endforeach
        {{-- @foreach ($sampahTrash as $sampah)
        <li>Kepala Keluarga : {{ $sampah['kepala_keluarga'] }}</li>
        <li>Nomor Rumah : {{$sampah['nomor_rumah']}}</li>
        <li>Rt/Rw : {{$sampah['rt_rw']}}</li>
        <li>Total Karung Sampah : {{$sampah['total_karung_sampah']}}</li> 
        <li>Tanggal Pengangkutan : {{$sampah['tanggal_pengangkutan']}}</li> 
        <li>Kriteria: {{$sampah['kriteria']}}</li> 
            <li>Dihapus Tanggal : {{ \Carbon\Carbon::parse($sampah['deleted_at'])->format('j F, Y') }}</li>
            <li>
                <a href="{{ route('restore', $sampah['id'])}}">Kembali Data</a>
                <a href="{{ route('permanent', $sampah['id'])}}">Hapus Data permanent</a>
            </li>
        @endforeach --}}
    </ol>
    </div>
</div> 
</body>
</html>