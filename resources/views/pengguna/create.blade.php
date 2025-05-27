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
            <form action="{{ route('pengguna.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" name="customer_name" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" name="phone" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Role</label>
                <select name="service_type" class="form-control" required>
                  <option value="Pelanggan">Pelanggan</option>
                  <option value="Staff">Staff</option>
                  <option value="Owner">Owner</option>
                </select>
              </div>


              <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
