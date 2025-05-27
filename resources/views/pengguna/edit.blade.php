@extends('layouts.app')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h4 class="page-title">Edit Data Pengguna</h4>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="card-title">Form Edit Pengguna</div>
          </div>
          <div class="card-body">
            <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $pengguna->nama }}" required>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $pengguna->email }}" required>
              </div>

              <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control" required>
                  <option value="Pelanggan" {{ $pengguna->role == 'Pelanggan' ? 'selected' : '' }}>Pelanggan</option>
                  <option value="Staff" {{ $pengguna->role == 'Staff' ? 'selected' : '' }}>Staff</option>
                  <option value="Owner" {{ $pengguna->role == 'Owner' ? 'selected' : '' }}>Owner</option>
                </select>
              </div>

              <div class="form-group">
                <button class="btn btn-primary">Update</button>
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
