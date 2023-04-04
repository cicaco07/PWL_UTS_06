@extends('perpustakaan.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2 mx-4">
            <h2>PERPUSTKAAN JAYA ABADI</h2>
            </div>
            <div class="pb-3">
                <form class="d-flex mx-4" action="{{ url('perpustakaan') }}" method="get">
                    <input class="form-control me-1" type="search" name="search" value="{{ Request::get('search') }}" placeholder="search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </form>
            </div>
            <div class="float-right my-2 mx-4">
                <a class="btn btn-success" href="{{ route('perpustakaan.create') }}"> Input Buku Baru</a>
            </div>
        </div>
    </div>

@if ($message = Session::get('success'))
    <div class="alert alert-success m-4">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Data User</h3>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <table class="table table-bordered">
        <tr>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Jenis Buku</th>
            <th>Harga</th>
            <th>QTY</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($perpustakaan as $Perpustakaan)
    <tr>
        <td>BKN{{ $Perpustakaan->kode_buku }}</td>
        <td>{{ $Perpustakaan->judul }}</td>
        <td>{{ $Perpustakaan->pengarang }}</td>
        <td>{{ $Perpustakaan->jenis_buku }}</td>
        <td>{{ $Perpustakaan->harga }}</td>
        <td>{{ $Perpustakaan->qty }}</td>
        <td><form action="{{ route('perpustakaan.destroy',$Perpustakaan->kode_buku) }}" method="POST">
            <a class="btn btn-info" href="{{ route('perpustakaan.show',$Perpustakaan->kode_buku) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('perpustakaan.edit',$Perpustakaan->kode_buku) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
    {{ $perpustakaan->withQueryString()->links() }}
</div>
    </div>
</div>
@endsection