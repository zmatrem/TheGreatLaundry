@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Tambah Data Pengguna</h4>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Form Pengguna Baru</div>
          </div>
          <div class="card-body">
            <form action="{{ route('pesanan.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
              </div>

            <div class="form-group">
                <label>Layanan</label>
                <select name="layanan" class="form-control" required>
                  <option value="CuBer">CuBer</option>
                  <option value="CuAng">CuAng</option>
                  <option value="PaKap">Pakap</option>
                  <option value="SiLus">SiLus</option>
                </select>
              </div>

              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control" required>
                  <option value="Menunggu">Menunggu</option>
                  <option value="Diproses">Diproses</option>
                  <option value="Selesai">Selesai</option>
                </select>
              </div>


              <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
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
