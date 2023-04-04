@extends('perpustakaan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Buku
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode Buku : </b>{{$Perpustakaan->kode_buku}}</li>
                    <li class="list-group-item"><b>Judul : </b>{{$Perpustakaan->judul}}</li>
                    <li class="list-group-item"><b>Pengarang : </b>{{$Perpustakaan->pengarang}}</li>
                    <li class="list-group-item"><b>Jenis Buku : </b>{{$Perpustakaan->jenis_buku}}</li>
                    <li class="list-group-item"><b>Harga : </b>{{$Perpustakaan->harga}}</li>
                    <li class="list-group-item"><b>QTY : </b>{{$Perpustakaan->qty}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('perpustakaan.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection