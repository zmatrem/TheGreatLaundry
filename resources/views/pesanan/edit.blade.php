@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Edit Data Pesanan</h4>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Form Edit Pesanan</div>
          </div>
          <div class="card-body">
            <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $pesanan->nama }}" required>
              </div>

              <div class="form-group">
                <label>Layanan</label>
                <input type="layanan" name="layanan" class="form-control" value="{{ $pesanan->layanan }}" required>
              </div>

              <div class="form-group">
                <label>Status</label>
                <select name="Status" class="form-control" required>
                  <option value="Menunggu" {{ $pesanan->Status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                  <option value="Diproses" {{ $pesanan->Status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                  <option value="Selesai" {{ $pesanan->Status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
              </div>

              <div class="form-group">
                <button class="btn btn-primary">Update</button>
                <a href="{{ route('pesanan.index') }}" class="btn btn-secondary">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
