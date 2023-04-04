@extends('perpustakaan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Data Buku
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger"><strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('perpustakaan.update', $Perpustakaan->kode_buku) }}" id="myForm"> 
                    @csrf 
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" name="kode_buku" class="formcontrol" id="kode_buku" aria-describedby="kode_buku" value="{{ $Perpustakaan->kode_buku }}">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="judul" name="judul" class="formcontrol" id="judul" aria-describedby="judul" value="{{ $Perpustakaan->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="pengarang" name="pengarang" class="formcontrol" id="pengarang" aria-describedby="pengarang" value="{{ $Perpustakaan->pengarang }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_buku">Jenis Buku</label>
                        <input type="jenis_buku" name="jenis_buku" class="formcontrol" id="jenis_buku" aria-describedsby="jenis_buku" value="{{ $Perpustakaan->jenis_buku }}">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="harga" name="harga" class="formcontrol" id="harga" aria-describedby="harga" value="{{ $Perpustakaan->harga }}">
                    </div>
                    <div class="form-group">
                        <label for="qty">QTY</label>
                        <input type="qty" name="qty" class="formcontrol" id="qty" aria-describedby="qty" value="{{ $Perpustakaan->qty }}">
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 