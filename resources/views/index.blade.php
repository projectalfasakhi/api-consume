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
    
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8 " ><h2>Pembuangan  Sampah</h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <p></p>
                            <!-- <i class="material-icons"> &#xE8B6;</i> -->
                            <form action="" method="get">
                            @csrf
                            <input type="text" class="btn btn-line-secondary" class="form-control" name="search" placeholder="KLIK DISINI UNTUK CARI&hellip;">
                            <button  type="submit" class="btn btn-outline-secondary" >Gas</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
    
    <br>
    <div class="container">
    <a href="{{route('add')}}" class="btn  btn-outline-secondary">Tambah Data Baru</a> 
    <a href="/trash" class="btn btn-outline-secondary">Lihat Data Terhapus</a>
    <a href="/"class="btn btn-outline-secondary">HOME</a>
    @if (Session::get('success'))
        <p style="padding: 5px 10px; background: green; color: white; margin: 10px;">{{Session::get('success')}}</p>
    @endif
    
    <table class="table table-bordered">
        <thead>
            <tr>
            <thead class="thead-dark">
                <th scope="col">Kepala Keluarga</th>
                <th scope="col">Nomor Rumah</th>
                <th scope="col">RT/RW</th>
                <th scope="col">Total Karung Sampah</th>
                <th scope="col">Tanggal Pengangkutan</th>
                <th scope="col">Kriteria</th>                   
                </th>
            </tr>
        </thead>
        <tbody>           
            @foreach ($sampah as $sampah)
            <tr>               
                <td>{{ $sampah['kepala_keluarga'] }}</td>
                <td>{{$sampah['no_rumah']}}</td>
                <td>{{$sampah['rt_rw']}}</td>
                <td> {{$sampah['total_karung_sampah']}}</td>
                <td>{{$sampah['tanggal_pengangkutan']}}</td>
                <td>{{$sampah['kriteria']}}</td>
                    <td>
                
                    <form action="{{route('delete', $sampah['id'])}}" method="POST">
                <p><a href="{{route('edit', $sampah['id'])}}"><button type="button" class="btn btn-dark">Edit</button></a> </p> 
              
            <p></p> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >Hapus</button>
                </form>
                
                
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   
</body>
</html>